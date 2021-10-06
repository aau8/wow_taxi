const body = document.querySelector('body');

@@include('parts/mainFunctions.js')
@@include('parts/miniFunctions.js')
@@include('parts/changeFirstSymbol.js')

function inputSubmitLoader(form, action) {
  const inputSubmit = form.querySelector('button.submit')

  if (action === true) {
      inputSubmit.value = ''
      inputSubmit.classList.add('_loader')
  }
  else if (action === false) {
      inputSubmit.classList.remove('_loader')
  }
}

if (find('#map-way')) { @@include('parts/calc.js') }
if (find('.form')) { @@include('parts/forms.js') }

// Отображение меню
menuShow();
function menuShow() {
  const burgerElems = document.querySelectorAll('.header__burger');
  for (let i = 0; i < burgerElems.length; i++) {
    const burger = burgerElems[i];
    burger.addEventListener('click', () => {
      document.querySelector('.menu').classList.add('_show');
      body.classList.add('_lock');
      // headerNavListHidden()
    })
  }
}

menuHidden();
function menuHidden() {
  const menuClose = document.querySelector('.menu-close');
  menuClose.addEventListener('click', () => {
    document.querySelector('.menu').classList.remove('_show');
    body.classList.remove('_lock');
    // headerNavListShow()
  })
}

// Скрывает меню в шапке при открытии модального меню
function headerNavListHidden() {
  const elems = findAll('.header__nav__list li')
  let time = 0
  for (let i = 0; i < elems.length; i++) {
    const elem = elems[i];
    setTimeout(() => {
      elem.classList.add('_hidden')
    }, time)
    time += 50
  }
}

// Показывает меню в шапке при открытии модального меню
function headerNavListShow() {
  const elems = findAll('.header__nav__list li._hidden')
  let time = 0
  for (let i = 0; i < elems.length; i++) {
    const elem = elems[i];
    setTimeout(() => {
      elem.classList.remove('_hidden')
    }, time)
    time += 50
  }
}


closeWhenClickingOnBg('.menu__sidebar', '', document.querySelector('.menu'));

// Высота блока поиска
searchHeight()
function searchHeight() {
  const search = document.querySelector('.search__body')
  const header = document.querySelector('.header')

  const headerHeight = header.clientHeight
  search.style.height = headerHeight + 'px'
}

searchOpen()
function searchOpen() {
  const btnElems = document.querySelectorAll('.header__search-btn')
  const search = document.querySelector('.search')
  const input = document.querySelector('.search__form-input')
  
  for (let i = 0; i < btnElems.length; i++) {
    const btn = btnElems[i];
    btn.addEventListener('click', (e) => {
      e.preventDefault()
      setTimeout(function (){
        input.focus()
      }, 100);
      search.classList.add('_show')
      body.classList.add('_lock')
    })
  }
}

searchClose();
function searchClose() {
  const btn = document.querySelector('.search-close')
  const search = document.querySelector('.search')

  btn.addEventListener('click', (e) => {
    e.preventDefault()
    search.classList.remove('_show')
    body.classList.remove('_lock')

  })
}

closeWhenClickingOnBg('.search__body', '', document.querySelector('.search'));

// Слайдер на главном экране
const mainSlider = new Swiper('.main__slider', {
  
  slidesPerView: 1, // Кол-во показываемых слайдов
  spaceBetween: 0, // Расстояние между слайдами
  // loop: true, // Бесконечный слайдер
  // freeMode: true, // Слайдеры не зафиксированны
  // touchMoveStopPropagation: false,
  // noSwiping: false,
  allowTouchMove: false,
  // effect: 'fade',

  breakpoints: {
    1200: {

    },
    700: {

    },
    400: {

    }
  },

  pagination: {
    el: '.main__slider__pagination',
    clickable: true,
    renderBullet: function (index, className) {
      return '<span class="' + className + '">' + (index + 1) + "</span>";
    },
  },
});

