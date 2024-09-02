import './components';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect';
import initTextAnimations  from './animations';

Alpine.plugin(intersect);
initTextAnimations();
