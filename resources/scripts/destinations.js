const body = document.querySelector('body')
const jsDestinations = document.querySelector('.js-destinations')

// Handle menu destinations
if (jsDestinations) {
  document.addEventListener('click', () => {
    if (body.classList.contains('destinations-open')) {
      body.classList.remove('destinations-open')
      jsDestinations.parentElement.classList.remove('is-active')
    }
  })

  jsDestinations.addEventListener('click', (e) => {
    e.stopPropagation()

    body.classList.toggle('destinations-open');
    jsDestinations.parentElement.classList.toggle('is-active')

    if (jsDestinations.parentElement.classList.contains('is-active')) {
      jsDestinations.innerHTML = 'Close Menu'
    } else {
      jsDestinations.innerHTML = 'Destinations'
    }
  })
}
