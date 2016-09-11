import { debounce, q, qa, addEventToNodes, objectKeyValuesToString,
    get } from './v/index';


const updateResults = () => {
    const params = {};

    return e => {
        params[e.target.name] = e.target.value;
        const query = objectKeyValuesToString(params, '=', '&');

        get(`/partials/pet-results-list.php?${query}`,
            data => {
                const list = document.getElementById('pet-results-list');
                // TODO: find a cleaner way to do this
                list.innerHTML = data;
            }
        );
    };
};

const bindEvents = () => {
    const selectLists = qa('select');
    const nameTextInput = q('#pet-name');
    const handleChange = updateResults();
    const handleTextChange = debounce(handleChange, 250);
    nameTextInput.addEventListener('keyup', handleTextChange);
    addEventToNodes('change', selectLists, handleChange);
};

function init() {
    bindEvents();
}

const search = {
    init,
};

export default search;
