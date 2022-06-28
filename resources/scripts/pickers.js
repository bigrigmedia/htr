/**
 * External dependencies
 */
import Shuffle from 'shufflejs'

const jsPickers = document.querySelectorAll('.js-picker')
const jsShuffle = document.querySelector('.js-shuffle')

// Handle gallery pickers
if (jsPickers && jsShuffle) {
  const newShuffle = new Shuffle(jsShuffle, {
    itemSelector: '.js-image',
    gutterWidth: 45
  })

  jsPickers.forEach(jsPicker => {
    jsPicker.addEventListener('click', () => {
      let isActive = Array.from(jsPickers).find(activeGallery => activeGallery.classList.contains('is-active'))

      isActive.classList.remove('is-active')
      jsPicker.classList.toggle('is-active')

      newShuffle.filter(jsPicker.dataset.group)
    })
  })
}
