import addClass from './addClass';
import removeClass from './removeClass';

const setHideShow = (el, displayBoolean) => {
    if (displayBoolean) {
        removeClass(el, 'h-hide');
    } else {
        addClass(el, 'h-hide');
    }
};

export default setHideShow;
