<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($products as $product)
        <h1>{{ $product->code }}</h1>
        <p>{{ $product->name }}</p>
        <p>{{ $product->quantity }}</p>
        <p>{{ $product->price }}</p>
        <p>{{ $product->description }}</p>
        <a href="{{ $product->id }}">Link to product</a>
    @endforeach  
</body>
</html>