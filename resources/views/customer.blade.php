<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>customers registration</title>
    <style>
           label{
            display: block;
            font-size: 2em;
            text-align: center;
        }
        input{
            width: 90%;
            height: 30px;
            margin-bottom: 20px;
            margin-left: 10px;
        }
        input[type="submit"]{
            width: 10%;
        }
        form{
            margin-left:250px;
            width: 50%;
            border: 2px grey solid;
        }




        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
     <!-- Success message display -->
     @if(session('success'))
        <div style="color: green; text-align: center; font-size: 1.5em;">
            {{ session('success') }}
        </div>
    @endif
    <h2 style="text-align: center;">Welcome to register to our platform</h2>

    <form action="{{ route('customer.store') }}" method="POST">
        @csrf
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="email">Email</label>
        <input type="text" name="email">
        <label for="address">Address</label>
        <input type="text" name="address">
        <label for="phone">PhoneNumber</label>
        <input type="text"  name="phone">
        <label for="password">Password</label>
        <input type="text" name="password">
        <input type="submit" name="submit" value="submit" id= "submit">
        <button><a href="{{route('login')}}">Login</a></button>
    </form>


    
</body>
</html>