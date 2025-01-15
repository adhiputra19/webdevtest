<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login & Register</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom, #1a1a2e, #16213e, #0f3460, #1a1a2e);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
        }

        .form-container {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px 50px;
            border-radius: 15px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(15px);
            text-align: center;
            width: 400px;
        }

        .form-container h1 {
            margin-bottom: 20px;
            font-size: 24px;
        }

        .form-container input {
            width: 100%;
            margin: 10px 0;
            padding: 15px;
            border-radius: 8px;
            border: none;
            font-size: 14px;
            background: rgba(255, 255, 255, 0.8);
        }

        .form-container .btn {
            width: 100%;
            background: #ff5c8d;
            color: white;
            border: none;
            padding: 15px;
            margin: 20px 0;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .form-container .btn:hover {
            background: #ff759e;
        }

        .form-container .switch {
            margin-top: 15px;
        }

        .form-container .switch a {
            color: #ff5c8d;
            text-decoration: none;
            font-weight: bold;
        }

        .form-container .switch a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    $isLogin = isset($_GET['page']) && $_GET['page'] === 'login';
    ?>

    <div class="form-container">
        <?php if ($isLogin): ?>
            <h1>Login</h1>
            <form action="login.php" method="POST">
                <input type="text" name="username_or_email" placeholder="E-mail or Username" required>
                <input type="password" name="password" placeholder="Password" required>
                <button class="btn" type="submit"><a href="/welcome">Next</a></button>
            </form>
            <div class="switch">
                Don’t have an account yet? <a href="?page=register">Create one</a>
            </div>
        <?php else: ?>
            <h1>Register</h1>
            <form action="register.php" method="POST">
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Password" required>
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <button class="btn" type="submit"> <a href="?page=login">Next</a></button>
            </form>
            <div class="switch">
                Already have an account? <a href="?page=login">Log in</a>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
