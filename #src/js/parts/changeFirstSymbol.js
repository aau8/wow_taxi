if (find('h1')) {
    changeFirstSymbol()
}
function changeFirstSymbol() {
    const title = document.querySelector('h1')
    const content = title.innerHTML
    const firstSymbol = content.slice(0,1)

    const elem = document.createElement('span')
    elem.innerHTML = firstSymbol

    title.innerHTML = content.slice(1)
    title.prepend(elem)
}