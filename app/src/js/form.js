import { addEventToNodes, id, setHideShow, getFields, klass } from './v/index.js';

function toggleFieldVisibility(e) {
    // get data attributes
    const radioToggleTargetElement = id(e.target.dataset.toggleTarget);
    const radioToggleBoolean = e.target.dataset.toggleTargetVisibility;

    setHideShow(radioToggleTargetElement, radioToggleBoolean);
}

function updateDateAndLocationText(e) {
    const currentStatus = e.target.value;

    let lastSeenValue = '';

    if (currentStatus === 'lost') {
        lastSeenValue = 'last seen';
    } else if (currentStatus === 'found') {
        lastSeenValue = 'found';
    } else {
        lastSeenValue = 'reported';
    }

    // updates all the text nodes
    for (let i = 0, max = formSetup.lastSeenText.length; i < max; i++) {
        formSetup.lastSeenText[i].innerHTML = lastSeenValue;
    }
}

function init(formName = 'report_form') {
    // Pet info
    const petStatusInput = document[formName].status;

    // Grab radio buttons and text nodes
    const toggleTriggerFields = getFields(formName, 'js-field-toggle-trigger');

    formSetup.lastSeenText = klass('.js-seen-found-text');

    addEventToNodes('click', petStatusInput, updateDateAndLocationText);
    addEventToNodes('click', toggleTriggerFields, toggleFieldVisibility);
}

const formSetup = {
    init,
    toggleFieldVisibility,
    updateDateAndLocationText,
};

export default formSetup;
