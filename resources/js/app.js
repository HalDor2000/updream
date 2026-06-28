import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');
    const backdrop = document.getElementById('mobile-menu-backdrop');

    if (!btn || !menu) return;

    const bars = btn.querySelectorAll('.mobile-menu-bar');
    const links = menu.querySelectorAll('.mobile-menu-link');

    const openMenu = () => {
        menu.classList.remove('hidden');
        menu.setAttribute('aria-hidden', 'false');
        btn.setAttribute('aria-expanded', 'true');
        btn.setAttribute('aria-label', 'Cerrar menú');
        document.body.style.overflow = 'hidden';

        bars[0].style.transform = 'translateY(8px) rotate(45deg)';
        bars[1].style.opacity = '0';
        bars[2].style.transform = 'translateY(-8px) rotate(-45deg)';
    };

    const closeMenu = () => {
        menu.classList.add('hidden');
        menu.setAttribute('aria-hidden', 'true');
        btn.setAttribute('aria-expanded', 'false');
        btn.setAttribute('aria-label', 'Abrir menú');
        document.body.style.overflow = '';

        bars[0].style.transform = '';
        bars[1].style.opacity = '';
        bars[2].style.transform = '';
    };

    const toggleMenu = () => {
        if (menu.classList.contains('hidden')) {
            openMenu();
        } else {
            closeMenu();
        }
    };

    btn.addEventListener('click', toggleMenu);
    backdrop?.addEventListener('click', closeMenu);
    links.forEach((link) => link.addEventListener('click', closeMenu));

    window.addEventListener('resize', () => {
        if (window.innerWidth >= 1024) {
            closeMenu();
        }
    });
});
