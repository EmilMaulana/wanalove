import { playMusic, openInvitation, toggleMute } from './play-music.js';
import { initTextTransition } from './text-transition.js';
import { lazyBackground } from './lazy.js';
import { toggleMenu } from './menu-navigation.js';
import { openModal, closeModal } from './popup.js';
import { initGalleryLightbox } from './gallery-lightbox.js';

  document.addEventListener("DOMContentLoaded", () => {
    initGalleryLightbox();
  });
  document.addEventListener('DOMContentLoaded', () => {
    initVideoPopup();
  });
  document.addEventListener("DOMContentLoaded", () => {
    initTextTransition();

    lazyBackground("hero", "./images/wedding-picture.jpg");

    const openBtn = document.getElementById("open-btn");
    if (openBtn) {
      openBtn.addEventListener("click", () => {
        playMusic();
        setTimeout(openInvitation, 800);
      });
    } else {
      console.warn("Tombol open invitation tidak ditemukan");
    }
    const fabMainBtn = document.querySelector('#fabMenu > button');
    if (fabMainBtn) fabMainBtn.addEventListener("click", toggleMenu);

    const muteBtn = document.getElementById("muteBtn");
    if (muteBtn) muteBtn.addEventListener("click", toggleMute);

    const openVideoBtn = document.getElementById('open-video-btn');
    if (openVideoBtn) {
      openVideoBtn.addEventListener("click", openModal);
    } else {
      console.warn("Tombol buka video tidak ditemukan");
    }
    const closeModalBtn = document.getElementById('close-video-btn');
    if (closeModalBtn) {
      closeModalBtn.addEventListener("click", closeModal);
    } else {
      console.warn("Tombol tutup modal video tidak ditemukan");
    }
  });
