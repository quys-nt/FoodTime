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