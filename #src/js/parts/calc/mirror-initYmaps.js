  // var suggestView = new ymaps.SuggestView('ymaps_tooltip', {provider: myProvider, results: 3});


  var suggestView = new ymaps.SuggestView('ymaps_tooltip', // ID input'ы
    {
      offset: [-2, 3], // Отступы панели подсказок от её положения по умолчанию. Задаётся в виде смещений по горизонтали и вертикали относительно левого нижнего угла элемента input.
      results: 5, // Максимальное количество показываемых подсказок.
      provider: {
        suggest: function (request, options) {
          return (ymaps.suggest("Республика Крым, " + request), suggestView.state.get('open') ? ymaps.suggest(request) : ymaps.vow.resolve([]) )
            .then(function (res) {
              suggestView.events.fire('requestsuccess', {
                target: suggestView,
              })

              return res;
            })
        }
      },
      boundedBy: myMap.getBounds(),
    }
  );

  suggestView.state.set({open: true});

  suggestView.events.add('select', function () {
    let activeIndex = suggestView.state.get('request')
    activeIndex = activeIndex.replace('Россия, Республика Крым, ', '')
    const input = document.querySelector('#ymaps_tooltip')

    suggestView.state.set({open: false});
    input.value = activeIndex
    suggestView.events.once('requestsuccess', function () {
      suggestView.state.set('open', true);
    });
  });


// Яндекс карта 
ymaps.ready(init);
function init () {
  // Создаем карту с добавленными на нее кнопками.
  var myMap = new ymaps.Map('map-way', {
      center: [44.948237, 34.100318],
      zoom: 8,
      controls: ["zoomControl"],
  }, {
      buttonMaxWidth: 300
  })
  myMap.behaviors.disable('scrollZoom')

  let myCollection = new ymaps.GeoObjectCollection()
  // Заолнение дат в инпутах Dadata.ru
  const dadata_token = "a0e1e8fc12f3e41d85bc576f2eebba089e7ae38e"
  let addressWhereFrom
  let addressWhere

  $("#address_where_from").suggestions({
    token: dadata_token,
    type: "ADDRESS",
    constraints: {
      locations: {
        country: "Россия",
        region: "Крым",
      },
      label: '',
    },
    restrict_value: true,
    /* Вызывается, когда пользователь выбирает одну из подсказок */
    onSelect: function(suggestion) {
      inputPointSelect('#address_where_from', true)
      addressWhereFrom = [suggestion.data.geo_lat, suggestion.data.geo_lon]
      localStorage.setItem('whereFrom', addressWhereFrom)
      var multiRoute = new ymaps.multiRouter.MultiRoute({
        // Описание опорных точек мультимаршрута.
        referencePoints: [
          addressWhereFrom,
          addressWhere
        ],
        // Параметры маршрутизации.
        params: {
          // Ограничение на максимальное количество маршрутов, возвращаемое маршрутизатором.
          results: 1,
          // Тип маршрута: на общественном транспорте.
          routingMode: "auto"
        }
    }, {
        // Автоматически устанавливать границы карты так, чтобы маршрут был виден целиком.
        boundsAutoApply: true
    });
    // Добавляем мультимаршрут на карту.
    myCollection.removeAll()
    myCollection.add(multiRoute)

    if (addressWhereFrom != undefined && addressWhere != undefined) {
      myMap.geoObjects.add(myCollection)
      multiRoute.model.events.add('requestsuccess', function() {
        let activeRoute = multiRoute.getActiveRoute();
        localStorage.setItem('route', parseInt(activeRoute.properties.get("distance").text))
        localStorage.setItem('travelTime', activeRoute.properties.get("duration").text)
        calc()
      })
    }
    }
  });
  $("#address_where").suggestions({
    token: dadata_token,
    type: "ADDRESS",
    constraints: {
      locations: {
        country: "Россия",
        region: "Крым",
      },
    },
    onSelect: function(suggestion) {
        inputPointSelect('#address_where', true)
        addressWhere = [suggestion.data.geo_lat, suggestion.data.geo_lon]
        localStorage.setItem('where', addressWhere)
        var multiRoute = new ymaps.multiRouter.MultiRoute({
          referencePoints: [
            addressWhereFrom,
            addressWhere
          ],
          params: {
            results: 1,
            routingMode: "auto"
          }
      }, {
        boundsAutoApply: true,
      });
      myCollection.removeAll()
      myCollection.add(multiRoute)
      if (addressWhereFrom != undefined && addressWhere != undefined) {
        myMap.geoObjects.add(myCollection)
        multiRoute.model.events.add('requestsuccess', function() {
          let activeRoute = multiRoute.getActiveRoute();
          localStorage.setItem('route', parseInt(activeRoute.properties.get("distance").text))
          localStorage.setItem('travelTime', activeRoute.properties.get("duration").text)
          // console.log(parseInt(activeRoute.properties.get("distance").text))
          // console.log(activeRoute.properties.get("duration").text)
          // calcRoute()
          // classAutoPrice()
          calc()
        })
      }
    }
  });
}