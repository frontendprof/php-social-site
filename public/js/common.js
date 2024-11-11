const getId = (id) => document.getElementById(id);

const password = getId("password");
const showHide = getId("show_hide");

if (password) {
  showHide.addEventListener("click", function () {
    // alert("Button pressed");
    if (password.type === "password") {
      password.type = "text";
      showHide.innerText = "Hide";
    } else {
      password.type = "password";
      showHide.innerText = "Show";
    }
  });
}
