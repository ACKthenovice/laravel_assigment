<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Styles -->
    </head>
    <body class="antialiased">
        <div class="container">
            <h1 class="text-center">Welcome to our products page</h1>
                <h1>Products</h1>
                <table class="table table-dark table-striped">
                    <thead>
                    <tr>
                        <th class="border border-slate-600 ...">name</th>
                        <th class="border border-slate-600 ...">description</th>
                        <th class="border border-slate-600 ...">price</th>
                    </tr>
                    </thead>
                    @foreach ($products as $product)
                    <tbody>
                    <tr>
                        <td class="border border-slate-700 ...">{{ $product->name }}</td>
                        <td class="border border-slate-700 ...">{{ $product->description }}</td>
                        <td class="border border-slate-700 ...">{{ $product->price }}</td>
                    </tr>
                    </tbody>
                    @endforeach
                </table> 
        </div>
    </body>
</html>
