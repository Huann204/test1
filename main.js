let imgBanner = document.querySelector(".real");
const imgBanners = [
  "./assets/img/real/1.webp",
  "./assets/img/real/2.jpg",
  "./assets/img/real/3.jpg",
  "./assets/img/real/4.jpg",
];
let index = 1;
function imgSlider() {
  imgBanner.src = imgBanners[index];
  index++;
  if (index >= imgBanners.length) {
    index = 0;
  }
}
setInterval(imgSlider, 3000);
