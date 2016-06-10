import { hide, show, id, qa, addEventToNodes } from './v/index';

const generatePreview = (e) => {
    const imagePreview = id('pet_photo');

    const spinner = id('spinner');

    const file = e.target.files[0];
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
};

function init() {
    // grab image placeholder and file input
    const imageInputs = qa('input[type="file"]');
    addEventToNodes('change', imageInputs, generatePreview);
}

const fileUpload = {
    init,
};

export default fileUpload;
