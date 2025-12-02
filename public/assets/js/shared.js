// burger menu

const burgerBtn = document.getElementById('burgerBtn');
const burgerMenu = document.getElementById('burgerMenu');

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

// modals

const requestBtns = document.getElementsByClassName('requestBtn');
const requestModal = document.getElementById('requestModal');

Array.from(requestBtns).forEach(btn => {
  btn.addEventListener('click', e => {
    e.preventDefault();
    requestModal.classList.add('active');
  });
});

const modalWrappers = document.getElementsByClassName('modal-wrapper');

Array.from(modalWrappers).forEach(wrapper => {
  const closeBtn = wrapper.querySelectorAll('.closeBtn')[0];
  if (closeBtn) {
    closeBtn.addEventListener('click', () => {
      wrapper.classList.remove('active');
    });
  }

  wrapper.addEventListener('click', e => {
    const modalContent = wrapper.getElementsByClassName('modal-content')[0];
    if (modalContent.contains(e.target)) {
      return;
    }

    wrapper.classList.remove('active');

    e.stopPropagation();
  });
});
