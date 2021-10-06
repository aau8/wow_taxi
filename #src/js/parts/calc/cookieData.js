function cookieData() {

    const arr = {
      'name': find('[name="user_name"]').value,
      'phone': find('[name="user_phone"]').value,
      'where_from': find('[name="where_from-rraannddoomm"]').value,
      'where': find('[name="where-rraannddoomm"]').value,
      'date': find('[name="date-order"]').value,
      'time': find('[name="date-hours"]').value + ':' + find('[name="date-minutes"]').value,
      'message': find('[name="user_message"]').value,
      'flight_number': find('[name="flight_number"]').value,
      'services': services(),
      'class_auto': find('.calc__class-card._selected').dataset.classAuto,
      'total_price': find('#calc-total').innerText,
      'route': localStorage.getItem('route'),
      'travel_time': localStorage.getItem('travelTime'),
      'payment_method': paymentMethod(),
  
    }
    localStorage.setItem('order', JSON.stringify(arr))
  
    document.cookie = `order_data=${JSON.stringify(arr)}; path=/; max-age=7,884e+6`
  
    // saveData()
    async function saveData() {
      const formData = new FormData()
      formData.append('data', JSON.stringify(arr))
  
      const response = await fetch('save_data.php', {
        method: 'POST',
        body: formData
      })
  
      let result = await response.json()
      console.log(result)
    }
}