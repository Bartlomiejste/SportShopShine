function getProducts(paginate) {
    const form = $("form.sidebar-filter").serialize();
    $.ajax({
        method: "GET",
        url: "/",
        data: form + "&" + $.param({ paginate: paginate }),
    }).done(function (response) {
        $("div#products-wrapper").empty();

        $.each(response.data, function (index, product) {
            const html = `
                <div class="col">
                    <div class="card" >
                        <img src="${getImage(
                            product
                        )}" class="card-img-top" alt="ProductImg" style="object-fit: cover; height:240px;">
                        <div class="card-body text-center">
                            <h5 class="card-title">${product.name}</h5>
                            <p class="card-text">PLN ${product.price}</p>
                        </div>
                        <button class="btn btn-success btn-sm add-cart-button" data-id="${
                            product.id
                        }" ${getDisabled()}><i class="fa-solid fa-cart-shopping"></i> Dodaj do koszyka</button>
                    </div>
                </div>
            `;
            $("div#products-wrapper").append(html);
        });
    });
}
