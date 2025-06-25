<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
<?php
if (isset($_POST['update'])) {

    $id = addslashes(trim($_POST['id']));
    
    $status = addslashes(trim($_POST['status']));

    
    $updateQuery = "UPDATE prisoners SET status = '$status' 
    WHERE id = '$id'";


    if (mysqli_query($conn, $updateQuery)) {

        echo "<script>alert('complaints  updated successfully');location.href='view-prisoner-time.php'</script>";
    } else {
        echo "<script>alert('Unable to process your request!');location.href='view-prisoner-time.php'</script>";
    }
    
}
?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(img/requesttimings.avif);
    background-repeat: no-repeat;
 background-size:100% 130%;">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Prison request</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="home1.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="complaints.php">Complaints</a></li>
                    <li class="breadcrumb-item active text-primary">Prison request</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <h3>Prisoner request time</h3>
                <div class="d-flex justify-content-end mb-1">
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
                        <th scope="col">Verify</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT p.id, p.status, p.NAME, p.PLACE, p.VISITOR_ID , p.PHONE, p.TIME_IN, p.TIME_OUT, p.STATION_ID, s.station_name
                        FROM prisoners p
                        INNER JOIN station_master s ON s.station_id = p.STATION_ID";
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
                                echo "<td width=110px;>";
                                echo " <button type='button' data-bs-toggle='modal' data-bs-target='#update$row[id]' class='btn btn-primary shadow btn-xs sharp'><i class='bi bi-pencil-square'></i></button>";
                                echo "</td>";
                                echo "</tr>";
                                $i++;
                                ?>
                                <div class="modal fade" id="update<?php echo $row["id"]; ?>" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form method="POST">
                                            <div class="modal-content" style="width: 500px;">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="addLabel">Verify</h1>
                                                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-xl-12 mb-3">
                                                            <label class="form-label">Status<span class="text-danger">*</span></label>
                                                            <select class="form-control" name="status">
                                                            <option value="">Select status</option>
                                                            <option value="Pending" <?php if ($row['status'] == 'Pending') {
                                                                                                                            echo 'selected';
                                                                                                                        } ?>>Pending</option>
                                                            <option value="Approved" <?php if ($row['status'] == 'Approved') {
                                                                                                                            echo 'selected';
                                                                                                                        } ?>>Approved</option>
                                                            <option value="Rejected" <?php if ($row['status'] == 'Rejected') {
                                                                                                                            echo 'selected';
                                                                                                                        } ?>>Rejected</option>
                                                            </select>
                                                        </div>
                                                        <input autocomplete='off'  type="hidden" name="id" value="<?php echo $row['id']; ?>" />
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
            </div>
        </div>

<?php
require_once 'include/footer.php';
?>