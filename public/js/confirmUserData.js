document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("userEdit");
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        Swal.fire({
            title: title,
            text: text,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: confirmButtonText,
            cancelButtonText: cancelButtonText,
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });
});
