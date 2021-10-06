//  Удаляет класс у указанного элемента(переменной)
//  item - элемент у которого надо удалить класс
//  itemClass - класс, который надо удалить
function removeClass(item, itemClass) {
    item.classList.remove(itemClass)
}

//  Удаляет класс у массива элементов(переменной)
//  items - элементы у которых надо удалить класс
//  itemClass - класс, который надо удалить
function removeAll(items, itemClass) {
    for (let i = 0; i < items.length; i++) {
        const item = items[i]
        item.classList.remove(itemClass)
    }
}


//  Удаляет класс у массива элементов(переменной)
//  items - элементы у которых надо удалить класс
//  itemClass - класс, который надо удалить
function find(selector) {
    return document.querySelector(selector)
}

function findAll(selectors) {
    return document.querySelectorAll(selectors)
}

function mediaMax(value) {
    return window.matchMedia(`(max-width: ${parseInt(value)}px)`).matches
}

function mediaMin(value) {
    return window.matchMedia(`(min-width: ${parseInt(value)}px)`).matches
}

// возвращает куки с указанным name,
// или undefined, если ничего не найдено
function getCookie(name) {
    let matches = document.cookie.match(new RegExp(
        "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
    ));
    return matches ? decodeURIComponent(matches[1]) : undefined;
}