import { addEventToNodes, id, setTargetDisplay, getFields, klass } from './v/index';

/**
* Form Controller
*/

// Initialise a form
function init(formName = 'report_form') {
    // Return if no form on page
    if (document[formName] === undefined) { return; }

    // Get interactive elements
    const petStatusEl = document[formName].status;
    const toggleEls = getFields(formName, 'js-field-toggle-trigger');

    // Attach event listeners
    addEventToNodes('click', petStatusEl, updatePetStatus);
    addEventToNodes('click', toggleEls, showHideFields);
}

// Show/hide form fields depending on toggle
function showHideFields(e) {
    let str = e.target.dataset.setTargetDisplay;
    str = str.split(',');

    // Get target element and the display type
    const target = id(str[0]);
    const targetDisplayType = str[1];

    setTargetDisplay(target, targetDisplayType);
}

// Update the pet status based on input
function updatePetStatus(e) {
    const currentStatus = e.target.value;
    const lastSeenTextElements = klass('.js-seen-found-text');
    let lastSeenValue = 'reported';

    if (currentStatus === 'lost') {
        lastSeenValue = 'last seen';
    } else if (currentStatus === 'found') {
        lastSeenValue = 'found';
    }

    // updates all the text nodes
    for (let i = 0, max = lastSeenTextElements.length; i < max; i++) {
        lastSeenTextElements[i].innerHTML = lastSeenValue;
    }
}

const formCtrl = {
    init,
    showHideFields,
    updatePetStatus,
};

export default formCtrl;
