<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Registration</title>
    <style>
       body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 0;
      background-color: #f4f4f4;
    }

    .container {
      width: 100%;
      height: 70vh;
      border: 2px black solid;
      background-color: gray;
    }

    h2 {
      text-align: center;
      color: #333;
    }

    form {
      display: none; /* hidden by default */
      flex-direction: column;
      width: 1000px;
      padding-left: 10%;
    }

    .displayForm {
      display: block !important;
    }

    label {
      font-weight: bold;
      margin-top: 10px;
    }

    input,
    textarea {
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 4px;
      width: 100%;
    }

    .btn {
      margin-top: 15px;
      padding: 10px;
      background: #3498db;
      color: white;
      border: none;
      cursor: pointer;
      border-radius: 4px;
      font-size: 16px;
      width: 200px;
      margin-left: auto;
      margin-right: auto;
      display: block;
    }

    .btn:hover {
      background: #2980b9;
    }

    .navigation {
      width: 200px;
      height: 1000px;
      background-color: red;
      border-left: 5px black solid;
    }

    .navigation ul {
      list-style-type: none;
      padding: 0;
    }

    .navigation li {
      margin-top: 20px;
      font-size: 1.5rem;
      padding: 10px;
      cursor: pointer;
    }

    .navigation li:hover {
      background-color: green;
      border-top: 2px black solid;
      border-left: 2px black solid;
      border-bottom: 2px black solid;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
    }

    .dash {
      display: flex;
      width: 100%;
    }
    #nav{
        width: 84%;
        height: 60px;
        border: 2px #ff5 solid;
        position: absolute;
        display: flex;
        float: left;
      
    }
    #btn-logout{
        margin-right: 0px;
        width: 100px;
        margin-left:50%;
        background-color: black;
        color: white;
        font-size : 18px;
    }
    #btn-logout:hover{
       background-color: green;
    }
    #search{
        width: 40%;
        border: 1px black solid;
        font-size: 1.5rem;
        border-radius: 20px ;
        font-family: Arial, sans-serif;
        margin-left: 50px;
    }
    a{
        text-decoration:none;
    }
    </style>
</head>
<body>
    <div class="dash">
        <div class="navigation">
            <ul>
                <li>Dashbord</li>
                <li id="manufacturer">Manufacturer</li>
                <li>Customer</li>
                <li >Product</li>
                <li>order</li>
                <li>Home</li>
                <li>Log Out</li>
            </ul>
        </div>
        <div class="container">
            <!-- Success message display -->
        @if(session('success'))
            <div style="color: green; text-align: center; font-size: 1.5em;">
                {{ session('success') }}
            </div>
        @endif
        <div id="nav">
            <input type="search" name="" id="search">
            <button id="btn-logout"> <a  href="{{ route('home') }}"> Log Out</a></button>
        </div>
            
            <form action="{{ route('manufacturer.Registration') }}" method="POST" id="myform">
                @csrf
                <h2>Manufacturer Registration</h2>
                <label for="manufacturer_id">Manufacturer ID:</label>
                <input type="text" id="manufacturer_id" name="manufacturer_id" required>

                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required>

                <label for="contact_info">Contact Info:</label>
                <textarea id="contact_info" name="contact_info" required></textarea>

                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>

                <button type="submit" class="btn">Register Manufacturer</button>
            </form>
        </div>
    </div>
   
    <script>
        let product=document.getElementById('manufacturer');
        product.addEventListener('click',()=>{

            let manu=document.getElementById('myform');
            manu.classList.toggle('displayForm');
            
        });

        
    </script>
</body>
</html>