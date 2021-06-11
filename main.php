<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tele-hub</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="imgs/profile/black-dino-white2.png">
</head>
<body>
<!--БОТ-->
    <div class="show-bot"></div>
    <form action="" class="bot-form">
        <div class="close-bot"></div>
        <div class="bot-header">
            <div class="bot-answer">
                <div class="bot-name1">Вам отвечает... </div>
                <div class="bot-name2">Бот Никита</div>
            </div>
            <div class="bot-img"></div>
        </div>
        <div class="bot-content">
            <div class="bot-message">Привет, я твой личный помощник Никита.</div>
            <div class="bot-message">Отправь одну из нижеперечислинных команд, что бы я смог тебе помочь!
                <br>
                <span class="bot-help">1 - Помощь с тарифом</span>
                <br>
                <span class="bot-help">2 - Контакты</span>
                <br><span class="bot-help">3 - Цены</span>
            </div>
        </div>
        <div class="bot-inputarea">
            <input class="bot-input" type="text" placeholder="Напишите что-нибудь">
            <div class="bot-btn"></div>
        </div>
    </form>
<!--POPUP-->
    <div class="popup">
        <button type="button" class="popup__close">
            <span class="visually-hidden">Закрыть</span>
        </button>
    <form action="signup-check.php" method="post" class="form form--sign-up">
        <h1 class="form__title">Регистрация</h1>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <?php if (isset($_GET['error_signup'])) { ?>
            <p class="error"><?php echo $_GET['error_signup']; ?></p>
        <?php } ?>
        <div class="form__box">
            <input type="email" id="email" name="email" placeholder="Почта:" class="form__input">
            <input type="text" name="login" placeholder="Логин:" class="form__input">
            <input type="password" name="password" placeholder="Пароль:" class="form__input">
            <button type="submit" class="form__btn form__btn2">Зарегистрироваться</button>
        </div>
    </form>
    <form action="login.php" method="post" class="form form--sign-in">
        <h1 class="form__title form__title--sign-in">Вход</h1>
        <?php if (isset($_GET['error_signin'])) { ?>
            <p class="error"><?php echo $_GET['error_signin']; ?></p>
        <?php } ?>
        <div class="form__box">
            <input type="text" id="login" name="login" placeholder="Логин:" class="form__input">
            <input type="password" id="password" name="password" placeholder="Пароль:" class="form__input">
            <button type="submit" class="form__btn">Войти</button>
        </div>
    </form>
    </div>

    <header>
        <nav>
            <div class="logo">
                <img src="imgs/header/dinoFIXED.png" alt="ITHUB logo">
                <a href="" class="nav_tele">TELEHUB</a>
            </div>
            <ul class="nav__ul">
                <li>
                    <a href="">Оформить</a>
                </li>
                <li>
                    <a href="" class="nav__link">Банк</a>
                </li>
                <li>
                    <a href="">Тарифы</a>
                </li>
                <li>
                    <button class="navBtn">Вход</button>
                </li>
            </ul>
            <img src="imgs/header/tree.png" alt="Trees" class="nav__bigTree">
            <img src="imgs/header/tree.png" alt="Trees" class="nav__miniTree">
        </nav>
    <!--    БАННЕР-->
        <div class="banner__block">
            <div class="banner__text">
                <p>На ВСЕ летние тарифы действует скидка 20% по промокоду SUMMER21</p>
            </div>
                <div class="banner__laptop">
                    <img src="imgs/header/laptop.png" alt="Woman">
                </div>
        </div>
    </header>
    <!--САМЫЕ ПОПУЛЯРНЫЕ ТАРИФЫ-->
        <div class="popular">
                <h1 class="popular__text">Самые популярные тарифы :</h1>
            <div class="popular__cards">
                <div class="popular__card">
                    <div class="popular__cardTop"></div>
                    <img class="popular__fhoto" src="imgs/popular/img_popular1.png">
                </div>
                <div class="popular__card">
                    <div class="popular__cardTop"></div>
                    <img class="popular__fhoto" src="imgs/popular/img_popular2.png">
                </div>
                <div class="popular__card">
                    <div class="popular__cardTop"></div>
                    <img class="popular__fhoto" src="imgs/popular/img_popular3.png">
                </div>
            </div>
            <img class = "popular__venikLeft" src="imgs/popular/trees.png">
            <img class="popular__venikRight" src="imgs/popular/trees.png">
            <img class="popular__venikSmall" src="imgs/popular/trees.png">
        </div>
    <!--ДОСТАВКА-->
        <div class="container">
            <h1 class="container__text">Оформите сим-карту прямо сейчас</h1>
            <button class="container__btn">оформить</button>
            <img class="delivery__treeRight" src="imgs/delivery/tree.png" alt="tree">
            <img class="delivery__treeSmall" src="imgs/delivery/tree.png" alt="tree">
            <img class="delivery__treeLeft" src="imgs/delivery/tree.png" alt="tree">
            <img class="delivery__zumers" src="imgs/delivery/img_delivery.png" alt="delivery">
        </div>
    <!--МЕРЧ-->
    <div class="container merch">
        <h1 class="container__text">Наш мерч</h1>
        <button class="container__btn">перейти</button>
        <img class="merch__treeRight" src="imgs/merch/tree.png" alt="tree">
        <img class="merch__treeSmall" src="imgs/merch/tree.png" alt="tree">
        <img class="merch__treeLeft" src="imgs/merch/tree.png" alt="tree">
        <img class="merch__gerlanda" src="imgs/merch/gerlanda.png" alt="line">
        <img class="merch__nogi" src="imgs/merch/img_merch.png" alt="merch">
    </div>
    <div class="container bank">
        <h1 class="container__text">Наше приложение с банком</h1>
        <button class="container__btn bank__btn">скоро на сайте</button>
        <img class="bank__treeRightSmall" src="imgs/bank/tree.png" alt="tree">
        <img class="bank__treeRight" src="imgs/bank/tree.png" alt="tree">
        <img class="bank__treeLeft" src="imgs/bank/tree.png" alt="tree">
        <img class="bank__treeLeftSmall" src="imgs/bank/tree.png" alt="tree">
        <img class="bank__treeSmall" src="imgs/bank/tree.png" alt="tree">
        <img class="bank__money" src="imgs/bank/img_bank.png" alt="money">
    </div>
    <footer>
        <div class="footer__info">
            <div>
            <p>Контактный телефон :
                <a class="footer__link" href="tel:74993509053">+7 (499) 350-90-53</a>
            </p>
            <p>Поддержка</p>
            <p>Поддержать экологию</p>
            <p>Подключение платёжных систем и служб доставок</p>
            </div>
        </div>
        <div class="footer__copy">
            <p>© 2021 ПАО «TeleHub» Все права защищены</p>
        </div>
        <img class="footer__dino" src="imgs/footer/dino.png" alt="bigdino">
        <img class="footer__tree" src="imgs/footer/tree.png" alt="tree">
    </footer>
    <script src="scripts/bot.js"></script>
    <script src="scripts/bot.js"></script>
    <script src="scripts/popup.js"></script>
</body>
</html>
