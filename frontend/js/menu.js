const hamburger = document.querySelector("[data-js='hamburger']")

hamburger.addEventListener('click', () => {
  if (hamburger.classList.contains('is-active')) {
    hamburger.classList.remove('is-active')
    return
  }

  hamburger.classList.add('is-active')
})
