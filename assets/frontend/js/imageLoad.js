document.getElementById('fileInput').addEventListener('change', function() {
    var selectedImage = document.querySelector('.imageLoad');
    if (this.files && this.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            selectedImage.src = e.target.result;
        };
        reader.readAsDataURL(this.files[0]);
    }
});
