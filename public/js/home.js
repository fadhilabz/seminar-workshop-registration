// Smooth scroll implementation or micro-interactions
document.querySelectorAll("button").forEach((button) => {
    button.addEventListener("mousedown", () => {
        button.style.transform = "scale(0.95)";
    });
    button.addEventListener("mouseup", () => {
        button.style.transform = "scale(1)";
    });
});

// Intersection observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.isIntersecting) {
            entry.target.classList.add(
                "opacity-100",
                "translate-y-0",
            );
            entry.target.classList.remove(
                "opacity-0",
                "translate-y-10",
            );
        }
    });
}, observerOptions);

document.querySelectorAll("section > div").forEach((el) => {
    el.classList.add(
        "transition-all",
        "duration-700",
        "opacity-0",
        "translate-y-10",
    );
    observer.observe(el);
});
