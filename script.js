const images = document.querySelectorAll('.image');
let currentImageIndex = 0;

function showImage(index) {
    images[currentImageIndex].classList.remove('active');
    images[index].classList.add('active');
    currentImageIndex = index;
}

function nextImage() {
    const nextIndex = (currentImageIndex + 1) % images.length;
    showImage(nextIndex);
}

function previousImage() {
    const previousIndex = (currentImageIndex - 1 + images.length) % images.length;
    showImage(previousIndex);
}

// Tự động chuyển ảnh sau một khoảng thời gian
setInterval(nextImage, 3000); // Chuyển ảnh mỗi 2 giây
