// localStorage items:
// whereFrom
// where
// route
// travelTime
// classAuto

// localStorage.setItem('route', 100)

// initYandexSuggest()
// function initYandexSuggest() { // инициализация Яндекс подсказок к адресу.
//   // Выпадающая панель с поисковыми подсказками.


// // suggestView.events.add('select', function(e){
// //     $("#add-waypoint").click();
// // });	


// }

// Календарь у input date
$('input[name="date-order"]').daterangepicker({
  "singleDatePicker": true,
  "drops": "up",
  "autoApply": true,
  "locale": {
    "format": "DD.MM.YYYY",
    "separator": " - ",
    "applyLabel": "Применить",
    "cancelLabel": "Отмена",
    "fromLabel": "От",
    "toLabel": "Свой интервал",
    "customRangeLabel": "Свой интервал",
    "direction": "ltr",
    "firstDay": 1,
    "daysOfWeek": [
        "Вс",
        "Пн",
        "Вт",
        "Ср",
        "Чт",
        "Пт",
        "Сб"
    ],
    "monthNames": [
      "Январь",
      "Февраль",
      "Март",
      "Апрель",
      "Май",
      "Июнь",
      "Июль",
      "Август",
      "Сентябрь",
      "Октябрь",
      "Ноябрь",
      "Декабрь"
    ]
  }
})

@@include('calc/initYmaps.js')

deleteValueInput()
function deleteValueInput() {
    const btnElems = findAll('.delete-value')
    for (let i = 0; i < btnElems.length; i++) {
        const btn = btnElems[i];
        
        btn.addEventListener('click', () => {
            const input = btn.previousElementSibling
            const value = input.value
            input.value = ''
            input.focus()

            input.addEventListener('blur', () => {
                if (input.value === '') {
                    input.value = value
                    
                    const suggest = input.previousElementSibling
                    let suggestInterval = setInterval(() => {
                      if (suggest.style.display == 'block') {
                        suggest.style.display = 'none'
                        clearInterval(suggestInterval)
                      }
                    }, 10)
                }
            })
        })
    }
}

// const inputElems = findAll('#address_where_from, #address_where')

// for (let i = 0; i < inputElems.length; i++) {
//   const input = inputElems[i];
//   input.addEventListener('blur', e => {
//     input.value = ''
//   })
// }

// inputPointSelect('#address_where_from, #address_where', false)
// function inputPointSelect(selector, con) {
//   if (con === true) {
//     const inputElems = findAll(selector)

//     for (let i = 0; i < inputElems.length; i++) {
//       const input = inputElems[i];
//       let inputValue = input.value

//       input.parentElement.classList.add('_valid')
//       input.parentElement.classList.remove('_error')

//       input.addEventListener('blur', e => {
//         input.value = inputValue
//         input.parentElement.classList.add('_valid')
//         input.parentElement.classList.remove('_error')
//       })
//     }
//   }
//   else if (con === false) {
//     const inputElems = findAll(selector)

//     for (let i = 0; i < inputElems.length; i++) {
//       const input = inputElems[i];
//       input.addEventListener('blur', e => {
//         input.value = ''
//         input.parentElement.classList.add('_error')
//         input.parentElement.classList.remove('_valid')
//       })
//     }
//   }
// }

// Калькулятор поездки
function calcRoute() {
  const route = localStorage.getItem('route'),
        time  = localStorage.getItem('travelTime')

  const classAutoSelected = document.querySelector('.calc__class-card._selected'),
  classAuto = classAutoSelected.dataset.classAuto,
  priceAuto = classAutoSelected.dataset.priceAuto

  const minTotalPrice = 100

  let totalPrice = route * priceAuto
  if (totalPrice < minTotalPrice) {
    totalPrice = minTotalPrice
  }

  let additServiceTotalPrice = additionalServices()
  totalPrice += additServiceTotalPrice

  const calcTotal = document.querySelector('#calc-total')
  const calcRoute = document.querySelector('#calc-route')
  const calcTime = document.querySelector('#calc-time')

  calcTotal.innerHTML = totalPrice + ' ₽'
  calcRoute.innerHTML = route + ' км.'
  calcTime.innerHTML = time
}

