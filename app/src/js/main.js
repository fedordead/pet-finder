const petDetectrApp = petDetectrApp || {};

petDetectrApp.formSetup = function formSetup(formName = 'report_form') {
    // Pet info
    this.petStatusInput = document[formName].status;
    this.isChippedInput = document[formName].is_chipped;

    // Required fields
    this.requiredFields = document[formName].getElementsByClassName('js-required-field');


    // Grab radio buttons and text nodes
    this.lastSeenText = document.querySelectorAll('.js-seen-found-text');
    this.chipNumber = document.querySelector('#chip-number-wrap');

    this.addEventToNodes('click', this.petStatusInput, this.updateDateAndLocationText);
    this.addEventToNodes('click', this.isChippedInput, this.hideShowChipNumber);

    // Basic required validation
    this.addEventToNodes('blur', this.requiredFields, this.validateRequired);
    this.addEventToNodes('focus', this.requiredFields, this.clearValidationIndicators);
};

petDetectrApp.clearValidationIndicators = function clearValidationIndicators(e) {
    e.target.classList.remove('is-invalid');
    petDetectrApp.setHideShow(e.target.nextElementSibling, false);
};

petDetectrApp.validateRequired = function validateRequired(e) {
    if (e.target.value === '') {
        e.target.classList.add('is-invalid');
        petDetectrApp.setHideShow(e.target.nextElementSibling, true);
    }
};

petDetectrApp.updateDateAndLocationText = function updateDateAndLocationText(e) {
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
    for (let i = 0, max = petDetectrApp.lastSeenText.length; i < max; i++) {
        petDetectrApp.lastSeenText[i].innerHTML = lastSeenValue;
    }
};

// Add listener to nodes
petDetectrApp.addEventToNodes = function addEventToNodes(evt, nodes, func) {
    for (let i = 0; i < nodes.length; i++) {
        nodes[i].addEventListener(evt, func, true);
    }
};

// Set the use of h-hide class on target
petDetectrApp.setHideShow = function showHideElement(target, display) {
    if (display) {
        target.classList.remove('h-hide');
    } else {
        target.classList.add('h-hide');
    }
};

// Chip number h-hide switching
petDetectrApp.hideShowChipNumber = function hideShowChipNumber(e) {
    const self = petDetectrApp;
    const isChipped = e.target.value === 'chipped';

    self.setHideShow(self.chipNumber, isChipped);
};

petDetectrApp.formSetup();
