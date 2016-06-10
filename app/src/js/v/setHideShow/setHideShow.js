import addClass from '../addClass/index.js';
import removeClass from '../removeClass/index.js';
import defaults from '../defaults/index.js';

const setHideShow = (el, displayBoolean, className = defaults.hideClassName) => {
    if (displayBoolean) {
        removeClass(el, className);
    } else {
        addClass(el, className);
    }
};

export default setHideShow;
