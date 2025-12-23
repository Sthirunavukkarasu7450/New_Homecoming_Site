const bg = document.createElement("div");
bg.classList.add("mega-bg");
document.body.appendChild(bg);

document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll(".mega-trigger").forEach(trigger => {
    const menu = trigger.querySelector(".mega-menu");

    trigger.addEventListener("mouseenter", () => {
      menu.classList.add("open");
    });

    trigger.addEventListener("mouseleave", () => {
      menu.classList.remove("open");
    });
  });
});