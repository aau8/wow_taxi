// Добавление data-атрибута для hover-эффекта
postLinks()
function postLinks() {
  if (!find('.content a, .footer__down-dev')) { return }
  const linkElems = findAll('.content a, .footer__down-dev')
  for (let i = 0; i<linkElems.length; i++) {
    const link = linkElems[i]
    link.setAttribute('data-link-value', link.innerHTML)
  }
}