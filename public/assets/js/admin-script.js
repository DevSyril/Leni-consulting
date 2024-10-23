function previewImage() {
    const fileInput = document.getElementById('file');
    const file = fileInput.files[0];
    const imagePreviewContainer = document.getElementById('previewImageContainer');

    if (file.type.match('image.*')) {
        const reader = new FileReader();

        reader.addEventListener('load', function (event) {
            const imageUrl = event.target.result;
            const image = new Image();

            image.addEventListener('load', function () {
                imagePreviewContainer.innerHTML = '';
                imagePreviewContainer.appendChild(image);
            });

            image.src = imageUrl;
            image.style.width = '100%';
            image.style.aspectRatio = '4/3';
            image.style.borderRadius = '8px';
            image.style.marginBottom = '5px';
        });

        reader.readAsDataURL(file);
    }
}

function textToHtml() {

    const xmlString = document.getElementById('textToConvert').value;

    var doc = new DOMParser().parseFromString(xmlString, "text/xml");
    console.log(doc.firstChild.innerHTML); 
    console.log(doc.firstChild.firstChild.innerHTML);
}