const overlay = document.querySelector("#overlay");
const menu = document.querySelector("#menu");
const close = document.querySelector("#close");

menu.addEventListener("click", () => {
  overlay.style.display = "block";
});

close.addEventListener("click", () => {
  overlay.style.display = "none";
});
