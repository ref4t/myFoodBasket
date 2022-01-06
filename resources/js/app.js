require('./bootstrap');

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { library } from "@fortawesome/fontawesome-svg-core";
import { faPhone } from "@fortawesome/free-solid-svg-icons";
import Toast from "vue-toastification";
import axios from 'axios'
import VueAxios from 'vue-axios'
// Import the CSS or use your own!
import "vue-toastification/dist/index.css";
// import "../../public/js/theme/app.js";

library.add(faPhone);

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';
const options = {
    // You can set your default options here
    position: "bottom-right",
    timeout: 5000,
    closeOnClick: true,
    pauseOnFocusLoss: true,
    pauseOnHover: true,
    draggable: true,
    draggablePercent: 0.6,
    showCloseButtonOnHover: false,
    closeButton: "button",
    icon: true,
    rtl: false
};
createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => require(`./Pages/${name}.vue`),
    setup({ el, app, props, plugin }) {
        return createApp({ render: () => h(app, props) })
            .use(plugin)
            .use(VueAxios, axios)
            .use(Toast, options)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init({ color: '#C70039', showSpinner: true });
