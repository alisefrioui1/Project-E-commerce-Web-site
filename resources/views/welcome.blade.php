<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce web site</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e0e7ff;
        }
        .login-container {
            display: flex;
            height: 100vh;
        }
        .login-image {
            background: url('images/image.png') no-repeat center center;
            background-size: cover;
            width: 50%;
        }
        .login-form {
            width: 50%;
            padding: 3rem;
            background-color: #fff;
        }
        .login-form .form-group {
            margin-bottom: 1.5rem;
        }
        .login-form .btn {
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container-fluid login-container">
        <div class="login-image">

        </div>
        <div class="login-form d-flex align-items-center justify-content-center">
            <div class="w-75">
                <h2 class="mb-4 text-center">Welcome to our E-commerce web site</h2>
                <p class="text-center mb-5">E-commerce web site</p>
                <form>
                    @csrf
                    <div class="form-group">
                        <label for="username">Username or email</label>
                        <input type="text" class="form-control" id="username" placeholder="Username or email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group form-check d-flex justify-content-between">
                        <div>
                            <input type="checkbox" class="form-check-input" id="rememberMe">
                            <label class="form-check-label" for="rememberMe">Remember Me</label>
                        </div>
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button type="submit" class="btn btn-primary">Log in</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
