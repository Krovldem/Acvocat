<?php require ("./script.php"); ?>
<?php
    $response = '';
    if (isset($_POST['submit'])) {
        if (
                empty($_POST['email'])
                || empty($_POST['name'])
                || empty($_POST['textarea'])
                || empty($_POST['phone_number'])
        ) {
            $response = 'Заполните все поля!';
        } else {
            $response = sendMailTransactional(
                    $_POST['email'],
                    $_POST['name'],
                    $_POST['textarea'],
                    $_POST['phone_number']
            );
        }
    }
?>
<!DOCTYPE html>
<html lang="ru-ru" xmlns="">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="generator" content="Mobirise v5.9.18, mobirise.com" />
    <meta name="yandex-verification" content="f0e2e43b7cfce1b7" />
    <meta name="google-site-verification" content="NYMRXa9uypTiSkzPYmQPqXJpEX0-1munILiaf7ASOnI" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1"
    />
    <link rel="shortcut icon" href="assets/images/-.webp" type="image/x-icon" />
    <meta
        name="description"
        content="Эффективные юридические услуги для вашего спокойствия. Заполните форму для консультации и узнайте, как мы можем помочь вам."
    />

    <title>Адвокат Донченко</title>
    <link
        rel="stylesheet"
        href="assets/web/assets/mobirise-icons2/mobirise2.css"
    />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css" />
    <link
        rel="stylesheet"
        href="assets/bootstrap/css/bootstrap-reboot.min.css"
    />
    <link rel="stylesheet" href="assets/dropdown/css/style.css" />
    <link rel="stylesheet" href="assets/theme/css/style.css" />
    <link
        rel="preload"
        href="https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@400;700&display=swap&display=swap"
        as="style"
        onload="this.onload=null;this.rel='stylesheet'"
    />
    <noscript>
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Roboto+Flex:wght@400;700&display=swap&display=swap"
        />
    </noscript>
    <link
        rel="preload"
        as="style"
        href="assets/mobirise/css/mbr-additional.css?v=kBW90h"
    />
    <link
        rel="stylesheet"
        href="assets/mobirise/css/mbr-additional.css?v=kBW90h"
        type="text/css"
    />
</head>

<body>
<section
    data-bs-version="5.1"
    class="menu menu2 cid-uoZUejc0WV"
    nonce="menu"
    id="menu-5-uoZUejc0WV"
>
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container">
            <div class="navbar-brand">
            <span class="navbar-caption-wrap"
            ><a class="navbar-caption text-black display-4" href="#"
                >В. Донченко</a
                ></span
            >
            </div>
            <button
                class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-bs-toggle="collapse"
                data-target="#navbarSupportedContent"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#features"
                        >Услуги</a
                        >
                    </li>
                    <li class="nav-item">
                        <a
                            class="nav-link link text-black display-4"
                            href="#card-title"
                            aria-expanded="false"
                        >О нас</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link text-black display-4" href="#contacts"
                        >Контакты</a
                        >
                    </li>
                </ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="tel:+79268232434">
                        <span class="p-2 mbr-iconfont mobi-mbri-phone mobi-mbri"></span>
                    </a>
                    <a class="iconfont-wrapper" href="mailto:rsaum@yandex.ru">
                <span
                    class="p-2 mbr-iconfont mobi-mbri-letter mobi-mbri"
                ></span>
                    </a>
                    <a class="iconfont-wrapper" href="#contacts">
                <span
                    class="p-2 mbr-iconfont mobi-mbri-map-pin mobi-mbri"
                ></span>
                    </a>
                </div>
                <div class="navbar-buttons mbr-section-btn">
                    <a class="btn btn-primary display-4" href="#consultation"
                    >Записаться</a
                    >
                </div>
            </div>
        </div>
    </nav>
</section>

<section
    data-bs-version="5.1"
    class="header18 cid-uoZUejdolJ mbr-fullscreen"
    id="hero-15-uoZUejdolJ"
