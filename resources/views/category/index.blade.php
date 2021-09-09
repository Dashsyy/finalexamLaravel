<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category pages</title>
</head>
<body>
    <h1>Category index views</h1>
    @foreach ($categories as $category)
        <p>THis is use{{$category->id}} and {{$category->name}}</p>
    @endforeach
</body>
</html>