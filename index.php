<?php get_header(); ?>

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
                <a href="<?php echo home_url('/reflection/'); ?>" class="cta-button">Start my 2-minute reflection</a>
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
                    <a href="<?php echo home_url('/signup/'); ?>" class="plan-cta plan-cta-free">Start for free</a>
                </div>

                <!-- Plus Plan -->
                <div class="pricing-card pricing-card-featured">
                    <h3 class="plan-title">Reflect</h3>
                    <div class="plan-price">
                        <span class="price-amount">$9</span>
                        <span class="price-period">/ month</span>
                    </div>
                    <p class="plan-description">Guided prompts, deeper mood tracking, and weekly mental insights.</p>
                    <a href="<?php echo home_url('/signup/'); ?>" class="plan-cta plan-cta-plus">Get Plus</a>
                </div>

                <!-- Pro Plan -->
                <div class="pricing-card">
                    <h3 class="plan-title">Grow</h3>
                    <div class="plan-price">
                        <span class="price-amount">$19</span>
                        <span class="price-period">/ month</span>
                    </div>
                    <p class="plan-description">Full self-guidance system with advanced reflection tools and AI-driven support.</p>
                    <a href="<?php echo home_url('/signup/'); ?>" class="plan-cta plan-cta-pro">Go Pro</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-main">
                <div class="footer-brand">
                    <img src="<?php echo get_template_directory_uri(); ?>/mindLogo.png" alt="Mind Assistant Logo" class="footer-logo">
                    <span class="footer-brand-name">Mind Assistant</span>
                </div>
                
                <nav class="footer-nav">
                    <a href="<?php echo home_url('/'); ?>">Home</a>
                    <a href="<?php echo home_url('/about/'); ?>">About</a>
                    <a href="<?php echo home_url('/features/'); ?>">Features</a>
                    <a href="<?php echo home_url('/future/'); ?>">Future</a>
                    <a href="<?php echo home_url('/contact/'); ?>">Contact</a>
                </nav>
                
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Twitter">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="Instagram">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <rect stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/>
                            <line stroke-linecap="round" stroke-linejoin="round" stroke-width="2" x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" aria-label="LinkedIn">
                        <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
                            <circle stroke-linecap="round" stroke-linejoin="round" stroke-width="2" cx="4" cy="4" r="2"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Mind Assistant. All rights reserved.</p>
                <div class="footer-legal">
                    <a href="<?php echo home_url('/privacy/'); ?>">Privacy</a>
                    <a href="<?php echo home_url('/terms/'); ?>">Terms</a>
                </div>
            </div>
        </div>
    </footer>
    
    <script>
        // Intersection Observer for scroll-triggered animations on homepage
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0) translateX(0)';
                }
            });
        }, observerOptions);

        // Observe individual elements on page load
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.ai-brain-headline, .ai-brain-subheadline, .ai-brain-body p, .brain-chaos-headline, .brain-chaos-subheadline, .cta-button, .pricing-headline, .pricing-subheadline, .pricing-card, .future-headline, .future-subheadline, .roadmap-card, .future-cta');
            elements.forEach(el => observer.observe(el));
        });
    </script>

<?php get_footer(); ?>

