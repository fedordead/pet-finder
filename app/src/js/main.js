import V from './lib.js';

const petDetectrApp = petDetectrApp || {};

petDetectrApp.formSetup = function formSetup(formName = 'report_form') {
    // Pet info
    this.petStatusInput = document[formName].status;

    // Toggle fields
    this.toggleTriggerFields = V.getFields(formName, 'js-field-toggle-trigger');

    // Required fields
    this.requiredFields = V.getFields(formName, 'js-required-field');

    // Grab radio buttons and text nodes
    this.lastSeenText = V.klass('.js-seen-found-text');

    V.addEventToNodes('click', this.petStatusInput, this.updateDateAndLocationText);
    V.addEventToNodes('click', this.toggleTriggerFields, this.toggleFieldVisibility);

    // Basic required validation
    V.addEventToNodes('blur', this.requiredFields, this.validateRequired);
    V.addEventToNodes('focus', this.requiredFields, this.clearValidationIndicators);
};

petDetectrApp.clearValidationIndicators = e => {
    V.removeClass(e.target, 'is-invalid');
    V.setHideShow(e.target.nextElementSibling, false);
};

petDetectrApp.validateRequired = e => {
    if (e.target.value === '') {
        V.addClass(e.target, 'is-invalid');
        V.setHideShow(e.target.nextElementSibling, true);
    }
};

petDetectrApp.updateDateAndLocationText = e => {
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


// Chip number h-hide switching
petDetectrApp.toggleFieldVisibility = e => {
    // get data attributes
    const radioToggleTargetElement = V.id(e.target.dataset.toggleTarget);
    const radioToggleBoolean = e.target.dataset.toggleTargetVisibility;

    V.setHideShow(radioToggleTargetElement, radioToggleBoolean);
};


petDetectrApp.fileUpload = () => {
    // grab image placeholder and file input
    const imagePreview = V.id('pet_photo');
    const imageInput = V.id('pet_photo_upload');
    const spinner = V.id('spinner');

    imageInput.addEventListener('change', () => {
        const file = imageInput.files[0];
        // use FileReader API - IE10+ only
        const reader = new FileReader();

        V.removeClass(spinner, 'h-hide');

        reader.onloadend = () => {
            imagePreview.src = reader.result;
            V.addClass(spinner, 'h-hide');
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = '';
        }

        V.removeClass(imagePreview, 'h-hide');
    });
};

petDetectrApp.formSetup();
petDetectrApp.fileUpload();

