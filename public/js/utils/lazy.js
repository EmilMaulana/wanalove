export function lazy(elementId, imagePath) {
  const el = document.getElementById(elementId);
  if (!el) {
      console.warn(`Element with id="${elementId}" not found.`);
      return;
  }

  // Set initial background (opsional, bisa placeholder)
  el.style.backgroundSize = "cover";
  el.style.backgroundPosition = "center";

  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              // Set background image saat elemen terlihat
              el.style.backgroundImage = `url('${imagePath}')`;

              // Stop observing element ini saja
              observer.unobserve(el);
          }
      });
  });

  observer.observe(el);
}
