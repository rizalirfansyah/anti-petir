import './bootstrap';
import 'flowbite';

import { Carousel, initTE } from "tw-elements";
initTE({ Carousel });

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();
