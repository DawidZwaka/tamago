import Splide from '@splidejs/splide';
import {breakpoints} from '@scripts/data/tailwind.js';

document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.splide').forEach( (target) => {
        console.log(target.dataset.type);
        switch (target.dataset.type) {
            case 'posts_slider':
                new Splide(target, {
                    perPage: 1,
                    type: 'loop',
                    mediaQuery: 'min',
                    gap: '2rem',
                    breakpoints: {
                        [breakpoints.lg]: {
                            perPage: 3
                        }
                    }
                }).mount();
                break;
        
            default:
                new Splide(target).mount();
                break;
        }
    });
})
