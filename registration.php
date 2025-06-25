<?php
session_start();

require_once 'include/config.php';
date_default_timezone_set('Asia/Kolkata');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration Page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"  />
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
          href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet"
          href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
          crossorigin="anonymous">
    <style>
      
  
        body {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 14px;
            background: #f2f2f2;
        }
        .clearfix {
            &:after {
                content: "";
                display: block;
                clear: both;
                visibility: hidden;
                height: 0;
            }
        }

        #registerbtn{
            width:350px;
            padding:10px;
            margin-top:9px;
            background-color:#15B9D9;
            color:white;
            border:none;
            cursor:pointer
        }
        #registerbtn:hover{ 
            background-color:white;
            color:#15B9D9;
            border:1px solid #15B9D9;
        }
        .form_wrapper {
            background: #FFF;
            width: 400px;
            /* max-width: 100%; */
            box-sizing: border-box;
            padding: 25px;
            margin: 8% auto 0;
            position: relative;
            z-index: 1;
            border-top: 5px solid #15B9D9;
            -webkit-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            -moz-box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
            -webkit-transform-origin: 50% 0%;
            transform-origin: 50% 0%;
            -webkit-transform: scale3d(1, 1, 1);
            transform: scale3d(1, 1, 1);
            -webkit-transition: none;
            transition: none;
            -webkit-animation: expand 0.8s 0.6s ease-out forwards;
            animation: expand 0.8s 0.6s ease-out forwards;
            opacity: 0;
            h2 {
                font-size: 1.5em;
                line-height: 1.5em;
                margin: 0;
            }
            .title_container {
                text-align: center;
                padding-bottom: 15px;
            }
            h3 {
                font-size: 1.1em;
                font-weight: normal;
                line-height: 1.5em;
                margin: 0;
            }
            label {
                font-size: 12px;
            }
            .row {
                margin: 10px -15px;
                >div {
                    padding: 0 15px;
                    box-sizing: border-box;
                }
            }
            .col_half {
                width: 50%;
                float: left;
            }
            .input_field {
                position: relative;
                margin-bottom: 20px;
                -webkit-animation: bounce 0.6s ease-out;
                animation: bounce 0.6s ease-out;
                >span {
                    position: absolute;
                    left: 0;
                    top: 0;
                    color: #333;
                    height: 100%;
                    
                    text-align: center;
                    width: 30px;
                    >i {
                        padding-top: 10px;
                    }
                }
            }

          
            .textarea_field {
                >span {
                    >i {
                        padding-top: 10px;
                    }
                }
            }

            input {
            &[type="text"], &[type="email"], &[type="password"],&[type="tel"], &[type="radio"]{
            width: 100%;
            padding: 8px 10px 9px 35px;
            height: 35px;
            border: 1px solid #15B9D9;
            box-sizing: border-box;
            outline: none;
            -webkit-transition: all 0.30s ease-in-out;
            -moz-transition: all 0.30s ease-in-out;
            -ms-transition: all 0.30s ease-in-out;
            transition: all 0.30s ease-in-out;
            }
            &[type="text"]:hover, &[type="email"]:hover, &[type="password"]:hover,&[type="tel"]:hover {
            background: #fafafa;
            }
            &[type="text"]:focus, &[type="email"]:focus, &[type="password"]:focus, &[type="tel"]:focus {
            -webkit-box-shadow: 0 0 2px 1px #15B9D9;
            -moz-box-shadow: 0 0 2px 1px #15B9D9;
            box-shadow: 0 0 2px 1px #15B9D9;
            border: 1px solid #15B9D9;
            background: #fafafa;
            }
            
             &[type="radio"] {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
            }
        }
        }

        .form_container {
            .row {
                .col_half.last {
                    border-left: 1px solid #15B9D9;
                }
            }
        }
        .checkbox_option{
            label{
                margin-right: 1em;
                position: relative;
                &:before {
                content: "";
                display: inline-block;
                width: 0.5em;
                height: 0.5em;
                margin-right: 0.5em;
                vertical-align: -2px;
                border: 2px solid #15B9D9;
                padding: 0.12em;
                background-color: transparent;
                background-clip: content-box;
                transition: all 0.2s ease;
                }
                &:after {
                border-right: 2px solid #15B9D9;
                border-top: 2px solid #15B9D9;
                content: "";
                height: 20px;
                left: 2px;
                position: absolute;
                top: 7px;
                transform: scaleX(-1) rotate(135deg);
                transform-origin: left top;
                width: 7px;
                display: none;
                }
            }
            input {
            &:hover + label:before {
            border-color: black;
            }
            &:checked + label {
            &:before {
                border-color: black;
            }
            &:after {
                -moz-animation: check 0.8s ease 0s running;
                -webkit-animation: check 0.8s ease 0s running;
                animation: check 0.8s ease 0s running;
                display: block;
                width: 7px;
                height: 20px;
                border-color: black;
            }
            }
        }
        }
        .radio_option {
        label {
            margin-right: 1em;
            &:before {
            content: "";
            display: inline-block;
            width: 0.9em;
            height: 0.9em;
            margin-right: 0.5em;
            border-radius: 100%;
            vertical-align: -3px;
            border: 2px solid grey;
            padding: 0.15em;
            background-color: transparent;
            background-clip: content-box;
            transition: all 0.2s ease;
            }
        }
        input {
            &:hover + label:before {
            border-color:#15B9D9 ;
            }
            &:checked + label:before {
            background-color:#15B9D9;
            border-color: #15B9D9;
            }
        }
        }
        .select_option {
        position: relative;
        width: 100%;
        select {
            display: inline-block;
            width: 100%;
            height: 35px;
            padding: 0px 15px;
            cursor: pointer;
            color: #7b7b7b;
            border: 1px solid grey;
            border-radius: 0;
            background: #fff;
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            transition: all 0.2s ease;
            &::-ms-expand {
            display: none;
            }
            &:hover, &:focus {
            color: black;
            background: #fafafa;
            border-color: black;
            outline: none;
            }
        }
        }
        .select_arrow {
        position: absolute;
        top: calc(50% - 4px);
        right: 15px;
        width: 0;
        height: 0;
        pointer-events: none;
        border-width: 8px 5px 0 5px;
        border-style: solid;
        border-color: #7b7b7b transparent transparent transparent;
        }

        .select_option select {
        &:hover + .select_arrow, &:focus + .select_arrow {
            border-top-color: black;
        }
        }
        .credit {
            position: relative;
            z-index: 1;
            text-align: center;
            padding: 15px;
            color: yellow;
            a {
                color: darken(yellow,7%);
            }
        }
        .pass {
            margin-left: -30px;
            cursor: pointer;
        }
        @-webkit-keyframes check {
        0% { height: 0; width: 0; }
        25% { height: 0; width: 7px; }
        50% { height: 20px; width: 7px; }
        }

        @keyframes check {
        0% { height: 0; width: 0; }
        25% { height: 0; width: 7px; }
        50% { height: 20px; width: 7px; }
        }

        @-webkit-keyframes expand { 
            0% { -webkit-transform: scale3d(1,0,1); opacity:0; }
            25% { -webkit-transform: scale3d(1,1.2,1); }
            50% { -webkit-transform: scale3d(1,0.85,1); }
            75% { -webkit-transform: scale3d(1,1.05,1); }
            100% { -webkit-transform: scale3d(1,1,1);  opacity:1; }
        }

        @keyframes expand { 
            0% { -webkit-transform: scale3d(1,0,1); transform: scale3d(1,0,1);  opacity:0; }
            25% { -webkit-transform: scale3d(1,1.2,1); transform: scale3d(1,1.2,1); }
            50% { -webkit-transform: scale3d(1,0.85,1); transform: scale3d(1,0.85,1); }
            75% { -webkit-transform: scale3d(1,1.05,1); transform: scale3d(1,1.05,1); }
            100% { -webkit-transform: scale3d(1,1,1); transform: scale3d(1,1,1);  opacity:1; }
        }


        @-webkit-keyframes bounce { 
            0% { -webkit-transform: translate3d(0,-25px,0); opacity:0; }
            25% { -webkit-transform: translate3d(0,10px,0); }
            50% { -webkit-transform: translate3d(0,-6px,0); }
            75% { -webkit-transform: translate3d(0,2px,0); }
            100% { -webkit-transform: translate3d(0,0,0); opacity: 1; }
        }

        @keyframes bounce { 
            0% { -webkit-transform: translate3d(0,-25px,0); transform: translate3d(0,-25px,0); opacity:0; }
            25% { -webkit-transform: translate3d(0,10px,0); transform: translate3d(0,10px,0); }
            50% { -webkit-transform: translate3d(0,-6px,0); transform: translate3d(0,-6px,0); }
            75% { -webkit-transform: translate3d(0,2px,0); transform: translate3d(0,2px,0); }
            100% { -webkit-transform: translate3d(0,0,0); transform: translate3d(0,0,0); opacity: 1; }
        }
        @media (max-width: 600px) {
            .form_wrapper {
                .col_half {
                    width: 100%;
                    float: none;
                }
            }
            .bottom_row {
                .col_half {
                    width: 50%;
                    float: left;
                }
            }
            .form_container {
                .row {
                    .col_half.last {
                        border-left: none;
                    }
                }
            }
            .remember_me {
                padding-bottom: 20px;
            }
        }

        #toggler {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
        }
    </style>
