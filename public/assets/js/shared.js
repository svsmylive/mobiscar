document.addEventListener('DOMContentLoaded', () => {
    // burger menu

    const burgerBtn = document.getElementById('burgerBtn');
    const burgerMenu = document.getElementById('burgerMenu');

    const burgerLinks = burgerMenu.querySelectorAll('a');

    burgerLinks.forEach(link => {
        link.addEventListener('click', () => {
            burgerBtn.classList.remove('active');
            burgerMenu.classList.remove('active');
        });
    });

    if (burgerBtn && burgerMenu) {
        burgerBtn.addEventListener('click', e => {
            burgerBtn.classList.toggle('active');
            burgerMenu.classList.toggle('active');

            e.stopPropagation();
        });

        window.addEventListener('click', e => {
            if (burgerBtn.classList.contains('active') && !burgerMenu.contains(e.target)) {
                burgerMenu.classList.remove('active');
                burgerBtn.classList.remove('active');
            }
        });
    }

    // modals

    function bindModal(buttonClass, modalId) {
        const buttons = document.getElementsByClassName(buttonClass);
        const modal = document.getElementById(modalId);

        if (!buttons.length || !modal) {
            return;
        }

        Array.from(buttons).forEach(btn => {
            btn.addEventListener('click', e => {
                e.preventDefault();
                modal.classList.add('active');
            });
        });
    }

    bindModal('requestBtn', 'requestModal');
    bindModal('becomePartnerBtn', 'becomePartnerModal');
    bindModal('privacyPolicyBtn', 'privacyPolicyModal');
    bindModal('personalDataBtn', 'personalDataModal');

    const modalWrappers = document.getElementsByClassName('modal-wrapper');

    Array.from(modalWrappers).forEach(wrapper => {
        const closeBtn = wrapper.querySelector('.closeBtn');

        if (closeBtn) {
            closeBtn.addEventListener('click', () => {
                wrapper.classList.remove('active');
            });
        }

        wrapper.addEventListener('click', e => {
            const modalContent = wrapper.querySelector('.modal-content');

            if (modalContent && modalContent.contains(e.target)) {
                return;
            }

            wrapper.classList.remove('active');

            e.stopPropagation();
        });
    });
});
