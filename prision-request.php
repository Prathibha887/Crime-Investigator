<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';
$userid = $_SESSION['user_id'];

?>
<?php
if (isset($_POST['add_submit'])) {

    $name = addslashes(trim($_POST['name']));
    $phone = addslashes(trim($_POST['phone']));
    $timein = addslashes(trim($_POST['timein']));
    $timeout = addslashes(trim($_POST['timeout']));
    $place = addslashes(trim($_POST['place']));
    $stationid = addslashes(trim($_POST['stationid']));
    $status = "Pending";
    $date = date('Y-m-d');
    
   

    $insertQuery = "INSERT INTO prisoners (VISITOR_ID, NAME, PLACE, PHONE, TIME_IN, TIME_OUT, STATION_ID, 
    DATE_CREATED, status) VALUES ('$userid', '$name', '$place', '$phone', '$timein', '$timeout', '$stationid', '$date', '$status')";

    if (mysqli_query($conn, $insertQuery)) {

        echo "<script>alert('Request added successfully');location.href='prision-request.php'</script>";
    } else {
        echo "<script>alert('Unable to process your request!');location.href='prision-request.php'</script>";
    }
    
}


// if (isset($_POST['delete_submit'])) {


//     if (mysqli_query($conn, "DELETE from prisoners WHERE VISITOR_ID  = '$_POST[delete_id]'")) {

//         echo "<script>alert('Requerst deleted successfully');location.href='prision-request.php'</script>";
//     } else {

//         echo "<script>alert('Unable to process your request!');location.href='prision-request.php'</script>";
//     }
// }
?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(img/requesttimings.avif);
    background-repeat: no-repeat;
 background-size:100% 130%;">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Prison request</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="view-complaint.php">View complaint</a></li>
                    <li class="breadcrumb-item active text-primary">Prison request</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <h3>Prisoner request time</h3>
                <div class="d-flex justify-content-end mb-1">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add request</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Place</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Time in</th>
                        <th scope="col">Time out</th>
                        <th scope="col">Station</th>
                        <th scope="col">Status</th>
                        <!-- <th scope="col">Action</th> -->
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT p.status, p.NAME, p.PLACE, p.VISITOR_ID , p.PHONE, p.TIME_IN, p.TIME_OUT, p.STATION_ID, s.station_name
                        FROM prisoners p
                        INNER JOIN station_master s ON s.station_id = p.STATION_ID where p.VISITOR_ID = '$userid'";
                        $res = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($res) > 0) {
                            $i = 1;

                            while($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td>$row[NAME]</td>";
                                echo "<td>$row[PLACE]</td>";
                                echo "<td>$row[PHONE]</td>";
                                echo "<td>$row[TIME_IN]</td>";
                                echo "<td>$row[TIME_OUT]</td>";
                                echo "<td>$row[station_name]</td>";
                                echo "<td>$row[status]</td>";
                                // echo "<td width=110px;>";
                                // echo "<form method='post'>";
                                // echo "<input autocomplete='off'  type='hidden' name='delete_id' value='$row[VISITOR_ID]'/>
                                // <button type='submit' name='delete_submit' onClick='return confirm(" . '"Are you sure you want to delete?"' . ")' class='btn btn-danger shadow btn-xs sharp'><i class='bi bi-trash'></i></button>";
                                // echo "</form>";
                                // echo "</td>";
                                echo "</tr>";
                                $i++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="modal-content" style="width: 500px;">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addLabel">Add Request</h1>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Name<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="text" class="form-control" required name="name">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Place<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="text" class="form-control" required name="place">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Phone<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="phone" class="form-control" required name="phone">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Time in<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="time" class="form-control" required name="timein">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Time out<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="time" class="form-control" required name="timeout">
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
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="add_submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php
require_once 'include/footer.php';
?>