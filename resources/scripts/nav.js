const body = document.querySelector('body');
const jsNavs = document.querySelectorAll('.js-nav')
const jsHovers = document.querySelectorAll('.js-hover')

// Handle nav button
if (jsNavs) {
  const navMenu = document.getElementById('nav-menu')

  document.addEventListener('click', () => {
    if (body.classList.contains('nav-open')) {
      body.classList.remove('nav-open')
      navMenu.classList.remove('is-active')
    }
  })

  jsNavs.forEach(jsNav => {
    jsNav.addEventListener('click', (e) => {
      e.stopPropagation()

      body.classList.toggle('nav-open');
      //jsNav.classList.toggle('is-active')
      navMenu.classList.toggle('is-active')
    })
  })
}

// Handle menu item hover
if (jsHovers) {
  jsHovers.forEach(jsHover => {
    jsHover.addEventListener('mouseover', () => {
      jsHover.classList.add('is-active')
    })

    jsHover.addEventListener('mouseout', () => {
      jsHover.classList.remove('is-active')
    })
  })
}
