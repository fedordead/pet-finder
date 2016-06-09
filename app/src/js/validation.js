import V from './lib.js';

function clearValidationIndicators(e) {
    V.removeClass(e.target, 'is-invalid');
    V.setHideShow(e.target.nextElementSibling, false);
}

function validateRequired(e) {
    if (e.target.value === '') {
        V.addClass(e.target, 'is-invalid');
        V.setHideShow(e.target.nextElementSibling, true);
    }
}

function init(formName = 'report_form') {
    // Grab required fields
    const requiredFields = V.getFields(formName, 'js-required-field');

    // Basic required validation
    V.addEventToNodes('blur', requiredFields, validateRequired);
    V.addEventToNodes('focus', requiredFields, clearValidationIndicators);
}

const validation = {
    init,
};

export default validation;
