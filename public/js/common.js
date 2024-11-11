const getId = (id) => document.getElementById(id);
const getSl = (selector) => document.querySelector(selector);

const password = getId("password");
const showHide = getId("show_hide");

const heroImg = getSl(".heroImg");

let index = 0;
const IMAGE_DATA = [
  "http://localhost/instagram/public/assets/images/1.png",
  "http://localhost/instagram/public/assets/images/2.png",
  "http://localhost/instagram/public/assets/images/3.png",
  "http://localhost/instagram/public/assets/images/4.png",
];

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

  function showSlides() {
    const slider = () => {
      index++;
      heroImg.style.backgroundImage = `url(${IMAGE_DATA[index]})`;
      if (index === 3) index = -1;
    };
    let timer = setInterval(slider, 3000);
  }

  showSlides();
}
