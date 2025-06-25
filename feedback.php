<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

$email=$_SESSION['email'];

?>
<?php
    if (isset($_POST['add_submit'])) {

        $name = addslashes(trim($_POST['name']));
        $phone = addslashes(trim($_POST['phone']));
        $subject = addslashes(trim($_POST['subject']));
        $email = addslashes(trim($_POST['email']));
        $message = addslashes(trim($_POST['message']));

        $insertQuery = "INSERT INTO feedback (name, phone, email, subject, message) 
        VALUES ('$name', '$phone', '$email', '$subject', '$message')";

        if (mysqli_query($conn, $insertQuery)) {

            echo "<script>alert('feedback sent successfully');location.href='feedback.php'</script>";
        } else {
            echo "<script>alert('Unable to process your request!');location.href='feedback.php'</script>";
        }
        
    }


?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4 wow fadeInDown" data-wow-delay="0.1s">Feedback</h1>
                <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="change-password.php">Settings</a></li>
                    <li class="breadcrumb-item active text-primary">Feedback</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row">
                    <div class="col-lg-3">

                    </div>
                    <div class="col-lg-5 col-xl-6 contact-form wow fadeInLeft" data-wow-delay="0.1s">
                        <h2 class="display-5 text-white mb-4 text-center">Feedback</h2>
                        <form method="POST">
                            <div class="row g-3">
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" name="name" class="form-control bg-transparent border border-white" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" name="email" value="<?php echo"$email"?>" class="form-control bg-transparent border border-white" id="email" placeholder="Your Email" readonly>
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" name="phone" class="form-control bg-transparent border border-white" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="text" name="subject" class="form-control bg-transparent border border-white" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" class="form-control bg-transparent border border-white" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" name="add_submit" class="btn btn-light text-primary w-100 py-3">Send Feedback</button>
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