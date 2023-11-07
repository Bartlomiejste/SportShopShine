$(function () {
    $(".delete").on("click", function () {
        Swal.fire({
            title: confirmDelete,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Tak, usuń to konto!",
            cancelButtonText: "Anuluj",
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    method: "DELETE",
                    url: deleteUrl + $(this).data("id"),
                    data: {
                        _token: $('meta[name="csrf-token"]').attr("content"),
                    },
                })
                    .done(function (response) {
                        if (response.status === "success") {
                            Swal.fire({
                                title: "Usunięto!",
                                text: "Twoje konto zostało usunięte!",
                                icon: "success",
                                timer: 2000,
                                showConfirmButton: false,
                            }).then(function () {
                                window.location.href = response.redirect;
                            });
                        } else {
                            Swal.fire(
                                "Problem z usunięciem rekordu!",
                                response.message,
                                "error"
                            );
                        }
                    })
                    .fail(function (data) {
                        Swal.fire(
                            "Problem z usunięciem konta!",
                            response.message,
                            "error"
                        );
                    });
            }
        });
    });
});
