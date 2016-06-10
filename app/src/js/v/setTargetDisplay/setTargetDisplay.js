const setTargetDisplay = (el, displayType) => {
    console.log(displayType);
    if (displayType) {
        el.style.display = displayType.trim();
    } else if (el.style.display === 'none') {
        el.style.display = 'block';
    } else {
        el.style.display = 'none';
    }
};

export default setTargetDisplay;
