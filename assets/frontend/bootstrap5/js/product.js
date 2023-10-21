const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

let previewImg = $$(".preview-img"); //Get the preview image
let bigImage = $("#main-image");
console.log(previewImg);
console.log(bigImage);

previewImg.forEach((image, index) => {
  image.onclick = () => {
    let previewUrl = this.src;
    console.log(previewUrl);
    bigImage.setAttribute("src", previewUrl);
  };
});