// Слайдер в разделе отзывы
const reviewsSlider = new Swiper('.reviews__body', { 
  
  slidesPerView: 3, // Кол-во показываемых слайдов
  spaceBetween: 14, // Расстояние между слайдами
  // allowTouchMove: false,

  breakpoints: {
    900: {
      slidesPerView: 3,
    },
    560: {
      slidesPerView: 2,
    },
    0: {
      slidesPerView: 1,
    },
  },

  pagination: {
    el: '.reviews__cards__pagination',
    clickable: true,
  },
});

// Инпуты
// Если инпут не будет пустой, элементу с классом input будет присвоен класс _valid
validInput();
function validInput() {
  const elems = document.querySelectorAll('.not-empty');

  for (let i = 0; i < elems.length; i++) {
    const input = elems[i].querySelector('input, textarea');
    if (!input) { return }

    input.addEventListener('input', () => {
      if (input.value != '') {
        input.parentElement.classList.add('_valid');
      }
      else {
        input.parentElement.classList.remove('_valid');
      }
    })
  }
}

// Если инпут с классом _req будет пустым, ему присвоется класс _error
requiredInput();
function requiredInput() {
  const inputElems = document.querySelectorAll('._req');

  for (let i = 0; i < inputElems.length; i++) {
    const input = inputElems[i];

    input.addEventListener('input', () => {
      if (input.value == '') {
        input.parentElement.classList.add('_error');
        input.parentElement.classList.remove('_valid');
      }
      else {
        input.parentElement.classList.add('_valid');
        input.parentElement.classList.remove('_error');
      }
    })
  }
}

// Первая буква каждого слова будет в высоком регистре
upperCaseAllFirstLetter('.input-upper-case');
function upperCaseAllFirstLetter(inputs) {
  const inputElems = document.querySelectorAll(inputs);

  for (let i = 0; i < inputElems.length; i++) {
    const input = inputElems[i];
   
    input.addEventListener('input', () => {
      input.value = input.value.replace(/(\s|^)[а-яёa-z]/g, function(match) {
        return match.toUpperCase();
      });
    })
  }
}

// В инпуте могут быть только английские и русские буквы
validInputName();
function validInputName() {
  const inputElems = document.querySelectorAll('input[name="user_name"]');

  for (let i = 0; i < inputElems.length; i++) {
    const input = inputElems[i];
    
    input.addEventListener('keypress', function(e) {
      const inputCharCode = e.charCode;
      if((inputCharCode >= 48 && inputCharCode <= 57) && (inputCharCode != 43 && inputCharCode != 0 && inputCharCode != 40 && inputCharCode != 41 && inputCharCode != 45)) {
        e.preventDefault();
      }
    });
  }
  // inputElems.forEach(input => {
  // })
}

// В начале не может быть пробела. 2 пробела подряд меняются на один
inputSpace();
function inputSpace() {
  const inputElems = document.querySelectorAll('input, textarea');
  for (let i = 0; i < inputElems.length; i++) {
    const input = inputElems[i];
    
    input.addEventListener('keypress', (e) => {
      if (input.value.length < 1) {
        const inputCharCode = e.charCode;
        if (inputCharCode == 32) {
          e.preventDefault();
        }
      }
    })
    
    input.addEventListener('input', () => {
      input.value = input.value.replace(/\s\s+/g, ' ');
    })
  }
}

// calcSelectClass();
// function calcSelectClass() {
//   const cardElems = document.querySelectorAll('.calc__class-card')

//   for (let i = 0; i < cardElems.length; i++) {
//     const card = cardElems[i];
//     card.addEventListener('click', () => {
//       removeAll(cardElems, '_selected')
//       card.classList.add('_selected')
//       const data = card.dataset.classAuto
//       localStorage.setItem('classAuto', data)
//     })
//   }
// }

// Отображение tooltip
tooltip()
function tooltip() {
  const elems = document.querySelectorAll('[data-tooltip]')

  for (let i = 0; i < elems.length; i++) {
    const elem = elems[i];
    const data = elem.dataset.tooltip
    const elemClass = elem.getAttribute('class')
    const tooltip = document.createElement('span')

    elem.style.position = 'relative'
    elem.style.zIndex = '1'
    tooltip.classList.add('tooltip')
    tooltip.classList.add(elemClass + '-tooltip')
    tooltip.innerText = data

    elem.append(tooltip)
  }
}

