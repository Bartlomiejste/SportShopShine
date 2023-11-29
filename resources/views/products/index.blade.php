<div class="container">
    <div class="row">
        <div class="titleproducts m-3 w-100 text-center">Piłki</div>
        @foreach ($products as $product)
            <div class="col-md-3 d-flex cards">
                <div class="card flex-fill d-flex flex-column align-items-center">
                    <img src="{{ '/assets/products/' . $product->picture }}" class="card-img-top"
                        alt="{{ $product->name }}" style="max-height: 200px; max-width:200px;">
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text flex-fill" style="height: 4rem; overflow: hidden; font-size:14px;">
                            {{ $product->description }}</p>
                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center">
                                <p class="card-text mb-0">{{ $product->price }} zł</p>
                                <button class="btn btn-light" type="" onclick="event.preventDefault()">
                                    <i class="bi bi-basket"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-end mt-1">
            <a href="" class="btn btn-primary">Więcej...</a>
        </div>
    </div>
</div>
