const toggle = document.querySelector('.nav-toggle');
toggle?.addEventListener('click', () => {
  const isOpen = document.body.classList.toggle('nav-open');
  toggle.setAttribute('aria-expanded', String(isOpen));
});