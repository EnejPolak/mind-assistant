<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About | Mind Assistant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .about-page {
            position: relative;
            width: 100vw;
            min-height: 100vh;
            display: grid;
            grid-template-columns: 55% 45%;
            overflow-x: hidden;
            margin-top: 80px;
        }

        .about-content {
            position: relative;
            z-index: 10;
            width: 100%;
            min-height: 100vh;
            padding: 40px 60px 80px 80px;
            background: #F8F3FF;
        }

        .about-text {
            max-width: 700px;
            text-align: left;
        }

        .about-brain-bg {
            position: sticky;
            top: 80px;
            right: 0;
            width: 100%;
            height: calc(100vh - 80px);
            z-index: 1;
            pointer-events: none;
            background: #F8F3FF;
        }

        .about-brain-bg iframe {
            width: 100%;
            height: 100%;
            border: none;
            pointer-events: none;
        }

        .about-text h1 {
            font-size: 48px;
            font-weight: 700;
            background: linear-gradient(135deg, #7fa0b8 0%, #8db89d 50%, #9EC8B5 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 30px;
            line-height: 1.2;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 1s ease-out, transform 1s ease-out;
        }

        .about-text h1.animate {
            opacity: 1;
            transform: translateY(0);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .about-text p {
            font-size: 18px;
            line-height: 1.8;
            color: rgba(70, 70, 90, 0.85);
            margin-bottom: 24px;
            opacity: 0;
            transform: translateY(30px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .about-text p.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .about-text h2 {
            font-size: 40px;
            font-weight: 700;
            background: linear-gradient(90deg, #B3A8FF 0%, #7fa0b8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin: 60px 0 20px 0;
            line-height: 1.2;
            position: relative;
            opacity: 0;
            transform: translateX(-40px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .about-text h2.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .about-text h2::before {
            content: '';
            position: absolute;
            left: -40px;
            top: 50%;
            transform: translateY(-50%);
            width: 30px;
            height: 4px;
            background: linear-gradient(90deg, #B3A8FF, #7fa0b8);
            border-radius: 2px;
        }

        .about-text h3 {
            font-size: 24px;
            font-weight: 600;
            color: rgba(127, 160, 184, 0.9);
            margin: 30px 0 20px 0;
            line-height: 1.4;
            font-style: italic;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.8s ease-out, transform 0.8s ease-out;
        }

        .about-text h3.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .about-text ul {
            margin: 30px 0;
            padding-left: 40px;
            list-style: none;
        }

        .about-text li {
            font-size: 18px;
            line-height: 1.8;
            color: rgba(70, 70, 90, 0.85);
            margin-bottom: 16px;
            position: relative;
            padding-left: 30px;
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.6s ease-out, transform 0.6s ease-out;
        }

        .about-text li.animate {
            opacity: 1;
            transform: translateY(0);
        }

        .about-text li::before {
            content: '✨';
            position: absolute;
            left: 0;
            font-size: 20px;
        }

        .about-text strong {
            font-weight: 700;
            background: linear-gradient(90deg, #7fa0b8, #9EC8B5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            display: inline-block;
        }

        .about-cta {
            text-align: left;
            margin-top: 80px;
            padding: 50px;
            background: linear-gradient(135deg, rgba(179, 168, 255, 0.1), rgba(158, 200, 181, 0.1));
            border-radius: 20px;
            border: 2px solid rgba(127, 160, 184, 0.2);
            position: relative;
            overflow: hidden;
        }

        .about-cta::before {
            content: '💭';
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 80px;
            opacity: 0.15;
        }

        .about-cta h3 {
            font-size: 36px;
            margin-bottom: 15px;
            background: linear-gradient(135deg, #7fa0b8, #9EC8B5);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            font-weight: 700;
            position: relative;
            z-index: 1;
        }

        .about-cta p {
            margin-bottom: 30px;
            font-size: 19px;
            color: rgba(70, 70, 90, 0.9);
            position: relative;
            z-index: 1;
        }

        .about-cta .cta-button {
            display: inline-block;
            padding: 18px 45px;
            background: linear-gradient(135deg, #7fa0b8, #8db89d);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: 700;
            font-size: 17px;
            transition: all 0.3s ease;
            box-shadow: 0 6px 20px rgba(127, 160, 184, 0.3);
            position: relative;
            z-index: 1;
            overflow: hidden;
        }

        .about-cta .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }

        .about-cta .cta-button:hover::before {
            left: 100%;
        }

        .about-cta .cta-button:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 8px 25px rgba(127, 160, 184, 0.5);
        }

        /* Mobile responsive */
        @media (max-width: 968px) {
            .about-page {
                grid-template-columns: 1fr;
            }

            .about-brain-bg {
                display: none;
            }

            .about-content {
                padding: 100px 30px 60px 30px;
            }

            .about-text h1 {
                font-size: 32px;
            }

            .about-text h2 {
                font-size: 28px;
            }

            .about-text h3 {
                font-size: 20px;
            }

            .about-text p {
                font-size: 16px;
            }

            .about-cta h3 {
                font-size: 26px;
            }
        }

        /* Tablet */
        @media (max-width: 1024px) and (min-width: 969px) {
            .about-page {
                grid-template-columns: 40% 60%;
            }

            .about-content {
                padding: 100px 40px 60px 40px;
            }
        }
    </style>
</head>
<body>
    <!-- Include Navbar Component -->
    <?php include 'components/navbar.php'; ?>

    <!-- About Page -->
    <div class="about-page">
        <!-- About Content -->
        <div class="about-content">
            <div class="about-text">
                <!-- Hero Section -->
                <h1>We built Mind Assistant for one reason — to help you hear yourself again.</h1>
                
                <p>In a world that moves faster than your thoughts, silence has become a luxury. We're constantly surrounded by noise — notifications, advice, expectations. Mind Assistant was created as a calm space where you can pause, listen, and reconnect with what's already inside you.</p>
                
                <p>It doesn't tell you what to think. It helps you notice what's been trying to speak all along — your own mind.</p>

                <!-- Section 1 -->
                <h2>Our Philosophy</h2>
                <h3>Listening is the first step to change.</h3>
                
                <p>True clarity doesn't come from pushing your thoughts away — it comes from understanding them. Mind Assistant gently guides you through self-awareness using structured, evidence-based reflections that fit into your day. Each check-in is short, mindful, and human — designed to help you breathe, recognize, and act from calm awareness instead of chaos.</p>
                
                <p>Our reflection system helps you:</p>
                <ul>
                    <li>Recognize your emotions without judgment.</li>
                    <li>Discover patterns in your mind and mood.</li>
                    <li>Build mental balance one small moment at a time.</li>
                </ul>

                <!-- Section 2 -->
                <h2>How it Works</h2>
                <h3>Simple. Quiet. Powerful.</h3>
                
                <p><strong>1️⃣ Listen</strong> — Take a mindful pause and check in with how you really feel.</p>
                <p><strong>2️⃣ Reflect</strong> — Identify what's behind your thoughts and emotions.</p>
                <p><strong>3️⃣ Grow</strong> — Follow tailored prompts that help you move toward calm and focus.</p>
                
                <p>Mind Assistant isn't another productivity tool — it's a companion for emotional clarity. It reminds you that peace isn't something you chase; it's something you uncover.</p>

                <!-- Section 3 -->
                <h2>Our Vision</h2>
                <h3>Built with empathy, backed by science.</h3>
                
                <p>Mind Assistant was created by a small group of designers, developers, and psychologists who share one belief: that technology should make us more human, not less.</p>
                
                <p>We believe in quiet technology — tools that listen before they speak, and that guide without forcing. Every part of Mind Assistant is designed to feel safe, simple, and honest — a space where you can slow down and truly hear yourself again.</p>

                <!-- CTA Section -->
                <div class="about-cta">
                    <h3>Clarity begins with listening.</h3>
                    <p>Start your reflection, and take the first step back to yourself.</p>
                    <a href="reflection.php" class="cta-button">Begin your 2-minute reflection</a>
                </div>
            </div>
        </div>

        <!-- Brain Background -->
        <div class="about-brain-bg">
            <iframe 
                src="https://my.spline.design/aibrainblack-TPbaIYMgqHNFN3W9LGJIAlyW/" 
                frameborder="0" 
                width="100%" 
                height="100%"
                style="border: none;">
            </iframe>
        </div>
    </div>

    <!-- Footer -->
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
                    <a href="#features">Features</a>
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
                    <a href="#privacy">Privacy</a>
                    <a href="#terms">Terms</a>
                </div>
            </div>
        </div>
    </footer>

    <script src="script.js"></script>
    <script>
        // Intersection Observer for scroll-triggered animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate');
                }
            });
        }, observerOptions);

        // Observe all animatable elements
        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.about-text h1, .about-text h2, .about-text h3, .about-text p, .about-text li, .about-cta');
            elements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>
