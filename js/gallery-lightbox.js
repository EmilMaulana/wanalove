export function initGalleryLightbox() {
          const galleryImages = document.querySelectorAll(".gallery-img");
          const lightbox = document.getElementById("lightbox");
          const lightboxImg = document.getElementById("lightboxImg");
          const closeLightbox = document.getElementById("closeLightbox");
          const prevBtn = document.getElementById("prevBtn");
          const nextBtn = document.getElementById("nextBtn");
        
          let currentIndex = 0;
        
          galleryImages.forEach((img, index) => {
            img.addEventListener("click", () => {
              currentIndex = index;
              showImage();
              lightbox.classList.remove("hidden");
            });
          });
        
          function showImage() {
            lightboxImg.src = galleryImages[currentIndex].src;
          }
        
          closeLightbox.addEventListener("click", () => {
            lightbox.classList.add("hidden");
          });
        
          prevBtn.addEventListener("click", () => {
            currentIndex = (currentIndex - 1 + galleryImages.length) % galleryImages.length;
            showImage();
          });
        
          nextBtn.addEventListener("click", () => {
            currentIndex = (currentIndex + 1) % galleryImages.length;
            showImage();
          });
        
          // Close jika klik area luar gambar
          lightbox.addEventListener("click", (e) => {
            if (e.target === lightbox) {
              lightbox.classList.add("hidden");
            }
          });
        }
        
