let petDetectrApp = petDetectrApp || {};

petDetectrApp.formSetup = function () {

    // Grab radio buttons and text nodes
    this.petStatus = document.querySelectorAll('[name="status"]');
    this.lastSeenText = document.querySelectorAll('.seen-found-text');

    // add event listeners to radio buttons
    for (let i = 0; i < this.petStatus.length; i = i + 1) {
        this.petStatus[i].addEventListener('click', this.updateDateAndLocationText, true);
    }
};

petDetectrApp.updateDateAndLocationText = function (e) {

    const currentStatus = e.target.value;
    let lastSeenValue;

    if(currentStatus === 'lost') {
        lastSeenValue = 'last seen';
    } else if(currentStatus === 'found') {
        lastSeenValue = 'found';
    } else {
        lastSeenValue = 'reported';
    }

    // updates all the text nodes
    for (let i = 0; i < petDetectrApp.lastSeenText.length; i = i + 1) {
        petDetectrApp.lastSeenText[i].innerHTML = lastSeenValue;
    }
};

petDetectrApp.formSetup();
