(()=>{
  // Вставка короткого текста из общего (перед слешем)
  // Пример:
  // 5-ти разовое питание / 5-ти разовое сбалансированное питание только из свежих продуктов
  const items = document.querySelectorAll('.pansion_intro__advantage');
  items.forEach(i => {
    i.childNodes[1].textContent = i.childNodes[1].textContent.trim().replace(/\s\/.+/, '');
  });

  // Создание карусели
  $(".pansion_intro__images-container").owlCarousel({
    items: 4,
    responsive: {
      0: { items: 2, },
      500: { items: 3, },
      1300: { items: 4 }
    },
    margin: 15,
    loop: true,
    autoplay: true,
  });

  // Установка превью (большого изображения) самой левой картинки
  function setPreview() {
    const src = document.querySelector('.pansion_intro .owl-item.active img').getAttribute('src');
    document.querySelector('.pansion_intro__main-image').setAttribute('src', src);
  }
  setPreview();
  const observer = new MutationObserver(setPreview);
  const options = { attributes: true };
  observer.observe(document.querySelector('.pansion_intro .owl-stage'), options);
})();