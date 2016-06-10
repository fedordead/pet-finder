import addClass from '../addClass/addClass';
import removeClass from '../removeClass/removeClass';

const setHideShow = (el, displayBoolean) => {
    if (displayBoolean) {
        removeClass(el, 'h-hide');
    } else {
        addClass(el, 'h-hide');
    }
};

export default setHideShow;
