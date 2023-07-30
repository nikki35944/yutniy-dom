// Переключение + контент вкладок
class FoodAtThePansion {
  constructor() {
    this.data = {

      monday: {
        morning: [ 
          { title: 'Завтрак №1', list: ['Каша пшенная с тыквой на воде с добавлением молока и сливочного масла', 'Бутерброд с красной икрой и маслом', 'Чай черный с лимоном и сахаром'] }, 
          { title: 'Завтрак №2', list: ['Йогурт', 'Кекс'] } 
        ],
        day: [ 
          { title: 'Обед', list: ['Суп со шпинатом и яйцом + сметана', 'Морковный салат с чесноком', 'Картофельное рагу с печенью', 'Компот из сухофруктов'] },
          { title: 'Полдник', list: ['Пряники', 'Чай'] }
        ],
        evening: [ 
          { title: 'Ужин №1', list: ['Каша манная', 'Чай фруктовый'] },
          { title: 'Ужин №2', list: ['Кефир'] }
        ],
      },
      tuesday: {
        morning: [ 
          { title: 'Завтрак №1', list: ['Каша овсянная с апельсином', 'Бутерброд с сыром', 'Шоколадный напиток'] }, 
          { title: 'Завтрак №2', list: ['Фрукты'] } 
        ],
        day: [ 
          { title: 'Обед', list: ['Суп гороховый', 'Гречаники с вермишелью', 'Кисель'] },
          { title: 'Полдник', list: ['Йогурт', 'Печенье'] }
        ],
        evening: [ 
          { title: 'Ужин №1', list: ['Творожная запеканка','Чай фруктовый'] },
          { title: 'Ужин №2', list: ['Кефир'] }
        ],
      },
      wednesday: {
        morning: [ 
          { title: 'Завтрак №1', list: ['Каша кукурузная', 'Бутерброд с повидлом', 'Чай черный с молоком'] }, 
          { title: 'Завтрак №2', list: ['Ряженка', 'Печенье'] } 
        ],
        day: [ 
          { title: 'Обед', list: ['Суп куриный с лапшой', 'Картофельное пюре с котлетой', 'Салат из свеклы и яблока', 'Напиток Каркадэ'] },
          { title: 'Полдник', list: ['Печеные яблоки'] }
        ],
        evening: [ 
          { title: 'Ужин №1', list: ['Гречневая каша с мясом', 'Шоколадный напиток'] },
          { title: 'Ужин №2', list: ['Кефир'] }
        ],
      },
      thursday: {
        morning: [ 
          { title: 'Завтрак №1', list: ['Каша рисовая с тыквой', 'Бутерброд с колбасой', 'Чай с молоком'] }, 
          { title: 'Завтрак №2', list: ['Йогурт'] } 
        ],
        day: [ 
          { title: 'Обед', list: ['Суп рыбный', 'Вареный картофель', 'Сельдь, маринованный лук', 'Компот из сухофруктов'] },
          { title: 'Полдник', list: ['Рулеты', 'Чай'] }
        ],
        evening: [ 
          { title: 'Ужин №1', list: ['Макароны по-флотски','Чай фруктовый'] },
          { title: 'Ужин №2', list: ['Ряженка'] }
        ],
      },
      friday: {
        morning: [ 
          { title: 'Завтрак №1', list: ['Каша ячневая с яблоком', 'Бутерброд с паштетом', 'Шоколадный напиток'] }, 
          { title: 'Завтрак №2', list: ['Фрукты'] } 
        ],
        day: [ 
          { title: 'Обед', list: ['Борщ со сметаной', 'Плов', 'Маринованные помидоры', 'Кисель'] },
          { title: 'Полдник', list: ['Печеные яблоки'] }
        ],
        evening: [ 
          { title: 'Ужин №1', list: ['Шарлотка', 'Чай фруктовый'] },
          { title: 'Ужин №2', list: ['Кефир'] }
        ],
      },
      saturday: {
        morning: [ 
          { title: 'Завтрак №1', list: ['Каша пшеничная', 'Бутерброд с красной икрой', 'Чай черный с лимоном'] }, 
          { title: 'Завтрак №2', list: ['Йогурт', 'Печенье'] } 
        ],
        day: [ 
          { title: 'Обед', list: ['Рассольник', 'Гречка', 'Сосиска', 'Салат (огурцы, помидоры)', 'Компот из сухофруктов'] },
          { title: 'Полдник', list: ['Пряники', 'Чай'] }
        ],
        evening: [ 
          { title: 'Ужин №1', list: ['Творог'] },
          { title: 'Ужин №2', list: ['Кефир'] }
        ],
      },
      sunday: {
        morning: [ 
          { title: 'Завтрак №1', list: ['Каша манная', 'Бутерброд с баклажанной икрой', 'Чай черный с лимоном'] }, 
          { title: 'Завтрак №2', list: ['Пряники', 'Молоко'] } 
        ],
        day: [ 
          { title: 'Обед', list: ['Суп с гречкой', 'Пюре картофельное с куриной голенью', 'Салат (морковь с редькой)', 'Кисель'] },
          { title: 'Полдник', list: ['Творожные сырки'] }
        ],
        evening: [ 
          { title: 'Ужин №1', list: ['Ленивые голубцы','Чай фруктовый'] },
          { title: 'Ужин №2', list: ['Кефир'] }
        ],
      },
  
    }

    this.container = document.querySelector('.food_at_the_pansion');
    this.tabs = this.container.querySelectorAll('.food_at_the_pansion__tab');
    this.tabsContainers = this.container.querySelectorAll('.food_at_the_pansion__tab-content');
    this.days = {
      monday: 'monday',
      tuesday: 'tuesday',
      wednesday: 'wednesday',
      thursday: 'thursday',
      friday: 'friday',
      saturday: 'saturday',
      sunday: 'sunday',
    };
    this.currentDay = this.days.monday;
  }

  _setCurrentDay(newDay) { 
    this._cleanTabsActive();
    this._cleanTabsContainers();
    this.currentDay = newDay; 
    this._setTabActive();
    this._renderText();
  }

  _cleanTabsActive() { this.tabs.forEach(i => i.classList.remove('_active')) }
  _setTabActive() { Array.from(this.tabs).find(i => i.dataset.day === this.currentDay).classList.add('_active') }

  _getTabBlock(title, list) {
    return `
      <p class="food_at_the_pansion__tab-content-title">${title}</p>
      <ul class="food_at_the_pansion__tab-content-list">
        ${list.map(i => {
          return `<li class="food_at_the_pansion__tab-content-list-item">${i}</li>`;
        }).join('')}
      </ul>
  `;
  }

  _renderText() {
    const currentDataObj = this.data[ this.currentDay ];
    Object.keys(currentDataObj).forEach(key => {
      currentDataObj[key].forEach(i => {
        this.container.querySelector(`[data-daypart="${key}"]`).insertAdjacentHTML('beforeend', this._getTabBlock(i.title, i.list));
        ;
      });
    }); 
  }

  _cleanTabsContainers() {
    this.tabsContainers.forEach(i => i.innerHTML = '');
  }

  run() {
    this._setCurrentDay('monday');
    this.tabs.forEach(i => {
      i.addEventListener('click', () => {
        this._setCurrentDay(i.dataset.day);
      })
    });
  };
}
const foodAtThePansion = new FoodAtThePansion();
foodAtThePansion.run();