<?php

function schedule_of_our_guests() {
  ob_start();
?>

  <section class="schedule_of_our_guests block" id="schedule_of_our_guests">
    <div class="schedule_of_our_guests__inner block__inner">
      <h2 class="schedule_of_our_guests__title block__text30"><span class="block__text-blue">Распорядок дня</span> наших постояльцев</h2>
      <div class="schedule_of_our_guests__tabs-content-container">

        <div data-daypart="morning" class="schedule_of_our_guests__tab-content">
          <ul class="schedule_of_our_guests__tab-content-list">
            <li class="schedule_of_our_guests__tab-content-list-item">8:00 - 9:00 подъем, умывание</li>
            <li class="schedule_of_our_guests__tab-content-list-item">9:00 - 10:00 завтрак</li>
            <li class="schedule_of_our_guests__tab-content-list-item">10:00 - 11:00 пешие прогулки</li>
            <li class="schedule_of_our_guests__tab-content-list-item">11:00 - 12:00 второй завтрак</li>
            <li class="schedule_of_our_guests__tab-content-list-item">12:00 - 13:00 пешие прогулки</li>
          </ul>
        </div>

        <div data-daypart="day" class="schedule_of_our_guests__tab-content">
          <ul class="schedule_of_our_guests__tab-content-list">
            <li class="schedule_of_our_guests__tab-content-list-item">13:00 - 14:00 обед</li>
            <li class="schedule_of_our_guests__tab-content-list-item">14:00 - 16:00 свободное время, процедуры</li>
            <li class="schedule_of_our_guests__tab-content-list-item">16:00 - 17:00 полдник</li>
            <li class="schedule_of_our_guests__tab-content-list-item">17:00 - 18:00 игры, просмотр фильмов, чтение</li>
          </ul>
        </div>

        <div data-daypart="evening" class="schedule_of_our_guests__tab-content">
        <ul class="schedule_of_our_guests__tab-content-list">
            <li class="schedule_of_our_guests__tab-content-list-item">18:00 - 19:00 ужин</li>
            <li class="schedule_of_our_guests__tab-content-list-item">19:00 - 20:00 свободное время</li>
            <li class="schedule_of_our_guests__tab-content-list-item">20:00 - 21:00 поздний ужин</li>
            <li class="schedule_of_our_guests__tab-content-list-item">21:00 - 22:00 подготовка ко сну</li>
          </ul>
        </div>

      </div>
    </div>
  </section>
<?php

  $output_string = ob_get_contents(); 
  ob_end_clean(); 
  return $output_string;
}
add_shortcode('schedule_of_our_guests', 'schedule_of_our_guests');

?>