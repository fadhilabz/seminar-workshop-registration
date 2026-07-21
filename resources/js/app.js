import Alpine from 'alpinejs';

window.Alpine = Alpine;
Alpine.start();

// SeminarKu Global Functions
function mobileMenuToggle() {
    // Add logic here if/when hamburger menu is implemented
    console.log('mobileMenuToggle initialized');
}

function imagePreview() {
    // Logic for image preview in forms
    const imageInput = document.querySelector('input[type="file"][accept="image/*"]');
    if (imageInput) {
        imageInput.addEventListener('change', function(e) {
            // Preview logic goes here
            console.log('Image preview logic triggered');
        });
    }
}

function confirmDelete() {
    const deleteButtons = document.querySelectorAll('form[method="POST"] button[type="submit"]');
    deleteButtons.forEach(button => {
        const form = button.closest('form');
        // Check if there is a DELETE method override
        const methodInput = form.querySelector('input[name="_method"][value="DELETE"]');
        if (methodInput) {
            form.addEventListener('submit', function(e) {
                if (!confirm('Are you sure you want to delete this item?')) {
                    e.preventDefault();
                }
            });
        }
    });
}

function flashMessageAutoHide() {
    const flashMessages = document.querySelectorAll('.alert-success, .alert-error, .bg-red-100, .bg-green-100');
    flashMessages.forEach(msg => {
        setTimeout(() => {
            msg.style.opacity = '0';
            setTimeout(() => msg.remove(), 500); // Wait for transition
        }, 5000); // 5 seconds
    });
}

function scrollReveal() {
    const observerOptions = { threshold: 0.1 };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('opacity-100', 'translate-y-0');
                entry.target.classList.remove('opacity-0', 'translate-y-10');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.bento-card, .group').forEach(el => {
        if (!el.classList.contains('opacity-0')) {
             el.classList.add('opacity-0', 'translate-y-10', 'transition-all', 'duration-700');
        }
        observer.observe(el);
    });
}

function eventIndexInteractions() {
    // Micro-interaction for filter chips
    const filterButtons = document.querySelectorAll('.flex.items-center.gap-3 button');
    if (filterButtons.length > 0) {
        filterButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterButtons.forEach(b => {
                    b.classList.remove('bg-secondary', 'text-white');
                    b.classList.add('bg-white', 'border', 'border-outline-variant', 'text-on-surface-variant');
                });
                btn.classList.add('bg-secondary', 'text-white');
                btn.classList.remove('bg-white', 'border', 'border-outline-variant', 'text-on-surface-variant');
            });
        });
    }

    // Search highlight interaction
    const searchInput = document.querySelector('input[type="text"]');
    if (searchInput) {
        searchInput.addEventListener('focus', () => {
            if (searchInput.parentElement) searchInput.parentElement.classList.add('scale-[1.01]');
        });
        searchInput.addEventListener('blur', () => {
            if (searchInput.parentElement) searchInput.parentElement.classList.remove('scale-[1.01]');
        });
    }
}

function eventShowInteractions() {
    // Micro-interactions for registration card scroll effect
    window.addEventListener('scroll', () => {
        const card = document.querySelector('.sticky-card');
        if (card) {
            if (window.scrollY > 100) {
                card.classList.add('shadow-2xl');
            } else {
                card.classList.remove('shadow-2xl');
            }
        }
    });

    // Simple animation on load for progress bar
    const progressBar = document.querySelector('.bg-on-tertiary-container');
    if (progressBar) {
        progressBar.style.width = '0%';
        setTimeout(() => {
            progressBar.style.width = '77%';
        }, 500);
    }
}

document.addEventListener('DOMContentLoaded', function () {
    mobileMenuToggle();
    imagePreview();
    confirmDelete();
    flashMessageAutoHide();
    scrollReveal();
    eventIndexInteractions();
    eventShowInteractions();
});