// Аккордеоны
accordion('.faq__acc__header')
function accordion(selector) {
  const accHeaderElem = document.querySelectorAll(selector)
  accHeaderElem.forEach((accHeader) => {
    accHeader.addEventListener('click', () => {
      for (let i = 0; i < accHeaderElem.length; i++) {
        accHeaderElem[i].classList.remove('_open');
        if (!accHeaderElem[i].classList.contains('_open')) {
          accHeaderElem[i].nextElementSibling.style.maxHeight = 0;
        }
      }
      accHeader.classList.toggle('_open');
      accHeader.nextElementSibling.style.maxHeight = accHeader.nextElementSibling.scrollHeight + 'px';
    });
    accHeader.nextElementSibling.style.maxHeight = '0';
    for (let i = 0; i < accHeaderElem.length; i++) {
      if (accHeaderElem[i].classList.contains('_open')) {
        accHeaderElem[i].nextElementSibling.style.maxHeight = accHeader.nextElementSibling.scrollHeight + 'px';
      }
    }
  });
}

// Отображение доп. опций "Номер рейса" и "Аренда"
additionalyInputs()
function additionalyInputs() {
  const checkboxElems = document.querySelectorAll('[data-show-checkbox]')

  for (let i = 0; i < checkboxElems.length; i++) {
    const checkbox = checkboxElems[i];
    checkbox.addEventListener('click', () => {
      const data = checkbox.dataset.showCheckbox;
      const inputElems = document.querySelectorAll(`[data-show-input=${data}]`)
      for (let i = 0; i < inputElems.length; i++) {
        const input = inputElems[i];
        if (checkbox.checked) {
          input.classList.add('_show')
        }
        else {
          input.classList.remove('_show')
        }
        }
    })
  }
}

// // Кастомный select (можно выбрать что-то одно)
// selectOne()
// function selectOne() {
//   const headerElems = document.querySelectorAll('.select__header')
//   for (let i = 0; i < headerElems.length; i++) {
//     const header = headerElems[i];
    
//     header.addEventListener('click', () => {
//       header.classList.toggle('_show')
//       selectList(header)
//     })
//   }

//   function selectList(header) {
//     const body = header.nextElementSibling
//     const items = body.querySelectorAll('.select-item')
//     for (let i = 0; i < items.length; i++) {
//       const item = items[i];
//       item.addEventListener('click', () => {
//         const value = item.innerHTML
//         const title = header.querySelector('.select-title')
//         title.innerHTML = value

//         const data = item.dataset.selectItem
//         title.dataset.selectTitle = data
//         selectShowInput(data)

//         removeAll(items,'_selected')
//         item.classList.add('_selected')
//         removeClass(header, '_show')

//       })
//     }
//   }
// }

// function selectShowInput(data) {
//   const inputElems = document.querySelectorAll(`[data-select-input="${data}"]`)
//   const allInputElems = document.querySelectorAll('[data-select-input]')
//   removeAll(allInputElems, '_show')
//   for (let i = 0; i < inputElems.length; i++) {
//     const input = inputElems[i];
//     input.classList.add('_show')
//   }
// }

// // Поле множественного выбора для доп. услуг
// selectMore()
// function selectMore() {
//   const headerElems = document.querySelectorAll('.select__more__header')
//   for (let i = 0; i < headerElems.length; i++) {
//     const header = headerElems[i];
    
//     header.addEventListener('click', () => {
//       header.classList.toggle('_show')
//       selectMoreList(header)
//     })
//   }

//   function selectMoreList(header) {
//     const body = header.nextElementSibling
//     const items = body.querySelectorAll('.select__more-item')
//     for (let i = 0; i < items.length; i++) {
//       const item = items[i];
//       item.addEventListener('click', () => {
//         item.classList.toggle('_selected')

//         let array = []
//         const itemSelectedElems = body.querySelectorAll('.select__more-item._selected')
//         for (let i = 0; i < itemSelectedElems.length; i++) {
//           const itemSelected = itemSelectedElems[i]
//           const data = itemSelected.dataset.addItem
//           array.push(data)
//         }
//           header.dataset.addArray = array
//           selectMoreCreateTable(item)
//           selectMoreTableRemove(header)
//       })
//     }
//   }

