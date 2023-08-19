import "./bootstrap";
import "../css/app.css";

import { createApp, h } from "vue";
import { createInertiaApp, Head, Link } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { ZiggyVue } from "../../vendor/tightenco/ziggy/dist/vue.m";
import { MotionPlugin } from "@vueuse/motion";
import Layout from "./Layouts/Layout.vue";
import __ from "./lang";
const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => `${title}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob("./Pages/**/*.vue", {})
        ).then(({ default: page }) => {
            if (page.layout === undefined && !name.startsWith("Admin/")) {
                page.layout = Layout;
            }
            if (name.startsWith("Admin/")) {
                page.layout = AdminLayout;
            }
            return page;
        }),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(MotionPlugin)
            .component("Link", Link)
            .component("Head", Head);
        app.config.globalProperties.__ = __;
        app.mount(el);
    },
    progress: {
        color: "#4B5563",
    },
});
