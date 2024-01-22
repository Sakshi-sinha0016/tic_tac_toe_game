<?php
   session_start();
   echo "successfully login";
   $con=mysqli_connect('localhost','root');
   if($con){
    echo "connection successfully";
   }
   else{
    echo "no connection";
   }
   mysqli_select_db($con, 'html1');
   $name= $_POST['email'];
   $pass=$_POST['password'];
   $quer= "select *from user where username='$name' && password='$pass'";
   $result=mysqli_query($con, $quer);
   $num=mysqli_num_rows($result);
   if($num==1){
    $_SESSION['username']= $name;
    header('Location:test_home.php');
   }
   else{
    header('Location:signup1.php');
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
               <!-- <label for="textbox" id="name" >USERNAME</label><br>
                    <input type="textbox" id="name" placeholder="Enter Username" class="uname"><br><br>-->
                <label for="text" id="email">EMAIL</label><br>
                    <input type="text" id="email" placeholder="Email" class="email"><br><br>
               <!-- <label for="textbox" id="mobile">MOBILE NUMBER</label><br>
                    <input type="textbox" id="mobile" placeholder="Enter Mobile Number" class="no"><br><br>-->
                
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