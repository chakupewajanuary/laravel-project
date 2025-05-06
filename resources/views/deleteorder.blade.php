<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> 
</head>

<h1 style="color:#00ff00;">hello!!!, remember delete will lost youre order datas</h1>

<form action="{{ route('deleteOrder.order') }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="mb-3">
        <label for="OrderID">OrderID to Delete:</label>
        <input type="text" name="OrderID" id="OrderID" required>
    </div>
    <button type="submit" class="btn btn-danger">Delete Order</button>
    <td><a href="remakeorder" class="btn btn-warning btn-sm">Edit Order</a></td>
</form>