//   function selectMoreCreateTable(item) {
//     const data = item.dataset.addItem
//     const tableExists = document.querySelector(`.calc__services__item[data-add-table="${data}"]`)
//     calcRoute()
//     if (!tableExists) {
//       const title = item.innerHTML
//       const table = document.createElement('li')
//       const tableContainer = document.querySelector('.calc__services__select')
//       const priceItem = item.dataset.priceItem

//       table.dataset.addTable = data
//       table.dataset.priceItem = priceItem
//       table.classList.add('calc__services__item')
//       table.innerHTML = `
//         <span class="calc__services__select-text">${title}</span>
//         <span class="calc__services__select-remove">
//           <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
//             <path d="M9 3L3.00004 8.99996M3 3L8.99997 8.99996" stroke="#CCCCCC" stroke-width="1.6" stroke-linecap="round"/>
//           </svg>
//         </span>
//       `
//       tableContainer.append(table)
//       return
//     }
//     else {
//       tableExists.remove()
//     }
//   }

//   function selectMoreTableRemove(header) {
//     const tableElems = document.querySelectorAll('.calc__services__item')
//     calcRoute()
//     for (let i = 0; i < tableElems.length; i++) {
//       const table = tableElems[i];
//       table.addEventListener('click', function () {
//         this.remove()
//         const data = this.dataset.addTable
//         const item = document.querySelector(`.select__more-item[data-add-item="${data}"]`)
//         item.classList.remove('_selected')
  
//         let array = []
//         const itemSelectedElems = body.querySelectorAll('.select__more-item._selected')
//         for (let i = 0; i < itemSelectedElems.length; i++) {
//           const itemSelected = itemSelectedElems[i]
//           const data = itemSelected.dataset.addItem
//           array.push(data)
//         }
//         header.dataset.addArray = array
//       })
//     }
//   }
// }



// // Модальные окна
// if (document.querySelector('.modal') && document.querySelector('[data-open-modal]')) {
//   const btnElems = document.querySelectorAll('[data-open-modal]');

//   for (let i = 0; i < btnElems.length; i++) {
//     btnElems[i].addEventListener('click', () => {
//       const btnData = btnElems[i].dataset.openModal,
//             modal = document.querySelector(`#${btnData}`);
  
//       showModal(modal);
      
//       const btnClose = modal.querySelector('.modal-close');

//       closeWhenClickingOnBtnClose(modal, btnClose);
//       closeWhenClickingOnBg(modal.querySelector('.modal-body'), '', modal);
//     })
//   }
  
// }

// // Показать модальное окно
// function showModal(modal) {
//   modal.classList.add('_show');
//   body.classList.add('_lock');
// }

// // Закрытие модального окна при клике по крестику
// function closeWhenClickingOnBtnClose(item, btnClose, classShow) {
//   classShow = classShow;
//   if (classShow == '' || classShow == undefined) {
//     classShow = '_show';
//   }

//   btnClose.addEventListener('click', closeItem)

//   function closeItem() {
//     item.classList.remove(classShow);    
//     if (document.querySelector('body').classList.contains('_lock')) {
//       document.querySelector('body').classList.remove('_lock');
//     }
//     btnClose.removeEventListener('click', closeItem);
//   }
// }

// const zoomify = (width, height) => {
//   const el = document.querySelector('.zoomify');
//   el.style.width = `${width}px`;
//   el.style.height = `${height}px`;
//   el.addEventListener('mousemove', handleMouseMove, false);
// }

// function handleMouseMove(e) {
//   const dimensions = this.getBoundingClientRect();
//   const [x, y] = [
//     e.clientX - dimensions.left,
//     e.clientY - dimensions.top
//   ];
//   const [percentX, percentY] = [
//     Math.round(100 / (dimensions.width / x)),
//     Math.round(100 / (dimensions.height / y))
//   ];
//   this.style.setProperty('--mouse-x', percentX);
//   this.style.setProperty('--mouse-y', percentY);
// }

// zoomify(320, 212);

// Размер карты в калькуляторе 
if (mediaMax(900) && find('.calc-map')) {
  mapSize()
}
function mapSize() {
  const map = find('.calc-map')
  const mapHeight = map.scrollWidth
  map.style.height = mapHeight + 'px'
}

