$(function () {
    $(".delete").on("click", function () {
        Swal.fire({
            title: title,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: confirmButtonText,
            cancelButtonText: cancelButtonText,
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
                                title: titleDone,
                                text: textDone,
                                icon: "success",
                                timer: 2000,
                                showConfirmButton: false,
                            }).then(function () {
                                window.location.href = response.redirect;
                            });
                        } else {
                            Swal.fire(textFail, response.message, "error");
                        }
                    })
                    .fail(function (data) {
                        Swal.fire(textFail, response.message, "error");
                    });
            }
        });
    });
});
