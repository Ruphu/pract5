document.addEventListener('DOMContentLoaded', () => {
  function menuOnClick() {
    document.querySelector('.header__burger-btn').classList.toggle('change')
    document.querySelector('.header__burger-nav').classList.toggle('change')
    document.querySelector('.header__burger-bg').classList.toggle('change-bg')
  }

  const main = () => {
    new WOW().init()

    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            document.querySelectorAll('.header__item').forEach((item) => {
              const link = item.querySelector('.header__link')
              const id = link.getAttribute('href').replace('#', '')

              if (id === entry.target.id) {
                item.classList.add('active')
              } else {
                item.classList.remove('active')
              }
            })
          }
        })
      },
      {
        threshold: 0.5,
      }
    )
    document.querySelectorAll('section').forEach((section) => {
      observer.observe(section)
    })

    const header = document.querySelector('.header')
    const scrollTrigger = 60
    window.addEventListener('scroll', () => {
      if (window.scrollY > scrollTrigger) {
        header.classList.add('shrink')
      } else {
        header.classList.remove('shrink')
      }
    })

    document.querySelectorAll('a[href="#"], a[href=""]').forEach((link) => {
      link.addEventListener('click', (e) => {
        e.preventDefault()
      })
    })



    


    const typesButtons = document.querySelectorAll('.menu__type')
    typesButtons.forEach((button) => {
      button.addEventListener('click', () => {
        typesButtons.forEach((btn) => btn.classList.remove('active'))
        button.classList.add('active')
      })
    })

    document.querySelectorAll('.menu__card').forEach((card) => {
      const sizes = card.querySelectorAll('.menu__card-size')
      sizes.forEach((size) => {
        size.addEventListener('click', () => {
          sizes.forEach((s) => s.classList.remove('active'))
          size.classList.add('active')
        })
      })
    })

    document.querySelectorAll('.menu__card').forEach((card) => {
      const counts = card.querySelectorAll('.menu__card-count--change')
      counts.forEach((count) => {
        count.addEventListener('click', () => {
          counts.forEach((s) => s.classList.remove('active'))
          count.classList.add('active')
        })
      })
    })

    document
      .querySelector('.header__burger-btn')
      .addEventListener('click', () => {
        menuOnClick()
      })
  }
  main()
})
