const menu = document.querySelector(".navbar-menu");
const sidebar = document.getElementById("sidebar");
const backdrop = document.querySelector(".navbar-backdrop");
const close = document.querySelector(".navbar-close");
const openSidebarButton = document.getElementById("open-sidebar");

openSidebarButton.addEventListener("click", (e) => {
  e.stopPropagation();
  menu.classList.toggle("hidden");
  setTimeout(() => {
    backdrop.classList.remove("opacity-0");
    backdrop.classList.add("opacity-25");
    sidebar.classList.toggle("-translate-x-full");
  }, 100);
});

// Close the sidebar when clicking outside of it
document.addEventListener("click", closeSideBar);
close.addEventListener("click", closeSideBar);

// Close the sidebar function to reuse
function closeSideBar() {
  sidebar.classList.add("-translate-x-full");
  backdrop.classList.add("opacity-0");
  setTimeout(() => {
    backdrop.classList.remove("opacity-25");
    menu.classList.add("hidden");
  }, 250);
}