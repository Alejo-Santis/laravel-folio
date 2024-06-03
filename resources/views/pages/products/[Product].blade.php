
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
            <h5 class="card-title">Product #{{$product->id}}</a></h5>
            <p class="card-text"><b>Description: </b>{{$product->description}}</p>
            <p class="card-text"><b>Stock: </b>{{$product->stock}}</p>
            <a href="/products" class="btn btn-outline-primary btn-sm">Atras</a>
        </div>
    </div>
</div>

