import { addClass, qa, addEventToNodes, removeClass, setTargetDisplay } from './v/index';

const clearValidationIndicators = e => {
    removeClass(e.target, 'is-invalid');
    setTargetDisplay(e.target.nextElementSibling, 'none');
};

const validateRequired = e => {
    if (e.target.value === '') {
        addClass(e.target, 'is-invalid');
        setTargetDisplay(e.target.nextElementSibling, 'block');
    }
};

const setUpRequiredFields = () => {
    const requiredFields = qa('[required]');

    if (requiredFields) {
        // set up event listeners for required fields
        addEventToNodes('blur', requiredFields, validateRequired);
        addEventToNodes('focus', requiredFields, clearValidationIndicators);
    }
};


function init() {
    // Grab all forms fields
    setUpRequiredFields();
}

const validation = {
    init,
};

export default validation;
