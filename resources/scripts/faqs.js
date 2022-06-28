const jsFaqs = document.querySelectorAll('.js-faq')

// Handle faqs
if (jsFaqs) {
  jsFaqs.forEach(jsFaq => {
    jsFaq.addEventListener('click', () => {
      let activeFaq = jsFaq
      let activeFaqContent = jsFaq.parentNode.parentNode.children[1]

      activeFaq.classList.toggle('is-active')
      activeFaqContent.setAttribute('data-state', activeFaqContent.getAttribute('data-state') === 'closed' ? 'open' : 'closed')
    })
  })
}
