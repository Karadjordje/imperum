<?php
/*
Plugin Name: CFP
Plugin URI:
Description: Contact Form Plugin
Version: 1.0
Author: Dalibor Gogic
Author URI: https://daliborgogic.com
*/

function html_form_code_ENG() {
  echo '<div class="form-style" id="contact_form">';
  echo '<div id="contact_body">';
  echo '<div class="group inputs-style">   ';
  echo '<input type="text" name="name" id="name" required class="input-field" tabindex="1" >';
  echo '<label class="floating-label">YOUR NAME</label>';
  echo '</div>';
  echo '<div class="group inputs-style">';
  echo '<input type="text" name="email" id="email" required class="input-field" tabindex="2" >';
  echo '<label class="floating-label">YOUR E-MAIL</label>';
  echo '</div>';
  echo '<div class="group inputs-style">';
  echo '<input type="text" id="subject" name="subject" required class="input-field" tabindex="3" >';
  echo '<label class="floating-label"l>SUBJECT</label>';
  echo '</div>';
  echo '<div class="group inputs-style">';
  echo '<textarea name="message" id="message" class="textarea-field autoExpand" required maxlength="1000" tabindex="4" role="button" data-min-rows="" rows="1"></textarea>';
  echo '<label class="floating-label">YOUR MESSAGE</label>';
  echo '</div>';
  echo '<div id="contact_results"></div>';
  echo '<input class="btn btn-imperium btn-2" type="submit" id="submit_btn" value="Send Message" tabindex="5" />';
  echo '</div>';
}


function cf_shortcode_ENG() {
    ob_start();
    html_form_code_ENG();

    return ob_get_clean();
}

add_shortcode( 'contactform_ENG', 'cf_shortcode_ENG' );


// ruski
function html_form_code_RUS() {
  echo '<div class="form-style" id="contact_form">';
  echo '<div id="contact_body">';
  echo '<div class="group">   ';
  echo '<input type="text" name="name" id="name" required class="input-field" tabindex="1" >';
  echo '<label>Имя</label>';
  echo '</div>';
  echo '<div class="group">';
  echo '<input type="text" name="email" id="email" required class="input-field" tabindex="2" >';
  echo '<label>Ваш эл. адрес</label>';
  echo '</div>';
  echo '<div class="group">';
  echo '<input type="subject" id="subject" name="subject" required class="input-field" tabindex="3" >';
  echo '<label>Tема</label>';
  echo '</div>';
  echo '<div class="group">';
  echo '<textarea name="message" id="message" class="textarea-field" required maxlength="1000" tabindex="4"></textarea>';
  echo '<label>Сообщение</label>';
  echo '</div>';
  echo '<div id="textarea_feedback"><p></p></div>';
  echo '<p><i>* Все поля обязательны для заполнения</i></p>';
  echo '</div>';
  echo '<div id="container">';
  echo '<div id="outline"><div class="circle"></div></div>';
  echo '<div id="contact_results"></div>';
  echo '</div>';
  echo '<input type="submit" id="submit_btn" value="Отправить" tabindex="5" />';
  echo '</div>';
}


function cf_shortcode_RUS() {
    ob_start();
    html_form_code_RUS();

    return ob_get_clean();
}

add_shortcode( 'contactform_RUS', 'cf_shortcode_RUS' );

// srpski
function html_form_code_SRP() {
    echo '<div class="form-style" id="contact_form">';
  echo '<div id="contact_body">';
  echo '<div class="group">   ';
  echo '<input type="text" name="name" id="name" required class="input-field" tabindex="1" >';
  echo '<label>Ime</label>';
  echo '</div>';
  echo '<div class="group">';
  echo '<input type="text" name="email" id="email" required class="input-field" tabindex="2" >';
  echo '<label>Email</label>';
  echo '</div>';
  echo '<div class="group">';
  echo '<input type="subject" id="subject" name="subject" required class="input-field" tabindex="3" >';
  echo '<label>Predmet</label>';
  echo '</div>';
  echo '<div class="group">';
  echo '<textarea name="message" id="message" class="textarea-field" required maxlength="1000" tabindex="4"></textarea>';
  echo '<label>Poruka</label>';
  echo '</div>';
  echo '<div id="textarea_feedback"><p></p></div>';
  echo '<p><i>* Sva polja su obavezna</i></p>';
  echo '</div>';
  echo '<div id="container">';
  echo '<div id="outline"><div class="circle"></div></div>';
  echo '<div id="contact_results"></div>';
  echo '</div>';
  echo '<input type="submit" id="submit_btn" value="Poslati" tabindex="5" />';
  echo '</div>';
}


function cf_shortcode_SRP() {
    ob_start();
    html_form_code_SRP();

    return ob_get_clean();
}

add_shortcode( 'contactform_SRP', 'cf_shortcode_SRP' );

?>
