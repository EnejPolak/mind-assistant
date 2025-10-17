<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mind Assistant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.9.28/build/spline-viewer.js"></script>
</head>
<body>
    <!-- Include Navbar Component -->
    <?php include 'components/navbar.php'; ?>

    <!-- Hero Section -->
    <section class="hero-section">
        <!-- Hero Title -->
        <h1 class="hero-title">Listen to what your mind is trying to tell you.</h1>
        
        <!-- 3D Brain Model -->
        <div class="spline-container">
            <iframe 
                src="https://my.spline.design/brain-WUQgRA2lPT7YtVneLCAu28fU/" 
                frameborder="0" 
                width="100%" 
                height="100%"
                style="border: none;">
            </iframe>
        </div>
        
        <!-- Hero Subtitle -->
        <p class="hero-subtitle">A digital companion for self-reflection, emotional awareness, and personal growth.</p>
    </section>
    
    <script src="script.js"></script>
</body>
</html>

