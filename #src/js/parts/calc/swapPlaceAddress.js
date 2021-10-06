// Меняет местами значения инпутов с адресами
// swapPlacesAddress()
function swapPlacesAddress() {
  const btn = find('.calc__address-swap')
  btn.addEventListener('click', (e) => {
    e.preventDefault()
    const whereFrom = find('#address_where_from').value
    const where = find('#address_where').value

    find('#address_where_from').value = where
    find('#address_where').value = whereFrom

    ymaps.ready(init);
  })
}