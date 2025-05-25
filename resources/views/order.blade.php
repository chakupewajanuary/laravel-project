
<!DOCTYPE html>
<html>
<head>
    <title>Place Order</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>Place an Order</h2>
                
                @if(Auth::guard('customer')->check())
                    <div class="alert alert-info">
                        Welcome, {{ Auth::guard('customer')->user()->email }}! 
                        (Customer ID: {{ Auth::guard('customer')->user()->username }})
                    </div>
                @endif

                @if(session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('order.today') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="OrderDate" class="form-label">Order Date</label>
                        <input type="date" name="OrderDate" class="form-control" 
                               value="{{ old('OrderDate', date('Y-m-d')) }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="Status" class="form-label">Order Status</label>
                        <select name="Status" class="form-control" required>
                            <option value="">-- Select Status --</option>
                            <option value="Pending" {{ old('Status') == 'Pending' ? 'selected' : '' }}>Pending</option>
                            <option value="Processing" {{ old('Status') == 'Processing' ? 'selected' : '' }}>Processing</option>
                            <option value="Shipped" {{ old('Status') == 'Shipped' ? 'selected' : '' }}>Shipped</option>
                            <option value="Delivered" {{ old('Status') == 'Delivered' ? 'selected' : '' }}>Delivered</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="ProductID" class="form-label">Select Product</label>
                        <select name="ProductID" class="form-control" required>
                            <option value="">-- Select Product --</option>
                            @if(isset($data) && $data->count() > 0)
                                @foreach($data as $product)
                                    <option value="{{ $product->ProductID }}" 
                                            {{ old('ProductID') == $product->ProductID ? 'selected' : '' }}>
                                        {{ $product->ProductName ?? $product->name ?? 'Product #'.$product->ProductID }}
                                    </option>
                                @endforeach
                            @else
                                <option value="" disabled>No products available</option>
                            @endif
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Place Order</button>
                    <a href="{{ route('customer.logout') }}" class="btn btn-secondary ms-2"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                </form>

                <form id="logout-form" action="{{ route('customer.logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    </div>
</body>
</html>