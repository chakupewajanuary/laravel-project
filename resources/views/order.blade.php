<!DOCTYPE html>
<html>
<head>
    <title>Make Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Welcome to Make Order</h1>

        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> There were some problems with your input.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('orders.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="OrderDate" class="form-label">Order Date</label>
                <input type="date" name="OrderDate" class="form-control" value="{{ old('OrderDate') }}" required>
            </div>

            <div class="mb-3">
                <label for="Status" class="form-label">Order Status</label>
                <select name="Status" class="form-control" required>
                    <option value="">Select status</option>
                    <option value="Pending">Pending</option>
                    <option value="Processing">Processing</option>
                    <option value="Shipped">Shipped</option>
                    <option value="Delivered">Delivered</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
    </div>
</body>
</html>
