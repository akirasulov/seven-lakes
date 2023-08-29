import { router, usePage } from "@inertiajs/vue3";
import { useToast } from "vue-toastification";

const toast = useToast();

export const notifications = () => {
    router.on("finish", () => {
        const notification = usePage().props.flash;
        if (notification.type) {
            toast(notification.body, {
                type: notification.type,
                timeout: 15000,
            });
        }
    });
};
