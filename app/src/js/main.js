const petDetectrApp = petDetectrApp || {};

petDetectrApp.formSetup = function formSetup(formName = 'report_form') {
    // Pet info
    this.petStatus = document[formName].status;
    this.petName = document[formName].pet_name;
    this.species = document[formName].species;
    this.breed = document[formName].breed;
    this.size = document[formName].size;
    this.colour = document[formName].colour;
    this.isChipped = document[formName].is_chipped;
    this.chipNumber = document[formName].chip_number;
    this.collar = document[formName].collar;
    this.date = document[formName].date;
    this.location = document[formName].location;

    // Reporter info
    this.name = document[formName].name;
    this.email = document[formName].email;
    this.phone = document[formName].phone;

    // Grab radio buttons and text nodes
    this.lastSeenText = document.querySelectorAll('.js-seen-found-text');
    this.chipNumber = document.querySelector('#chip-number-wrap');

    this.addEventToNodes('click', this.petStatus, this.updateDateAndLocationText);
    this.addEventToNodes('click', this.isChipped, this.hideShowChipNumber);
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
