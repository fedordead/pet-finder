// adapted into es6 from the es5 _.underscore version
const debounce = (func, wait, immediate) => {
    let timeout;
    return (...params) => {
        const later = () => {
            timeout = null;
            if (!immediate) {
                func(...params);
            }
        };

        const callNow = immediate && !timeout;

        clearTimeout(timeout);
        timeout = setTimeout(later, wait);

        if (callNow) {
            func(...params);
        }
    };
};


export default debounce;
