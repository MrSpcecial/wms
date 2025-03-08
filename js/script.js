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

document.querySelectorAll(".menu-card").forEach(function (card) {
  card.addEventListener("click", function () {
    // Show the order box and the "Bayar" button
    const orderBox = card.querySelector(".order-box");
    const payButton = document.getElementById("pay-btn");
    orderBox.style.display = "block";
    payButton.style.display = "block";
  });
});

document.querySelectorAll(".minus-btn").forEach(function (minusBtn) {
  minusBtn.addEventListener("click", function () {
    const input = this.nextElementSibling;
    let value = parseInt(input.value);
    if (value > 0) {
      input.value = value - 1;
      updateTotal(this);
    }
  });
});

document.querySelectorAll(".plus-btn").forEach(function (plusBtn) {
  plusBtn.addEventListener("click", function () {
    const input = this.previousElementSibling;
    input.value = parseInt(input.value) + 1;
    updateTotal(this);
  });
});

// Initialize prices for items
const prices = {
  item1: 20000, // IDR 20K
  item2: 15000, // IDR 15K
};

// Initialize total to 0
let total = 0;

// Update the total price for each item and overall total
function updateTotal(button) {
  const orderBox = button.closest(".order-box");
  const quantity = orderBox.querySelector("input").value;
  const price = orderBox
    .closest(".menu-card")
    .querySelector(".menu-card-price").textContent;
  const priceValue = parseInt(price.replace("IDR ", "").replace("K", ""));

  // Update the individual total
  const totalElement = orderBox.querySelector("span");
  totalElement.textContent = priceValue * quantity + "K";

  // Update the overall total
  let overallTotal = 0;
  document.querySelectorAll(".order-box").forEach(function (box) {
    const boxQuantity = box.querySelector("input").value;
    const boxPrice = box
      .closest(".menu-card")
      .querySelector(".menu-card-price").textContent;
    const boxPriceValue = parseInt(
      boxPrice.replace("IDR ", "").replace("K", "")
    );
    overallTotal += boxQuantity * boxPriceValue;
  });
  document.getElementById("overall-total").textContent =
    "IDR " + overallTotal + "K";
}
