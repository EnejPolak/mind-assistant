<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Future | Mind Assistant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Include Navbar Component -->
    <?php include 'components/navbar.php'; ?>

    <!-- Future Section -->
    <section class="future-section">
        <div class="future-content">
            <h2 class="future-headline">The Future of Mind Assistant</h2>
            <p class="future-subheadline">We learn from your patterns — not presets. Our next steps focus on deeper personalization, mindful automation, and a seamless cross-device experience.</p>
            <p class="future-tagline">Every update is designed with safety, privacy, and emotional well-being at the core.</p>
            
            <div class="roadmap-timeline">
                <div class="roadmap-card">
                    <div class="roadmap-quarter">Q4 2025</div>
                    <h3 class="roadmap-title">Personal Mind Journeys</h3>
                    <p class="roadmap-description">Adaptive check-ins, smart reflections, and weekly "clarity snapshots" tailored to your mental rhythm.</p>
                </div>
                
                <div class="roadmap-card">
                    <div class="roadmap-quarter">Q1 2026</div>
                    <h3 class="roadmap-title">Context-Aware Coaching</h3>
                    <p class="roadmap-description">Mindful nudges that adjust to your time, location, and energy — always when you truly need them.</p>
                </div>
                
                <div class="roadmap-card">
                    <div class="roadmap-quarter">Q2 2026</div>
                    <h3 class="roadmap-title">Deep Integrations</h3>
                    <p class="roadmap-description">Sync with Apple Health, Google Fit, and calendar tools to align body, mind, and schedule.</p>
                </div>
                
                <div class="roadmap-card">
                    <div class="roadmap-quarter">Q3 2026</div>
                    <h3 class="roadmap-title">Community & Reflection</h3>
                    <p class="roadmap-description">Safe anonymous spaces for shared reflections and personal growth reports.</p>
                </div>
                
                <div class="roadmap-card">
                    <div class="roadmap-quarter">Q4 2026</div>
                    <h3 class="roadmap-title">Multimodal Clarity</h3>
                    <p class="roadmap-description">Voice-based insights, visual progress heatmaps, and trend tracking — a new dimension of self-awareness.</p>
                </div>
            </div>
            
            <div class="future-cta">
                <div class="cta-buttons">
                    <button class="waitlist-button primary" onclick="openWaitlistModal()">Join the Waitlist</button>
                    <button class="waitlist-button secondary" onclick="openNewsletterModal()">Stay in the Loop</button>
                </div>
                <p class="cta-description">Get early access and exclusive feature previews.</p>
                <p class="privacy-note">Your data is encrypted. Your thoughts stay yours — always.</p>
            </div>
        </div>
        
        <div class="future-background">
            <iframe 
                src="https://my.spline.design/particleaibrain-9vspPFsvKkx9vkWLpOBiGAAF/" 
                frameborder="0" 
                width="100%" 
                height="100%"
                class="future-brain-model">
            </iframe>
        </div>
    </section>

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
                    <a href="features.php">Features</a>
                    <a href="future.php">Future</a>
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

    <!-- Waitlist Modal -->
    <div id="waitlistModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeWaitlistModal()">&times;</span>
            <h2 class="modal-title">Join the Waitlist</h2>
            <p class="modal-description">Be among the first to experience the future of mindful technology.</p>
            <form class="waitlist-form" onsubmit="submitWaitlist(event)">
                <input type="text" name="name" placeholder="Your Name" required class="modal-input">
                <input type="email" name="email" placeholder="Your Email" required class="modal-input">
                <select name="interest" class="modal-input">
                    <option value="">What interests you most?</option>
                    <option value="reflections">Smart Daily Reflections</option>
                    <option value="coaching">Context-Aware Coaching</option>
                    <option value="integrations">Health & Calendar Integrations</option>
                    <option value="community">Community Features</option>
                    <option value="all">Everything!</option>
                </select>
                <button type="submit" class="modal-submit">Join Waitlist</button>
            </form>
            <p class="modal-privacy">🔒 We respect your privacy. No spam, ever.</p>
        </div>
    </div>

    <!-- Newsletter Modal -->
    <div id="newsletterModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeNewsletterModal()">&times;</span>
            <h2 class="modal-title">Stay in the Loop</h2>
            <p class="modal-description">Monthly updates on our progress. Zero spam.</p>
            <form class="waitlist-form" onsubmit="submitNewsletter(event)">
                <input type="email" name="email" placeholder="Your Email" required class="modal-input">
                <button type="submit" class="modal-submit">Subscribe</button>
            </form>
            <p class="modal-privacy">🔒 Unsubscribe anytime with one click.</p>
        </div>
    </div>

    <script src="script.js"></script>
    <script>
        // Modal Functions
        function openWaitlistModal() {
            document.getElementById('waitlistModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeWaitlistModal() {
            document.getElementById('waitlistModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function openNewsletterModal() {
            document.getElementById('newsletterModal').style.display = 'flex';
            document.body.style.overflow = 'hidden';
        }

        function closeNewsletterModal() {
            document.getElementById('newsletterModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        function submitWaitlist(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                interest: formData.get('interest')
            };
            
            // Store in localStorage for now (in production, send to backend)
            let waitlist = JSON.parse(localStorage.getItem('waitlist') || '[]');
            waitlist.push(data);
            localStorage.setItem('waitlist', JSON.stringify(waitlist));
            
            alert('🎉 You\'re on the list! We\'ll be in touch soon.');
            closeWaitlistModal();
            event.target.reset();
        }

        function submitNewsletter(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const email = formData.get('email');
            
            // Store in localStorage for now (in production, send to backend)
            let newsletter = JSON.parse(localStorage.getItem('newsletter') || '[]');
            newsletter.push({ email, date: new Date().toISOString() });
            localStorage.setItem('newsletter', JSON.stringify(newsletter));
            
            alert('✨ Subscribed! Check your inbox for confirmation.');
            closeNewsletterModal();
            event.target.reset();
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            const waitlistModal = document.getElementById('waitlistModal');
            const newsletterModal = document.getElementById('newsletterModal');
            if (event.target === waitlistModal) {
                closeWaitlistModal();
            }
            if (event.target === newsletterModal) {
                closeNewsletterModal();
            }
        }

        // Intersection Observer for scroll-triggered animations
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

        document.addEventListener('DOMContentLoaded', () => {
            const elements = document.querySelectorAll('.future-headline, .future-subheadline, .future-tagline, .roadmap-card, .future-cta');
            elements.forEach(el => observer.observe(el));
        });
    </script>
</body>
</html>

