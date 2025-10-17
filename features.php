<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Features | Mind Assistant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="features.css">
</head>
<body>
    <?php include 'components/navbar.php'; ?>
    <div class="features-page">
        <section class="features-hero">
            <h1 class="features-headline">Features That Empower Your Mind</h1>
            <p class="features-subheadline">Mind Assistant combines calm design with intelligent guidance — helping you build clarity, balance, and emotional awareness every day.</p>
        </section>

        <section class="core-features">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color: #7fa0b8;">
                        <path d="M12 3v18m9-9H3M19 8l-2-2m0 12l2-2M5 8L7 6m0 12l-2-2"/>
                        <circle cx="12" cy="12" r="3"/>
                    </svg>
                </div>
                <h3 class="feature-title">Smart Daily Reflections</h3>
                <p class="feature-description">AI-powered journaling that helps you untangle your thoughts. Receive personalized insights and reflection prompts designed for emotional clarity.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color: #88B0A8;">
                        <path d="M9 10h.01M15 10h.01M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10 10-4.477 10-10S17.523 2 12 2z"/>
                        <path d="M8 15c1 1 2.5 2 4 2s3-1 4-2"/>
                        <circle cx="12" cy="12" r="10"/>
                    </svg>
                </div>
                <h3 class="feature-title">Guided Breathing & Focus Sessions</h3>
                <p class="feature-description">Scientifically backed breathing routines and micro-meditations — adaptive to your current stress level and time of day.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color: #B3A8FF;">
                        <path d="M3 3v18h18"/>
                        <path d="M18 17V9M14 17v-6M10 17v-4M6 17v-2"/>
                    </svg>
                </div>
                <h3 class="feature-title">Mood Tracking & Clarity Reports</h3>
                <p class="feature-description">Visualize your emotional patterns with weekly clarity snapshots and trend analytics to see how your mind evolves.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color: #9EC8B5;">
                        <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z"/>
                        <path d="M12 6v6l4 2"/>
                    </svg>
                </div>
                <h3 class="feature-title">Mindful Notifications</h3>
                <p class="feature-description">Subtle, non-intrusive nudges that encourage breaks, reflection, or focus — aligned with your unique rhythm.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color: #8db89d;">
                        <path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/>
                        <path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/>
                    </svg>
                </div>
                <h3 class="feature-title">Integrations & Sync</h3>
                <p class="feature-description">Seamlessly connect with Apple Health, Google Fit, or calendar apps to align physical wellness with mental clarity.</p>
            </div>

            <div class="feature-card">
                <div class="feature-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" style="color: #A78BFA;">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <h3 class="feature-title">Privacy by Design</h3>
                <p class="feature-description">Your data is end-to-end encrypted. No tracking, no selling, no hidden algorithms — just pure support for your mental growth.</p>
            </div>
        </section>

        <section class="features-cta">
            <h2 class="cta-headline">Start Your Journey Today</h2>
            <p class="cta-subheadline">Calm technology. Human results.</p>
            <div class="cta-buttons">
                <a href="reflection.php" class="features-cta-button primary">Begin Reflection</a>
                <a href="signup.php" class="features-cta-button secondary">Join the Beta</a>
            </div>
        </section>
    </div>

    <footer class="footer">
        <div class="footer-content">
            <div class="footer-main">
                <div class="footer-brand">
                    <img src="mindLogo.png" alt="Mind Assistant Logo" class="footer-logo">
                    <span class="footer-brand-name">Mind Assistant</span>
                </div>
                
                <nav class="footer-nav">
                    <a href="index.php">Home</a>
                    <a href="about.php">About</a>
                    <a href="features.php">Features</a>
                    <a href="#contact">Contact</a>
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
                    <a href="privacy.php">Privacy</a>
                    <a href="terms.php">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script>
        // Intersection Observer for scroll-triggered animations
        const observerOptions = {
            threshold: 0.2,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.features-headline, .features-subheadline, .feature-card, .features-cta');
            elements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>

