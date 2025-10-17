<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy | Mind Assistant</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
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
</head>
<body>
    <?php include 'components/navbar.php'; ?>

    <div class="legal-page">
        <div class="legal-header">
            <h1 class="legal-title">Privacy Policy</h1>
            <p class="legal-updated">Last Updated: October 17, 2025</p>
        </div>

        <div class="legal-content">
            <div class="legal-section">
                <h2>Our Commitment to Your Privacy</h2>
                <p>At Mind Assistant, your privacy isn't just a policy—it's our foundation. We believe that your thoughts, reflections, and mental health data are deeply personal and deserve the highest level of protection.</p>
                
                <div class="highlight-box">
                    <p><strong>🔒 Core Promise:</strong> Your data is end-to-end encrypted. We don't sell, share, or use your information for advertising. Ever.</p>
                </div>
            </div>

            <div class="legal-section">
                <h2>1. Information We Collect</h2>
                
                <h3>Personal Information</h3>
                <ul>
                    <li>Email address (for account creation and communication)</li>
                    <li>Name (optional, for personalization)</li>
                    <li>Account preferences and settings</li>
                </ul>

                <h3>Reflection & Wellness Data</h3>
                <ul>
                    <li>Your journal entries and reflections</li>
                    <li>Mood tracking data and emotional patterns</li>
                    <li>Breathing session logs and meditation records</li>
                    <li>Usage patterns (to improve your experience)</li>
                </ul>

                <h3>Technical Information</h3>
                <ul>
                    <li>Device type and operating system</li>
                    <li>IP address (anonymized after 30 days)</li>
                    <li>App performance and crash reports</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>2. How We Use Your Information</h2>
                <p>We use your data exclusively to:</p>
                <ul>
                    <li>Provide personalized reflection prompts and insights</li>
                    <li>Track your emotional patterns and progress over time</li>
                    <li>Send you relevant notifications and reminders (with your permission)</li>
                    <li>Improve app functionality and user experience</li>
                    <li>Ensure the security and integrity of our platform</li>
                </ul>
                <p><strong>We never:</strong> Sell your data, share it with advertisers, or use it to train AI models without explicit consent.</p>
            </div>

            <div class="legal-section">
                <h2>3. Data Security</h2>
                <p>Your data is protected with industry-leading security measures:</p>
                <ul>
                    <li><strong>End-to-End Encryption:</strong> All reflection data is encrypted before it leaves your device</li>
                    <li><strong>Zero-Knowledge Architecture:</strong> We can't read your journal entries—only you can</li>
                    <li><strong>Secure Servers:</strong> Data stored on SOC 2 certified cloud infrastructure</li>
                    <li><strong>Regular Audits:</strong> Annual third-party security assessments</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>4. Third-Party Integrations</h2>
                <p>If you choose to connect external services (Apple Health, Google Fit, etc.):</p>
                <ul>
                    <li>We only access data necessary for integration features</li>
                    <li>You can revoke access at any time from your settings</li>
                    <li>Third-party services have their own privacy policies</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>5. Your Rights & Control</h2>
                <p>You have complete control over your data:</p>
                <ul>
                    <li><strong>Access:</strong> Download all your data at any time</li>
                    <li><strong>Delete:</strong> Request full account deletion (processed within 30 days)</li>
                    <li><strong>Export:</strong> Export your reflections in multiple formats</li>
                    <li><strong>Opt-Out:</strong> Disable analytics and personalization</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>6. Data Retention</h2>
                <p>We retain your data as long as your account is active. After account deletion:</p>
                <ul>
                    <li>Personal data is permanently deleted within 30 days</li>
                    <li>Anonymized usage data may be retained for service improvement</li>
                    <li>Backup copies are purged within 90 days</li>
                </ul>
            </div>

            <div class="legal-section">
                <h2>7. Children's Privacy</h2>
                <p>Mind Assistant is not intended for users under 13. We do not knowingly collect data from children.</p>
            </div>

            <div class="legal-section">
                <h2>8. Changes to This Policy</h2>
                <p>We may update this policy to reflect changes in our practices or legal requirements. We'll notify you via email 30 days before any material changes take effect.</p>
            </div>

            <div class="legal-section">
                <h2>Contact Us</h2>
                <p>Questions about privacy? We're here to help:</p>
                <p><strong>Email:</strong> privacy@mindassistant.com<br>
                <strong>Security Issues:</strong> security@mindassistant.com</p>
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
</body>
</html>

