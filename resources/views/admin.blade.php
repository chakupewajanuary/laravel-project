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
        button{
            width:10%;
            margin-top:20px;
            margin-bottom:20px;
        }
    </style>
</head>
<body>

    <form action="{{route('admin.adminRegister')}}" method="POST" id="myform">
        @csrf
        <label for="adminID">AdminID: </label>
        <input type="text" name="adminID">
        <div id="my"></div>

        <label for="name">AdminName: </label>
        <input type="text" name="name">

        <label for="email">Email: </label>
        <input type="text" name="email">

        <label for="contactnumber">ContactNumber: </label>
        <input type="text" name="contactnumber">

        <label for="password">Password</label>
        <input type="password" name="password"><br>

        <input type="submit" name="submit" value="submit" id="btn">
        <button type="button"><a href="{{route('adminlogin')}}">Login Toregister manu</a> </button>
    </form>
    <script>
        const myform=document.getElementById('myform');
        const mysms=document.getElementById('my');
        const mybtn=document.getElementById('btn');
        // myform.addEventListener('submit',(e)=>{
        //     e.preventDefault();
        //     mysms.innerHTML="please work well";
        //     mysms.style.background='#00ff00';
        //     setTimeout(() => {
        //         mysms.remove();
           
        //     }, 3000);

        // });
    </script>
    
</body>
</html>