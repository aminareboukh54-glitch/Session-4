<?php
require "data.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Khaz Motors AR - Services</title>

    <link rel="stylesheet" href="services.css">
</head>

<body>
    <header class="header">

        <div class="logo">
            <a href="index.php">KHAZ <span>MOTORS</span> AR</a>
        </div>

        <nav class="menu">
            <a href="index.php">Home</a>
            <a href="services.php">Services</a>
            <a href="#">Appointment</a>
            <a href="#">About Us</a>
            <a href="#">Contact</a>
        </nav>

    </header>

    <section class="services-intro">

        <p>PROFESSIONAL AUTOMOTIVE SERVICES</p>

        <h1>Our Services</h1>

        <p>
            Professional solutions to keep your vehicle
            safe, reliable and in good condition.
        </p>

    </section>

    <section class="services-page">

        <h2>What We Offer</h2>

        <p>
            Discover our professional automotive services.
        </p>

        <div class="services-grid">

            <?php foreach ($services as $service): ?>

                <div class="service-card">

                    <img
                        src="<?= $service['image'] ?>"
                        alt="<?= $service['title'] ?>"
                    >
                    <div class="service-info">

                        <span class="category">
                            <?= $service['category'] ?>
                        </span>

                        <h3>
                            <?= $service['icon'] ?>
                            <?= $service['title'] ?>
                        </h3>

                        <p>
                            <?= $service['description'] ?>
                        </p>

                        <div class="service-footer">

                            <span class="price">
                                <?= $service['price'] ?>
                            </span>

                            <a href="#" class="button">
                                Learn More →
                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        </div>

    </section>

    <section class="contact">

        <h2>Not Sure What Your Car Needs?</h2>

        <p>
            Contact our team and we will help you choose
            the right service for your vehicle.
        </p>

        <a href="#" class="button">
            Book an Appointment
        </a>

    </section>


    <!-- FOOTER -->

    <footer class="footer">

        <h3>KHAZ MOTORS AR</h3>

        <p>
            Mechanics • Diagnostics • Repair
        </p>

        <div class="social">

            <a href="https://www.instagram.com/" target="_blank">
                Instagram
            </a>

        </div>

        <p>
            © 2026 Khaz Motors AR - All rights reserved.
        </p>

    </footer>

</body>
</html>
