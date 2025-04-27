import './bootstrap';

import Alpine from 'alpinejs';
import { openModal } from './components/modal.js';

window.Alpine = Alpine;
window.openModal = openModal;

Alpine.start();
