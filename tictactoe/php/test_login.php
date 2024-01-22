<?php
   session_start();
   //header('Location:login1.php');
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
   $quer= "select * from user where username='$name' && password='$pass'";
   $result=mysqli_query($con, $quer);
   $num=mysqli_num_rows($result);
   
   if($num!=0){
    echo "duplicate data";
   }
   else{
    $querr="insert into user(username, password) values('$name','$pass')";
    mysqli_query($con, $querr);
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