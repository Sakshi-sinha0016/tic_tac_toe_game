<html>
    <head>
        <title>
            Forgot
        </title>
        <style>
              .container {
            max-width: 400px;
            margin: 50px auto;
            background-color:wheat;
            padding: 20px;
            border-radius: 5px;
        }
             body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(si.jpg);
        }
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-bottom: 8px;
            color: #555;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }       
        main {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
            text-align: center;
            color:black;
            align-items: center;
        }
        .success-message 
        {
            color: #4caf50;
            margin-top: 10px;
        }
        </style>
    </head>
    <body>
        <div class="container">
        <form>
            <label for="username">Email Id:</label>
            <input type="text" id="username" name="username">

            <label for="password">Old Password:</label>
            <input type="password" id="password" name="Old password">      
            <label for="password">New Password:</label>
            <input type="password" id="password" name="New password">   
            <button type="button" onclick="signup()">Sign Up</button>

            <p class="success-message" id="successMessage"></p>
        </form>
    </div>
    <script>
        function signup() 
        {
            document.getElementById("successMessage").innerText = "forward password successful!";
        }
        </script>
    </body>
</html>