<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VIEW DATA</title>
</head>
<body>
    <h1>Student Data</h1>
    <table border="1px" align="center" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($student as $data)
            <tr>
                <td>{{ $data->name }}</td>
                <td>{{ $data->email }}</td>
                <td><img src="{{ asset('Student/'.$data->image) }}" alt="Image" width="100" height="100"></td>
                <td><a href="{{url('delete', $data->id)}}">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>