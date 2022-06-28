const body = document.querySelector('body');
const jsNavs = document.querySelectorAll('.js-nav')
const jsHovers = document.querySelectorAll('.js-hover')

// Handle nav button
if (jsNavs) {
  const navMenu = document.getElementById('nav-menu')

  jsNavs.forEach(jsNav => {
    jsNav.addEventListener('click', () => {
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
