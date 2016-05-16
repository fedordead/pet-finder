const petDetectrApp = petDetectrApp || {};

petDetectrApp.formSetup = function formSetup() {
    // Grab radio buttons and text nodes
    this.petStatus = document.querySelectorAll('[name="status"]');
    this.lastSeenText = document.querySelectorAll('.js-seen-found-text');

    // add event listeners to radio buttons
    for (let i = 0, max = this.petStatus.length; i < max; i++) {
        this.petStatus[i].addEventListener('click', this.updateDateAndLocationText, true);
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

petDetectrApp.formSetup();