>
    <div
        class="mbr-overlay"
        style="opacity: 0.5; background-color: rgb(0, 0, 0)"
    ></div>
    <div class="container-fluid">
        <div class="row">
            <div class="content-wrap col-12 col-md-12">
                <h1
                    class="mbr-section-title mbr-fonts-style mbr-white mb-4 display-1"
                >
                    <strong>Право</strong>
                    <div>
                        <strong></strong>
                    </div>
                    <div>
                        <strong>и немного больше</strong>
                    </div>
                </h1>
                <p class="mbr-fonts-style mbr-text mbr-white mb-4 display-7">
                    <em
                    >Имущественные споры,<br />Возмещение ущерба,<br />Вред
                        здоровью,<br />Уголовная защита.</em
                    >
                </p>
                <div class="mbr-section-btn">
                    <a class="btn btn-white-outline display-7" href="#consultation"
                    >Получить консультацию</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<section
    data-bs-version="5.1"
    class="article8 cid-uoZUejdUfJ mbr-fullscreen"
    id="about-me-8-uoZUejdUfJ"
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-md-12 col-lg-10">
                <div class="card-wrapper">
                    <div class="image-wrapper d-flex justify-content-center mb-4">
                        <img
                            src="assets/images/photo-1473186505569-9c61870c11f9.jpeg"
                            alt="Mobirise Website Builder"
                        />
                    </div>
                    <div class="card-content-text">
                        <h3
                            class="card-title mbr-fonts-style mbr-white mt-3 mb-4 display-2"
                            id="card-title"
                        >
                            <strong>Почему выбирают нас?</strong>
                        </h3>
                        <div class="row card-box align-left">
                            <div class="item features-without-image col-12 active">
                                <div class="item-wrapper">
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        Не оставляйте свои проблемы на потом - действуйте
                                        сейчас!
                                    </p>
                                </div>
                            </div>
                            <div class="item features-without-image col-12">
                                <div class="item-wrapper">
                                    <p class="mbr-text mbr-fonts-style display-7">
                                        С нами вы получите не только юридическую помощь, но и
                                        поддержку в трудные времена.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    data-bs-version="5.1"
    class="form5 cid-uoZUejhq3a"
    id="contact-form-3-uoZUejhq3a"

