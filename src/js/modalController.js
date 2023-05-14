const showModalButton = document.getElementById("showModalButton")
const modal = document.getElementById("modal")
const closeModal = document.getElementById('closeModal')

showModalButton.addEventListener('click', () => {
    modal.style.display = 'block'
})

closeModal.addEventListener('click', () => {
    modal.style.display = 'none'
})