import scrollContent from '../libs/modules/scrollContent.js';
import addServicesSlider from '../libs/modules/addServicesSlider.js';
import customRange from '../libs/modules/customRange.js';
import customSelect from '../libs/modules/customSelect.js';
import tabs from '../libs/modules/tabs.js';

document.addEventListener('DOMContentLoaded', function(e) {

    const addServicesSliderTrue = document.querySelector('.add-services-slider');
    const scrollContentTrue = document.querySelector('.header-page__icon');
    const customRangeTrue = document.querySelector('.custom-range');
    const customSelectTrue = document.querySelector('.custom-select');
    const tabsTrue = document.querySelector('.tab');

    addServicesSliderTrue ? addServicesSlider.init() : false;
    scrollContentTrue ? scrollContent.init() : false;
    customRangeTrue ? customRange.init() : false;
    customSelectTrue ? customSelect.init() : false;
    tabsTrue ? tabs.init() : false;
    
});