if (!!window.IntersectionObserver) {
  let observer = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.className += ' show';
        observer.unobserve(entry.target);
      }
    });
  }, {threshold: 0.5});
  Array.from(document.querySelectorAll('.c-inv')).forEach(item => { observer.observe(item) });
}
else {
  $('.c-inv').addClass('show');
}

$('.js-menu__open').click(function() {
  $('.js-menu__sp').addClass('show');
});

$('.js-menu__close').click(function() {
  $('.js-menu__sp').removeClass('show');
});
