(() => {
    const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

    if (reducedMotion.matches || !("IntersectionObserver" in window)) {
        return;
    }

    const revealElements = document.querySelectorAll(
        ".hero-copy, .section-heading, .product-card, .product-page .nakup, " +
        ".auth-card, .cart-heading, .cart-empty, .cart-item, .cart-summary, " +
        ".site-footer-main > *"
    );

    if (revealElements.length === 0) {
        return;
    }

    document.body.classList.add("motion-ready");

    const observer = new IntersectionObserver((entries, currentObserver) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
                currentObserver.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12,
        rootMargin: "0px 0px -36px 0px"
    });

    revealElements.forEach((element, index) => {
        element.classList.add("reveal-on-scroll");
        if (element.classList.contains("product-card")) {
            element.style.setProperty("--reveal-delay", `${(index % 4) * 70}ms`);
        }
        observer.observe(element);
    });
})();