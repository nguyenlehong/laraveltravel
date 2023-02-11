function check_password() {
    const password = document.querySelector("input[name=user_password]");
    const confirm = document.querySelector("input[name=confirm]");
    if (confirm.value === password.value) {
        confirm.setCustomValidity("");
    } else {
        confirm.setCustomValidity("Mật khẩu không dúng");
    }
}
//thong bao hơme
function message_ve() {
    document.getElementById("callout").style.display = "none";
}
// them xe
function message_themxe() {
    document.getElementById("alert").style.display = "none";
}
