<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
            </tr>
            @foreach ($products as $products )
            <tr>
                <td>{{$products->id}}</td>
                <td>{{$products->name}}</td>
                <td>{{$products->qty}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->description}}</td>
            </tr>
                
            @endforeach
        </div>
</body>
</html>