function additionalServices() {
  const servicesItemElems = document.querySelectorAll('.calc__services__item')
  // console.log(servicesItemElems)
  let servicesItemTotalPrice = 0
  if (servicesItemElems) {
    for (let i = 0; i < servicesItemElems.length; i++) {
      const servicesItem = servicesItemElems[i];
      const servicesItemPrice = parseInt(servicesItem.dataset.priceItem)
      servicesItemTotalPrice += servicesItemPrice
      // console.log(servicesItemPrice)
    }
    // console.log(servicesItemTotalPrice)
  }
  return servicesItemTotalPrice
}

// Кастомный select (можно выбрать что-то одно)
selectOne()
function selectOne() {
  const headerElems = document.querySelectorAll('.select__header')
  for (let i = 0; i < headerElems.length; i++) {
    const header = headerElems[i];

    header.addEventListener('click', () => {
      header.classList.toggle('_show')
      selectList(header)
    })
  }

  function selectList(header) {
    const body = header.nextElementSibling
    const items = body.querySelectorAll('.select-item')
    for (let i = 0; i < items.length; i++) {
      const item = items[i];
      item.addEventListener('click', () => {
        const value = item.innerHTML
        const title = header.querySelector('.select-title')
        title.innerHTML = value

        const data = item.dataset.selectItem
        title.dataset.selectTitle = data
        selectShowInput(data)

        removeAll(items,'_selected')
        item.classList.add('_selected')
        removeClass(header, '_show')

      })
    }
  }
}

function selectShowInput(data) {
  const inputElems = document.querySelectorAll(`[data-select-input="${data}"]`)
  const allInputElems = document.querySelectorAll('[data-select-input]')
  removeAll(allInputElems, '_show')
  for (let i = 0; i < inputElems.length; i++) {
    const input = inputElems[i];
    input.classList.add('_show')
  }
}

// Поле множественного выбора для доп. услуг
selectMore()
function selectMore() {
  const headerElems = document.querySelectorAll('.select__more__header')
  for (let i = 0; i < headerElems.length; i++) {
    const header = headerElems[i];

    header.addEventListener('click', () => {
      header.classList.toggle('_show')
      selectMoreList(header)
    })
  }

  function selectMoreList(header) {
    const body = header.nextElementSibling
    const items = body.querySelectorAll('.select__more-item')
    for (let i = 0; i < items.length; i++) {
      const item = items[i];
      item.addEventListener('click', () => {
        item.classList.toggle('_selected')

        let array = []
        const itemSelectedElems = body.querySelectorAll('.select__more-item._selected')
        for (let i = 0; i < itemSelectedElems.length; i++) {
          const itemSelected = itemSelectedElems[i]
          const data = itemSelected.dataset.addItem
          array.push(data)
        }
          header.dataset.addArray = array
          selectMoreCreateTable(item)
          selectMoreTableRemove(header)
          calc()
      })
    }
  }

  function selectMoreCreateTable(item) {
    const data = item.dataset.addItem
    const tableExists = document.querySelector(`.calc__services__item[data-add-table="${data}"]`)
    // calcRoute()
    // calc()
    if (!tableExists) {
      const title = item.innerHTML
      const table = document.createElement('li')
      const tableContainer = document.querySelector('.calc__services__select')
      const priceItem = item.dataset.priceItem

      table.dataset.addTable = data
      table.dataset.priceItem = priceItem
      table.classList.add('calc__services__item')
      table.innerHTML = `
        <span class="calc__services__select-text">${title}</span>
        <span class="calc__services__select-remove">
          <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 3L3.00004 8.99996M3 3L8.99997 8.99996" stroke="#CCCCCC" stroke-width="1.6" stroke-linecap="round"/>
          </svg>
        </span>
      `
      tableContainer.append(table)
      return
    }
    else {
      tableExists.remove()
    }
  }

  function selectMoreTableRemove(header) {
    const tableElems = document.querySelectorAll('.calc__services__item')
    // calcRoute()
    // calc()
    for (let i = 0; i < tableElems.length; i++) {
      const table = tableElems[i];
      table.addEventListener('click', function () {
        this.remove()
        const data = this.dataset.addTable
        const item = document.querySelector(`.select__more-item[data-add-item="${data}"]`)
        item.classList.remove('_selected')

        let array = []
        const itemSelectedElems = body.querySelectorAll('.select__more-item._selected')
        for (let i = 0; i < itemSelectedElems.length; i++) {
          const itemSelected = itemSelectedElems[i]
          const data = itemSelected.dataset.addItem
          array.push(data)
        }
        header.dataset.addArray = array
        calc()
      })
    }
  }
}

