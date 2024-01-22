

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
  .myaccount a{
    text-decoration: none;
    color: white;
    padding: 10px 20px;
    font-size: 20px;
    background: red;
    border-radius: 8px;
}

body{
    #myVideo {
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;}
}
/* -- Header section -- */
header{
    width: 100%;
    height: 100vh;
    //background: linear-gradient(rgba(0,0,0,0.8), rgba(0, 0, 0, 0.2)), url("assets/background.jpg");
    background-size: cover;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

nav{
    width: 100%;
    height: 100px;
    color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 28px 53px;
}

.logo{
    font-size: 2em;
    letter-spacing: 2px;
    color: black;
    font-family:cursive;
}

.menu a{
    text-decoration: none;
    color: red;
    padding: 10px 20px;
    font-size: 20px;
    position: relative;
}

.lbtnr{
    text-decoration: none;
    color: white;
    padding: 10px 20px;
    font-size: 20px;
    background: rgba(60, 60, 255);
    border-radius: 8px;
}

.h-text{
    max-width: 650px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: black;
}

.h-text span{
    letter-spacing: 3px;
}

.h-text h1{
    font-size: 2.5em;
}

.h-text a{
    text-decoration: none;
    background: red ;
    color:black;
    padding: 10px 20px;
    letter-spacing: 5px;
    transition: 0.4s;
}

/* -- Hover Effect -- */
.menu a::before{
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: 0%;
    height: 100%;
    border-bottom: 2px solid indianred;
    transition: 0.4s linear;
}
.menu a:hover::before{
    width: 90%;
}


.h-text a:hover{
    background: transparent;
    border: 1px solid indianred;
}


.lbtn{ text-decoration: none;
    color: white;
    padding: 10px 20px;
    font-size: 20px;
    background: rgba(60, 60, 255);
    border-radius: 8px;width: auto; padding: 10px 18px; background-color:blue;}
.txt{ text-decoration: none;
    color: red;
    padding: 10px 20px;
    font-size: 20px;
    background: rgba(60, 60, 255);
    border-radius: 8px;width: auto; padding: 10px 18px; background-color:beige;}
/* == FOoter == */
footer{
    background: black;
    color: white;
    text-align: center;
    padding: 20px 0;
}
.social-icons a{
    display: inline-block;
    width: 35px;
    height: 35px;
    font-size:1cm;
    border-radius: 50%;
    margin-right: 22px;
    text-align: center;
    line-height: 35px;
    border: 5px solid white;
    outline: 2px solid #7d2ae8;
}
.social-icons a:hover{
    transform: translateY(-5px);
}
.social-icons a i:hover{
    color: white;
}
  </style>
  <title>Game Menu</title>
</head>
<body>
  

 <!-- == Header Section == -->
 <header>
  <nav>
      <div class="logo">
          GameZone
      </div>
      <div class="menu">
          <a href="redirect.php">Home</a>
          <a href="#">About Us</a>
          <a href="1.php">Explore/Help</a>
      </div>
      <div class="register">
        <button type="button" class="lbtnr" onclick="window.location.href='login_ttt.php'" ><span></span>Log In</a>
          <button type="button" class="lbtnr" onclick="window.location.href='registration_ttt.php'"><span></span>Register</a>
      </div>
  </nav>

  <section class="h-text">
      <span><h1>Let's the game</h1></span>
      <h1>Begin</h1>
      <br>
      <!--<a href="F:\tic tac toe\Tic_tac_toe.exe">play Now</a>-->
      <button type="button" class="lbtnr" onclick="window.location.href='tictactoe_js.html'" >play Now</a>
   </section>
</header>
<div class="social-icons">
    <a href="#"><i class='bx bxl-instagram-alt'></i></a>
    <a href="#"><i class='bx bxl-facebook-square' ></i></a>
    <a href="#"><i class='bx bxs-message-rounded-dots' ></i></a>
</div>
<!--<section class="info">
  <div class="feature-card">
  <i class='bx bxl-instagram-alt'></i>
  <i class='bx bxl-facebook-square' ></i>
  <i class='bx bxs-message-rounded-dots' ></i>
   
  </div>
</section>-->

  <!-- -- Footer -- -->
  <footer>
    &copy; 2023 TIC_TAC_TOE. All rights reserved.
</footer>

  <!--<div class="button-container">
    <form>
    <button type="submit"class="submit1" >New Game</button>
    <button type="submit"class="submit2">Settings</button>
    <button type="submit"class="submit3"formaction="1.html">Quit</button>
  </div>
</form>-->
  <video autoplay muted loop id="myVideo">
 
    <source /src="../assets/4K_15.mp4"/ src="assets/4K_15.mp4" type="video/mp4">
  </video>

</body>
</html>