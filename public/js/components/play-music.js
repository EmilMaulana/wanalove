export function playMusic() {
  const audio = document.getElementById("wedding-music");
  if (!audio) return;

  audio.play().catch(e => console.log("Autoplay blocked:", e));
}

export function openInvitation() {
  window.location.href = "invitation.html";
}

export function toggleMute() {
  const audio = document.getElementById("wedding-music");
  const icon = document.getElementById("muteIcon");
  if (!audio || !icon) return;

  audio.muted = !audio.muted;
  icon.classList.toggle("fa-volume-up", !audio.muted);
  icon.classList.toggle("fa-volume-mute", audio.muted);
}
