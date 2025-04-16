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
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 5px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            font-weight: bold;
            margin-top: 10px;
        }
        input, textarea {
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
        }
        .btn:hover {
            background: #2980b9;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Success message display -->
    @if(session('success'))
        <div style="color: green; text-align: center; font-size: 1.5em;">
            {{ session('success') }}
        </div>
    @endif
        <h2>Manufacturer Registration</h2>
        <form action="{{ route('manufacturer.Registration') }}" method="POST">
            @csrf
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
</body>
</html>