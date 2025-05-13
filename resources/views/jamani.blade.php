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
    @if (session('success'))
            <div class="alert alert-success" style="backgroundcolor:grey; color:green;">{{ session('success') }}</div>
    @endif
    <form action="{{route('product.registerProduct')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="ProductID">ProductID</label>
        <input type="text" name="ProductID">
        <label for="name">Productname</label>
        <input type="text" name="name">
        <label for="name">Description</label>
        <input type="text" name="Description">
        <label for="Price">Price</label>
        <input type="number" name="Price">
        <label for="stock">Stock</label>
        <input type="number" name="stock">
        <label for="Picture">Picture</label>
        <input type="file" name="Picture" id="Picture">
        <label for="manufacturer_id">manufacturer_id</label>
        <input type="text" name="manufacturer_id"><br>
        <input type="submit" name="submit" id="submit">
    </form>
</body>
</html>