import { addClass, getFields, addEventToNodes, removeClass, setTargetDisplay } from './v/index';

function clearValidationIndicators(e) {
    removeClass(e.target, 'is-invalid');
    setTargetDisplay(e.target.nextElementSibling, false);
}

function validateRequired(e) {
    if (e.target.value === '') {
        addClass(e.target, 'is-invalid');
        setTargetDisplay(e.target.nextElementSibling, true);
    }
}

function init(formName = 'report_form') {
    // Grab required fields
    const requiredFields = getFields(formName, 'js-required-field');

    // Basic required validation
    addEventToNodes('blur', requiredFields, validateRequired);
    addEventToNodes('focus', requiredFields, clearValidationIndicators);
}

const validation = {
    init,
};

export default validation;
