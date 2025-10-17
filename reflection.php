<?php get_header(); ?>
    <!-- Container for all steps -->
    <div class="reflection-container">
        
        <!-- Step 1: Intro -->
        <section class="step active" id="step-intro">
            <div class="brain-animation">
                <iframe 
                    src="https://my.spline.design/brain-WUQgRA2lPT7YtVneLCAu28fU/" 
                    frameborder="0" 
                    width="100%" 
                    height="100%"
                    style="border: none;">
                </iframe>
            </div>
            <div class="intro-content">
                <div class="breath-icon">🌬️</div>
                <p class="intro-line line-1">Take a deep breath.</p>
                <p class="intro-line line-2">You've been listening to the world.</p>
                <p class="intro-line line-3">Now, listen to yourself.</p>
                <button class="cta-button" onclick="nextStep()">Begin reflection →</button>
            </div>
        </section>

        <!-- Step 2: Question 1 - Awareness -->
        <section class="step" id="step-q1">
            <div class="step-content">
                <h2 class="step-headline">What best describes how your mind feels right now?</h2>
                <div class="chip-container">
                    <button class="chip" data-value="overthinking">
                        <span class="chip-emoji">🌀</span>
                        <span class="chip-text">Overthinking</span>
                    </button>
                    <button class="chip" data-value="anxious">
                        <span class="chip-emoji">😰</span>
                        <span class="chip-text">Anxious</span>
                    </button>
                    <button class="chip" data-value="unfocused">
                        <span class="chip-emoji">🌫️</span>
                        <span class="chip-text">Unfocused</span>
                    </button>
                    <button class="chip" data-value="calm">
                        <span class="chip-emoji">😌</span>
                        <span class="chip-text">Calm</span>
                    </button>
                    <button class="chip" data-value="empty">
                        <span class="chip-emoji">🫥</span>
                        <span class="chip-text">Empty</span>
                    </button>
                    <button class="chip" data-value="restless">
                        <span class="chip-emoji">⚡</span>
                        <span class="chip-text">Restless</span>
                    </button>
                </div>
                <button class="cta-button" onclick="nextStep()" disabled id="next-q1">Next</button>
            </div>
        </section>

        <!-- Step 3: Question 2 - Current Triggers -->
        <section class="step" id="step-q2">
            <div class="step-content">
                <h2 class="step-headline">What's been weighing on you lately?</h2>
                <p class="step-subheadline">Select up to 3</p>
                <div class="chip-container">
                    <button class="chip" data-value="work">
                        <span class="chip-emoji">💼</span>
                        <span class="chip-text">Work pressure</span>
                    </button>
                    <button class="chip" data-value="relationships">
                        <span class="chip-emoji">💔</span>
                        <span class="chip-text">Relationships</span>
                    </button>
                    <button class="chip" data-value="health">
                        <span class="chip-emoji">🏥</span>
                        <span class="chip-text">Health</span>
                    </button>
                    <button class="chip" data-value="social">
                        <span class="chip-emoji">📱</span>
                        <span class="chip-text">Social media</span>
                    </button>
                    <button class="chip" data-value="money">
                        <span class="chip-emoji">💰</span>
                        <span class="chip-text">Money</span>
                    </button>
                    <button class="chip" data-value="change">
                        <span class="chip-emoji">🔄</span>
                        <span class="chip-text">Change</span>
                    </button>
                    <button class="chip" data-value="other">
                        <span class="chip-emoji">💭</span>
                        <span class="chip-text">Other</span>
                    </button>
                </div>
                <button class="cta-button" onclick="nextStep()" disabled id="next-q2">Next</button>
            </div>
        </section>

        <!-- Step 4: Guided Message -->
        <section class="step" id="step-message">
            <div class="message-content">
                <div class="brain-clear-animation">
                    <iframe 
                        src="https://my.spline.design/aibrain-HxqFsP1K8V440ywo37QPGrJ1/" 
                        frameborder="0" 
                        width="100%" 
                        height="100%"
                        style="border: none;">
                    </iframe>
                </div>
                <h2 class="message-headline">You're doing better than you think.</h2>
                <div class="message-body">
                    <p>Your mind is trying to protect you — not punish you.</p>
                    <p>Awareness is already progress.</p>
                    <p>Let's make space for calm.</p>
                </div>
                <button class="cta-button" onclick="nextStep()">Show my 3-step reset</button>
            </div>
        </section>

        <!-- Step 5: Personalized 3-Step Reset -->
        <section class="step" id="step-reset">
            <div class="reset-content">
                <h2 class="reset-headline">Your reset for today</h2>
                <div class="reset-tasks">
                    <div class="task-card">
                        <div class="task-number">1️⃣</div>
                        <h3 class="task-title">Mind dump (2 minutes)</h3>
                        <p class="task-description">Write everything that's in your head.</p>
                        <button class="task-done" onclick="markDone(this)">Mark as done</button>
                    </div>
                    <div class="task-card">
                        <div class="task-number">2️⃣</div>
                        <h3 class="task-title">Small decision</h3>
                        <p class="task-description">Choose one small thing to complete today.</p>
                        <button class="task-done" onclick="markDone(this)">Mark as done</button>
                    </div>
                    <div class="task-card">
                        <div class="task-number">3️⃣</div>
                        <h3 class="task-title">Breathing break</h3>
                        <p class="task-description">4-7-8 breathing, 3 rounds.</p>
                        <button class="task-done" onclick="markDone(this)">Mark as done</button>
                    </div>
                </div>
                <div class="reset-actions">
                    <button class="cta-button primary" onclick="nextStep()">Save my plan</button>
                    <button class="cta-button secondary" onclick="startOver()">Start over</button>
                </div>
            </div>
        </section>

        <!-- Step 6: Outro / Invitation -->
        <section class="step" id="step-outro">
            <div class="outro-content">
                <p class="outro-message">Reflection doesn't end here.</p>
                <p class="outro-message">Mind Assistant grows with you — one small step at a time.</p>
                <div class="outro-actions">
                    <a href="<?php echo home_url('/signup/'); ?>" class="cta-button primary">Create free account →</a>
                    <a href="<?php echo home_url('/'); ?>" class="cta-button secondary">Continue as guest →</a>
                </div>
            </div>
        </section>

    </div>

<?php get_footer(); ?>

