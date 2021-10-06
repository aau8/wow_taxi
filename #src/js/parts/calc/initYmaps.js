ymaps.ready(init)
function init() {
  let myMap = new ymaps.Map('map-way', {
    center = [44.948237, 34.100318],
    zoom: 8,
    controls: ["zoomControl"],
  }, 
  {
    buttonMaxWidth: 300
  })
  // Отключаем зум скроллом мыши
  myMap.behaviors.disable('scrollZoom')
  // myMap.behaviors.disable('drag')
  

  let myCollection = new ymaps.GeoObjectCollection()

  // Подсказки у инпутов "От куда" и "Куда"
  let addressWhereFrom = new ymaps.SuggestView('calc-address_where_from', {
    offset: [-2, 3],
    results: 5,
    boundedBy: myMap.getBounds(),
  });

  let addressWhere = new ymaps.SuggestView('calc-address_where', {
    offset: [-2, 3],
    results: 5,
    boundedBy: myMap.getBounds(),
  });

  // Собитие выбора подсказок
  let addressInputs = [addressWhereFrom, addressWhere]

  for (let i = 0; i < addressInputs.length; i++) {
    const input = addressInputs[i];

    input.events.add('select', () => {
      suggest = input.state.get('request')

      // адрес инпута "Откуда"
      fromValue = addressInputs[0].state.get('request')
      // адрес инпута "Куда"
      whereValue = addressInputs[1].state.get('request')

      let addressArr = [fromValue, whereValue]

      if (fromValue && whereValue) {
        // создаем маршрут по указанных адресам
        let multiRoute = new ymaps.multiRouter.MultiRoute({
          referencePoints: addressArr,
          params: {
            results: 1,
            routingMode: 'auto'
          }
        },
        {
          boundsAutoApply: true
        })

        // размещаем маршрут на карте
        myCollection.removeAll()
        myCollection.add(multiRoute)

        myMap.geoObjects.add(myCollection)
        multiRoute.model.events.add('requestsuccess', () => {
          let activeRoute = multiRoute.getActiveRoute()

          // Расстояние поездки в км
          let distance = activeRoute.properties.get('distance').text
          let duration = activeRoute.properties.get('duration').value

          localStorage.setItem('route', parseInt(distance))
          localStorage.setItem('travelTime', parseInt(duration))

          calc()
        })
      }
    })
  }
}
















// let suggestView = new ymaps.SuggestView('address_where_from',
// {
//   offset: [-2, 3],
//   results: 5, 
//   // provider: {
//   //   suggest: function (request, options) {
//   //     return (ymaps.suggest("Республика Крым, " + request), suggestView.state.get('open') ? ymaps.suggest(request) : ymaps.vow.resolve([]) )
//   //       .then(function (res) {
//   //         suggestView.events.fire('requestsuccess', {
//   //           target: suggestView,
//   //         })

//   //         return res;
//   //       })
//   //   }
//   // },
//   boundedBy: myMap.getBounds(),
// }
// );

// // suggestView.state.set({open: true});

// // suggestView.events.add('select', function () {
// // let activeIndex = suggestView.state.get('request')
// // activeIndex = activeIndex.replace('Россия, Республика Крым, ', '')
// // const input = document.querySelector('#ymaps_tooltip')
// // input.value = activeIndex

// // suggestView.state.set({open: false});
// // suggestView.events.once('requestsuccess', function () {
// //   suggestView.state.set('open', true);
// // }); 
// // });