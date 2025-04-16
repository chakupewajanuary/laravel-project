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
        @foreach( $data as $cust)
        <tr>
            <td>{{$cust->username}}</td>
            <td>{{$cust->email}}</td>
            <td>{{$cust->address}}</td>
            <td>{{$cust->phone}}</td>
        </tr>
        @endforeach()
    </tbody>
</table>