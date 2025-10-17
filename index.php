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

    <!-- AI Brain Section -->
    <section class="ai-brain-section">
        <div class="ai-brain-text">
            <h2 class="ai-brain-headline">Do you ever feel like everything's happening inside your head — all at once?</h2>
            <p class="ai-brain-subheadline">Thoughts, plans, emotions, memories… tangled together until it's hard to breathe.</p>
            <div class="ai-brain-body">
                <p>You're not alone.</p>
                <p>This is what mental overload looks like.</p>
                <p>And it's exactly where your clarity begins.</p>
            </div>
        </div>
        <div class="ai-brain-model">
            <iframe 
                src="https://my.spline.design/aibrain-HxqFsP1K8V440ywo37QPGrJ1/" 
                frameborder="0" 
                width="100%" 
                height="100%"
                style="border: none;">
            </iframe>
        </div>
    </section>

    <!-- Brain Chaos Section -->
    <section class="brain-chaos-section">
        <div class="brain-chaos-text">
            <h2 class="brain-chaos-headline">"Clarity begins when the noise fades."</h2>
            <p class="brain-chaos-subheadline">"Mind Assistant helps you quiet the storm — not by silencing it, but by listening."</p>
            <div class="brain-chaos-cta">
                <button class="cta-button">Start my 2-minute reflection</button>
            </div>
        </div>
        <div class="brain-chaos-model">
            <iframe 
                src="https://my.spline.design/brainrotated-cYeOhwbG3dvBeXmzfjLQplvm/" 
                frameborder="0" 
                width="100%" 
                height="100%"
                style="border: none;">
            </iframe>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="pricing-section">
        <div class="pricing-content">
            <h2 class="pricing-headline">Choose the space that fits your growth.</h2>
            <p class="pricing-subheadline">Start free. Upgrade when you're ready for deeper guidance.</p>
            
            <div class="pricing-plans">
                <!-- Free Plan -->
                <div class="pricing-card">
                    <h3 class="plan-title">Listen</h3>
                    <div class="plan-price">
                        <span class="price-amount">$0</span>
                        <span class="price-period">/ month</span>
                    </div>
                    <p class="plan-description">Access to the daily reflection flow and personalized check-ins.</p>
                    <button class="plan-cta plan-cta-free">Start for free</button>
                </div>

                <!-- Plus Plan -->
                <div class="pricing-card pricing-card-featured">
                    <h3 class="plan-title">Reflect</h3>
                    <div class="plan-price">
                        <span class="price-amount">$9</span>
                        <span class="price-period">/ month</span>
                    </div>
                    <p class="plan-description">Guided prompts, deeper mood tracking, and weekly mental insights.</p>
                    <button class="plan-cta plan-cta-plus">Get Plus</button>
                </div>

                <!-- Pro Plan -->
                <div class="pricing-card">
                    <h3 class="plan-title">Grow</h3>
                    <div class="plan-price">
                        <span class="price-amount">$19</span>
                        <span class="price-period">/ month</span>
                    </div>
                    <p class="plan-description">Full self-guidance system with advanced reflection tools and AI-driven support.</p>
                    <button class="plan-cta plan-cta-pro">Go Pro</button>
                </div>
            </div>
        </div>
    </section>
    
    <script src="script.js"></script>
</body>
</html>

