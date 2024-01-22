<html>
<head>
    <title>Game Description</title>
    <style>
  body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
.header {
            background-color: #333;
            color: white;
            text-align: center;
        }
#myVideo
{
    width: 100vw;
    height: 100vh;
    object-fit: cover;
    position: fixed;
    top: 0;
    left: 0;
    z-index: -1;
}

h1{
    color:chartreuse
}

.center{
            max-width: 700px;
            height: 600px;
            border-radius: 90px;
            margin-bottom: 70px;
            align-items: center;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

.footer {
            text-align: center;
            padding: 10px;
            background-color: #333;
            color: white;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
.main{
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
            color:black;
            align-content: center;            
    }
       
h1{
            text-decoration: dashed;
            text-shadow: #333;
             text-align: center;
    }
.submit-btn
    {
      background-color: #000000;
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
      border-radius: 15%;
      position: absolute;
      bottom: 10%;
      right: 10%;
    }
.submit1
    {
            background-color: #000000;
      color: white;
      padding: 14px 28px;
      font-size: 16px;
      cursor: pointer;
      text-align: center;
      border-radius: 15%;
      position: absolute;
      bottom: 11%;
      right: 80%;
     }
    </style>
</head>
<body>
    
       <main>
        <h1>How To Play The Tic-Toe Game</h1>
        <img src="../assets/win.png" alt="Game Image" class="center">
       </img>
       <!--<form>
            <button type="submit" class="submit-btn"formaction="sing.html">Sign In</button>
            <button type="submit"class="submit1"formaction="sing1.html">Login</button>
        </form>-->
    </main>
    <video autoplay muted loop id="myVideo">
        <source src="again.mp4" type="video/mp4">
      </video>
   
    <div class="footer">
        &copy; 2023 Game Name. All rights reserved.
</div>
</div>
</body>
</html>