const showModalButton = document.getElementById("showModalButton");
const modal = document.getElementById("modal");
const closeModal = document.getElementById("closeModal");

showModalButton.addEventListener("click", () => {
  modal.style.zIndex = 10;
  modal.style.opacity = 1;
});

closeModal.addEventListener("click", () => {
  modal.style.opacity = 0;
  setTimeout(() => {
    modal.style.zIndex = -1;
  }, 300);
});
