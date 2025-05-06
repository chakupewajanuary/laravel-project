<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Update Order</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('orders.update', $order->OrderID) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="OrderDate">Order Date</label>
            <input type="date" name="OrderDate" id="OrderDate" class="form-control" value="{{ old('OrderDate', $order->OrderDate) }}" required>
        </div>
        <div class="form-group">
            <label for="Status">Status</label>
            <input type="text" name="Status" id="Status" class="form-control" value="{{ old('Status', $order->Status) }}" required>
        </div>

        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ old('username', $order->username) }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Order</button>
    </form>
</div>
</body>
</html>
