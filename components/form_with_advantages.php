<?php

function form_with_advantages() {
  ob_start();
?>

  <section class="form_with_advantages block">
    <div class="form_with_advantages__inner block__inner">
      <div class="form_with_advantages__form-container">
        <p class="form_with_advantages__title">Бесплатный выезд на дом для&nbsp;консультации и заключения договора</p>
        <?php echo do_shortcode('[contact-form-7 id="189" title="Заявка на размещение в пансионате" btnTxt="Отправить1"]') ?>
      </div>
      <ul class="form_with_advantages__list">
        <li class="form_with_advantages__list-item">Прием постояльцев осуществляется круглосуточно</li>
        <li class="form_with_advantages__list-item">Предоставляем возможность оплаты в рассрочку</li>
        <li class="form_with_advantages__list-item">Размещение в пансионат за пенсию</li>
      </ul>
    </div>
    <script>
      // Изменение надписи на кнопке
      document.querySelector('.form_with_advantages [type="submit"]').value = 'Отправить';
    </script>
  </section>

<?php

  $output_string = ob_get_contents();
  ob_end_clean();
  return $output_string;
}
add_shortcode('form_with_advantages', 'form_with_advantages');

?>