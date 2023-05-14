const form = document.getElementById("form")
const fileInput = document.getElementById("files");
const fileList = document.getElementById("fileList");
let uploadedFiles = [];

const initImages = document.querySelectorAll(".init-img")
initImages.forEach(img => {
    fetch(`../static/img/news/${img.innerHTML}`)
        .then(response => response.blob())
        .then(blob => {
            const file = new File([blob], img.innerHTML, { type: 'text/plain' });
            uploadedFiles.push(file)
        })
        .catch(error => {
            console.error(error);
        });

    img.parentNode.addEventListener("click", function (event) {
        const fileName = event.target.children[1].innerHTML;
        if (confirm(`Точно удалить ${fileName}?`)) {
            uploadedFiles = uploadedFiles.filter(file => file.name !== fileName);
            event.target.remove();

            const xhr = new XMLHttpRequest()
            const formData = new FormData()
            formData.append('img', fileName)
            xhr.open("POST", "../src/php/focuses/delete_news_img_focus.php", true)
            xhr.send(formData)
        }
    });
})

fileInput.addEventListener("change", function (event) {
    const files = event.target.files;
    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file.type.startsWith("image/")) {
            uploadedFiles.push(file);
            const listItem = document.createElement("li");
            const image = document.createElement("img");
            image.src = URL.createObjectURL(file);
            image.alt = file.name;
            const fileName = document.createTextNode(file.name);
            listItem.appendChild(image);
            listItem.appendChild(fileName);
            listItem.addEventListener("click", function (event) {
                const fileName = event.target.textContent;
                if (confirm(`Точно удалить ${fileName}?`)) {
                    uploadedFiles = uploadedFiles.filter(file => file.name !== fileName);
                    event.target.remove();
                }
            });
            fileList.appendChild(listItem);
        }
    }
});

document.getElementById("submit").addEventListener("click", function (event) {
    event.preventDefault()
    if (titleInput.value) {
        const xhr = new XMLHttpRequest()
        xhr.open('POST', "../src/php/focuses/add_news_focus.php", true)
        const formData = new FormData(form)
        formData.delete("files[]")
        for (let i = 0; i < uploadedFiles.length; i++) {
            formData.append("files[]", uploadedFiles[i]);
        }
        xhr.onload = function () {
            if (xhr.status === 200) {
                window.open('/cms/news', '_self')
            }
        };
        xhr.send(formData)
    }
});