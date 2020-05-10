passwordInput = document.getElementById("password").attributes;

function change() {
    console.log("clicked");
    if (passwordInput[0].value == "password") {
        document.getElementById("password").setAttribute("type", "text");
    } else {
        document.getElementById("password").setAttribute("type", "password");
    }
}

function resetFormModal(action) {
    $(".invalid-feedback").remove();
    $("form").each(function (index, form) {
        form.reset();
        form.action = action;
    });
    $(".message-error").hide();
}
