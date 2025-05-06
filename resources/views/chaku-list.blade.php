<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<h2>this are the customers</h2>
<table>
    <thead>
        <tr>
            <th>Username</th>
            <th>Email</th>
            <th>Address</th>
            <th>TelP-hone</th>
            <th>Select </th>
        </tr>
    </thead>
    <tbody>
        @foreach( $data as $cust)
        <tr>
            <td>{{$cust->username}}</td>
            <td>{{$cust->email}}</td>
            <td>{{$cust->address}}</td>
            <td>{{$cust->phone}}</td>
            <td><a href="remakeorder" class="btn btn-danger btn-sm">Make Order</a></td>
            <td><a href="remakeorder" class="btn btn-warning btn-sm">Edit Order</a></td>
            <td><a href="deleteorder" class="btn btn-danger btn-sm">Delete Order</a></td>
        </tr>
        @endforeach()
    </tbody>
</table>