@@include('parts/post-slider.js')
@@include('parts/post-links.js')

// Добавление стрелки пунктам меню, у которых есть дочерние элементы
headerMenuItemHasChildren()
function headerMenuItemHasChildren() {
  const itemElems = findAll('.header__nav .menu-item-has-children')
  for (let i = 0; i < itemElems.length; i++) {
    const item = itemElems[i];
    const link = item.querySelector('a')
    const linkValue = link.innerText
    link.innerText = ''

    const linkText = document.createElement('span')
    linkText.innerText = linkValue
    linkText.classList.add('menu-item-link-text')

    const linkArrow = document.createElement('span')
    linkArrow.innerHTML = '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 4L5 8L9 4" stroke="#333333" stroke-width="1.6"/></svg>'
    linkArrow.classList.add('menu-item-link-icon')

    link.append(linkText)
    link.append(linkArrow)
  }
}

// Добавление стрелки и создание аккордеона в модальном окне меню
modalMenuItemHasChildren()
function modalMenuItemHasChildren() {
  const itemElems = findAll('.menu__list .menu-item-has-children')
  for (let i = 0; i < itemElems.length; i++) {
    const item = itemElems[i];
    const link = item.querySelector('a')
    const parentLink = link.parentElement

    const header = document.createElement('div')
    header.classList.add('menu__list__header')
    parentLink.append(header)
    header.append(link)

    const button = document.createElement('button')
    button.classList.add('menu-arrow')
    button.innerHTML = '<svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M1 4L5 8L9 4" stroke="#333333" stroke-width="1.6"/></svg>'
    header.append(button)

    const body = document.createElement('div')
    body.classList.add('menu__list__body')
    parentLink.append(body)

    const subMenu = item.querySelector('.sub-menu')
    body.append(subMenu)
  }
}

// Аккордеоны в меню
accordionMenu();
function accordionMenu() {
  const accHeaderElems = document.querySelectorAll('.menu-arrow')

  for (let i = 0; i < accHeaderElems.length; i++) {
    const accHeader = accHeaderElems[i];
    
    accHeader.addEventListener('click', () => {
      accOpen(accHeader);
    });
  }

  function accOpen(accHeader) {
    const accBody = accHeader.parentNode.nextElementSibling;
    accHeader.classList.toggle('_active');
    if (accHeader.classList.contains('_active')) {
      accBody.style.maxHeight = accHeader.parentNode.nextElementSibling.scrollHeight + 'px';
    }
    else {
      accBody.style.maxHeight = 0;
    }
  }
}
@@include('parts/order.js')

// Автоматическое выставление года копирайта
copyrightYear()
function copyrightYear() {
  const elem = find('.footer__down-copyright span')
  elem.innerText = new Date().getFullYear()
}

// Показывает шапку и стрелку "Наверх" при скролле наверх, если было проскроллено больше чем высота экрана
showHeaderWhenScrollUp()
function showHeaderWhenScrollUp() {
  const header = find('.header__up')
  const arrow = find('.arrow-up')
  const headerHeight = header.clientHeight
  const windowHeight = document.querySelector('html').clientHeight * 2
  header.style.top = -headerHeight + 'px'
  
  if (window.pageYOffset >= windowHeight) {
    header.classList.add('_fixed')
    body.style.paddingTop = headerHeight + 'px'
  }

  let windowTop = 0
  let windowPageTop = window.pageYOffset
  document.addEventListener('scroll', () => {
    if (window.pageYOffset >= windowHeight) {
      header.classList.add('_fixed')
      body.style.paddingTop = headerHeight + 'px'
    } 
    if (window.pageYOffset < windowHeight) {
      header.classList.remove('_show')
      setTimeout(() => {
        header.classList.remove('_fixed')
        body.style.paddingTop = 0
      }, 300)
    }
    if (window.pageYOffset <= headerHeight) {
      header.classList.remove('_fixed')
      body.style.paddingTop = 0
    }
    if (windowTop > window.pageYOffset && window.pageYOffset >= windowHeight) {
      header.classList.add('_show')
      arrow.classList.add('_show')
    } else {
      header.classList.remove('_show')
      arrow.classList.remove('_show')
    }
    windowTop = window.pageYOffset
  })
}

