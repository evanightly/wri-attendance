$("button[cs-show-password]").each(function () {
    const dest = $(`input#${$(this).attr("cs-show-password")}`);
    $(this).click((e) => {
        type = dest.attr("type", toggleInputType(dest.attr("type")));
        toggleInputIcon($(this), dest.attr("type"));
    });
});

const toggleInputType = (type) => (type === "password" ? "text" : "password");
const toggleInputIcon = (element, type) => {
    const icon =
        type === "password" ? "fa-solid fa-eye-slash" : "fa-solid fa-eye";
    $(element).children("i").removeClass().addClass(icon);
};

$("form.edit-profil").submit((e) => {
    e.preventDefault();
    new bootstrap.Modal("#konfirmasi", null).show();
    const elementTerkonfirmasi = new bootstrap.Modal("#terkonfirmasi", null);
    $("#terkonfirmasi").on("shown.bs.modal", (e) =>
        setTimeout(() => elementTerkonfirmasi.hide(), 2200)
    );
});

$("div").hasClass("dashboard") && $("body").css({ backgroundColor: "#F9F9F9" });