</head>
<?php
    if(isset($_POST['register'])){

        $name = $_POST['name'];
        $contact = $_POST['phone'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $userrole = "User";
        $dob = $_POST['dob'];
        $gender = $_POST['radiogroup1'];
        $city = $_POST['city'];
        $location = $_POST['location'];
        $date = date('Y-m-d');


        $insertQuery = "INSERT INTO login (Username, email, phone, Usertype, Password, date) VALUES ('$name', '$email', 
        '$contact', '$userrole', '$password', '$date')";

        if (mysqli_query($conn, $insertQuery)) {

            $insertQuery2 = "INSERT INTO registration_user (Username, name, Password, 
            Email, Usertype, dob, phone, verified, gender) VALUES ('$name', '$name', 
            '$password', '$email', '$userrole', '$dob', '$contact', 'Yes', '$gender')";
            
            if (mysqli_query($conn, $insertQuery2)) {

                echo "<script>alert('User added successfully');location.href='index.php'</script>";
            } else {
                echo "<script>alert('Unable to process your request!');location.href='registration.php'</script>";
            }
        } else {
            echo "<script>alert('Unable to process your request!');location.href='registration.php'</script>";
        }
    }
?>
<body>
<div class="form_wrapper">
  <div class="form_container">
    <div class="title_container">
      <h2>REGISTRATION FORM</h2>
    </div>
    <div class="row clearfix">
      <div class="">
        <form method="POST">
           <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user" style="color:#15B9D9"></i></span>
            <input type="text" name="name" placeholder="Username" required />
          </div>

          <div class="input_field" style="border: 1PX SOLID #15B9D9; padding:8px"> <span><i aria-hidden="true" class="fa fa-calendar" style="color:#15B9D9" ></i></span>
            <input type="date" name="dob" placeholder="DD/MM/YYYY" style="margin-left:25px;width:290px;border:none;outline:none;" required />
          </div>

          <div class="input_field radio_option" style="border: 1PX SOLID #15B9D9; padding:8px" ><span><i aria-hidden="true" class="fa-solid fa-venus-mars" style="color:#15B9D9"></i></span>
          <div style="margin-left:25px">
              <input type="radio" name="radiogroup1" value="Male" id="rd1" style="width:65px;">
              <label for="rd1">Male</label>
              <input type="radio" name="radiogroup1" value="Female" id="rd2">
              <label for="rd2">Female</label>
              <input type="radio" name="radiogroup1" value="Others" id="rd3">
              <label for="rd3">Others</label>
          </div>
          </div>
          
          <div class="input_field"> <span><i aria-hidden="true" class="fa-solid fa-city" style="color:#15B9D9"></i></span>
            <input type="text" name="city" placeholder="City" required />
          </div>

          <div class="input_field"> <span><i aria-hidden="true" class="fa-solid fa-location-dot" style="color:#15B9D9"></i></span>
            <input type="text" name="location" placeholder="Location" required />
          </div>

          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope" style="color:#15B9D9"></i></span>
            <input type="email" name="email" placeholder="Email" required />
          </div>

          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock" style="color:#15B9D9"></i></span>
            <input type="password"id="Password" name="password"  placeholder="Password" required />
            <!-- <span style="margin-top:0px; margin-left:310px;"><i id="toggler"class="far fa-eye"></i></span> -->
            <i class="bi bi-eye-slash pass" id="togglePassword"></i>
          </div>

          <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone" style="color:#15B9D9"></i></span>
            <input type="tel" pattern="[0-9]{10}" name="phone" placeholder="Contact Number" required />
          </div>
          <div class="mt-2">
          <a class="ghost" href="index.php" style="text-decoration:none;color:#15B9D9">Already have an account? login</a>
           </div>
         
           <div class="mt-2">
           <button class="btn btn-primary button" id="registerbtn" name="register" type="submit" >Register</button>
           </div> 	
        </form>
      </div>
    </div>
  </div>
</div>

<!-- <script>
  var password = document.getElementById('Password');
var toggler = document.getElementById('toggler');
showHidePassword = () => {
if (password.type == 'password') {
password.setAttribute('type', 'text');
toggler.classList.add('fa-eye-slash');
} else {
toggler.classList.remove('fa-eye-slash');
password.setAttribute('type', 'password');
}
};
toggler.addEventListener('click', showHidePassword);
</script> -->
<script>
        const togglePassword = document
            .querySelector('#togglePassword');
        const password = document.querySelector('#password');
        togglePassword.addEventListener('click', () => {
            // Toggle the type attribute using
            // getAttribure() method
            const type = password
                .getAttribute('type') === 'password' ?
                'text' : 'password';
            password.setAttribute('type', type);
            // Toggle the eye and bi-eye icon
            this.classList.toggle('bi-eye');
        });
    </script>

</body>
</html>