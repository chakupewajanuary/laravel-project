<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            background-image: url("images/A picture 4.jpg");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-container {
            background: #f5cbe4;
            padding: 4rem;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 400px;
            text-align: center;
            opacity: 0.9;
        }

        .login-container h2 {
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #4fa063;
        }

        .login-container h1 {
            margin-bottom: 1.5rem;
            font-size: 2rem;
            color: #333;
        }

        .login-container input {
            width: 100%;
            padding: 0.8rem;
            margin: 0.5rem 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s ease;
        }

        .login-container input:hover {
            border-color: #d4b219;
        }

        .login-container button {
            width: 100%;
            padding: 0.8rem;
            margin-top: 1rem;
            background-color: #7e9b78;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #ff4a3d;
        }

        .login-container p {
            margin-top: 1rem;
            color: #666;
        }

        .login-container a {
            color: #444430;
        }

        .login-container a:hover {
            color: #1c139b;
        }

        .alert {
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h1>Welcome 🖐 to</h1><br>
        <h2>Customer Login</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <div>{{ $error }}</div>
                @endforeach
            </div>
        @endif

        <form action="{{ route('customer.do.login') }}" method="POST">
            @csrf
            <label>Email:</label>
            <input type="email" name="email" value="{{ old('email') }}" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <button type="submit">Login</button>
            <p>Don't have an account? <a href="{{ route('customer.register') }}">Register</a></p>
        </form>
    </div>
</body>
</html> -->
<!-- resources/views/login.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Customer Login</title>
    <style>
        body{
            background-color:rgb(143, 138, 138);
            text-align: center;

        }
        form{
            width: 80%;
            height: 500vh;
            background-color:rgb(143, 138, 138);
            padding-left: 10%;
            padding-top:5%;
            display:block;
        }
        label{
           display:block;
           font-family: Arial, Helvetica, sans-serif;
           margin-top:20px;
           font-size: 22px;
        }
        input{
            width: 50%;
            height:40px;
            margin-bottom:10px;
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <h2>Login</h2>

    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color: red;">{{ session('error') }}</div>
    @endif

    @if($errors->any())
        <div style="color: red;">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('customer.login') }}">
        @csrf
        <div>
            <label>Customer Username:</label>
            <input type="text" name="username" value="{{ old('username') }}" required>
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit">Login</button>
    </form>
</body>
</html>
