const petDetectrApp = petDetectrApp || {};

petDetectrApp.formSetup = function formSetup() {
    // Grab radio buttons and text nodes
    this.petStatus = document.querySelectorAll('[name="status"]');
    this.lastSeenText = document.querySelectorAll('.js-seen-found-text');
    this.isChippedSelector = document.querySelectorAll('[name=is-chipped] + label');
    this.chipNumber = document.querySelector('#chip-number-wrap');

    this.addEventToNodes('click', this.petStatus, this.updateDateAndLocationText);
    this.addEventToNodes('click', this.isChippedSelector, this.hideShowChipNumber);
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

// Toggle the h-hide class on target
petDetectrApp.toggleDisplay = function toggleDisplayOnOff(target) {
    target.classList.toggle('h-hide');
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
    const isChipped = (e.target.getAttribute('for') === 'chipped') ? true : false;

    if (isChipped) {
        self.setHideShow(self.chipNumber, true);
    } else {
        self.setHideShow(self.chipNumber, false);
    }
};

petDetectrApp.formSetup();
