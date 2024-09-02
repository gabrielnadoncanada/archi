export default (options = {}) => {
    return {
        isOpen: false,
        init() {
            this.$watch('isOpen', value => document.body.style.overflow = value ? 'hidden' : 'auto');
        },
        open() {
            this.isOpen = true;
        },
        close() {
            this.isOpen = false;
        }
    };
};
