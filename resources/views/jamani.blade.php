<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <style>
        label{
            display: block;
            padding-top:20px;
            font-size:2em;
        }
        form{
            margin-left:100px;
        }
        input{
            width:50%;
            height:40px;
            font-size:1.5em;
        }
        input[type='submit']{
            width:10%;
            margin-top:20px;
        }
    </style>
</head>
<body>
    <h2>Hello, Manufacturer welcomer reqister new products 🖐</h2>
    <form action="{{route('product.registerProduct')}}" method="POST">
        @csrf
        <label for="">ProductID</label>
        <input type="text" name="ProductID">
        <label for="">Productname</label>
        <input type="text" name="name">
        <label for="">Description</label>
        <input type="text" name="Description">
        <label for="price">Price</label>
        <input type="text" name="Price">
        <label for="stock">Stock</label>
        <input type="number" name="stock">
        <label for="Picture">Picture</label>
        <input type="file" name="Picture" id="Picture"><br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>