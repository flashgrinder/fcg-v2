import scrollContent from '../libs/modules/scrollContent.js';
import addServicesSlider from '../libs/modules/addServicesSlider.js';

document.addEventListener('DOMContentLoaded', function(e) {

    const addServicesSliderTrue = document.querySelector('.add-services-slider');
    const scrollContentTrue = document.querySelector('.header-page__icon');

    addServicesSliderTrue ? addServicesSlider.init() : false;
    scrollContentTrue ? scrollContent.init() : false;
    
    
});