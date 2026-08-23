<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
</head>
<body>
   <h1>Welcome to Submission form</h1>
   <form action="{{url('/upload')}}" method="POST" enctype="multipart/form-data">
   @csrf 
   <label>Name:</label>
    <input type="text" name="name" required><br><br>

    <label>Email:</label>
    <input type="email"  name="email" required><br><br>

    <label>Image:</label>
    <input type="file"  name="file"><br><br>

    <input type="submit" value="Submit">
    </form> 
</body>
</html>