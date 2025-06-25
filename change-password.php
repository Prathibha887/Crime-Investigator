<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
<?php
    if (isset($_POST['changepass'])) {

    $email = $_SESSION['email'];

    $o_password = addslashes(trim($_POST['o_password']));
    $n_password = addslashes(trim($_POST['n_password']));
    $c_password = addslashes(trim($_POST['c_password']));

    $qry = "SELECT Password from login WHERE email = '$email'";
    $resu = mysqli_query($conn, $qry);
    if ($resu) {
        $row1 = mysqli_fetch_assoc($resu);
        $stored_password = $row1['Password'];

        if ($o_password == $stored_password) {

        if ($c_password == $n_password) {

            $passqry = "UPDATE Login SET Password = '$n_password' WHERE email = '$email'";
        
            if ($conn->query($passqry) === TRUE) {
                echo "<script>alert('Password updated successfully!');location.href='change-password.php'</script>";
            } else {
                echo "<script>alert('Error updating password');location.href='change-password.php'</script>";
            }
        } else {
        
            echo "<script>alert('Password confirmation doesnot match!');location.href='change-password.php'</script>";
        }
        } else {

        echo "<script>alert('Old password doesnot match!');location.href='change-password.php'</script>";

        }

    }
    }

?>
<style>
        .mainDiv {
        display: flex;
        min-height: 100%;
        align-items: center;
        justify-content: center;
        font-family: 'Open Sans', sans-serif;
      }
    .cardStyle {
        width: 500px;
        border-color: white;
        background: #fff;
        padding: 36px 0;
        border-radius: 4px;
        box-shadow: 0px 0 2px 0 rgba(0,0,0,0.25);
      }
    #signupLogo {
      max-height: 100px;
      margin: auto;
      display: flex;
      flex-direction: column;
    }
    .formTitle{
      font-weight: 600;
      margin-top: 20px;
      color: #2F2D3B;
      text-align: center;
    }
    .inputLabel {
      font-size: 12px;
      color: #555;
      margin-bottom: 6px;
      margin-top: 24px;
    }
      .inputDiv {
        width: 70%;
        display: flex;
        flex-direction: column;
        margin: auto;
      }
    input {
      height: 40px;
      font-size: 16px;
      border-radius: 4px;
      border: none;
      border: solid 1px #ccc;
      padding: 0 11px;
    }
    input:disabled {
      cursor: not-allowed;
      border: solid 1px #eee;
    }
    .buttonWrapper {
      margin-top: 40px;
    }
      .submitButton {
        width: 70%;
        height: 40px;
        margin: auto;
        display: block;
        color: #fff;
        background-color: #15b9d9;
        border-color: #15b9d9;
        border-radius: 4px;
        font-size: 14px;
        cursor: pointer;
      }
    .submitButton:disabled,
    button[disabled] {
      border: 1px solid #cccccc;
      background-color: #cccccc;
      color: #666666;
    } 
</style>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background:linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),url(img/settings.jpg);
    background-repeat: no-repeat;
 background-size:100% 100%;">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Change password</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <?php
                    if($_SESSION['type'] == 'Police'){
                    ?>
                    <li class="breadcrumb-item"><a href="home1.php">Home</a></li>
                    <?php
                    } else {
                    ?>
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <?php
                    }
                    ?>
                    <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
                    <li class="breadcrumb-item active text-primary">Change password</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <div class="container-fluid about bg-light py-5">
            <div class="container py-5">
                <div class="mainDiv">
                    <div class="cardStyle">
                        <form method="post">
                        
                        <img src="" id="signupLogo"/>
                        
                        <h2 class="formTitle">
                        Change Your Password
                        </h2>
                        <div class="inputDiv">
                        <label class="inputLabel" for="password">Old Password</label>
                        <input type="password" id="password" name="o_password" required>
                        </div>
                        <div class="inputDiv">
                        <label class="inputLabel" for="password">New Password</label>
                        <input type="password" id="password" name="n_password" required>
                        </div>
                        
                        <div class="inputDiv">
                        <label class="inputLabel" for="confirmPassword">Confirm Password</label>
                        <input type="password" id="confirmPassword" name="c_password">
                        </div>
                        
                        <div class="buttonWrapper">
                        <button type="submit" name="changepass" class="submitButton pure-button pure-button-primary">
                            <span>Continue</span>
                        </button>
                        </div>
                        
                    </form>
                    </div>
                </div>
            </div>
        </div>

<?php
require_once 'include/footer.php';
?>