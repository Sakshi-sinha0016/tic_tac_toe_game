<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gaming Sign In</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-image: url(s.avif);
        }

        .container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
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


        button:hover {
            background-color: #45a049;
        }
        .success-message {
            color: #4caf50;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <main>
    <img src="si.jpg" alt="Game Image" class="game-image">
    <div class="container">
        <form>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
           <div>
            <p>Gender:</p>
                <input type="radio"id="Female"name="Gender1"value="Female"/>
                <label for="Female">Female</label>

                 <input type="radio"id="Male"name="Gender2"value="Male"/>
                <label for="Male">Male</label>

                <input type="radio"id="Other"name="Gender3"value="Other"/>
                <label for="Other">Other</label><br>
<br>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
                <button type="submit" formaction="1.html"onclick="signup()">Sign Up</button>
            </div><br>
             <p class="success-message" id="successMessage"></p>
        </form>
           <script>
            function signup() 
            {
                document.getElementById("successMessage").innerText = "Signup successful!";
            }
            </script>
        
    </div>
</main>
</body>
</html>