// В карточках классов авто указывается общая цена за поездку
// function classAutoPrice() {
//   const cardAutoElems = document.querySelectorAll('.calc__class-card')
//   const route = localStorage.getItem('route')

//   for (let i = 0; i < cardAutoElems.length; i++) {
//     const cardAuto = cardAutoElems[i];

//     const priceAuto = cardAuto.dataset.priceAuto
//     const totalPriceAuto = route * priceAuto

//     const calcClassPrice = cardAuto.querySelector('.calc__class-price')
//     calcClassPrice.innerHTML = totalPriceAuto + ' ₽'
//   }
// }

// Изменение класса авто
changeClassAuto()
function changeClassAuto() {
  const cardElems = document.querySelectorAll('.calc__class-card')
  for (let i = 0; i < cardElems.length; i++) {
    const card = cardElems[i];

    card.addEventListener('click', () => { 
      removeAll(cardElems, '_selected')
      card.classList.add('_selected')
      const data = card.dataset.classAuto
      localStorage.setItem('classAuto', data)
      const calcClassPrice = card.querySelector('.calc__class-price span')
      const valueCalcClassPrice = parseInt(calcClassPrice.innerHTML)
      const calcTotal = document.querySelector('#calc-total')

      calcTotal.innerHTML = valueCalcClassPrice + ' ₽'
      calc()
    })
  }
}

// localStorage items:
// whereFrom
// where
// route
// travelTime
// classAuto

function calc() {
  const route = parseInt(localStorage.getItem('route'))
  if (route) {
    const minTotalPrice = 200
    const priceAuto = find('.calc__class-card._selected').dataset.priceAuto
    const selectedServiceElems = findAll('.calc__services__item')
    let priceServices = 0
    for (let i = 0; i < selectedServiceElems.length; i++) {
      const elem = selectedServiceElems[i];
      const priceItem = parseInt(elem.dataset.priceItem)
      priceServices += priceItem
    }
    let routePrice = route * priceAuto
    if (routePrice < minTotalPrice) {
      routePrice = minTotalPrice
    }
    const totalPrice = routePrice + priceServices

    const calcTotal = find('#calc-total')
    calcTotal.innerText = totalPrice + " ₽"
    localStorage.setItem('totalPrice', totalPrice)

    // const calcRoute = find('#calc-route')
    // calcRoute.innerText = localStorage.getItem('route')

    // const calcTime = find('#calc-time')
    // calcTime.innerText = localStorage.getItem('travelTime')
  }
}

