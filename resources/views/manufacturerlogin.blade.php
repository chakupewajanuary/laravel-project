<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      padding: 20px;
    }

    form {
      max-width: 300px;
      margin: auto;
    }

    .form-group {
      margin-bottom: 15px;
      position: relative;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    i {
      position: absolute;
      left: 10px;
      top: 38px;
      color: #888;
    }

    input {
      width: 100%;
      padding: 10px 10px 10px 35px;
      box-sizing: border-box;
    }

    button {
      width: 100%;
      padding: 10px;
      background-color: #007bff;
      color: white;
      border: none;
      cursor: pointer;
      font-weight: bold;
    }

    button:hover {
      background-color: #0056b3;
    }
    h1{
      text-align:center;

    }
  </style>
</head>
<body>
  <h1>hello, Wecome to work together for modern furniture,<br>Manufacturer </h1>

  <form action="{{ route('manuLogin.log') }}" method="POST">
     @csrf
    <div class="form-group">
      <label for="username">Username</label>
      <i class="fas fa-user"></i>
      <input type="text" id="username" name="manufacturer_id" placeholder="Enter username">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <i class="fas fa-lock"></i>
      <input type="password" id="password" name="password" placeholder="Enter password">
    </div>

    <button type="submit">Login</button>
  </form>

</body>
</html>
