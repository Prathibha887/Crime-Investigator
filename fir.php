<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
<?php
if (isset($_POST['add_submit'])) {

    $complaintno = addslashes(trim($_POST['complaintno']));
    $date = addslashes(trim($_POST['date']));
    $type = addslashes(trim($_POST['type']));
    $info_date = addslashes(trim($_POST['info_date']));
    $info_time = addslashes(trim($_POST['info_time']));
    $accused_details = addslashes(trim($_POST['accused_details']));
    $place = addslashes(trim($_POST['place']));
    $stationid = addslashes(trim($_POST['stationid']));
    $areaid = addslashes(trim($_POST['areaid']));
    $time = addslashes(trim($_POST['time']));
    $status = addslashes(trim($_POST['status']));
    $date = date('Y-m-d');

    
   
        $insertQuery = "INSERT INTO fir (STATION_ID, FIR_DATE, TYPE, INFORECEIVED_DATE, INFORECEIVED_TIME, PLACE, 
        ACCUSED_DETAILS, AREA_ID, TIME, STATUS, DATE_CREATED, COMPLAINT_NO) VALUES ('$stationid', '$date', 
        '$type', '$info_date', '$info_time', '$place', '$accused_details', '$areaid', '$time', '$status', 
        '$date', '$complaintno')";

        if (mysqli_query($conn, $insertQuery)) {

            echo "<script>alert('Fir added successfully');location.href='fir.php'</script>";
        } else {
            echo "<script>alert('Unable to process your request!');location.href='fir.php'</script>";
        }
        } else {

    }

    


if (isset($_POST['update'])) {

    $id = addslashes(trim($_POST['id']));
    $date = addslashes(trim($_POST['date']));
    $type = addslashes(trim($_POST['type']));
    $info_date = addslashes(trim($_POST['info_date']));
    $info_time = addslashes(trim($_POST['info_time']));
    $accused_details = addslashes(trim($_POST['accused_details']));
    $place = addslashes(trim($_POST['place']));
    $stationid = addslashes(trim($_POST['stationid']));
    $areaid = addslashes(trim($_POST['areaid']));
    $time = addslashes(trim($_POST['time']));
    $status = addslashes(trim($_POST['status']));

    
    $updateQuery = "UPDATE fir SET STATION_ID = '$stationid', FIR_DATE = '$date', TYPE = '$type',
    INFORECEIVED_DATE = '$info_date', INFORECEIVED_TIME = '$info_time', PLACE = '$place', 
    ACCUSED_DETAILS = '$accused_details', AREA_ID = '$areaid', TIME = '$time', STATUS = '$status' 
    WHERE FIR_ID = '$id'";


    if (mysqli_query($conn, $updateQuery)) {

        echo "<script>alert('fir  updated successfully');location.href='fir.php'</script>";
    } else {
        echo "<script>alert('Unable to process your request!');location.href='fir.php'</script>";
    }
    
}

