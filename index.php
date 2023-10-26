<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['user_id'])) {
    // User is logged in, display "Logout" link
    echo '<li><a href="logout.php">Logout</a></li>';
} else {
    // User is not logged in, display "Login" and "Register" links
    echo '<li><a href="login.php">Login</a></li>';
    echo '<li><a href="registration.php">Register</a></li>';
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>XCNG</title>
    <!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
   
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php">XCNG</a>
            </div>
            <ul class="navigation">
                <li><a href="login.php">Login</a></li>
                <li><a href="registration.php">Register</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <div class="hero-content">
            <h1>Welcome to XCNG</h1>
            <p>Trade, buy, and sell virtual gaming items securely.</p>
        </div>
    </section>

    <marquee behavior="scroll" direction="left">
        Latest Events: Join our special Halloween event on October 31st. Limited-time discounts available!
    </marquee>
    
    <div class="carousel">
        <div class="carousel-container">
            <div class="carousel-item">
                <img src="image1.jpg" alt="Image 1">
            </div>
            <div class="carousel-item">
                <img src="image2.jpg" alt="Image 2">
            </div>
            <div class="carousel-item">
                <img src="image3.jpg" alt="Image 3">
            </div>
            <div class="carousel-item">
                <img src="image4.jpg" alt="Image 4">
            </div>
            <div class="carousel-item">
                <img src="image5.jpg" alt="Image 5">
            </div>
        </div>
    </div>

    <script>
        let currentIndex = 0;
        const carouselItems = document.querySelectorAll('.carousel-item');
        const totalItems = carouselItems.length;

        function showNextSlide() {
            carouselItems[currentIndex].style.display = 'none';
            currentIndex = (currentIndex + 1) % totalItems;
            carouselItems[currentIndex].style.display = 'block';
        }

        function startSlideShow() {
            setInterval(showNextSlide, 3000); // Change image every 3 seconds
        }

        startSlideShow();
    </script>

    <section class="featured-items">
        <h2>Featured Items</h2>
        <?php
        // Featured items data
        $featuredItems = [
            [
                'image' => 'item1.jpg',
                'title' => 'Legendary Sword of Power',
                'description' => 'Unleash the ultimate power in your game with this legendary sword.',
                'price' => '$50.00',
                'id' => 1,
            ],
            [
                'image' => 'item2.jpg',
                'title' => 'Dragonhide Armor Set',
                'description' => 'Protect yourself from dragons and foes with this incredible armor set.',
                'price' => '$35.00',
                'id' => 2,
            ],
            // Add more featured items here
            [
                'image' => 'item3.jpg',
                'title' => 'Mystical Ring of Magic',
                'description' => 'Enhance your magical abilities with this mystical ring.',
                'price' => '$60.00',
                'id' => 3,
            ],
            [
                'image' => 'item4.jpg',
                'title' => 'Elixir of Strength',
                'description' => 'Boost your strength and defeat any enemy with this elixir.',
                'price' => '$25.00',
                'id' => 4,
            ],
        ];

        foreach ($featuredItems as $item) {
            echo '<div class="item">';
            echo '<img src="' . $item['image'] . '" alt="' . $item['title'] . '">';
            echo '<h3>' . $item['title'] . '</h3>';
            echo '<p>' . $item['description'] . '</p>';
            echo '<p>Price: ' . $item['price'] . '</p>';
            echo '<a href="item-details.php?id=' . $item['id'] . '">View Details</a>';
            echo '</div>';
        }
        ?>
    </section>
    
    <section class="recommendations">
        <h2>Recommended Items</h2>
        <?php
        // Recommended items data
        $recommendedItems = [
            [
                'image' => 'item5.jpg',
                'title' => 'Magic Wand of Enlightenment',
                'description' => 'Unlock the secrets of the universe with this magical wand.',
                'price' => '$75.00',
                'id' => 5,
            ],
            [
                'image' => 'item6.jpg',
                'title' => 'Stealthy Ninja Outfit',
                'description' => 'Become a master of stealth with this ninja outfit.',
                'price' => '$40.00',
                'id' => 6,
            ],
            // Add more recommended items here
            [
                'image' => 'item7.jpg',
                'title' => 'Potion of Invisibility',
                'description' => 'Turn invisible and sneak past your enemies with this potion.',
                'price' => '$30.00',
                'id' => 7,
            ],
            [
                'image' => 'item8.jpg',
                'title' => 'Enchanted Bow of Precision',
                'description' => 'Never miss a shot with this enchanted bow.',
                'price' => '$55.00',
                'id' => 8,
            ],
        ];

        foreach ($recommendedItems as $item) {
            echo '<div class="recommended-item">';
            echo '<img src="' . $item['image'] . '" alt="' . $item['title'] . '">';
            echo '<h3>' . $item['title'] . '</h3>';
            echo '<p>' . $item['description'] . '</p>';
            echo '<p>Price: ' . $item['price'] . '</p>';
            echo '<a href="item-details.php?id=' . $item['id'] . '">View Details</a>';
            echo '</div>';
        }
        ?>
    </section>

    <section class="item-list">
        <h2>All Items Available</h2>
        <table class="item-list">
            <thead>
                <tr>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Loop through featured items and add rows to the table
                foreach ($featuredItems as $item) {
                    echo '<tr>';
                    echo '<td>' . $item['title'] . '</td>';
                    echo '<td>' . $item['description'] . '</td>';
                    echo '<td>' . $item['price'] . '</td>';
                    echo '</tr>';
                }
                // Loop through recommended items and add rows to the table
                foreach ($recommendedItems as $item) {
                    echo '<tr>';
                    echo '<td>' . $item['title'] . '</td>';
                    echo '<td>' . $item['description'] . '</td>';
                    echo '<td>' . $item['price'] . '</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </section>

    
    <!-- Continue with the rest of your HTML code as before -->
    
</body>
</html>
