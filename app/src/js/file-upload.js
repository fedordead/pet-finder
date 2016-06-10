import { addClass, removeClass, id } from './v';

function init() {
    // grab image placeholder and file input
    const imagePreview = id('pet_photo');
    const imageInput = id('pet_photo_upload');
    const spinner = id('spinner');

    imageInput.addEventListener('change', () => {
        const file = imageInput.files[0];

        // use FileReader API - IE10+ only
        const reader = new FileReader();

        removeClass(spinner, 'h-hide');

        reader.onloadend = () => {
            imagePreview.src = reader.result;
            addClass(spinner, 'h-hide');
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = '';
        }

        removeClass(imagePreview, 'h-hide');
    });
}

const fileUpload = {
    init,
};

export default fileUpload;
