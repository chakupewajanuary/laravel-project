<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        form{
            width:80%;
            padding-left: 40px;
        }
        label{
            font-size: 2em;
        }
    </style>
</head>
<body>
    <h2>hello, welcomee to update your order</h2>
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
        <form action="{{ route('updateOrder.order') }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="orderId">OrderID:</label>
                <input type="text" name="OrderID" id="OrderID">
            </div>

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
            <div class="mb-3">
                <label for="username">CustomerUsername</label>
                <input type="text" name="username" id="username">
            </div>

            <button type="submit" class="btn btn-primary">Update Order</button>
            <button type="button"><a href="deleteorder" class="btn btn-danger btn-sm">Delete Order</a></button>

        </form>


</body>
</html>