// Вставка длинного текста из общего (после слеша)
// Пример:
// 5-ти разовое питание / 5-ти разовое сбалансированное питание только из свежих продуктов
(()=>{
  const items = document.querySelectorAll('.pansion_facilities__list-item');
  items.forEach(i => {
    i.childNodes[2].textContent = i.childNodes[2].textContent.trim().replace(/.+\s\/\s/, '');
  });
})();