>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3 class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"
                        id="consultation">
                        <strong>Запись на консультацию</strong>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8 mx-auto mbr-form" data-form-type="formoid">
                <form
                    action=""
                    method="POST"
                    enctype="multipart/form-data"
                    class="mbr-form form-with-styler"
                    data-form-title="Form Name"
                >
                    <input
                        type="hidden"
                        name="email"
                        data-form-email="true"
                        value="I/VvwLLr9ZCzlDlipQzSg/E8/h+ZY8mPg+z8riOXet5yTUOrdaku7xTBcg8Of9nCPP6qV4lGOUbQGB62RDfW6BslVcME1WZnfB8tTqVfcOZ+cz5FIr7wPsDvioHHzRp2"
                    />
                    <div class="row">
                        <div
                            hidden="hidden"
                            data-form-alert=""
                            class="alert alert-success col-12"
                        >
                            Thanks for filling out the form!
                        </div>
                        <div
                            hidden="hidden"
                            data-form-alert-danger=""
                            class="alert alert-danger col-12"
                        >
                            Oops...! some problem!
                        </div>
                    </div>
                    <div class="dragArea row">
                        <div class="col-md col-sm-12 form-group mb-3" data-for="name">
                            <label style="visibility: hidden" for="name-contact-form-3-uoZUejhq3a"></label><input
                                type="text"
                                name="name"
                                placeholder="Имя"
                                data-form-field="name"
                                class="form-control"
                                value=""
                                id="name-contact-form-3-uoZUejhq3a"
                            />
                        </div>
                        <div class="col-md col-sm-12 form-group mb-3" data-for="email">
                            <label style="visibility: hidden" for="email-contact-form-3-uoZUejhq3a"></label><input
                                type="email"
                                name="email"
                                placeholder="Почта"
                                data-form-field="email"
                                class="form-control"
                                value=""
                                id="email-contact-form-3-uoZUejhq3a"
                            />
                        </div>
                        <div class="col-12 form-group mb-3 mb-3" data-for="url">
                            <label style="visibility: hidden" for="url-contact-form-3-uoZUejhq3a"></label><input
                                type="tel"
                                name="phone_number"
                                placeholder="Телефон"
                                data-form-field="url"
                                class="form-control"
                                value=""
                                id="url-contact-form-3-uoZUejhq3a"
                            />
                        </div>
                        <div class="col-12 form-group mb-3" data-for="textarea">
                            <label style="visibility: hidden" for="textarea-contact-form-3-uoZUejhq3a"></label><textarea
                      name="textarea"
                      placeholder="Комментарий"
                      data-form-field="textarea"
                      class="form-control"
                      id="textarea-contact-form-3-uoZUejhq3a"
                  ></textarea>
                        </div>
                        <div
                            class="col-lg-12 col-md-12 col-sm-12 align-center mbr-section-btn"
                        >
                            <button type="submit" name="submit" class="btn btn-white-outline display-7">
                                Отправить заявку
                            </button>

                        </div>
                    </div>
                </form>
                    <?php if (@$response == "") { ?>
                    <?php } else if (@$response == "success") { ?>
                        <p class="mbr-text mbr-fonts-style display-7">Ваша заявка принята!</p>
                    <?php } else { ?>
                        <p class="mbr-text mbr-fonts-style display-7">Ваша заявка не была отправлена. Проверьте введенные данные!</p>
                    <?php } ?>
            </div>
        </div>
    </div>
</section>

<section
    data-bs-version="5.1"
    class="features03 cid-uoZUejgVVN"
    id="features-5-uoZUejgVVN"
>
    <div class="container-fluid" id="features">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h4
                        class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"
                    >
                        <strong>Наши услуги</strong>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="item features-image col-12 col-md-6 col-lg-4 active">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img
                            src="assets/images/photo-1473186505569-9c61870c11f9.jpeg"
                            alt="Mobirise Website Builder"
                            title=""
                        />
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mt-0 mb-2 display-5">
                            <strong>Уголовное право</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">
                            Защита ваших прав в суде
                        </p>
                        <div class="mbr-section-btn">
                            <a
                                class="btn btn-white-outline display-7"
                                href="#consultation"
                            >Записаться на консультацию</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img
                            src="assets/images/photo-1479142506502-19b3a3b7ff33.jpeg"
                            alt="Mobirise Website Builder"
                            title=""
                            data-slide-to="1"
                            data-bs-slide-to="1"
                        />
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
                            <strong>Гражданское право</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">
                            Решение споров и конфликтов
                        </p>
                        <div class="mbr-section-btn">
                            <a
                                class="btn btn-white-outline display-7"
                                href="#consultation"
                            >Записаться на консультацию</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="item-img mb-3">
                        <img
                            src="assets/images/photo-1457369804613-52c61a468e7d.jpeg"
                            alt="Mobirise Website Builder"
                            title=""
                            data-slide-to="2"
                            data-bs-slide-to="2"
                        />
                    </div>
                    <div class="item-content align-left">
                        <h5 class="item-title mbr-fonts-style mb-2 mt-0 display-5">
                            <strong>Семейное право</strong>
                        </h5>
                        <p class="mbr-text mbr-fonts-style mb-3 display-7">
                            Помощь в вопросах семьи и детей
                        </p>
                        <div class="mbr-section-btn item-footer">
                            <div class="mbr-section-btn">
                                <a
                                    class="btn btn-white-outline display-7"
                                    href="#consultation"
                                >Записаться на консультацию</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    data-bs-version="5.1"
    class="features10 cid-uoZUejgsgd"
    id="metrics-2-uoZUejgsgd"
