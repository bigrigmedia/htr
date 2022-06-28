const body = document.querySelector('body')
const jsDestinations = document.querySelector('.js-destinations')

// Handle menu destinations
if (jsDestinations) {
  jsDestinations.addEventListener('click', () => {
    body.classList.toggle('destinations-open');
    jsDestinations.parentElement.classList.toggle('is-active')
  })
}
