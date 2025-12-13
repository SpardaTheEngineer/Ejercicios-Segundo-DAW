window.addEventListener('load', () => {

    const toggle = document.querySelector('.menu-toggle');
    const nav = document.querySelector('.main-nav');

    toggle.addEventListener('click', () => {
      nav.classList.toggle('nav-open');
    });
    
    const header = document.querySelector('.cabecerica');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 169) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
  });

});