import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import './DarkMode';
import './functions';

// Sticky.js
import Sticky from 'sticky-js';
window.Sticky = Sticky;

// images (ویژه‌ی Vite)
import.meta.glob(['../images/**']);

