$(function () {
    $(".dropdown-menu a").on("click", function (event) {
        event.preventDefault();

        const selectedFlagSrc = $(this).find("img").attr("src");
        const selectedFlagAlt = $(this).find("img").attr("alt");
        const selectedFlagTitle = $(this).find("img").attr("title");

        $("#languageDropdown img").attr("src", selectedFlagSrc);
        $("#languageDropdown img").attr("alt", selectedFlagAlt);
        $("#languageDropdown img").attr("title", selectedFlagTitle);

        // Przekierowanie do URL zmieniającego język
        window.location.href = $(this).attr("href");
    });
});
