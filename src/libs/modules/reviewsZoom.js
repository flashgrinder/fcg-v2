import lightGallery from 'lightgallery';

// Plugins
import lgZoom from 'lightgallery/plugins/zoom';

function init() {

    lightGallery(document.getElementById('js-reviews-slider-zoom'), {
        licenseKey: '0000-0000-000-0000',
        plugins: [lgZoom],
        speed: 600,
        zoomFromOrigin: false,
        allowMediaOverlap: false,
        toggleThumb: false,
        download: false,
    });

}

export default { init }