const titleInput = document.getElementById("title")
const dateInput = document.getElementById("date-input")
const contentInput = document.getElementById("content-input")
const titlePreview = document.getElementById("title-preview")
const datePreview = document.getElementById("date")
const contentPreview = document.getElementById("content")
const acceptForm = document.getElementById('submit')

contentInput.value = contentInput.value.replace(/<br>/g, '\n')

titleInput.addEventListener("input", () => {
    titlePreview.innerHTML = titleInput.value
})

dateInput.addEventListener("input", () => {
    const date = new Date(dateInput.value)
    const options = { day: 'numeric', month: 'long', year: 'numeric' }
    datePreview.innerHTML = date.toLocaleDateString('ru-RU', options).replace(' г.', '')
})

contentInput.addEventListener("input", () => {
    contentPreview.innerHTML = contentInput.value.replace(/\n/g, '<br>')
})

acceptForm.addEventListener('click', () => {
    contentInput.value = contentInput.value.replace(/\n/g, '<br>')
})