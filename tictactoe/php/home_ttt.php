<html>
    <head>
        <style>
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
.headerf{background-color: aqua;
        width: 100%;}

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
    font-size: 15px;
    background: rgba(60, 60, 255);
    border-radius: 8px;
}
nav{
    width: 100%;
    height: 100px;
    color: black;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px 50px;
}
.hero{font-size: 2em;
    letter-spacing: 2px;
    color: black;
    font-family:cursive;
padding-left: 7%;}

.hero span{color:brown;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    padding-left: 3%;}
        </style>
    </head>
    <body>
        <video autoplay muted loop id="myVideo">
            <source src="4K_15.mp4" type="video/mp4">
          </video>
        <div class="headerf">
        <header>
            <nav>
                <div class="logo">
                    GameZone
                </div>
                <div class="menu">
                    <a href="#">Home</a>
                    <a href="#">Contact</a>
                    <a href="#">About Us</a>
                    <a href="#">Explore</a>
                </div>
                <div class="register">
                  <button type="button" class="lbtnr" onclick="window.location.href='login_ttt.php'">Log In</a>
                    <button type="button" class="lbtnr" onclick="window.location.href='registration_ttt.php'">Register</a>
                </div>
            </nav></div>
        </header>
        <section class="hero"><br><br><br><br>
            <h1>The Best Game Out There</h1>
            <span>Tic-Tac-Toe is a simple yet entertaining game, often used as a teaching tool for programming or artificial intelligence concepts due to its straightforward rules and small game space. It's a game of strategy and prediction, and despite its simplicity, it can be surprisingly engaging.</span>
        </section>
    </body>
</html>