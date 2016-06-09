const V = {
    id: el => document.getElementById(el),

    klass: el => document.getElementsByClassName(el),

    q: el => document.querySelector(el),

    qa: el => document.querySelectorAll(el),

    removeClass: (el, className) => {
        el.classList.remove(className);
    },

    addClass: (el, className) => {
        el.classList.add(className);
    },

    addEventToNodes: (evt, nodes, func) => {
        for (let i = 0; i < nodes.length; i++) {
            nodes[i].addEventListener(evt, func, true);
        }
    },

    getFields: (formName, el) => document[formName].getElementsByClassName(el),

    nodeListToArray: nodeList => [...nodeList],

    setHideShow: (el, displayBoolean) => {
        if (displayBoolean) {
            V.removeClass(el, 'h-hide');
        } else {
            V.addClass(el, 'h-hide');
        }
    },
};

export default V;
