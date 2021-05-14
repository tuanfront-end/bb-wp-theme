window.addEventListener("load", function () {
  toogleMenu();
});

function toogleMenu() {
  const btn = document.getElementById("menu-toggle");
  const btnClose = document.getElementById("close-menu-toggle");
  if (!btn || !btnClose) return;
  const menu = document.getElementById("primary-menu-wrap");

  btn.addEventListener("click", function () {
    btn.classList.toggle("menu-is-show");
    if (btn.classList.contains("menu-is-show")) {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  });
  btnClose.addEventListener("click", function () {
    btn.classList.toggle("menu-is-show");
    if (btn.classList.contains("menu-is-show")) {
      menu.style.display = "block";
    } else {
      menu.style.display = "none";
    }
  });
}
