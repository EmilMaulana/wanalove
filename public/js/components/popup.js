const youtube = "https://www.youtube.com/embed/V1gTGrL53aE?autoplay=1&mute=1&start=0";

export function openModal() {
  document.getElementById('videoModal').classList.remove('hidden');
  document.getElementById('teaserIframe').src = youtube;
}

export function closeModal() {
  document.getElementById('videoModal').classList.add('hidden');
  document.getElementById('teaserIframe').src = "";
}
