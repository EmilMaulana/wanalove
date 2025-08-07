export function lazyBackground(elementId, imagePath) {
          const el = document.getElementById(elementId);
          if (!el) {
            console.warn(`Element with id="${elementId}" not found.`);
            return;
          }
        
          const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
              if (entry.isIntersecting) {
                el.style.backgroundImage = `url('${imagePath}')`;
                el.style.backgroundSize = "cover";
                el.style.backgroundPosition = "center";
                obs.disconnect();
              }
            });
          });
        
          observer.observe(el);
        }
        
