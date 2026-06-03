if ('scrollRestoration' in history) {
  history.scrollRestoration = 'manual';
}
window.addEventListener('load', () => {
  const navEntries = performance.getEntriesByType?.('navigation') || [];
  const navType = navEntries[0]?.type || performance.navigation?.type;
  if (!location.hash && (navType === 'reload' || navType === 1)) {
    window.scrollTo(0, 0);
  }
});
const toggle = document.querySelector('.nav-toggle');
toggle?.addEventListener('click', () => {
  const isOpen = document.body.classList.toggle('nav-open');
  toggle.setAttribute('aria-expanded', String(isOpen));
});