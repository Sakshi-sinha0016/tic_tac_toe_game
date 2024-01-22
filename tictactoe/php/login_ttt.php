<?php
require_once('connection_pg.php');//php predefind keyword which is used to embed PHP code from another file.

if (isset($_POST['submit_btn'])) {
   
    $email = isset($_POST["email"]) ? $_POST["email"] : '';
    $password = isset($_POST["password"]) ? $_POST["password"] : '';
    
    

    // Check if the email or contact number already exist
    $emailCheck = "SELECT email FROM regi WHERE email = '$email'";

    
    $emailResult = mysqli_query($conn, $emailCheck);
  

    if (mysqli_num_rows($emailResult) > 0) {
        echo "Email is already in use. Please choose a different email address.";
    } 
    else {
        // Insert data into the database
        $sql = "INSERT INTO regi (user_name, email,  cont_no ,password)
            VALUES ('$user_name', '$email',  '$cont_no', '$password')";
        
        if (mysqli_query($conn, $sql)) {
            // Redirect to home.php after successful data insertion
            header("Location: redirect.php");
            exit;
        } 
        else
         {
            echo "Error";
        }
    }
}
?>
<html>
    <head>
        <style>
            h2{color: aqua;}
            .container {padding: 16px;}
            .cancelbtn {width: auto; padding: 10px 18px; background-color: #f44336;}
            .lbtn{width: auto; padding: 10px 18px; background-color:blue;}
            .email{width: auto; padding: 10px 18px; background-color:whitesmoke;}
            .pass{width: auto; padding: 10px 18px; background-color:whitesmoke;}
            .number{width: auto; padding: 10px 18px; background-color:whitesmoke;}

            .bg-image {
                        background-image: url("../assets/empty.jpg");
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
        </style>
    </head>
    <body>
       
        <form>
            <div class="bg-image">
            
            </div>
            <div class="bg-text">
            <h2><b>WELCOME</b><br></h2>
            <div class="container">
            <input type="email" id="email"  placeholder="Email" class="email"><br><br>
            <input type="password" id="password" placeholder="Password" class="pass"><br><br>
            <button type="button" class="lbtn" onclick="window.location.href='redirect.php'">LOGIN</button>
            <button type="button" class="cancelbtn" onclick="window.location.href='redirect.php'">CANCEL</button><br>
            <label>
                <input type="checkbox" checked="checked" name="remember"><b> Remember me</b>
            </label><br><br>

            <label>
                <button type="button" name="create" onclick="window.location.href='registration_ttt.php'" > Create account
            </label>
            </div>
        </form>
    </div>

    </body>
</html>