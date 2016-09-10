import { addClass, q, qa, addEventToNodes, objectKeyValuesToString,
    get, removeClass, setTargetDisplay } from './v/index';


const updateResults = () => {
    const params = {};

    return e => {
        params[e.target.name] = e.target.value;
        const query = objectKeyValuesToString(params, '=', '&');

        get(`/partials/pet-results-list.php?${query}`,
            data => {
                const list = document.getElementById('pet-results-list');
                list.innerHTML = data;
            }
        );
    };
};

// adapted into es6 from the es5 _.underscore version
const debounce = (func, wait, immediate) => {
    let timeout;
    return (...params) => {
        const later = () => {
            timeout = null;
            if (!immediate) {
                func(...params);
            }
        };

        const callNow = immediate && !timeout;

        clearTimeout(timeout);
        timeout = setTimeout(later, wait);

        if (callNow) {
            func(...params);
        }
    };
};

const setupAjaxers = () => {
    const formFields = qa('select');
    const name = q('#pet-name');
    const handleChange = updateResults();
    const handleTextChange = debounce(handleChange, 2000);
    name.addEventListener('keyup', handleTextChange);
    addEventToNodes('change', formFields, handleChange);
};

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
    setupAjaxers();
}

const validation = {
    init,
};

export default validation;
