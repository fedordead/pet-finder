import { addClass, qa, addEventToNodes, objectKeyValuesToString,
    get, removeClass, setTargetDisplay } from './v/index';


const updateResults = () => {
    const params = {};
    let query = '';

    return e => {
        if (!params[e.target.name]) {
            query += `${e.target.name}=${e.target.value}`;
        } else {
            query = objectKeyValuesToString(params, '=', '&');
        }

        get(`/partials/pet-results-list.php?${query}`,
            data => {
                document.getElementById('pet-results-list').appendChild(data);
            }
        );
    };
};

const setupAjaxers = () => {
    const selects = qa('select');
    const handleChange = updateResults();
    addEventToNodes('change', selects, handleChange);
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
