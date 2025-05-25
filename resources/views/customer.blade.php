<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <style>
        form {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 2px solid grey;
            text-align: center;
        }
        label {
            display: block;
            font-size: 1.5em;
        }
        input {
            width: 90%;
            height: 30px;
            margin-bottom: 10px;
        }
        input[type="submit"] {
            width: 30%;
            font-size: 1.2em;
        }
    </style>
</head>
<body>
    <h2 style="text-align: center;">Register to Our Platform</h2>

    @if(session('success'))
        <p style="color: green; text-align: center;">{{ session('success') }}</p>
    @endif

    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <label for="username">Customer Username:</label>
        <input type="text" name="username" required>

        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="address">Address</label>
        <input type="text" name="address" required>

        <label for="phone">Phone Number</label>
        <input type="text" name="phone" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <input type="submit" value="Register">
        <br>
        <a href="{{ route('login') }}">Already have an account? Login</a>
    </form>
</body>
</html>
