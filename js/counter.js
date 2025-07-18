document.addEventListener('DOMContentLoaded', () => {
    const counterNumbers = document.querySelectorAll('.counter-number');
    const options = {
        threshold: 0.5 // When 50% of the element is visible
    };

    const animateCounter = (entry) => {
        if (entry.isIntersecting) {
            const counter = entry.target;
            const target = parseInt(counter.getAttribute('data-target'));
            const isPercentage = counter.textContent.includes('%');
            const isPlus = counter.textContent.includes('+');
            let current = 0;
            const duration = 2000; // 2 seconds
            const increment = target / (duration / 10); // Adjust speed

            const updateCounter = () => {
                if (current < target) {
                    current = Math.min(current + increment, target);
                    let displayValue = Math.floor(current);
                    if (isPercentage) {
                        counter.textContent = displayValue + '%';
                    } else if (isPlus) {
                        counter.textContent = displayValue + '+';
                    } else {
                        counter.textContent = displayValue;
                    }
                    requestAnimationFrame(updateCounter);
                } else {
                    // Ensure final value is exact
                    if (isPercentage) {
                        counter.textContent = target + '%';
                    } else if (isPlus) {
                        counter.textContent = target + '+';
                    } else {
                        counter.textContent = target;
                    }
                    observer.unobserve(counter); // Stop observing once animated
                }
            };
            updateCounter();
        }
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            animateCounter(entry);
        });
    }, options);

    counterNumbers.forEach(number => {
        observer.observe(number);
    });
});