<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
     <style>
        form{
            margin-left: 500px;
        

        label{
            display: block;
            font-size:2em;
        }
        input{
            height: 40px;
            width: 500px;
           font-size: 1.5em;
        }
    }
    h1{
        text-align:center;
    }
     </style>
</head>
<body>
    <h1>Hello, welcome Admin to furniture system</h1>
    <form action="{{route('admin.login')}}" method="post">
        @csrf
        <label for="adminId">adminID</label>
        <input type="text" name="adminID" ><br><br>
        <label for="password">Password</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>