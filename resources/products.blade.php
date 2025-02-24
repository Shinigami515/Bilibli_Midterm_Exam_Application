cat <<EOL > resources/views/products.blade.php
    <!DOCTYPE html>
    <html>
    <head>
        <title>Anime List</title>
    </head>
    <body>
        <h1>Anime List</h1>
        <ul>
            @foreach(\$products as \$product)
                <li>{{ \$product['name'] }} - {{ \$product['genre'] }} - \$ {{ \$product['price'] }}</li>
            @endforeach
        </ul>
    </body>
    </html>
