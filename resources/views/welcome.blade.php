<html>
<head>
    <title>BookTracking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background: url(https://i.pinimg.com/564x/e9/5a/ad/e95aad62ecf0f478d06595d3fddb171d.jpg);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            text-align: center;
            background: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        h1 {
            font-size: 24px;
            color: #333;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 20px;
            color: #333;
            margin-bottom: 20px;
        }
        .button {
            display: block;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
        }
        .login {
            background-color: #000;
            color: #fff;
        }
        .signup {
            background-color: #e0e0e0;
            color: #333;
        }
        .continue {
            color: #999;
            font-size: 14px;
            margin: 20px 0 10px;
        }
        .social-buttons {
            display: flex;
            justify-content: space-between;
        }
        .social-button {
            width: 48%;
            padding: 10px;
            border: none;
            border-radius: 25px;
            font-size: 16px;
            cursor: pointer;
        }
        .google {
            background-color: #e0e0e0;
            color: #d9534f;
        }
        .email {
            background-color: #a0c4ff;
            color: #fff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome BookTracking</h1>
        <a href="{{ route('login') }}"class="button login">Log in</a>
        <a href="{{ route('register') }}"class="button signup">Sign up</a>
        </div>
    </div>
</body>
</html>