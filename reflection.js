// Track current step
let currentStep = 0;
const steps = ['intro', 'q1', 'q2', 'message', 'reset', 'outro'];

// Track user selections
const userAnswers = {
    feelings: [],
    triggers: []
};

// Initialize
document.addEventListener('DOMContentLoaded', function() {
    initChips();
});

// Initialize chip selection
function initChips() {
    // Question 1 chips (multi-select)
    const q1Chips = document.querySelectorAll('#step-q1 .chip');
    q1Chips.forEach(chip => {
        chip.addEventListener('click', function() {
            this.classList.toggle('selected');
            
            // Get selected values
            const selected = Array.from(document.querySelectorAll('#step-q1 .chip.selected'))
                .map(c => c.dataset.value);
            
            userAnswers.feelings = selected;
            
            // Enable/disable next button
            document.getElementById('next-q1').disabled = selected.length === 0;
        });
    });

    // Question 2 chips (max 3)
    const q2Chips = document.querySelectorAll('#step-q2 .chip');
    q2Chips.forEach(chip => {
        chip.addEventListener('click', function() {
            const selected = document.querySelectorAll('#step-q2 .chip.selected');
            
            if (this.classList.contains('selected')) {
                this.classList.remove('selected');
            } else {
                if (selected.length < 3) {
                    this.classList.add('selected');
                }
            }
            
            // Get selected values
            const selectedValues = Array.from(document.querySelectorAll('#step-q2 .chip.selected'))
                .map(c => c.dataset.value);
            
            userAnswers.triggers = selectedValues;
            
            // Enable/disable next button
            document.getElementById('next-q2').disabled = selectedValues.length === 0;
        });
    });
}

// Navigate to next step
function nextStep() {
    const currentStepEl = document.getElementById(`step-${steps[currentStep]}`);
    currentStepEl.classList.remove('active');
    
    currentStep++;
    
    if (currentStep < steps.length) {
        const nextStepEl = document.getElementById(`step-${steps[currentStep]}`);
        nextStepEl.classList.add('active');
        
        // If moving to message step, trigger brain animation after a delay
        if (steps[currentStep] === 'message') {
            setTimeout(() => {
                // Add fade-in effect to brain
                const brain = document.querySelector('.brain-clear-animation');
                if (brain) {
                    brain.style.transition = 'opacity 2s ease';
                    brain.style.opacity = '0.4';
                }
            }, 500);
        }
    }
}

// Mark task as done
function markDone(button) {
    const taskCard = button.closest('.task-card');
    taskCard.classList.toggle('completed');
    button.classList.toggle('done');
    
    if (button.classList.contains('done')) {
        button.textContent = 'Completed';
        
        // Add celebration effect
        createConfetti(taskCard);
    } else {
        button.textContent = 'Mark as done';
    }
}

// Simple confetti effect
function createConfetti(element) {
    const colors = ['#B3A8FF', '#9EC8B5', '#A8C5E0'];
    const confettiCount = 15;
    
    for (let i = 0; i < confettiCount; i++) {
        const confetti = document.createElement('div');
        confetti.style.position = 'absolute';
        confetti.style.width = '8px';
        confetti.style.height = '8px';
        confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
        confetti.style.borderRadius = '50%';
        confetti.style.left = '50%';
        confetti.style.top = '50%';
        confetti.style.pointerEvents = 'none';
        confetti.style.zIndex = '1000';
        
        element.style.position = 'relative';
        element.appendChild(confetti);
        
        // Random direction and distance
        const angle = (Math.random() * 360) * (Math.PI / 180);
        const distance = 50 + Math.random() * 50;
        const x = Math.cos(angle) * distance;
        const y = Math.sin(angle) * distance;
        
        // Animate
        confetti.animate([
            { 
                transform: 'translate(-50%, -50%) scale(0)',
                opacity: 1
            },
            { 
                transform: `translate(${x}px, ${y}px) scale(1)`,
                opacity: 0
            }
        ], {
            duration: 800,
            easing: 'cubic-bezier(0, .9, .57, 1)'
        }).onfinish = () => confetti.remove();
    }
}

// Start over
function startOver() {
    // Reset selections
    userAnswers.feelings = [];
    userAnswers.triggers = [];
    
    // Remove all selected chips
    document.querySelectorAll('.chip.selected').forEach(chip => {
        chip.classList.remove('selected');
    });
    
    // Reset task cards
    document.querySelectorAll('.task-card.completed').forEach(card => {
        card.classList.remove('completed');
    });
    
    document.querySelectorAll('.task-done.done').forEach(btn => {
        btn.classList.remove('done');
        btn.textContent = 'Mark as done';
    });
    
    // Disable next buttons
    document.getElementById('next-q1').disabled = true;
    document.getElementById('next-q2').disabled = true;
    
    // Go back to intro
    document.getElementById(`step-${steps[currentStep]}`).classList.remove('active');
    currentStep = 0;
    document.getElementById('step-intro').classList.add('active');
}

// Save to localStorage (for future use)
function savePlan() {
    const plan = {
        timestamp: new Date().toISOString(),
        feelings: userAnswers.feelings,
        triggers: userAnswers.triggers,
        tasks: [
            'Mind dump (2 minutes)',
            'Small decision',
            'Breathing break'
        ]
    };
    
    localStorage.setItem('mindAssistantPlan', JSON.stringify(plan));
    console.log('Plan saved:', plan);
}

