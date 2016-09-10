const objectKeyValuesToString = (object, divider1, divider2) => {
    let str = '';
    Object.keys(object).forEach(key => {
        str += `${key}${divider1}${object[key]}${divider2}`;
    });
    return str;
};

export default objectKeyValuesToString;