>
    <div class="container">
        <div class="row justify-content-center">
            <div
                class="item features-without-image col-12 col-md-6 col-lg-4 active"
            >
                <div class="item-wrapper">
                    <div class="card-box align-left">
                        <p class="card-title mbr-fonts-style mb-3 display-1">
                            <strong>5+ лет</strong>
                        </p>
                        <p class="card-text mbr-fonts-style mb-3 display-7">
                            Опыт работы
                        </p>
                    </div>
                </div>
            </div>
            <div class="item features-without-image col-12 col-md-6 col-lg-4">
                <div class="item-wrapper">
                    <div class="card-box align-left">
                        <p class="card-title mbr-fonts-style mb-3 display-1">
                            <strong>500+</strong>
                        </p>
                        <p class="card-text mbr-fonts-style mb-3 display-7">
                            Счастливых клиентов
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    data-bs-version="5.1"
    class="contacts02 map1 cid-uoZUejhkTY"
    id="contacts-2-uoZUejhkTY"
>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 content-head">
                <div class="mbr-section-head mb-5">
                    <h3
                        class="mbr-section-title mbr-fonts-style align-center mb-0 display-2"
                        id="contacts"
                    >
                        <strong>Контактная информация</strong>
                    </h3>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="text-wrapper">
                        <ul class="list mbr-fonts-style display-7">
                            <li class="mbr-text item-wrap">
                                Телефон:
                                <a href="tel:+79268232434" class="text-primary"
                                >+7 (926) 823-24-34</a
                                >
                            </li>

                            <li class="mbr-text item-wrap">
                                WhatsApp:
                                <a href="tel:+79268232434" class="text-primary"
                                >+7 (926) 823-24-34</a
                                >
                            </li>

                            <li class="mbr-text item-wrap">
                                Почта:
                                <a href="mailto:rsaum@yandex.ru" class="text-primary"
                                >rsaum@yandex.ru</a
                                >
                            </li>

                            <li class="mbr-text item-wrap">
                                Адрес: Московская область, Воскресенск, микрорайон Центральный, улица Хрипунова, 5
                            </li>

                            <li class="mbr-text item-wrap">
                                Часы Работы: Пн-Пт: 09:00 - 18:00
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="map-wrapper col-md-12 col-lg-6">
                <div class="google-map">
                    <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A1a58f20cf9a2b54d48c39b64ad3282fe8a3d700d2b09e4aae6fc20dbec037adc&amp;source=constructor"
                            width="500"
                            height="400">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<section
    data-bs-version="5.1"
    class="footer2 cid-up0468FTGm"
    nonce="footers"
    id="footer02-3"
>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 center mt-2 mb-3">
                <p class="mbr-fonts-style copyright mb-0 display-7">
                    Основные услуги:<br />
                    <em>- Адвокат по гражданским делам</em><br />
                    <em>- Адвокат по арбитражным делам</em><br />
                    <em>- Адвокат по уголовным делам</em><br />
                    <em>- Досудебное урегулирование споров</em>
                </p>
            </div>
            <div class="col-12 col-lg-6 center">
                <div class="row-links mt-2 mb-3">
                    <ul class="row-links-soc">
                        <li class="mbr-text item-wrap">
                            Телефон:
                            <a href="tel:+79268232434" class="text-primary"
                            >+7 (926) 823-24-34</a
                            >
                        </li>

                        <li class="mbr-text item-wrap">
                            WhatsApp:
                            <a href="tel:+79268232434" class="text-primary"
                            >+7 (926) 823-24-34</a
                            >
                        </li>

                        <li class="mbr-text item-wrap">
                            Почта:
                            <a href="mailto:rsaum@yandex.ru" class="text-primary"
                            >rsaum@yandex.ru</a
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>

