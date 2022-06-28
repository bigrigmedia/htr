const app = document.getElementById('app')
const jsTop = document.querySelector('.js-top')

if (jsTop) {
  const appTop = app.getBoundingClientRect().top

  jsTop.addEventListener('click', () => {
    window.scrollTo({ top: appTop, behavior: 'smooth' })
  })
}
