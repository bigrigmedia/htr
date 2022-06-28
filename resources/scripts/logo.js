const jsLogo = document.querySelector('.js-logo')

// Handle logo
if (jsLogo) {
  const logoClasses = ['opacity-0', 'cursor-default']

  if (window.matchMedia('(min-width: 1024px)').matches) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 0) {
        jsLogo.classList.add(...logoClasses)
      } else {
        jsLogo.classList.remove(...logoClasses)
      }
    })
  }
}
