import { addEventToNodes, id, setTargetDisplay, getFields, klass } from './v/index';

function setDisplay(e) {
    // get data attributes
    let str = e.target.dataset.setTargetDisplay;
    str = str.split(',');

    const target = id(str[0]);
    const targetDisplayType = str[1];

    setTargetDisplay(target, targetDisplayType);
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
    addEventToNodes('click', toggleTriggerFields, setDisplay);
}

const formSetup = {
    init,
    setDisplay,
    updateDateAndLocationText,
};

export default formSetup;
