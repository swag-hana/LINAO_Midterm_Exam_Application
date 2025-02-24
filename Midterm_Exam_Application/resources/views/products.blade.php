<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Products</title>
</head>
<body>
    <h1>Anime Products</h1>
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product['name'] }}</strong> - ${{ $product['price'] }} <br>
                <img src="{{ asset('images/' . $product['image']) }}" alt="{{ $product['name'] }}" width="150">
            </li>
        @endforeach
    </ul>
</body>
</html>