const jsLayouts = document.querySelectorAll('.js-layout')

// Handle layout pickers
if (jsLayouts) {
  let activeBtn = document.querySelector('.is-active.js-layout')

  jsLayouts.forEach(jsLayout => {
    const destinationLayouts = document.querySelectorAll('.destinations-layout')

    jsLayout.addEventListener('click', () => {
      activeBtn.classList.remove('is-active')

      if (!jsLayout.classList.contains('is-active')) {
        activeBtn = jsLayout

        jsLayout.classList.add('is-active')
      }

      let activeID = activeBtn.dataset.layout

      destinationLayouts.forEach(destinationLayout => {
        const layoutID = destinationLayout.getAttribute('id')

        if (activeID === layoutID) {
          destinationLayout.classList.remove('is-active')
          destinationLayout.classList.add('is-active')

          return
        }

        destinationLayout.classList.add('is-active')
        destinationLayout.classList.remove('is-active')
      })
    })
  })
}
