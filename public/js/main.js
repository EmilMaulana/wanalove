// resources/js/main.js

// Components
import { toggleMenu, initFabMenu } from './components/menu-navigation.js';
import { playMusic, toggleMute, openInvitation } from './components/play-music.js';
import { openModal, closeModal } from './components/popup.js';
import { initGalleryLightbox } from './components/gallery-lightbox.js';
import { initTextTransition } from './components/text-transition.js';

// Utils
import { lazy } from './utils/lazy.js';
// nanti bisa tambah import { initCountdown } dari './utils/countdown.js';

document.addEventListener('DOMContentLoaded', () => {
  // ---------------------------
  // Floating Action Button (FAB)
  // ---------------------------
  initFabMenu(); // sudah attach event ke home & mute button

  // ---------------------------
  // Open invitation & play music
  // ---------------------------
  const openBtn = document.getElementById('open-btn');
  if (openBtn) {
    openBtn.addEventListener('click', () => {
      playMusic();
      setTimeout(openInvitation, 800);
    });
  }

  // ---------------------------
  // Video modal
  // ---------------------------
  const openVideoBtn = document.getElementById('open-video-btn');
  const closeVideoBtn = document.getElementById('close-video-btn');
  if (openVideoBtn) openVideoBtn.addEventListener('click', openModal);
  if (closeVideoBtn) closeVideoBtn.addEventListener('click', closeModal);

  // ---------------------------
  // Gallery Lightbox
  // ---------------------------
  initGalleryLightbox();

  // ---------------------------
  // Text Header Animation
  // ---------------------------
  initTextTransition();

  // ---------------------------
  // Lazy Backgrounds
  // ---------------------------
  lazy("hero", "./images/wedding-picture.jpg");

  // ---------------------------
  // Countdown (future)
  // ---------------------------
  // initCountdown('countdown', '2025-08-01T00:00:00');
});
