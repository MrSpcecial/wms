<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WMS</title>

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- My Style -->
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
    <!-- Navbar Start -->
    <nav class="navbar">
        <a href="index.html" class="navbar-logo">WN<span>S.</span></a>

        <!-- <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#menus">Menu</a>
        <a href="#contact">Kontak</a>
      </div> -->

        <form action="">
            <div class="navbar-extra">
                <div id="search-box" class="searchbox hidden">
                    <input type="text" placeholder="Search..." id="search-input" />
                </div>
                <a href="#" id="search-icon"><i data-feather="search"></i></a>
                <a href="shops.html" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
                <a href="#" id="menu"><i data-feather="menu"></i></a>
            </div>
        </form>
    </nav>
    <!-- Navbar End -->

    <!-- Menu Section Start -->
    <section id="menus" class="menus">
        <h2><span>Menu</span> Kami</h2>
        <p>Silahkan Memilih Menu Yang Kami Sediakan Dibawah ini!!!</p>

        <div class="row-card">
            <div class="menu-card" id="item1">
                <img src="img/logo.jpeg" alt="Watermelon Noodle" class="menu-card-img" />
                <h3 class="menu-card-title">
                    Watermelon <br />
                    Noodle
                </h3>
                <p class="menu-card-price">IDR 20K</p>

                <!-- Quantity and total price section -->
                <div class="order-box">
                    <button class="minus-btn">-</button>
                    <input type="number" value="0" id="quantity1" min="0" />
                    <button class="plus-btn">+</button>
                </div>
            </div>

            <div class="menu-card" id="item2">
                <img src="img/logo.jpeg" alt="Smoothie Watermelon" class="menu-card-img" />
                <h3 class="menu-card-title">Smoothie Watermelon</h3>
                <p class="menu-card-price">IDR 15K</p>

                <!-- Quantity and total price section (hidden initially) -->
                <div class="order-box">
                    <button class="minus-btn">-</button>
                    <input type="number" value="0" id="quantity1" min="0" />
                    <button class="plus-btn">+</button>
                </div>
            </div>
        </div>
        <div class="bayar">
            <p class="total-text">Total: <span id="overall-total">0</span></p>
        </div>

        <!-- Total above pay button -->
        <div class="bayar">
            <button id="pay-btn">Bayar</button>
        </div>
    </section>

    <!-- Menu Section End -->

    <!-- Footer Start -->
    <footer>
        <!-- <div class="social">
        <a href="#"><i data-feather="instagram"></i></a>
      </div> -->
        <div class="links">
            <a href="#home">Home</a> | <a href="#about">Tentang Kami</a> |
            <a href="#menus">Menu</a> |
            <a href="#kontak">Kontak</a>
        </div>
        <div class="credit">
            <p>Created by <a href="">WMS Admin</a>. | &copy; 2025.</p>
        </div>
    </footer>
    <!-- Footer End -->

    <!-- Icons -->
    <script>
    feather.replace();
    </script>
    <!-- Icons End -->

    <!-- Javascript -->
    <script src="js/script.js"></script>
    <!-- Javascript End -->
</body>

</html>