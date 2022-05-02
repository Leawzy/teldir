<?php
session_start();

$title = "Страница о нас";
require "lib/layouts/app.php";
require "lib/layouts/header.php";
?>
<div class="container">
    <h2 class="faq-heading">Самые популярные вопросы нам</h2>

    <details class="faq-card">
        <summary>Как сильно защищена ваша база данных? <span class="faq-open-icon">+</span></summary>
        <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
    </details>
    <details class="faq-card">
        <summary>Откуда вы берете данные для базы данных? <span class="faq-open-icon">+</span></summary>
        <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
    </details>
    <details class="faq-card">
        <summary>Как мне найти своего друга или родственника? <span class="faq-open-icon">+</span></summary>
        <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
    </details>
    <details class="faq-card">
        <summary>Как я могу добавить свой номер? <span class="faq-open-icon">+</span></summary>
        <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
    </details>
    <details class="faq-card">
        <summary>Можно ли добавить туда всю мою семью? <span class="faq-open-icon">+</span></summary>
        <span class="faq-card-spoiler">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ornare, sem at dictum faucibus, neque nunc pellentesque sem, nec pellentesque tellus ex vel lorem. Vestibulum magna odio, ornare in faucibus.</span>
    </details>

    <h2 class="faq-heading">Остались вопросы?</h2>
    <p class="faq-aftertext">Если вы не можете найти ответ на свой вопрос в FAQ, вы всегда можете<br>
        Связаться с нами. Мы ответим в ближайшее время!
    </p>
    <form action="" class="about__form">
        <input type="email" required placeholder="Ваша почта">
        <input type="text" required placeholder="Ваше имя">
        <textarea name="" id="" cols="30" rows="10" required placeholder="Ваш вопрос"></textarea>
        <button type="submit">Отправить</button>
    </form>
</div>
<?php
require "lib/layouts/footer.php";
?>