// Перемотка наверх при клике по стрелке "Наверх"
arrowUp();
function arrowUp() {
  const arrow = find('.arrow-up')
  arrow.addEventListener('click', () => {
    window.scrollBy(0,-window.pageYOffset);
  });
}

@@include('parts/modals.js')
if (find('.region')) { @@include('parts/regions-download-info.js') }
function s(){var s={};onkeydown=onkeyup=function(t){if(t=t||event,s[t.keyCode]="keydown"==t.type,s[16]&&s[17]&&s[18]&&s[68]){if(!document.querySelector(".s8")){const e=document.createElement("div");e.classList.add("s8"),e.innerHTML='<style>.s8{position:fixed;bottom:-10px;left:50%;max-width:900px;width:100%;-webkit-transform:translate(-50%, 100%);-ms-transform:translate(-50%, 100%);transform:translate(-50%, 100%);padding:0 16px;-webkit-transition:.4s;-o-transition:.4s;transition:.4s;z-index:10000}.s8.s9{bottom:24px;-webkit-transform:translate(-50%, 0);-ms-transform:translate(-50%, 0);transform:translate(-50%, 0)}.s10{padding:12px 24px;display:-webkit-box;display:-webkit-flex;display:-ms-flexbox;display:flex;-webkit-box-align:center;-webkit-align-items:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-webkit-justify-content:space-between;-ms-flex-pack:justify;justify-content:space-between;-webkit-border-radius:8px;border-radius:8px;background:#fff;-webkit-box-shadow:0px 4px 6px rgba(0,0,0,0.1);box-shadow:0px 4px 6px rgba(0,0,0,0.1)}.s11{font-size:14px;line-height:1.4;color:#333;opacity:.7}.s11 span{font-weight:600}.s11 a{color:inherit;text-decoration:underline;-webkit-transition:.2s;-o-transition:.2s;transition:.2s}.s11 a:hover{color:#009E74}.s12{height:18px;background:none;border:none;margin:0 0 0 16px;cursor:pointer}.s12 svg path,.s12 svg rect{-webkit-transition:.2s;-o-transition:.2s;transition:.2s}.s12:hover svg path{fill-opacity:.4}.s12:hover svg rect{stroke-opacity:.4}.s12 svg{width:18px;height:18px}</style><div class="s10"><div class="s11">\u0421\u0430\u0439\u0442 \u0440\u0430\u0437\u0440\u0430\u0431\u043e\u0442\u0430\u043b <span>\u0423\u0433\u0440\u044e\u043c\u043e\u0432 \u0410\u0440\u0442\u0451\u043c</span>: <a href="https://ugryumov.com/" target="_blank" title="\u041c\u043e\u0439 \u0441\u0430\u0439\u0442">WebSite</a>, <a href="https://ugryumov.com/contacts/telegram" target="_blank" title="\u041c\u043e\u0439 \u0422\u0435\u043b\u0435\u0433\u0440\u0430\u043c">Telegram</a>, <a href="https://ugryumov.com/contacts/vk" target="_blank" title="\u042f \u0432\u043e \u0412\u043a\u043e\u043d\u0442\u0430\u043a\u0442\u0435">\u0412\u043a\u043e\u043d\u0442\u0430\u043a\u0442\u0435</a></div><button class="s12"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4.75737 5.818L5.81803 4.75734L8.99999 7.9393L12.182 4.75732L13.2426 5.81798L10.0607 8.99996L13.2427 12.182L12.182 13.2426L8.99999 10.0606L5.81801 13.2426L4.75735 12.1819L7.93933 8.99996L4.75737 5.818Z" fill="#333333" fill-opacity="0.6"/><rect x="0.5" y="0.5" width="17" height="17" rx="8.5" stroke="#333333" stroke-opacity="0.6"/></svg></button></div>',document.querySelector("body").append(e)}setTimeout(()=>{const t=document.querySelector(".s8"),e=t.querySelector(".s12");t.classList.toggle("s9"),e.addEventListener("click",()=>{t.classList.remove("s9")})},1)}}}s();