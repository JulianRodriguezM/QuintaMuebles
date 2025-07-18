document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');

    if (contactForm) {
        // Option 1: Reset on any page load (your current implementation)
        // contactForm.reset(); 

        // Option 2: Reset specifically after a Formspree submission redirect
        // Check if the URL contains a success indicator from Formspree
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('submitted') && urlParams.get('submitted') === 'true') {
            contactForm.reset();
            // Optional: Remove the '?submitted=true' from the URL for a cleaner look
            // This also prevents repeated resets if the user refreshes after submission
            window.history.replaceState({}, document.title, window.location.pathname);
        } else {
            // If it's a regular page load (not a redirect from submission), also reset
            contactForm.reset();
        }
    }
});