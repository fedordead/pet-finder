const get = (url, callback) => {
    const xhr = new XMLHttpRequest();
    xhr.open('GET', url);
    xhr.onload = () => {
        if (xhr.status === 200) {
            callback(xhr.responseText);
        } else {
            console.log(`Request failed.  Returned status of ${xhr.status}`);
        }
    };
    xhr.send();
};

export default get;
