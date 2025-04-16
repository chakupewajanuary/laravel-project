<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salers list </title>
    <style>
        th{
            margin-left: 30px;
            padding-left: 50px;
            font-size: 2em;
        }
    </style>
</head>
<body>
    <h2>salers from the databases</h2>
    <div style=" margin-left: 900px;" >
        <a href="{{url('addlist')}}">Add</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>email</th>
                <th>address</th>
                <th>phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($salers as $sal )
            <tr>
                 <td>{{$sal->id}}</td>
                <td>{{$sal->name}}</td>
                <td>{{$sal->email}}</td>
                <td>{{$sal->address}}</td>
                <td>{{$sal->phone}}</td>
                <td>Edit|Delete</td>
            </tr>

            @endforeach()
        </tbody>
    </table>
    
</body>
</html>