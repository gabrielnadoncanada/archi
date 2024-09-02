import Typed from 'typed.js';

export default (options = {}) => {
    return {
        init() {
            new Typed(this.$refs.typedText, {
                strings: options.text,
                typeSpeed: 100,
                loop: true,
                backSpeed: 20,
                cursorChar: '_',
                showCursor: true
            });
        }
    };
};
