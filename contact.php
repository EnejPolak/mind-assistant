<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Mind Assistant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-page {
            min-height: 100vh;
            background: #F8F3FF;
            padding-top: 80px;
        }

        .contact-hero {
            text-align: center;
            padding: 80px 40px 60px;
            max-width: 800px;
            margin: 0 auto;
        }

        .contact-headline {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 56px;
            line-height: 1.2;
            background: linear-gradient(135deg, #7fa0b8 0%, #8db89d 50%, #B3A8FF 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 25px;
        }

        .contact-subheadline {
            font-family: 'Inter', sans-serif;
            font-size: 20px;
            line-height: 1.7;
            color: rgba(70, 70, 90, 0.85);
            max-width: 650px;
            margin: 0 auto;
        }

        .contact-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .contact-card {
            background: rgba(255, 255, 255, 0.8);
            padding: 35px;
            border-radius: 20px;
            border: 2px solid rgba(179, 168, 255, 0.15);
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            border-color: rgba(179, 168, 255, 0.3);
            box-shadow: 0 12px 40px rgba(127, 160, 184, 0.2);
        }

        .contact-card-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, rgba(179, 168, 255, 0.15), rgba(158, 200, 181, 0.15));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .contact-card h3 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 22px;
            color: rgba(46, 46, 58, 0.95);
            margin-bottom: 12px;
        }

        .contact-card p {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            line-height: 1.7;
            color: rgba(70, 70, 90, 0.8);
            margin-bottom: 8px;
        }

        .contact-card a {
            color: #7fa0b8;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .contact-card a:hover {
            color: #8db89d;
        }

        .contact-form-container {
            background: rgba(255, 255, 255, 0.8);
            padding: 50px;
            border-radius: 24px;
            border: 2px solid rgba(179, 168, 255, 0.15);
        }

        .contact-form-container h2 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 32px;
            color: rgba(46, 46, 58, 0.95);
            margin-bottom: 10px;
        }

        .contact-form-container p {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            color: rgba(70, 70, 90, 0.8);
            margin-bottom: 30px;
        }

        .contact-form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group label {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 14px;
            color: rgba(46, 46, 58, 0.9);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            padding: 16px 20px;
            border: 2px solid rgba(179, 168, 255, 0.2);
            border-radius: 12px;
            background: rgba(255, 255, 255, 0.9);
            transition: all 0.3s ease;
            outline: none;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            border-color: rgba(127, 160, 184, 0.6);
            box-shadow: 0 0 0 4px rgba(127, 160, 184, 0.1);
        }

        .form-group textarea {
            resize: vertical;
            min-height: 150px;
        }

        .submit-button {
            padding: 18px 40px;
            background: linear-gradient(135deg, #7fa0b8, #8db89d);
            color: white;
            border: none;
            border-radius: 50px;
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.4s ease;
            box-shadow: 0 8px 30px rgba(127, 160, 184, 0.4);
            margin-top: 10px;
        }

        .submit-button:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 40px rgba(127, 160, 184, 0.6);
        }

        @media (max-width: 968px) {
            .contact-headline { font-size: 36px; }
            .contact-subheadline { font-size: 18px; }
            .contact-container {
                grid-template-columns: 1fr;
                gap: 40px;
                padding: 20px;
            }
            .contact-form-container { padding: 35px 25px; }
        }
    </style>
</head>
<body>
    <?php include 'components/navbar.php'; ?>

    <div class="contact-page">
        <div class="contact-hero">
            <h1 class="contact-headline">Let's Connect</h1>
            <p class="contact-subheadline">Have questions? Need support? Want to share feedback? We're here to listen and help you on your journey to mental clarity.</p>
        </div>

        <div class="contact-container">
            <div class="contact-info">
                <div class="contact-card">
                    <div class="contact-card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: #7fa0b8;">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                            <polyline points="22,6 12,13 2,6"/>
                        </svg>
                    </div>
                    <h3>Email Us</h3>
                    <p>For general inquiries and support:</p>
                    <a href="mailto:hello@mindassistant.com">hello@mindassistant.com</a>
                    <p style="margin-top: 15px;">For technical issues:</p>
                    <a href="mailto:support@mindassistant.com">support@mindassistant.com</a>
                </div>

                <div class="contact-card">
                    <div class="contact-card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: #8db89d;">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                            <circle cx="12" cy="10" r="3"/>
                        </svg>
                    </div>
                    <h3>Visit Us</h3>
                    <p>Mind Assistant HQ<br>
                    123 Mindful Lane<br>
                    San Francisco, CA 94102<br>
                    United States</p>
                </div>

                <div class="contact-card">
                    <div class="contact-card-icon">
                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="color: #B3A8FF;">
                            <circle cx="12" cy="12" r="10"/>
                            <polyline points="12 6 12 12 16 14"/>
                        </svg>
                    </div>
                    <h3>Response Time</h3>
                    <p>We typically respond within:<br>
                    • Support: 24 hours<br>
                    • General: 48 hours<br>
                    • Press: 72 hours</p>
                </div>
            </div>

            <div class="contact-form-container">
                <h2>Send Us a Message</h2>
                <p>Fill out the form below and we'll get back to you as soon as possible.</p>
                
                <form class="contact-form" onsubmit="submitContactForm(event)">
                    <div class="form-group">
                        <label for="name">Full Name *</label>
                        <input type="text" id="name" name="name" required placeholder="John Doe">
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" name="email" required placeholder="john@example.com">
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a topic...</option>
                            <option value="support">Technical Support</option>
                            <option value="feedback">Product Feedback</option>
                            <option value="billing">Billing Question</option>
                            <option value="partnership">Partnership Inquiry</option>
                            <option value="press">Press & Media</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" required placeholder="Tell us how we can help..."></textarea>
                    </div>

                    <button type="submit" class="submit-button">Send Message</button>
                </form>
            </div>
        </div>
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
                    <a href="future.php">Future</a>
                    <a href="contact.php">Contact</a>
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
        function submitContactForm(event) {
            event.preventDefault();
            
            const formData = new FormData(event.target);
            const data = {
                name: formData.get('name'),
                email: formData.get('email'),
                subject: formData.get('subject'),
                message: formData.get('message'),
                timestamp: new Date().toISOString()
            };
            
            // Store in localStorage for demo (in production, send to backend)
            let contacts = JSON.parse(localStorage.getItem('contact_submissions') || '[]');
            contacts.push(data);
            localStorage.setItem('contact_submissions', JSON.stringify(contacts));
            
            alert('✨ Message sent! We\'ll get back to you within 24-48 hours.');
            event.target.reset();
        }
    </script>
</body>
</html>

