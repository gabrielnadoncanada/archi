export default (options = {}) => {
    return {
        scrollPercentage: 0,
        showBackToTop: false,
        init() {
            this.handleScroll();
            window.addEventListener("scroll", this.handleScroll.bind(this));
        },
        handleScroll() {
            const scrollPosition = window.scrollY;
            const windowHeight = window.innerHeight;
            const documentHeight = document.body.clientHeight;
            const scrollableHeight = documentHeight - windowHeight;
            this.scrollPercentage = (scrollPosition / scrollableHeight) * 100;
            this.showBackToTop = scrollPosition > 350;
        },
        scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        },
        destroy() {
            window.removeEventListener("scroll", this.handleScroll.bind(this));
        }
    };
};