// Оформление заказа
issueOrder()
function issueOrder() {
  const btnNext = find('.calc__footer-btn-next')
  const btnPrev = find('.calc__footer-btn-prev')
  const btnOrder = find('.calc__footer-btn-order')
  const calcComp = find('.calc__comp')
  const calcPerson = find('.calc__person')
  const calcCompReq = findAll('.calc__comp ._req')
  btnNext.addEventListener('click', (e) => {
    e.preventDefault()
    let notError = true
    for (let i = 0; i < calcCompReq.length; i++) {
      const input = calcCompReq[i];
      if (!input.parentElement.classList.contains('_valid')) {
        notError = false
      }
    }
    if (notError === true) {
      calcComp.style.display = 'none'
      calcPerson.style.display = 'grid'
      btnNext.classList.add('_hidden')
      btnOrder.classList.remove('_hidden')
      btnPrev.classList.remove('_hidden')
    }
    else {
      for (let i = 0; i < calcCompReq.length; i++) {
        const input = calcCompReq[i];
        if (!input.parentElement.classList.contains('_valid')) {
          input.parentElement.classList.add('_error')
        }
      }
    }
  })

  btnPrev.addEventListener('click', (e) => {
    e.preventDefault()

    calcComp.style.display = 'grid'
    calcPerson.style.display = 'none'
    btnNext.classList.remove('_hidden')
    btnOrder.classList.add('_hidden')
    btnPrev.classList.add('_hidden')
  })
}

// Отправка заявки рассчета стоимости
sendForm()
function sendForm() {
  const form = find('#calc_application')
  form.addEventListener('submit', async (e) => {
    e.preventDefault()

    const reqInputElems = form.querySelectorAll('input._req')
    let reqInputCompleted = true

    for (let i = 0; i < reqInputElems.length; i++) {
        const input = reqInputElems[i];

        if (input.value == '') {
            input.parentElement.classList.add('_error')
            reqInputCompleted = false
            console.log(input.value)
        }
        else {
            input.parentElement.classList.remove('_error')
        }
    }

    if (reqInputCompleted) {
      inputSubmitLoader(form, true)

      const formData = new FormData(form);
      formData.append('class_auto', classAuto())
      formData.append('services', services())
      formData.append('total_price', localStorage.getItem('totalPrice'))
      formData.append('route', localStorage.getItem('route'))
      formData.append('travel_time', localStorage.getItem('travelTime'))
      formData.append('payment_method', paymentMethod())
      formData.append('link_map', pathOnTheMap())

      const pathHandlerFile = form.getAttribute('action');

      response = await fetch(pathHandlerFile, {
        method: 'POST',
        body: formData
      })

      if (response.ok) {
        inputSubmitLoader(form, false)
        cookieData()
        form.reset()

        const inputValidElems = form.querySelectorAll('input, textarea')

        for (let i = 0; i < inputValidElems.length; i++) {
            const input = inputValidElems[i];
            input.parentElement.classList.remove('_valid')
        }
        window.location.href = form.dataset.redirect
      }
      else {
        inputSubmitLoader(form, false)
        console.log('Error');
      }
    }
  })
}

function classAuto() {
  const classAuto = find('.calc__class-card._selected')
  const data = classAuto.dataset.classAuto
  return data
}

function services() {
  const serviceElems = findAll('.calc__services__item')
  let totalPrice = 0
  let array = []
  for (let i = 0; i < serviceElems.length; i++) {
    const service = serviceElems[i]
    const title = service.querySelector('.calc__services__select-text').innerText
    const price = service.dataset.priceItem
    totalPrice += parseFloat(price)
    array.push(title)
  }
  return [totalPrice, array]
}

function timeOrder() {
  const item = find('.select-item._selected')
  const data = parseInt(item.dataset.selectItem)
  if (data === 1) {
    return [1]
  }
  if (data === 2) {
    const date = find('[name="date"]').value
    const time = find('[name="time"]').value
    return [date, time]
  }
}

function paymentMethod() {
  return find('#payment-method').innerText
}

function pathOnTheMap() {
  const where = localStorage.getItem('where')
  const whereFrom = localStorage.getItem('whereFrom')

  return `https://yandex.ru/maps/?from=api-maps&ll=34.268957%2C45.115725&mode=routes&origin=jsapi_2_1_79&rtext=${whereFrom}~${where}&rtm=atm&rtt=auto&ruri=~&z=10`
}

@@include('calc/cookieData.js')
@@include('calc/swapPlaceAddress.js') 