export function toggleMenu() {
  const items = document.querySelectorAll('#fabMenu .menu-item');
  items.forEach(item => {
      const isHidden = item.classList.contains('hidden');
      if (isHidden) {
          item.classList.remove('hidden');
          setTimeout(() => {
              item.classList.remove('scale-90', 'opacity-0');
              item.classList.add('scale-100', 'opacity-100');
          }, 50); // delay supaya animasi jalan
      } else {
          item.classList.remove('scale-100', 'opacity-100');
          item.classList.add('scale-90', 'opacity-0');
          setTimeout(() => item.classList.add('hidden'), 300); // delay sesuai transition
      }
  });
}

export function toggleMute() {
  const muteIcon = document.getElementById('muteIcon');
  const audio = document.getElementById('wedding-music');
  if (!muteIcon || !audio) return;

  if (audio.paused) audio.play();
  else audio.pause();

  muteIcon.classList.toggle('fa-volume-mute');
  muteIcon.classList.toggle('fa-volume-up');
}

export function initFabMenu() {
  const homeBtn = document.getElementById('fabHome');
  const muteBtn = document.getElementById('muteBtn');

  if (homeBtn) homeBtn.addEventListener('click', toggleMenu);
  if (muteBtn) muteBtn.addEventListener('click', toggleMute);
}
