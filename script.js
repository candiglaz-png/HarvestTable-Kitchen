/**
 * PurelyPlated — Culinary & Recipe Interactive JavaScript
 * Includes: Sticky Header, Mobile Drawer Navigation, Live Recipe Search,
 * Category Filtering, Favorites Counter & Toast, Recipe Modal, and Form Validations.
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Sticky Header Shadow on Scroll
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 20) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }

  // 2. Mobile Drawer Navigation
  const hamburgerBtn = document.querySelector('.hamburger-btn');
  const mobileOverlay = document.querySelector('.mobile-nav-overlay');
  const mobileDrawer = document.querySelector('.mobile-nav-drawer');
  const mobileCloseBtn = document.querySelector('.mobile-nav-close');

  function openMobileNav() {
    if (mobileOverlay && mobileDrawer) {
      mobileOverlay.classList.add('open');
      mobileDrawer.classList.add('open');
      document.body.style.overflow = 'hidden';
    }
  }

  function closeMobileNav() {
    if (mobileOverlay && mobileDrawer) {
      mobileOverlay.classList.remove('open');
      mobileDrawer.classList.remove('open');
      document.body.style.overflow = '';
    }
  }

  if (hamburgerBtn) hamburgerBtn.addEventListener('click', openMobileNav);
  if (mobileCloseBtn) mobileCloseBtn.addEventListener('click', closeMobileNav);
  if (mobileOverlay) mobileOverlay.addEventListener('click', closeMobileNav);

  // 3. Favorites Counter & Toast Notification
  let favoritesCount = 0;
  const favoritesBadges = document.querySelectorAll('.favorites-badge');
  const favoriteBtns = document.querySelectorAll('.recipe-favorite-btn');

  function showToast(message, icon = 'fa-utensils') {
    let toast = document.querySelector('.toast-notification');
    if (!toast) {
      toast = document.createElement('div');
      toast.className = 'toast-notification';
      document.body.appendChild(toast);
    }
    toast.innerHTML = `<i class="fa-solid ${icon}"></i> <span>${message}</span>`;
    toast.classList.add('show');

    setTimeout(() => {
      toast.classList.remove('show');
    }, 3500);
  }

  favoriteBtns.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      e.stopPropagation();
      const card = btn.closest('.recipe-card');
      const title = card ? card.querySelector('.recipe-title').innerText : 'Recipe';
      const isSaved = btn.classList.contains('saved');

      if (!isSaved) {
        btn.classList.add('saved');
        btn.innerHTML = '<i class="fa-solid fa-heart" style="color: #c0392b;"></i>';
        favoritesCount++;
        showToast(`Saved <strong>${title}</strong> to your favorites!`, 'fa-heart');
      } else {
        btn.classList.remove('saved');
        btn.innerHTML = '<i class="fa-regular fa-heart"></i>';
        favoritesCount = Math.max(0, favoritesCount - 1);
        showToast(`Removed <strong>${title}</strong> from favorites.`, 'fa-heart-crack');
      }

      favoritesBadges.forEach(b => {
        b.innerText = favoritesCount;
      });
    });
  });

  // 4. Recipe Filtering & Live Search on recipes.html
  const filterPills = document.querySelectorAll('.filter-pill');
  const recipeCards = document.querySelectorAll('.recipe-card');
  const catalogSearchInput = document.getElementById('catalog-search');

  function applyFilters() {
    const activePill = document.querySelector('.filter-pill.active');
    const selectedCategory = activePill ? activePill.getAttribute('data-filter') : 'all';
    const searchQuery = catalogSearchInput ? catalogSearchInput.value.toLowerCase().trim() : '';

    recipeCards.forEach(card => {
      const cardCategory = card.getAttribute('data-category');
      const cardTitle = card.querySelector('.recipe-title')?.innerText.toLowerCase() || '';
      const cardDesc = card.querySelector('.recipe-description')?.innerText.toLowerCase() || '';
      const cardTag = card.querySelector('.recipe-dietary-badge')?.innerText.toLowerCase() || '';

      const matchesCategory = (selectedCategory === 'all' || cardCategory === selectedCategory);
      const matchesSearch = (!searchQuery || cardTitle.includes(searchQuery) || cardDesc.includes(searchQuery) || cardTag.includes(searchQuery));

      if (matchesCategory && matchesSearch) {
        card.style.display = 'flex';
      } else {
        card.style.display = 'none';
      }
    });
  }

  if (filterPills.length > 0 && recipeCards.length > 0) {
    filterPills.forEach(pill => {
      pill.addEventListener('click', () => {
        filterPills.forEach(p => p.classList.remove('active'));
        pill.classList.add('active');
        applyFilters();
      });
    });
  }

  if (catalogSearchInput) {
    catalogSearchInput.addEventListener('input', applyFilters);

    // Read URL query parameter if present (?search=...)
    const urlParams = new URLSearchParams(window.location.search);
    const searchParam = urlParams.get('search');
    if (searchParam) {
      catalogSearchInput.value = searchParam;
      applyFilters();
    }
  }

  // 5. Index Hero Search Redirection
  const heroSearchForm = document.getElementById('hero-search-form');
  if (heroSearchForm) {
    heroSearchForm.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = heroSearchForm.querySelector('.hero-search-input');
      const query = input ? encodeURIComponent(input.value.trim()) : '';
      window.location.href = `recipes.html?search=${query}`;
    });
  }

  // 6. View Recipe Modal Logic
  const viewRecipeBtns = document.querySelectorAll('.btn-view-recipe');
  const modalOverlay = document.querySelector('.modal-overlay');
  const modalBody = document.querySelector('.modal-body-content');
  const modalClose = document.querySelector('.modal-close-btn');

  if (viewRecipeBtns.length > 0 && modalOverlay && modalBody) {
    viewRecipeBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        const card = btn.closest('.recipe-card');
        if (!card) return;

        const title = card.querySelector('.recipe-title')?.innerText || 'Culinary Recipe';
        const img = card.querySelector('.recipe-img-box img')?.src || '';
        const time = card.querySelector('.recipe-time')?.innerHTML || '25 Mins';
        const diff = card.querySelector('.recipe-difficulty')?.innerText || 'Easy';
        const tag = card.querySelector('.recipe-dietary-badge')?.innerText || 'Wholesome';
        const desc = card.querySelector('.recipe-description')?.innerText || '';
        const pairing = card.querySelector('.recipe-pairing-tag')?.innerText || '';

        modalBody.innerHTML = `
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 2rem; align-items: start;">
            <div style="border-radius: 14px; overflow: hidden; height: 320px; box-shadow: 0 4px 16px rgba(0,0,0,0.1);">
              <img src="${img}" alt="${title}" style="width:100%; height:100%; object-fit: cover;">
            </div>
            <div>
              <span style="display:inline-block; font-size:0.75rem; font-weight:700; color:#d97724; text-transform:uppercase; margin-bottom:0.4rem; letter-spacing:0.05em;">${tag} &bull; ${diff}</span>
              <h2 style="font-size: 1.85rem; margin-bottom: 0.6rem; color:#233529;">${title}</h2>
              <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1rem; font-size: 0.9rem;">
                <span style="color:#d97724; font-weight:600;"><i class="fa-solid fa-clock"></i> ${time}</span>
                <span style="color:#4e6e58; font-weight:600;"><i class="fa-solid fa-utensils"></i> Chef Tested</span>
              </div>
              <p style="font-size: 0.95rem; color: #5f6863; line-height: 1.6; margin-bottom: 1.25rem;">${desc}</p>
              ${pairing ? `<div style="background:#fef5ea; border-left:3px solid #d97724; padding:0.6rem 0.9rem; border-radius:6px; font-size:0.85rem; color:#233529; margin-bottom:1.5rem;">${pairing}</div>` : ''}
              <div style="display:flex; gap:0.75rem;">
                <button class="btn btn-amber btn-sm btn-modal-fav" style="flex:1;">
                  <i class="fa-solid fa-heart"></i> Save to Favorites
                </button>
                <button class="btn btn-primary btn-sm" onclick="window.print()" style="flex:1;">
                  <i class="fa-solid fa-print"></i> Print Recipe
                </button>
              </div>
            </div>
          </div>
        `;

        const modalFavBtn = modalBody.querySelector('.btn-modal-fav');
        if (modalFavBtn) {
          modalFavBtn.addEventListener('click', () => {
            favoritesCount++;
            favoritesBadges.forEach(b => b.innerText = favoritesCount);
            showToast(`Saved <strong>${title}</strong> to your favorites!`, 'fa-heart');
          });
        }

        modalOverlay.classList.add('open');
        document.body.style.overflow = 'hidden';
      });
    });

    if (modalClose) {
      modalClose.addEventListener('click', () => {
        modalOverlay.classList.remove('open');
        document.body.style.overflow = '';
      });
    }

    modalOverlay.addEventListener('click', (e) => {
      if (e.target === modalOverlay) {
        modalOverlay.classList.remove('open');
        document.body.style.overflow = '';
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modalOverlay.classList.contains('open')) {
        modalOverlay.classList.remove('open');
        document.body.style.overflow = '';
      }
    });
  }

  // 7. Contact Form Validation on contact.html
  const contactForm = document.getElementById('purely-contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', (e) => {
      e.preventDefault();
      let isValid = true;

      const nameInput = document.getElementById('contact-name');
      const emailInput = document.getElementById('contact-email');
      const topicInput = document.getElementById('contact-topic');
      const messageInput = document.getElementById('contact-message');

      function validateField(input, condition, errorId, errorMsg) {
        const errorEl = document.getElementById(errorId);
        if (!condition) {
          input.classList.add('error');
          if (errorEl) {
            errorEl.innerText = errorMsg;
            errorEl.style.display = 'block';
          }
          return false;
        } else {
          input.classList.remove('error');
          if (errorEl) errorEl.style.display = 'none';
          return true;
        }
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

      if (!validateField(nameInput, nameInput.value.trim().length >= 2, 'name-error', 'Please enter your name.')) {
        isValid = false;
      }
      if (!validateField(emailInput, emailRegex.test(emailInput.value.trim()), 'email-error', 'Please enter a valid email address.')) {
        isValid = false;
      }
      if (!validateField(topicInput, topicInput.value !== '', 'topic-error', 'Please select an inquiry topic.')) {
        isValid = false;
      }
      if (!validateField(messageInput, messageInput.value.trim().length >= 10, 'message-error', 'Please write a message of at least 10 characters.')) {
        isValid = false;
      }

      if (isValid) {
        showToast('Thank you! Your culinary inquiry has been received. Chef Maya will reply within 24 hours.', 'fa-circle-check');
        contactForm.reset();
      }
    });
  }

  // 8. Newsletter Subscription Handling
  const newsletterForms = document.querySelectorAll('.newsletter-form');
  newsletterForms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const input = form.querySelector('.newsletter-input');
      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (input && emailRegex.test(input.value.trim())) {
        showToast('Welcome to The Wholesome Table! Your free recipe e-book is on its way.', 'fa-kitchen-set');
        input.value = '';
      } else {
        showToast('Please enter a valid email address to subscribe.', 'fa-triangle-exclamation');
      }
    });
  });
});
