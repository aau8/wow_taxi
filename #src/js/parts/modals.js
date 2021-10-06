const paddingLockElems = findAll('.padding-lock')
const marginLockElems = findAll('.margin-lock')

// function modalOverflowY() {
//   const windowHeight = window.innerHeight
//   const modalElems = findAll('.modal')

//   for (let i = 0; i < modalElems.length; i++) {
//     const modal = modalElems[i];
//     const modalHeight = modal.scrollHeight

//     if (modalHeight > windowHeight) {
//       modal.style.overflowY = 'auto'
//     }
//   }
// }

openModalHash()
function openModalHash() {
  if (window.location.hash) {
    const hash = window.location.hash.substring(1)
    const modal = find(`.modal#${hash}`)

    if (modal) {
      modal.classList.add('_show');
      bodyLock()
      closeWhenClickingOnBg(`#${hash} .modal__content`, '', modal);

      if (modal.classList.contains('_show')) {
        const modalIsOpen = document.querySelector('.modal._show'), // находим модальное окно, которое сейчас открыто
              closeThisModal = document.querySelector('.modal._show .modal-close'); // находим крестик этого модального окна
  
        closeThisModal.addEventListener('click', () => {
          modalIsOpen.classList.remove('_show');
          bodyLock()
          resetHash()
        });
      }
    }
  }
}

function resetHash() {
  const windowTop = window.pageYOffset

  window.location.hash = ''
  window.scrollTo(0, windowTop)

}

// Открытие модальных окон
openModal()
function openModal() {
    const btnsOpenModal = document.querySelectorAll('[data-modal-open]');
    
    for (let i = 0; i < btnsOpenModal.length; i++) {
      const btn = btnsOpenModal[i];
      
      btn.addEventListener('click', (e) => {
        const dataBtn = btn.dataset.modalOpen;
        const modalThatOpens = document.querySelector(`#${dataBtn}`)
        
        btn.classList.add('modal-show');
        modalThatOpens.classList.add('_show');
        bodyLock()
        closeWhenClickingOnBg(`#${dataBtn} .modal__content`, '', modalThatOpens);
        window.location.hash = dataBtn
        document.removeEventListener('click', btn);
    
        // Закрытие модального окна с помощью клика по крестику
        // if (btn.classList.contains('modal-show')) {
        //   const modalIsOpen = document.querySelector('.modal._show'), // находим модальное окно, которое сейчас открыто
        //         closeThisModal = document.querySelector('.modal._show .modal-close'); // находим крестик этого модального окна
    
        //   closeThisModal.addEventListener('click', () => {
        //     btn.classList.remove('modal-show');
        //     modalIsOpen.classList.remove('_show');
        //     // bodyLock()
        //     resetHash()
        //     document.removeEventListener('click', closeThisModal);
        //   });
        // }
      });
    }
}

function bodyLock() {
  const paddingRightValue = window.innerWidth - find('body').offsetWidth + 'px'
  
  for (let i = 0; i < paddingLockElems.length; i++) {
    const elem = paddingLockElems[i];
    if (getComputedStyle(elem, null).position == 'fixed') {
      elem.style.paddingRight = paddingRightValue
    }
  }
  
  for (let i = 0; i < marginLockElems.length; i++) {
    const elem = marginLockElems[i];
    if (getComputedStyle(elem, null).position == 'fixed') {
      elem.style.marginRight = paddingRightValue
    }
  }

  body.style.paddingRight = paddingRightValue

  if (body.classList.contains('_lock')) {
    body.classList.remove('_lock');
  }
  else {
    body.classList.add('_lock');
  }
}


// Закрытие модального окна, при клике по фону
// Закрытие модального окна при клике по заднему фону
function closeWhenClickingOnBg(itemArray, classShow, itemParent) {
  classShow = classShow;
  if (classShow == '') {
    classShow = '_show';
  }
  document.addEventListener('click', (e) => {
    let itemElems = document.querySelectorAll(itemArray)

    for (let i = 0; i < itemElems.length; i++) {
      const item = itemElems[i];
      
      const target = e.target,
            itsItem = target == item || item.contains(target),
            itemIsShow = item.classList.contains(classShow);
  
      if (itemParent) {
        const itsItemParent = target == itemParent || itemParent.contains(target),
              itemParentIsShow = itemParent.classList.contains(classShow);
  
        if (!itsItem && itsItemParent && itemParentIsShow) {
          itemParent.classList.remove(classShow);
  
          if (body.classList.contains('_lock')) {
            bodyLock()
            document.removeEventListener('click', document);
          }
          
          if (window.location.hash === '#' + itemParent.getAttribute('id')) { resetHash() }
        }
      }
      else {
        if (!itsItem && itemIsShow) {
          item.classList.remove(classShow);
          if (body.classList.contains('_lock')) {
            bodyLock()
            document.removeEventListener('click', document);
          }

          if (window.location.hash === '#' + itemParent.getAttribute('id')) { resetHash() }
        }
      }

    }

    // if (find('.header__nav__list li._hidden')) { headerNavListShow() }
  })
}