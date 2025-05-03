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
    <h2>hello, welcomee to place order</h2>
    <form action="{{ route('Order.registerOrder') }}" method="POST">
            @csrf
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

            <button type="submit" class="btn btn-primary">Place Order</button>
        </form>
        <h1>hellloooo .........</h1>
        <h2>this are the customers</h2>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Address</th>
            <th>TelP-hone</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $customer as $cust)
        <tr>
            <td>{{$cust->username}}</td>
            <td>{{$cust->email}}</td>
            <td>{{$cust->address}}</td>
            <td>{{$cust->phone}}</td>
        </tr>
        @endforeach()
    </tbody>
</table>

</body>
</html>