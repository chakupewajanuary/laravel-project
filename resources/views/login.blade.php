<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Page</title> -->
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;

        }
        body{
            background-image: url("images/A\ picture\ 4.jpg");
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
            opacity: 0.8;
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

    </style>
</head>
<body>
    <div class="login-container">
        <h1>Welcome 🖐</h1><br>
        <h2>Login</h2>
        <form class="form" action="{{ route('customer.login') }}" method="POST" >
            @csrf
            <div class="msg"></div>
            <label for="Username">Username</label><br>
            <input type="text" id="username" placeholder="username" name="username"><br>

            <label for="password">password</label><br>
            <input type="password" id="password" name="password" placeholder="password" ><br>
           <button type="submit" class="btn">Login</button>
        </form>
        <p>Don't have an account?<a href="{{route('customer')}}">Register</a></p>

    </div>
   
</body>
</html>