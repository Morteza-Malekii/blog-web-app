import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
import './front/SwipperSliderTrigger';
import './front/SidebarOffCanvasMain';
import './DarkMode';
// Sticky.js
import Sticky from 'sticky-js';
window.Sticky = Sticky;

// Custom functions (این باید بعد از ست کردن bootstrap بیاد)
import './functions';

// images (ویژه‌ی Vite)
import.meta.glob(['../images/**']);