if (isset($_POST['delete_submit'])) {


    if (mysqli_query($conn, "DELETE from fir WHERE FIR_ID = '$_POST[delete_id]'")) {

        echo "<script>alert('fir deleted successfully');location.href='fir.php'</script>";
    } else {

        echo "<script>alert('Unable to process your request!');location.href='fir.php'</script>";
    }
}
?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(img/fir.webp);
    background-repeat: no-repeat;
 background-size:100% 130%;
    ">>
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">FIR</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="home1.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="complaints.php">Complaints</a></li>
                    <li class="breadcrumb-item active text-primary">FIR</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <h3>Fir details</h3>
                <div class="d-flex justify-content-end mb-1">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add">Add FIR</button>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Complant no</th>
                        <th scope="col">Fir date</th>
                        <th scope="col">Type</th>
                        <th scope="col">Info recived date</th>
                        <th scope="col">Info recived time</th>
                        <th scope="col">Place</th>
                        <th scope="col">Accused details</th>
                        <th scope="col">Station</th>
                        <th scope="col">Time</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT f.STATION_ID, f.FIR_DATE, f.TYPE, f.INFORECEIVED_DATE, f.INFORECEIVED_TIME, 
                        f.PLACE, f.ACCUSED_DETAILS, f.AREA_ID, f.TIME, f.STATUS, f.photo, f.COMPLAINT_NO, 
                        s.station_name, a.area_name, f.FIR_ID 
                        FROM fir f
                        INNER JOIN station_master s ON s.station_id = f.STATION_ID
                        INNER JOIN area_master a ON a.area_id = f.AREA_ID";
                        $res = mysqli_query($conn,$sql);

                        if(mysqli_num_rows($res) > 0) {
                            $i = 1;

                            while($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>$i</td>";
                                echo "<td>$row[COMPLAINT_NO]</td>";
                                echo "<td>$row[FIR_DATE]</td>";
                                echo "<td>$row[TYPE]</td>";
                                echo "<td>$row[INFORECEIVED_DATE]</td>";
                                echo "<td>$row[INFORECEIVED_TIME]</td>";
                                echo "<td>$row[PLACE]</td>";
                                echo "<td>$row[ACCUSED_DETAILS]</td>";
                                echo "<td>$row[station_name]</td>";
                                echo "<td>$row[TIME]</td>";
                                echo "<td>$row[STATUS]</td>";
                                echo "<td width=110px;>";
                                echo "<form method='post'>";
                                echo "<input autocomplete='off'  type='hidden' name='delete_id' value='$row[FIR_ID]'/>
                                <button type='submit' name='delete_submit' onClick='return confirm(" . '"Are you sure you want to delete?"' . ")' class='btn btn-danger shadow btn-xs sharp'><i class='bi bi-trash'></i></button>";
                                echo " <button type='button' data-bs-toggle='modal' data-bs-target='#update$row[FIR_ID]' class='btn btn-primary shadow btn-xs sharp'><i class='bi bi-pencil-square'></i></button>";
                                echo "</form>";
                                echo "</td>";
                                echo "</tr>";
                                $i++;
                                ?>

                                <div class="modal fade" id="update<?php echo $row["FIR_ID"]; ?>" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="POST">
                                            <div class="modal-content" style="width: 500px;">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="addLabel">Update Fir</h1>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Fir date<span class="text-danger">*</span></label>
                                                            <input autocomplete='off' type="date" class="form-control" maxlength="100" value="<?php echo $row['FIR_DATE']; ?>" required name="date">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Type<span class="text-danger">*</span></label>
                                                            <input autocomplete='off' type="text" class="form-control" value="<?php echo $row['TYPE']; ?>" required name="type">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">INFO RECEIVED DATE<span class="text-danger">*</span></label>
                                                            <input autocomplete='off' type="date" class="form-control" value="<?php echo $row['INFORECEIVED_DATE']; ?>" required name="info_date">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">INFO RECEIVED TIME<span class="text-danger">*</span></label>
                                                            <input autocomplete='off' type="time" class="form-control" value="<?php echo $row['INFORECEIVED_TIME']; ?>" required name="info_time">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Place<span class="text-danger">*</span></label>
                                                            <input autocomplete='off' type="text" class="form-control" value="<?php echo $row['PLACE']; ?>" required name="place">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Accused details<span class="text-danger">*</span></label>
                                                            <input autocomplete='off' type="text" class="form-control" value="<?php echo $row['ACCUSED_DETAILS']; ?>" required name="accused_details">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Station<span class="text-danger">*</span></label>
                                                            <select class="form-control" name="stationid">
                                                                <?php
                                                                $qry = "SELECT * FROM station_master";
                                                                $resul = mysqli_query($conn, $qry);

                                                                if ($resul) {
                                                                    while ($row_station = mysqli_fetch_assoc($resul)) {
                                                                        $stationid = $row_station['station_id'];
                                                                        $station = $row_station['station_name'];
                                                                        $selected = ($stationid == $row['STATION_ID']) ? 'selected' : '';
                                                                        echo "<option value='$stationid' $selected>$station</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Area<span class="text-danger">*</span></label>
                                                            <select class="form-control" name="areaid">
                                                                <option value="">Select area</option>
                                                                <?php
                                                                $qry = "SELECT * FROM area_master";
                                                                $resul = mysqli_query($conn, $qry);

                                                                if ($resul) {
                                                                    while ($row_station = mysqli_fetch_assoc($resul)) {
                                                                        $areaid = $row_station['area_id'];
                                                                        $area = $row_station['area_name'];
                                                                        $selected = ($areaid == $row['AREA_ID']) ? 'selected' : '';
                                                                        echo "<option value='$areaid' $selected>$area</option>";
                                                                    }
                                                                }
                                                                ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Time<span class="text-danger">*</span></label>
                                                            <input autocomplete='off' type="time" class="form-control" value="<?php echo $row['TIME']; ?>" required name="time">
                                                        </div>
                                                        <div class="col-xl-6 mb-3">
                                                            <label class="form-label">Status<span class="text-danger">*</span></label>
                                                            <select class="form-control" name="status">
                                                            <option value="">Select status</option>
                                                            <option value="Active" <?php if ($row['STATUS'] == 'Active') {
                                                                                                                            echo 'selected';
                                                                                                                        } ?>>Active</option>
                                                            <option value="Closed" <?php if ($row['STATUS'] == 'Closed') {
                                                                                                                            echo 'selected';
                                                                                                                        } ?>>Closed</option>
                                                            </select>
                                                        </div>
                                                        <input autocomplete='off'  type="hidden" name="id" value="<?php echo $row['FIR_ID']; ?>" />
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" name="update" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php
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
                                    <h1 class="modal-title fs-5" id="addLabel">Add Fir</h1>
                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Complaint no<span class="text-danger">*</span></label>
                                            <select class="form-control" name="complaintno">
                                                <option value="">select</option>
                                                <?php
                                                $qry = "SELECT * FROM complaint";
                                                $resul = mysqli_query($conn, $qry);

                                                if ($resul) {
                                                    while ($row_station = mysqli_fetch_assoc($resul)) {
                                                        $COMPLAINTNO = $row_station['COMPLAINTNO'];
                                                        echo "<option value='$COMPLAINTNO'>$COMPLAINTNO</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Fir date<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="date" class="form-control" maxlength="100" required name="date">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Type<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="text" class="form-control" required name="type">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">INFO RECEIVED DATE<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="date" class="form-control" required name="info_date">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">INFO RECEIVED TIME<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="time" class="form-control" required name="info_time">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Place<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="text" class="form-control" required name="place">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Accused details<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="text" class="form-control" required name="accused_details">
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
                                            <label class="form-label">Area<span class="text-danger">*</span></label>
                                            <select class="form-control" name="areaid">
                                                <option value="">Select area</option>
                                                <?php
                                                $qry = "SELECT * FROM area_master";
                                                $resul = mysqli_query($conn, $qry);

                                                if ($resul) {
                                                    while ($row_station = mysqli_fetch_assoc($resul)) {
                                                        $areaid = $row_station['area_id'];
                                                        $area = $row_station['area_name'];
                                                        echo "<option value='$areaid'>$area</option>";
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Time<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="time" class="form-control" required name="time">
                                        </div>
                                        <div class="col-xl-6 mb-3">
                                            <label class="form-label">Status<span class="text-danger">*</span></label>
                                            <select class="form-control" name="status">
                                            <option value="">Select status</option>
                                            <option value="Active">Active</option>
                                            <option value="Closed">Closed</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-xl-6 mb-3">
                                            <label class="form-label">Accused photo<span class="text-danger">*</span></label>
                                            <input type="file" class="form-control" name="image" accept="image/*" required>
                                        </div> -->
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