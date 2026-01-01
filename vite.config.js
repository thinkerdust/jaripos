import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';


export default defineConfig({
    plugins: [
        laravel({
            input: [
                //css
                "resources/scss/app.scss",
                "resources/scss/icons.scss",
                "node_modules/glightbox/dist/css/glightbox.min.css",
                "node_modules/choices.js/public/assets/styles/choices.min.css",
                "node_modules/dropzone/dist/dropzone.css",
                "node_modules/nouislider/dist/nouislider.min.css",
                "node_modules/sweetalert2/dist/sweetalert2.min.css",
                "node_modules/swiper/swiper-bundle.min.css",
                "node_modules/swiper/modules/navigation.css",
                "node_modules/quill/dist/quill.core.css",
                "node_modules/quill/dist/quill.snow.css",
                "node_modules/quill/dist/quill.bubble.css",
                "node_modules/flatpickr/dist/flatpickr.min.css",
                "node_modules/gridjs/dist/theme/mermaid.min.css",
                "node_modules/swiper/swiper-bundle.min.css",
                "node_modules/swiper/modules/navigation.css",


                //js
                "resources/js/app.js",
                "resources/js/config.js",
                "resources/js/layout.js",
                "resources/js/pages/dashboard.js",
                "resources/js/pages/app-chat.js",
                "resources/js/pages/gallery.js",
                "resources/js/pages/pos.js",
                "resources/js/pages/setting.js",
                "resources/js/pages/widgets.js",
                "resources/js/pages/categories.js",
                "resources/js/components/extended-rating.js",
                "resources/js/components/extended-sweetalert.js",
                "resources/js/components/apexchart-area.js",
                "resources/js/components/apexchart-bar.js",
                "resources/js/components/apexchart-boxplot.js",
                "resources/js/components/apexchart-bubble.js",
                "resources/js/components/apexchart-candlestick.js",
                "resources/js/components/apexchart-column.js",
                "resources/js/components/apexchart-heatmap.js",
                "resources/js/components/apexchart-line.js",
                "resources/js/components/apexchart-mixed.js",
                "resources/js/components/apexchart-pie.js",
                "resources/js/components/apexchart-polar-area.js",
                "resources/js/components/apexchart-radar.js",
                "resources/js/components/apexchart-radialbar.js",
                "resources/js/components/apexchart-scatter.js",
                "resources/js/components/apexchart-timeline.js",
                "resources/js/components/apexchart-treemap.js",
                "resources/js/components/form-clipboard.js",
                "resources/js/components/form-quilljs.js",
                "resources/js/components/form-fileupload.js",
                "resources/js/components/form-slider.js",
                "resources/js/components/form-wizard.js",
                "resources/js/components/form-flatepicker.js",
                "resources/js/components/maps-vector.js",
                "resources/js/components/maps-canada.js",
                "resources/js/components/maps-iraq.js",
                "resources/js/components/maps-russia.js",
                "resources/js/components/maps-spain.js",
                "resources/js/components/maps-us-aea-en.js",
                "resources/js/components/maps-us-lcc-en.js",
                "resources/js/components/maps-us-mill-en.js",
                "resources/js/components/maps-in-mill-en.js",
                "resources/js/components/maps-google.js",
                "resources/js/components/table-gridjs.js",
                "resources/js/pages/coming-soon.js",
                "resources/js/pages/product.js",
                "resources/js/pages/auth-custom.js"

            ],
            refresh: true,
        }),
    ],
    build: {
        chunkSizeWarningLimit: 1000,
      }
      
});
