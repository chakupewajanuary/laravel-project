<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label{
            display: block;
            padding-top:20px;
            font-size:2em;
        }
        form{
            margin-left:100px;
            border:2px solid grey;
            padding-left:100px;
            border-radius:20px;
        }
        input{
            width:50%;
            height:40px;
            font-size:1.5em;
        }
        input[type='submit']{
            width:10%;
            margin-top:20px;
            margin-bottom:20px;
        }
    </style>
</head>
<body>

    <form action="{{route('admin.adminRegister')}}" method="POST" >
        @csrf
        <label for="adminID">AdminID: </label>
        <input type="text" name="adminID">

        <label for="name">AdminName: </label>
        <input type="text" name="name">

        <label for="email">Email: </label>
        <input type="text" name="email">

        <label for="contactnumber">ContactNumber: </label>
        <input type="text" name="contactnumber">

        <label for="password">Password</label>
        <input type="password" name="password"><br>

        <input type="submit" name="submit" value="submit">
    </form>
    
</body>
</html>