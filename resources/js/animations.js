import gsap from 'gsap';
import {ScrollTrigger} from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

const initTextAnimations = () => {
    const animatedTexts = document.querySelectorAll('[data-animated-text]');

    animatedTexts.forEach(animatedText => {
        ScrollTrigger.create({
            trigger: animatedText.parentNode,
            start: 'top 90%',
            end: 'bottom 0%',
            onUpdate: self => {
                const progress = self.progress;
                const scrollValue = `${gsap.utils.interpolate(0, 15, progress)}%`;

                gsap.to(animatedText, {
                    x: scrollValue,
                    duration: 1,
                    ease: 'power1.out',
                });
            },
        });
    });
};

document.addEventListener('DOMContentLoaded', initTextAnimations);

export default initTextAnimations;
