<?php
require_once('connection_pg.php');//php predefind keyword which is used to embed PHP code from another file.

if (isset($_POST['submit_btn'])) {
    $user_name = isset($_POST["user_name"]) ? $_POST["user_name"] : '';
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $cont_no = isset($_POST["cont_no"]) ? $_POST["cont_no"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    
    

    // Check if the email or contact number already exist
    $emailCheck = "SELECT email FROM regi WHERE email = '$email'";
    $contactCheck = "SELECT cont_no FROM regi WHERE cont_no = '$cont_no'";
    
    $emailResult = mysqli_query($conn, $emailCheck);
    $contactResult = mysqli_query($conn, $contactCheck);

    if (mysqli_num_rows($emailResult) > 0) {
        echo "Email is already in use. Please choose a different email address.";
    } elseif (mysqli_num_rows($contactResult) > 0) {
        echo "Contact number is already in use. Please choose a different contact number.";
    } else {
        // Insert data into the database
        $sql = "INSERT INTO regi (user_name, email,  cont_no ,password)
            VALUES ('$user_name', '$email',  '$cont_no', '$password')";
        
        if (mysqli_query($conn, $sql)) {
            // Redirect to home.php after successful data insertion
            header("Location: login_ttt.php");
            exit;
        } else {
            echo "Error";
        }
    }
}
?>
<html>
    <head>
        <style>
           .bg-image {
                        background-image: url("../assets/back.jpg");
                        filter: blur(8px);
                        -webkit-filter: blur(8px);
                        height: 100%;   
                        background-position: center;
                        background-repeat: no-repeat;
                         background-size: cover;
                    }

            .bg-text {
                        background-color: rgb(0,0,0); /* Fallback color */
                         background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
                        color: white;
                        font-weight: bold;
                         border: 3px solid #f1f1f1;
                         position: absolute;
                         top: 50%;
                         left: 50%;
                        transform: translate(-50%, -50%);
                         z-index: 2;
                        width: 80%;
                        padding: 20px;
                        text-align: center;
                    }
            .lbtn{width: auto; padding: 10px 18px; background-color:blue;}
            .cancelbtn{width: auto; padding: 10px 18px; background-color:red;}
        </style>
        
    </head>
    <body>
        <form>
            <div class="bg-image">
            
            </div>
            <div class="bg-text">
           <h1><b>REGISTRATION FORM</b><br><br><br></h1>

            <div class="container">
                <label for="textbox" id="name" >USERNAME</label><br>
                    <input type="textbox" id="name" placeholder="Enter Username" class="uname"><br><br>
                <label for="text" id="email">EMAIL</label><br>
                    <input type="text" id="email" placeholder="Email" class="email"><br><br>
                <label for="textbox" id="mobile">MOBILE NUMBER</label><br>
                    <input type="textbox" id="mobile" placeholder="Enter Mobile Number" class="no"><br><br>
                
                <label for="password" id="password">PASSWORD</label><br>
                    <input type="password" id="password" placeholder="Password" class="pass"><br><br>
                <label ><br>
                    <input type="checkbox" checked="checked" name="AGREE"> <b>I accept all the terms and condition</b>
                </label><br><br><br>
           <button type="button" class="lbtn" onclick="window.location.href='login_ttt.php'" name="submit_btn">SUBMIT</button>
            <button type="button" class="cancelbtn" onclick="window.location.href='redirect.php'" >CANCEL</button><br>
            
            </div>
        </form>
    </div>
    </body>
</html>