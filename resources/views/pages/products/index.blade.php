@php
$products = \App\Models\Product::all();
@endphp

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
<div class="container-fluid p-2">
    <h2 class="text-center h1 p-2">Product's List 🛒</h2>
    <table class="table table-striped table-hover table-bordered">
        <thead class="table-dark">
            <tr class="text-center">
                <th scope="col">ID</th>
                <th scope="col">Description</th>
                <th scope="col">Stock</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <th scope="row"><a href="/products/{{$product->id}}">{{$product->id}}</a></th>
                    <td>{{$product->description}}</td>
                    <td>{{$product->stock}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{--
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>
<div class="container-fluid p-2 mt-2 d-flex justify-content-center align-items-center">
    <div class="card w-25">
        <div class="card-body text-center">
            <h5 class="card-title">Product {{$product->id}}</h5>
            <p class="card-text"><b>Description: </b>{{$product->description}}</p>
            <p class="card-text"><b>Stock: </b>{{$product->stock}}</p>
            <a href="" class="btn btn-primary">Volver</a>
        </div>
    </div>
</div>
--}}
