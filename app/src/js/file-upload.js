import { hide, show, id } from './v/index';

function init() {
    // grab image placeholder and file input
    const imagePreview = id('pet_photo');
    const imageInput = id('pet_photo_upload');
    const spinner = id('spinner');

    imageInput.addEventListener('change', () => {
        const file = imageInput.files[0];

        // use FileReader API - IE10+ only
        const reader = new FileReader();

        show(spinner);

        reader.onloadend = () => {
            imagePreview.src = reader.result;
            hide(spinner);
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            imagePreview.src = '';
        }

        show(imagePreview);
    });
}

const fileUpload = {
    init,
};

export default fileUpload;
