<?php 
session_start();
$mess = $_SESSION['message'];
if(isset($mess)) {
  echo "<p class='message_by_server'>" . $mess . "</p>"; 
  $_SESSION['message'] = Null;

}
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <title>CinemaStar</title>
    <link rel="stylesheet" href=css/cssMM.css>
  </head>
  <body>
    <h1 class="">Кинотеатр "Синема Стар"</h1>
    <header class="header">
      <nav class="header__navigation">
        <img class="header__img" src="" width="" height="" alt="">
        <ul class="header__list">
          <li class="header__item"><a href="#">Новости</a></li>
          <li class="header__item"><a href="#">Кинотеатры</a></li>
          <li class="header__item"><a href="#">Купить билеты</a></li>
          <li class="header__item"><a href="#">Логин</a></li>
        </ul>
      </nav>
    </header>
    <main class="main">
      <section class="main__slider">

      </section>
      <section class="main__tech tech">
        <h2 class="tech__title">Технологии:</h2>
        <ul class="tech__list">
          <li class="tech__item">
            <img class="tech__img" src="" width="" height="" alt="">
            <span class="tech__title">звук dolby atmos</span>
            <p class="tech__text">
              Оживляет происходящее на экране
              и создает удивительно мощный,
              насыщенный звук,
              обеспечивая эффект полного погружения.
            </p>
          </li>
          <li class="tech__item">
            <img class="tech__img" src="" width="" height="" alt="">
            <span class="tech__title">Кресла с системой d-box</span>
            <p class="tech__text">
              Могут вибрировать
              и наклоняться в разные стороны
              во время фильма.
              Настраивается уровень чувствительности.
            </p>
          </li>
          <li class="tech__item">
            <img class="tech__img" src="" width="" height="" alt="">
            <span class="tech__title">Harkness Screens</span>
            <p class="tech__text">
              Обеспечивает лучший контраст,
              точность цветопередачи,
              детали изображения и глубину для 3D.
            </p>
          </li>
        </ul>
      </section>
      <section class="main__catalog catalog">
        <h2 class="catalog__title">Афиша:</h2>
        <ul class="catalog__list">
          <li class="catalog__item catalog-item">
            <div class="catalog-item-wrapper">
              <img class="catalog-item__img" src="img/first-film.jpg" width="285" height="410" alt="Постер фильма">
            </div>
            <span class="catalog-item__name">Матильда</span>
            <ul class="catalog-item__list">
              <li class="catalog-item__item catalog-item__item--time">109 мин./ 01:49</li>
              <li class="catalog-item__item catalog-item__item--genre">Драма, История, Триллер</li>
              <li class="catalog-item__item catalog-item__item--contry">Россия</li>
            </ul>
            <p class="catalog-item__text">
              Последний русский император и балерина, утвердившая славу русского балета.
              Страсть, которая могла изменить русскую историю. Любовь, ставшая легендой...
              Успенский собор, Кремль, Ходынское поле, царские дворцы,
              сцены Мариинского и Большого театров — там, где бьется сердце вечной России.
            </p>
            <div class="catalog-item__buttons">
              <a class="button catalog-item__tick" href="#">Купить билеты</a>
              <a class="button catalog-item__reviews" href="#">Отзывы</a>
            </div>
            <span class="catalog-item__age">16+</span>
          </li>
          <li class="catalog__item catalog-item">
            <div class="catalog-item-wrapper">
              <img class="catalog-item__img" src="img/first-film.jpg" width="285" height="410" alt="Постер фильма">
            </div>
            <span class="catalog-item__name">Матильда</span>
            <ul class="catalog-item__list">
              <li class="catalog-item__item catalog-item__item--time">109 мин./ 01:49</li>
              <li class="catalog-item__item catalog-item__item--genre">Драма, История, Триллер</li>
              <li class="catalog-item__item catalog-item__item--contry">Россия</li>
            </ul>
            <p class="catalog-item__text">
              Последний русский император и балерина, утвердившая славу русского балета.
              Страсть, которая могла изменить русскую историю. Любовь, ставшая легендой...
              Успенский собор, Кремль, Ходынское поле, царские дворцы,
              сцены Мариинского и Большого театров — там, где бьется сердце вечной России.
            </p>
            <div class="catalog-item__buttons">
              <a class="button catalog-item__tick" href="#">Купить билеты</a>
              <a class="button catalog-item__reviews" href="#">Отзывы</a>
            </div>
            <span class="catalog-item__age">16+</span>
          </li>
          <li class="catalog__item catalog-item">
            <div class="catalog-item-wrapper">
              <img class="catalog-item__img" src="img/second-film.jpg" width="285" height="410" alt="Постер фильма">
            </div>
            <span class="catalog-item__name">Лёд</span>
            <ul class="catalog-item__list">
              <li class="catalog-item__item catalog-item__item--time">113 мин./ 01:53</li>
              <li class="catalog-item__item catalog-item__item--genre">Драма, Спорт, Мелодрама</li>
              <li class="catalog-item__item catalog-item__item--contry">Россия</li>
            </ul>
            <p class="catalog-item__text">
              С самого детства Надя верила в чудеса. Она представляла себе,
              как выходит на лёд под овации публики и танцует свой самый красивый танец.
              И вот, благодаря вере и упорству, Надя становится знаменитой фигуристкой.
              Но когда ее мечты о громких победах, красивой жизни и прекрасном принце уже,
              кажется, готовы исполниться, судьба преподносит ей настоящее испытание.
            </p>
            <div class="catalog-item__buttons">
              <a class="button catalog-item__tick" href="#">Купить билеты</a>
              <a class="button catalog-item__reviews" href="#">Отзывы</a>
            </div>
            <span class="catalog-item__age">12+</span>
          </li>
          <li class="catalog__item catalog-item">
            <div class="catalog-item-wrapper">
              <img class="catalog-item__img" src="img/second-film.jpg" width="285" height="410" alt="Постер фильма">
            </div>
            <span class="catalog-item__name">Лёд</span>
            <ul class="catalog-item__list">
              <li class="catalog-item__item catalog-item__item--time">113 мин./ 01:53</li>
              <li class="catalog-item__item catalog-item__item--genre">Драма, Спорт, Мелодрама</li>
              <li class="catalog-item__item catalog-item__item--contry">Россия</li>
            </ul>
            <p class="catalog-item__text">
              С самого детства Надя верила в чудеса. Она представляла себе,
              как выходит на лёд под овации публики и танцует свой самый красивый танец.
              И вот, благодаря вере и упорству, Надя становится знаменитой фигуристкой.
              Но когда ее мечты о громких победах, красивой жизни и прекрасном принце уже,
              кажется, готовы исполниться, судьба преподносит ей настоящее испытание.
            </p>
            <div class="catalog-item__buttons">
              <a class="button catalog-item__tick" href="#">Купить билеты</a>
              <a class="button catalog-item__reviews" href="#">Отзывы</a>
            </div>
            <span class="catalog-item__age">12+</span>
          </li>
          <li class="catalog__item catalog-item">
            <div class="catalog-item-wrapper">
              <img class="catalog-item__img" src="img/third-film.jpg" width="285" height="410" alt="Постер фильма">
            </div>
            <span class="catalog-item__name">Без меня</span>
            <ul class="catalog-item__list">
              <li class="catalog-item__item catalog-item__item--time">97 мин. / 01:37</li>
              <li class="catalog-item__item catalog-item__item--genre">Драма, Мелодрама</li>
              <li class="catalog-item__item catalog-item__item--contry">Россия</li>
            </ul>
            <p class="catalog-item__text">
              Две девушки, любившие одного мужчину, после
              его гибели получают сообщения, автором которых может быть только он.
              В надежде на чудо им вдвоем предстоит отправиться в путь,
              который прокладывают его подсказки, чтобы открыть тайну, стоящую за загадочными посланиями.
            </p>
            <div class="catalog-item__buttons">
              <a class="button catalog-item__tick" href="#">Купить билеты</a>
              <a class="button catalog-item__reviews" href="#">Отзывы</a>
            </div>
            <span class="catalog-item__age">16+</span>
          </li>
          <li class="catalog__item catalog-item">
            <div class="catalog-item-wrapper">
              <img class="catalog-item__img" src="img/third-film.jpg" width="285" height="410" alt="Постер фильма">
            </div>
            <span class="catalog-item__name">Без меня</span>
            <ul class="catalog-item__list">
              <li class="catalog-item__item catalog-item__item--time">97 мин. / 01:37</li>
              <li class="catalog-item__item catalog-item__item--genre">Драма, Мелодрама</li>
              <li class="catalog-item__item catalog-item__item--contry">Россия</li>
            </ul>
            <p class="catalog-item__text">
              Две девушки, любившие одного мужчину, после
              его гибели получают сообщения, автором которых может быть только он.
              В надежде на чудо им вдвоем предстоит отправиться в путь,
              который прокладывают его подсказки, чтобы открыть тайну, стоящую за загадочными посланиями.
            </p>
            <div class="catalog-item__buttons">
              <a class="button catalog-item__tick" href="#">Купить билеты</a>
              <a class="button catalog-item__reviews" href="#">Отзывы</a>
            </div>
            <span class="catalog-item__age">16+</span>
          </li>
        </ul>
      </section>
    </main>
    <footer class="footer">
      <div class="footer__wrapper-first footer-info">
        <ul class="footer-info__list">
          <li class="footer-info__item">
            <span class="footer-info__title">Телефон:</span>
            <span class="footer-info__text">+7(4842)90-08-09</span>
          </li>
          <li class="footer-info__item">
            <span class="footer-info__title">Формат показа:</span>
            <span class="footer-info__text"> 2d и 3d</span>
          </li>
          <li class="footer-info__item">
            <span class="footer-info__title">Формат звука:</span>
            <span class="footer-info__text">звук dolby surround 7.1</span>
          </li>
          <li class="footer-info__item">
            <span class="footer-info__title">экраны: </span>
            <span class="footer-info__text">harkness hall</span>
          </li>
          <li class="footer-info__item">
            <span class="footer-info__title">кол-во мест:</span>
            <span class="footer-info__text">492</span>
          </li>
        </ul>
        <button class="button footer-info__button" type="button">Подробнее</button>
      </div>
      <div class="footer__wrapper-second footer-map">
        <p class="footer-map__text">
          ФЕДЕРАЛЬНАЯ СЕТЬ КИНОТЕАТРОВ «СИНЕМА СТАР»
          СОЗДАНА В 2005 ГОДУ,
          НА СЕГОДНЯШНИЙ ДЕНЬ В НЕЕ ВХОДИТ:
          26 КИНОТЕАТРА В 15 ГОРОДАХ
        </p>
        <button class="button footer-map__button" type="button">Показать на карте</button>
      </div>
    </footer>
    <section class="modal-login">
      <h2 class="modal-login__title"></h2>
      <p class="modal-login__text"></p>
      <form class="modal-login__form" action="PHP/authorization/getAutho.php" method="get">
        <label class="modal-login__label">
          <input class="modal-login__input" type="text" name="login" placeholder="Логин">
        </label>
        <label class="modal-login__label">
          <input class="modal-login__input" type="text" name="password" placeholder="Пароль">
        </label>
        <input class="modal-login__input" id="remember-input" type="checkbox" name="remember" value="remember">
        <label for="remember-input">
          Запомните меня
        </label>
        <a class="modal-login__forgot">Забыли данные?</a>
        <button class="button modal-login__button" type="submit">Войти</button>
      </form>
    </section>
  </body>
</html>
