<?php
/**
 * Header Template
 * Dr. Ankita Laparoscopy Website
 */
?>
<!DOCTYPE html>
<html prefix="og: https://ogp.me/ns#" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'Laparoscopy Treatment | Dr. Ankita Bansal Goyal'; ?></title>
    <meta name="description" content="Dr. Ankita Bansal Goyal is a skilled gynecologist specializing in advanced laparoscopic treatments for safe, precise women's care.">
    <meta name="robots" content="index, follow">
    <meta name="google-site-verification" content="OOh7KQTnYd3GY3bWFcV9XZlMbbJdni7tE8CeNWLGpBs">
    <link rel="canonical" href="https://drankitalaparoscopy.in/">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;500;600;700&family=Tenor+Sans&family=Roboto+Slab:wght@400&family=Roboto:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?php echo $base_url ?? ''; ?>css/style.css">

    <?php if (basename($_SERVER['PHP_SELF']) === 'blog.php' || strpos($_SERVER['REQUEST_URI'], '/blog/') !== false) : ?>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-4910239000711715" crossorigin="anonymous"></script>
    <?php endif; ?>
</head>
<body>
    <!-- Navigation -->
    <header class="site-header" id="pxl-header-elementor">
        <div class="container">
            <nav class="navbar">
                <a href="index.php" class="logo">
                    <img src="images/site-logo.png" alt="Dr. Ankita Goyal Bansal" width="50" height="50">
                    <span>Dr. Ankita Goyal Bansal</span>
                </a>

                <button class="mobile-menu-toggle" aria-label="Toggle menu">
                    <i class="fas fa-bars"></i>
                </button>

                <ul class="nav-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="services.php">Services</a></li>
                    <li><a href="blog.php">Blog</a></li>
                    <li><a href="contact-us.php" class="btn-primary">Book Appointment</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main id="main-content">
