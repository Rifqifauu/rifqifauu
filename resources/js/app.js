import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import AppLayout from '@/Layout/AppLayout.vue'; // layout default

createInertiaApp({
  resolve: async name => {
    const page = (await import(`./Pages/${name}.vue`)).default;

    // Jika halaman punya properti layout, pakai itu
    // Kalau nggak, pakai AppLayout sebagai default
    page.layout = page.layout || ((page) => h(AppLayout, null, { default: () => page }));

    return page;
  },
  setup({ el, App, props, plugin }) {
    createApp({ render: () => h(App, props) })
      .use(plugin)
      .mount(el);
  },
});
