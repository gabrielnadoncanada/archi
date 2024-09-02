export default (options = {}) => {
    return {
        activeItem: null,
        toggleItem(index) {
            this.activeItem = this.activeItem === index ? null : index;

            this.updateItems();
        },
        updateItems() {
            this.$root.querySelectorAll('.accordion-item').forEach((item, index) => {
                let content = item.querySelector('.accordion-content');

                if (this.activeItem === index) {
                    content.style.maxHeight = content.scrollHeight + 'px';
                } else {
                    content.style.maxHeight = 0;
                }
            });
        }
    };
};
