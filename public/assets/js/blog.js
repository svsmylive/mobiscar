const searchInputs = document.querySelectorAll('.search-input');
const wrapper23 = document.querySelector('.wrapper-2-3');
const searchWrapper = document.querySelector('.search-wrapper');
const blogItemsGrid = document.querySelector('.blog-items-grid');
const invisibleItem = document.querySelector('.gradient-border-wrapper.invisible');
let items = Array.from(blogItemsGrid.querySelectorAll('.gradient-border-wrapper:not(.invisible)'));

const xlMatch = window.matchMedia('(max-width: 1024px)');
let lastFilterValue = '';

const filterArticles = value => {
  const visibleItems = [];

  items.forEach(item => {
    const blogItem = item.querySelector('.blog-item');
    const header = blogItem.querySelector('h2');
    if (header.textContent.toLowerCase().includes(value.toLowerCase())) {
      item.classList.remove('filteredOut');
      visibleItems.push(item);
    } else {
      item.classList.add('filteredOut');
    }
  });

  if (visibleItems.length === 0) {
    invisibleItem.classList.remove('hidden');
  } else {
    invisibleItem.classList.add('hidden');
  }

  items.forEach(item => item.remove());

  if (visibleItems[0]) {
    blogItemsGrid.insertBefore(visibleItems[0], searchWrapper);
  }

  if (xlMatch.matches) {
    visibleItems.slice(1).forEach(item => blogItemsGrid.appendChild(item));
    invisibleItem.classList.add('hidden');
  } else {
    wrapper23.innerHTML = '';
    [visibleItems[1], visibleItems[2]].filter(Boolean).forEach(item => wrapper23.appendChild(item));
    visibleItems.slice(3).forEach(item => blogItemsGrid.appendChild(item));
  }
};

searchInputs.forEach(searchInput => {
  searchInput.addEventListener('input', e => {
    const value = e.target.value;
    lastFilterValue = value;
    filterArticles(value);
  });
});

const onResize = mq => {
  if (mq.matches) {
    const existingMobile = blogItemsGrid.querySelectorAll('.mobile-only');
    existingMobile.forEach(item => item.remove());

    itemsToDuplicate = wrapper23.querySelectorAll('.gradient-border-wrapper');
    const clones = [];

    itemsToDuplicate.forEach((item, index) => {
      const clone = item.cloneNode(true);
      clone.classList.add('mobile-only');
      clone.setAttribute('data-mobile-clone', 'true');
      clones.push(clone);

      blogItemsGrid.insertBefore(clone, searchWrapper);
    });

    if (clones.length > 0) {
      items = [items[0], ...clones, ...items.slice(3)];
    }
  } else {
    const mobileOnly = blogItemsGrid.querySelectorAll('.mobile-only');
    mobileOnly.forEach(item => item.remove());
    for (let i = items.length - 1; i >= 0; i--) {
      if (items[i].classList.contains('mobile-only')) {
        items.slice(i, 1);
      }
    }
  }

  searchInputs.forEach(inp => (inp.value = lastFilterValue));
  filterArticles(lastFilterValue);
};

xlMatch.addEventListener('change', mq => {
  onResize(mq);
});

onResize(xlMatch);
