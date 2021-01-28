function previewImage(input, target) {
    let reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload = function (readerEvent) {
        document.getElementById(target).src = readerEvent.target.result;
    }
}

function slide(element, direction, step) {
    let destination = direction === "right" ? +step : -step;

    document.getElementById(element).scrollBy({
        left: destination,
        behavior: 'smooth'
    })
}
