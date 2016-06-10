import V from './v/index.js';

function init() {
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
}

const fileUpload = {
    init,
};

export default fileUpload;
