<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}
?>
<h2>Welcome, <?php echo $_SESSION['username']; ?>!</h2>
<a href="logout.php">Logout</a>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Store</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <h1>Fashion Hub</h1>
            <input type="text" placeholder="Search for clothes..." class="search-bar">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Men</a></li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="carousel">
        <div class="carousel-container">
            <img src="mens-clothing.jpg" alt="Men's Clothing">
            <img src="womens-clothing.jpg" alt="Women's Clothing">
            <img src="kids-clothing.jpg" alt="Kids' Clothing">
        </div>
    </section>
    
    <script>
        let index = 0;
        const images = document.querySelectorAll(".carousel-container img");
        function rotateCarousel() {
            images.forEach(img => img.style.display = "none");
            images[index].style.display = "block";
            index = (index + 1) % images.length;
        }
        setInterval(rotateCarousel, 3000);
        rotateCarousel();
    </script>
</body>
</html>


