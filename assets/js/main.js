/**
 * Beezerhost Modern UI JavaScript Controller
 * - Mobile menu toggle with full backdrop overlay & dropdown accordion support
 * - FAQ Accordion toggles
 * - Smooth anchor scroll
 */

document.addEventListener('DOMContentLoaded', () => {
  // 1. Mobile Navigation & Dropdown Accordion Controller
  const mobileToggle = document.getElementById('mobile-toggle');
  const navMenu = document.getElementById('nav-menu');

  if (mobileToggle && navMenu) {
    mobileToggle.addEventListener('click', (e) => {
      e.stopPropagation();
      const expanded = mobileToggle.getAttribute('aria-expanded') === 'true';
      mobileToggle.setAttribute('aria-expanded', !expanded);
      navMenu.classList.toggle('is-active');
    });

    // Close mobile menu when clicking outside
    document.addEventListener('click', (e) => {
      if (window.innerWidth <= 992 && navMenu.classList.contains('is-active')) {
        if (!navMenu.contains(e.target) && !mobileToggle.contains(e.target)) {
          navMenu.classList.remove('is-active');
          mobileToggle.setAttribute('aria-expanded', 'false');
        }
      }
    });
  }

  // 2. Mobile Dropdown Sub-menu Accordion Toggles
  const dropdownToggles = document.querySelectorAll('.dropdown-toggle');
  dropdownToggles.forEach(toggle => {
    toggle.addEventListener('click', (e) => {
      if (window.innerWidth <= 992) {
        e.preventDefault();
        const parentItem = toggle.closest('.has-dropdown');
        if (parentItem) {
          const isOpen = parentItem.classList.contains('dropdown-open');
          // Close other open dropdowns in mobile
          document.querySelectorAll('.has-dropdown').forEach(item => {
            item.classList.remove('dropdown-open');
            const link = item.querySelector('.dropdown-toggle');
            if (link) link.setAttribute('aria-expanded', 'false');
          });

          if (!isOpen) {
            parentItem.classList.add('dropdown-open');
            toggle.setAttribute('aria-expanded', 'true');
          }
        }
      }
    });
  });

  // 3. Accordion / FAQ Toggle
  const faqQuestions = document.querySelectorAll('.faq-question');
  faqQuestions.forEach(btn => {
    btn.addEventListener('click', () => {
      const faqItem = btn.closest('.faq-item');
      const isOpen = faqItem.classList.contains('is-open');

      document.querySelectorAll('.faq-item').forEach(item => {
        item.classList.remove('is-open');
        const qBtn = item.querySelector('.faq-question');
        if (qBtn) qBtn.setAttribute('aria-expanded', 'false');
      });

      if (!isOpen) {
        faqItem.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
      }
    });
  });

  // 4. Smooth Anchor Link Scrolling
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const targetId = this.getAttribute('href');
      if (targetId && targetId !== '#') {
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          e.preventDefault();
          targetElement.scrollIntoView({ behavior: 'smooth' });
          if (window.innerWidth <= 992 && navMenu) {
            navMenu.classList.remove('is-active');
            if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
          }
        }
      }
    });
  });
});
