<?php get_header(); ?>
    <style>
        .legal-page {
            max-width: 900px;
            margin: 0 auto;
            padding: 120px 40px 80px;
            min-height: 100vh;
            background: #F8F3FF;
        }

        .legal-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .legal-title {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 48px;
            background: linear-gradient(135deg, #7fa0b8, #8db89d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 20px;
        }

        .legal-updated {
            font-family: 'Inter', sans-serif;
            font-size: 14px;
            color: rgba(70, 70, 90, 0.7);
        }

        .legal-content {
            background: rgba(255, 255, 255, 0.8);
            padding: 50px;
            border-radius: 20px;
            border: 2px solid rgba(179, 168, 255, 0.15);
        }

        .legal-section {
            margin-bottom: 40px;
        }

        .legal-section h2 {
            font-family: 'Inter', sans-serif;
            font-weight: 700;
            font-size: 28px;
            color: rgba(46, 46, 58, 0.95);
            margin-bottom: 20px;
        }

        .legal-section h3 {
            font-family: 'Inter', sans-serif;
            font-weight: 600;
            font-size: 20px;
            color: rgba(70, 70, 90, 0.9);
            margin: 25px 0 15px;
        }

        .legal-section p {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            line-height: 1.8;
            color: rgba(70, 70, 90, 0.85);
            margin-bottom: 16px;
        }

        .legal-section ul {
            margin: 16px 0;
            padding-left: 30px;
        }

        .legal-section li {
            font-family: 'Inter', sans-serif;
            font-size: 16px;
            line-height: 1.8;
            color: rgba(70, 70, 90, 0.85);
            margin-bottom: 12px;
        }

        .highlight-box {
            background: rgba(179, 168, 255, 0.1);
            padding: 25px;
            border-radius: 12px;
            border-left: 4px solid #A78BFA;
            margin: 25px 0;
        }

        @media (max-width: 768px) {
            .legal-page { padding: 100px 20px 60px; }
            .legal-title { font-size: 36px; }
            .legal-content { padding: 30px 25px; }
        }
    </style>

    <div class="legal-page">
        <div class="legal-header">
            <h1 class="legal-title">Terms of Service</h1>
            <p class="legal-updated">Last Updated: October 17, 2025</p>
        </div>

        <div class="legal-content">
            <div class="legal-section">
                <h2>Welcome to Mind Assistant</h2>
                <p>These Terms of Service ("Terms") govern your use of Mind Assistant's platform, services, and features. By creating an account or using our services, you agree to these Terms.</p>
                
                <div class="highlight-box">
                    <p><strong>Important:</strong> Mind Assistant is a wellness tool designed to support your mental health journey. It is not a substitute for professional medical advice, diagnosis, or treatment.</p>
                </div>
            </div>

            <div class="legal-section">
                <h2>1. Acceptance of Terms</h2>
                <p>By accessing or using Mind Assistant, you confirm that:</p>
                <ul>
                    <li>You are at least 13 years old (or the age of majority in your jurisdiction)</li>
                    <li>You have the legal capacity to enter into this agreement</li>
                    <li>You agree to comply with all applicable laws and regulations</li>
                    <li>All information you provide is accurate and truthful</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>2. User Accounts</h2>
                
                <h3>Account Creation</h3>
                <p>To use certain features, you must create an account. You agree to:</p>
                <ul>
                    <li>Provide accurate and complete registration information</li>
                    <li>Maintain the security of your password and account</li>
                    <li>Notify us immediately of any unauthorized access</li>
                    <li>Accept responsibility for all activities under your account</li>
                </ul>

                <h3>Account Termination</h3>
                <p>You may delete your account at any time from your settings. We reserve the right to suspend or terminate accounts that violate these Terms.</p>
            </div>

            <div class="legal-section">
                <h2>3. Acceptable Use</h2>
                <p>You agree NOT to:</p>
                <ul>
                    <li>Use the service for any illegal or unauthorized purpose</li>
                    <li>Attempt to gain unauthorized access to our systems</li>
                    <li>Share, sell, or distribute your account credentials</li>
                    <li>Upload malicious code, viruses, or harmful content</li>
                    <li>Harass, abuse, or harm other users</li>
                    <li>Scrape, copy, or reverse-engineer our platform</li>
                    <li>Use automated tools to access the service without permission</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>4. Intellectual Property</h2>
                
                <h3>Our Content</h3>
                <p>All content, features, and functionality (including design, text, graphics, and software) are owned by Mind Assistant and protected by copyright, trademark, and other intellectual property laws.</p>

                <h3>Your Content</h3>
                <p>You retain all rights to the content you create (journal entries, reflections, etc.). By using our service, you grant us a limited license to:</p>
                <ul>
                    <li>Store and process your content to provide our services</li>
                    <li>Use anonymized, aggregated data to improve our platform</li>
                    <li>Display your content back to you across your devices</li>
                </ul>
                <p><strong>We will never:</strong> Use your personal reflections for marketing, share them with third parties, or use them to train public AI models without explicit consent.</p>
            </div>

            <div class="legal-section">
                <h2>5. Service Availability</h2>
                <p>We strive to provide continuous service, but we cannot guarantee:</p>
                <ul>
                    <li>Uninterrupted or error-free access</li>
                    <li>Availability during maintenance periods</li>
                    <li>Compatibility with all devices and platforms</li>
                </ul>
                <p>We reserve the right to modify, suspend, or discontinue any part of the service at any time with reasonable notice.</p>
            </div>

            <div class="legal-section">
                <h2>6. Disclaimer of Medical Advice</h2>
                <p><strong>Mind Assistant is NOT a medical service.</strong></p>
                <ul>
                    <li>Our platform provides wellness tools and self-reflection guidance</li>
                    <li>It does not replace professional mental health treatment</li>
                    <li>Always consult licensed healthcare providers for medical advice</li>
                    <li>In case of emergency, contact local emergency services immediately</li>
                </ul>
                <div class="highlight-box">
                    <p><strong>Crisis Resources:</strong><br>
                    If you're experiencing a mental health crisis:<br>
                    • US: National Suicide Prevention Lifeline: 988<br>
                    • International: findahelpline.com</p>
                </div>
            </div>

            <div class="legal-section">
                <h2>7. Limitation of Liability</h2>
                <p>To the fullest extent permitted by law:</p>
                <ul>
                    <li>Mind Assistant is provided "as is" without warranties of any kind</li>
                    <li>We are not liable for any indirect, incidental, or consequential damages</li>
                    <li>Our total liability shall not exceed the amount you paid us in the past 12 months</li>
                    <li>We are not responsible for third-party integrations or services</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>8. Subscription & Payment</h2>
                <p>For paid plans:</p>
                <ul>
                    <li>Subscriptions renew automatically unless canceled</li>
                    <li>You can cancel anytime; no refunds for partial months</li>
                    <li>Prices may change with 30 days' notice</li>
                    <li>Free trial terms are specified at signup</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>9. Privacy</h2>
                <p>Your privacy is critical to us. Please review our <a href="<?php echo home_url('/privacy/'); ?>" style="color: #7fa0b8; text-decoration: underline;">Privacy Policy</a> to understand how we collect, use, and protect your data.</p>
            </div>

            <div class="legal-section">
                <h2>10. Changes to Terms</h2>
                <p>We may update these Terms to reflect changes in our practices or legal requirements. We'll notify you via email 30 days before material changes take effect. Continued use after changes constitutes acceptance.</p>
            </div>

            <div class="legal-section">
                <h2>11. Governing Law</h2>
                <p>These Terms are governed by the laws of [Your Jurisdiction], without regard to conflict of law principles. Any disputes shall be resolved through binding arbitration.</p>
            </div>

            <div class="legal-section">
                <h2>Contact Us</h2>
                <p>Questions about these Terms? We're here to help:</p>
                <p><strong>Email:</strong> legal@mindassistant.com<br>
                <strong>Support:</strong> support@mindassistant.com</p>
            </div>
        </div>
    </div>

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

<?php get_footer(); ?>

