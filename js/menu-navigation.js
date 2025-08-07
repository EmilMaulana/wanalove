export function toggleMenu() {
  const items = document.querySelectorAll('#fabMenu .menu-item');
  items.forEach(item => {
    item.classList.toggle('hidden');
  });
}


