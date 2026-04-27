<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - CINEBRY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #14181c;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .login-box {
            background: #2c3440;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }
        .login-input {
            background: #14181c;
            border: 1px solid #445566;
            color: white;
        }
        .login-input:focus {
            background: #14181c;
            color: white;
            border-color: #ffc107;
            box-shadow: none;
        }
    </style>
</head>
<body>

    <div class="login-box shadow-lg">
        <h1 class="mb-4">🎥 CINEBRY</h1>
        <p class="text-muted mb-4">Enter your username to track films.</p>
        
        <form action="{{ route('submitLogin') }}" method="POST">
            @csrf
            <div class="mb-3">
                <input type="text" name="username" class="form-control form-control-lg login-input" placeholder="Username (e.g. edryan)" required autocomplete="off">
            </div>
            <button type="submit" class="btn btn-warning btn-lg w-100 fw-bold mt-2">LOGIN</button>
        </form>
    </div>

</body>
</html>