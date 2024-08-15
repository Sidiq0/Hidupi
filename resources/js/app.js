import './bootstrap';
import './color-modes';
import './config';
import 'simplebar/dist/simplebar.min.js';
import.meta.glob(["../img/**", "../js/**", "../css/**", "../sass/**"]);

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// Import all of CoreUI's JS
import * as coreui from '@coreui/coreui';

window.coreui = coreui;
