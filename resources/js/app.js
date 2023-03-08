import './bootstrap';
import '../css/app.css';
import Alpine from 'alpinejs'
import Typewriter from '@marcreichel/alpine-typewriter';

window.Alpine = Alpine

Alpine.plugin(Typewriter);
Alpine.start()
