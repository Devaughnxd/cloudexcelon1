(function () {
    const toggle = document.querySelector('.nav-toggle');

    if (!toggle) {
        return;
    }

    toggle.addEventListener('click', function () {
        const isOpen = document.body.classList.toggle('nav-open');
        toggle.setAttribute('aria-expanded', String(isOpen));
    });

    document.querySelectorAll('.nav-menu a').forEach(function (link) {
        link.addEventListener('click', function () {
            document.body.classList.remove('nav-open');
            toggle.setAttribute('aria-expanded', 'false');
        });
    });
})();
