$(function () {
  const mv = $(".main-visual");
  const logo = $(".top-logo-text");
  const item_btn = $(".item-btn");
  const modal = document.getElementById("modal");
  const modal_btn = document.getElementById("modal-btn");
  const close = document.querySelectorAll(".modal-close");
  const ms = 400;

  mv.bgSwitcher({
    images: [
      "src/image/rene-bernal-f0rdHx5P8sQ-unsplash.jpg",
      "src/image/eliott-reyna-jCEpN62oWL4-unsplash.jpg",
      "src/image/samsung-605439_1920.jpg",
      "src/image/white-ps4-controller.jpg",
    ],
    interval: 8000,
    loop: true,
    shuffle: true,
    effect: "fade",
    duration: 4000,
    easing: "swing",
  });

  $(window).scroll(function () {
    let scroll = $(this).scrollTop();
    if (scroll > 700) {
      logo.addClass("change");
      item_btn.addClass("change");
    } else {
      logo.removeClass("change");
      item_btn.removeClass("change");
    }
  });

  if (!modal_btn) {
    return false;
  }
  modal_btn.addEventListener("click", () => {
    setTimeout(function () {
      modal.style.opacity = 1;
    }, 50);
    setTimeout(function () {
      modal.classList.add("open");
    }, 1);
  });
  for (let i = 0; i < close.length; i++) {
    close[i].addEventListener("click", () => {
      setTimeout(function () {
        modal.style.opacity = 0;
      }, 1);
      setTimeout(function () {
        modal.classList.remove("open");
      }, ms);
    });
  }
});
