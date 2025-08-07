export function initTextTransition() {
  const text = document.getElementById("headerText");
  if (!text) return;

  setTimeout(() => {
    text.classList.remove("opacity-0", "translate-y-[-50px]");
    text.classList.add("opacity-100", "translate-y-0");
  }, 1000);
}
