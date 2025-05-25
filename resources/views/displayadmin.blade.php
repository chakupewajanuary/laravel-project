<head>
    <style>
        tr{
            border:2px black solid;
        }
    </style>
</head>



<h2>this are the Admins</h2>
<table>
    <thead>
        <tr style="border:2px solid black;">
            <th>Username</th>
            <th>Name</th>
            <th>country</th>
            <th>TelP-hone</th>
            <th>password</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $manu as $cust)
        <tr>
            <td>{{$cust->adminID}}</td>
            <td>{{$cust->name}}</td>
            <td>{{$cust->email}}</td>
            <td>{{$cust->contactnumber}}</td>
            <td>{{$cust->password}}</td>
        </tr>
        @endforeach()
    </tbody>
</table>