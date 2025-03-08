// Toggle class active
const navbarNav = document.querySelector(".navbar-nav");
// Ketika menu diklick
document.querySelector("#menu").onclick = () => {
  navbarNav.classList.toggle("active");
};

// Klick diluar sidebar untuk menghilangkan nav
const menu = document.querySelector("#menu");
document.addEventListener("click", function (e) {
  if (!menu.contains(e.target) && !navbarNav.contains(e.target)) {
    navbarNav.classList.remove("active");
  }
});

// Klick searchicon menampilkan/menghilangkan box
document.getElementById("search-icon").addEventListener("click", function (e) {
  e.preventDefault(); // Mencegah reload halaman
  const searchBox = document.getElementById("search-box");
  searchBox.classList.toggle("hidden"); // Toggle kelas hidden untuk tampil/sembunyi
});
