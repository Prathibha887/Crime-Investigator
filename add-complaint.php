<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

$username=$_SESSION['username'];

?>
<?php
    if (isset($_POST['add_submit'])) {

        $complaintno = addslashes(trim($_POST['complaintno']));
        $phone = addslashes(trim($_POST['phone']));
        $type = addslashes(trim($_POST['type']));
        $stationid = addslashes(trim($_POST['stationid']));
        $description = addslashes(trim($_POST['description']));
        $status = "Active";

        $insertQuery = "INSERT INTO complaint (STATION_ID, COMPLAINTNO, NAME, TYPE, DESCRIPTION, PHONE, STATUS) 
        VALUES ('$stationid', '$complaintno', '$username', '$type', '$description', '$phone', '$status')";

        if (mysqli_query($conn, $insertQuery)) {

            echo "<script>alert('Complaint added successfully');location.href='add-complaint.php'</script>";
        } else {
            echo "<script>alert('Unable to process your request!');location.href='add-complaint.php'</script>";
        }
        
    }


?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(img/addcomplaint.jpg);
    background-repeat: no-repeat;
 background-size:100% 130%;">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Add complaints</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="view-complaint.php">View complaint</a></li>
                    <li class="breadcrumb-item active text-primary">Add complaints</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <h3>Add complaints</h3>
                <div class="row mt-4">
                    <form method="post" class="col-lg-6">
                        <div class="row">
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Complaint no<span class="text-danger">*</span></label>
                                <?php
                                $complaint_number = rand(100000, 999999); 
                                echo '<input autocomplete="off" type="text" class="form-control" required value="' . $complaint_number . '" name="complaintno" readonly>';
                                ?>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Station<span class="text-danger">*</span></label>
                                <select class="form-control" name="stationid">
                                    <option value="">select any</option>
                                    <?php
                                    $qry = "SELECT * FROM station_master";
                                    $resul = mysqli_query($conn, $qry);

                                    if ($resul) {
                                        while ($row_station = mysqli_fetch_assoc($resul)) {
                                            $stationid = $row_station['station_id'];
                                            $station = $row_station['station_name'];
                                            echo "<option value='$stationid'>$station</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Type<span class="text-danger">*</span></label>
                                <select class="form-control" name="type">
                                <option value="">Select type</option>
                                <option value="Criminal">Criminal</option>
                                <option value="Civil">Civil</option>
                                </select>
                            </div>
                            <div class="col-xl-6 mb-3">
                                <label class="form-label">Phone<span class="text-danger">*</span></label>
                                <input autocomplete='off' type="phone" class="form-control" required name="phone">
                            </div>
                            <div class="col-xl-12 mb-3">
                                <label class="form-label">Description<span class="text-danger">*</span></label>
                                <textarea class="form-control" required name="description"></textarea>
                            </div>
                        </div>
                        <button type="submit" name="add_submit" class="btn btn-primary">save</button>
                        <a href="add-complaint.php" class="btn btn-danger">clear</a>
                    </form>
                    <div class="col-lg-6">

                    </div>
                </div>
            </div>
        </div>

<?php
require_once 'include/footer.php';
?>