<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Курсы компьютера для начинающих</title>
    <meta name="description" content="Tempalte for use as a landing or home page in a website study academy" >
    <meta name="keywords" content="training, learning, marketing" >

    <link rel="canonical" href="https://cursuricalculator.md/ru">

    <link rel="alternate" hreflang="ro" href="https://cursuricalculator.md/ro">

    <meta property="og:title" content="Курсы компьютера для начинающих">
    <meta property="og:description" content="Descrierea paginii">
    <meta property="og:image" content="https://cursuricalculator.md/imagini/preview.jpg">
    <meta property="og:url" content="https://cursuricalculator.md/ro">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Курсы компьютера для начинающих">
    <meta name="twitter:description" content="Descrierea paginii">
    <meta name="twitter:image" content="https://cursuricalculator.md/imagini/preview.jpg">

    <meta name="robots" content="index, follow">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon" type="image/x-icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CRaleway:300,300i,400,400i,500,500i,600,600i,700,700i%7CPoppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- CSS files  -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap-5-1.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>
<div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
        <div class="contact-info me-auto">
            <i class="icofont-envelope"></i> <a href="mailto:contact@example.com" class="text-decoration-none">{{ config('mail.from.address') }}</a>
            <i class="icofont-phone"></i> {{ config('app.phone') }}
            <i class="icofont-clock-time"></i> 9:00 - 21:00</div>
        <div class="social-links">
            @foreach(config('app.socials') as $social)
                @if($social['published'])
                    <a href="{{ $social['url'] }}" target="_blank" rel="nofollow" class="text-decoration-none {{ $social['icon'] }}"><i class="icofont-{{ $social['icon'] }}"></i></a>
                @endif
            @endforeach
        </div>
    </div>
</div>

<!--  Header  -->
<header id="header" class="fixed-top container-fluid">
    <div class="row container mx-auto align-items-center px-0 px-sm-4" id="navBar">
        <div class="col">
            <div class="d-flex flex-column flex-md-row align-items-center">
                <h2 class="logo me-auto">
                    <a href="/ru" class="logo me-4 text-decoration-none">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid">National Academy</a></h2>
                <div>
                    <a href="/ro" class="appointment-btn  text-decoration-none m-0" >Română</a></div>
            </div>
        </div>
        <div class="col-1 col-lg-5">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
                <div class="nav-menu d-none d-lg-block" id="navBar">
                    <ul>
                        <li>
                            <a href="#header" class="text-decoration-none" >Курсы</a>
                        </li>
                        <li>
                            <a href="#services" class="text-decoration-none" >Услуги</a>
                        </li>
                        <li>
                            <a href="#faqs" class="text-decoration-none">Распространенные вопросы</a>
                        </li>
                        <li>
                            <a href="#testimonials" class="text-decoration-none" >Отзывы</a>
                        </li>

                        <li>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header><!-- End header -->

<!-- Begin Hero -->
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <h1>Курсы компьютера для начинающих</h1>
        <h2>Идеальная учебная среда для вашего будущего</h2>
        <div class="my-3">
            <a href="#about" class="appointment-btn scrollto text-decoration-none me-2 me-sm-5">О курсах</a>
            <a href="#about" class="appointment-btn text-decoration-none" data-bs-toggle="modal" data-bs-target="#formModal" data-bs-whatever="Book me"> Регистрация</a>
        </div>
    </div>
</section><!-- End Hero -->

<main id="main" class="position-relative">
    <!-- Study here  -->
    <section id="why-here" class="why-here">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 d-flex align-items-stretch">
                    <div class="content">
                        <h3 class="text-center">Курсы ПК для начинающих!</h3>
                        <p>
                            Мы предлагаем тем, кто не знаком с компьютером (ПК), открыть для себя новые возможности вместе с нами, чтобы вы могли стать настоящим пользователем компьютера, открыв для себя множество полезных функций, синхронизацию с телефоном, электронную почту, YouTube, Google и многие другие программы, которые действительно нужны и полезны в современной жизни.
                        </p>
                        <div class="text-center">
                            <a href="#services" class="more-btn alert-darkappointment-btn scrollto text-decoration-none">Читать</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="icofont-teacher"></i>
                                    <h4>Почему мы?</h4>
                                    <p>Метод компьютерного консультирования онлайн и видеоуроки, которые вы можете просмотреть в любое время!</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="icofont-tick-mark"></i>
                                    <h4>Результат 100%</h4>
                                    <p>Мы гарантируем качество курсов, вы откроете для себя много нового, мы работаем на результат!</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="icofont-bank"></i>
                                    <h4>Цена/Качество</h4>
                                    <p>Гарантия цены/качества, если после наших курсов вы не сможете пользоваться своим ПК, мы вернем вам деньги!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End study here -->

    <!-- Acerca de-->
    <section id="about" class="about">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-xl-5 col-lg-6 imagen-box d-flex justify-content-center align-items-stretch"> </div>
                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>Хотите хорошо изучить Компьютер?</h3>
                    <p>Мы проводим онлайн-уроки и обучаем вас работе с Windows 10 или 11 на русском или румынском языках, MS Office для начинающих, программы, которые помогут вам легче пользоваться ПК, синхронизации с телефоном, Google, Youtube, Gmail, Drive, Uninstall tool, программы с помощью которого вы можете копировать видео и т.д</p>

                    <div class="icon-box">
                        <div class="icon"><i class="icofont-presentation"></i></div>
                        <h4 class="title"><a href="#" class="text-decoration-none">Мы анализируем ваш компьютер, Windows, MS Office и на каком языке вы будете проходить курсы.</a></h4>
                        <p class="description">Первым шагом является анализ вашего компьютера, какой Windows вы будете изучать, на каком языке будет интерфейс и на каком языке будут проводиться курсы.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="icofont-handshake-deal"></i></div>
                        <h4 class="title"><a href="#" class="text-decoration-none">Настройки, установка и обновления</a></h4>
                        <p class="description">Для того чтобы вы лучше усвоили новые уроки, мы настроим ваш компьютер на тот же язык, который вы выбрали для изучения, обновим необходимое программное обеспечение и дадим рекомендации по необходимости модернизации вашего ноутбука или ПК.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="icofont-certificate-alt-1"></i></div>
                        <h4 class="title"><a href="#" class="text-decoration-none">Видео с прошлых уроков.</a></h4>
                        <p class="description">После завершения каждого онлайн-урока вы получите доступ к каждому уроку для просмотра или копирования на свой компьютер, чтобы повторить, если вы что-то забудете!</p>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col text-center">
                    <a href="#" class="appointment-btn text-decoration-none" data-bs-toggle="modal" data-bs-target="#formModal" data-bs-whatever="Reservar">Detalii</a>
                </div>
            </div>
        </div>
    </section><!-- End about -->
    <!-- Begin courses  -->
    <section id="courses" class="courses text-decoration-none">
        <div class="container">

            <div class="section-title">
                <h2>Онлайн-консультации</h2>
                <p>Онлайн-консультации предназначены для новичков или для людей, которым нужна помощь с настройками, установкой программного обеспечения или индивидуальная консультация. Все консультации сопровождаются видеозаписью.</p>
            </div>

            <div class="row">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column h-100 justify-content-around">
                        <li class="nav-item">
                            <button class="nav-link  w-100 text-start active show" data-bs-toggle="tab" data-bs-target="#tab-1">Windows 10/11 RU/RO</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link w-100 text-start" data-bs-toggle="tab" data-bs-target="#tab-2">MS Office</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link w-100 text-start" data-bs-toggle="tab" data-bs-target="#tab-3">Индивидуальная консультация ПК</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link w-100 text-start" data-bs-toggle="tab" data-bs-target="#tab-4">Установка программного обеспечения, принтера и т. д.</button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Windows 10/11 RU/RO</h3>
                                    <p class="font-italic">Мы предлагаем консультации по операционной системе Windows 10/11, онлайн-консультации или онлайн-помощь, мы покажем вам, поможем вспомнить и освежить ваши знания системы Windows, на румынском и русском языках </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('assets/img/training-1.jpg') }}" alt="консультации по операционной Windows 10/11 RU/RO" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>MS Office</h3>
                                    <p class="font-italic">Помощь в использовании Microsoft Office, настройками и онлайн-консультациями с помощью удаленных программ или помощь в создании документов, таблиц и других документов в соответствии с вашими потребностями.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('assets/img/training-2.png') }}" alt="Помощь в использовании Microsoft Office" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Индивидуальная консультация ПК</h3>
                                    <p class="font-italic">Индивидуальное удаленное консультирование, где вы просто можете задавать любые индивидуальные вопросы, на которые консультант/преподаватель вам показывает, обучает, а затем оставляет вам видео со всем ответами на ваши вопросы.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('assets/img/training-3.jpg') }}" alt="Индивидуальная консультация ПК" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Установка программного обеспечения, принтера и т. д.</h3>
                                    <p class="font-italic">В этот раздел входят любые виды индивидуальных настроек, установки принтера, клиентские программы или любое другое программное обеспечение.</p>
                                    <p>Часто бывает так, что у человека возникают трудности с установкой или настройкой некоторых программ Windows и многих других, мы помогаем вам их установить, настроить и приобрести.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('assets/img/training-4.jpg') }}" alt="Установка программного обеспечения, принтера" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End  courses -->
    <!--  Services -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title">
                <h2>Услуги</h2>
                <p>...</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-architecture-alt"></i></div>
                        <h4><a href="#" class="text-decoration-none">Онлайн-курсы</a></h4>
                        <p>Курсы для начинающих Windows 10 или 11 на русском и румынском языках</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-teacher"></i></div>
                        <h4><a href="#" class="text-decoration-none">Онлайн-консультации</a></h4>
                        <p>Удалённые консультации для обновления знаний или получения ответа и решения вопроса связанных с компьютером!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-binary"></i></div>
                        <h4><a href="#" class="text-decoration-none">Установка драйвера/программы</a></h4>
                        <p>Мы помогаем установить любое программное обеспечение, принтер, видео, 3D или драйвер ПК как удаленно, так и по вызову – на дом.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-live-support"></i></div>
                        <h4><a href="#" class="text-decoration-none">Техническая поддержка ПК</a></h4>
                        <p>Техническое обслуживание ПК или ноутбука, чистка, замена термопасты, модернизация и т. д.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-computer"></i></div>
                        <h4><a href="#" class="text-decoration-none">Рекомендации по ПК и ноутбукам</a></h4>
                        <p>Предлагаем нашим клиентам рекомендации по покупке, ремонту или модернизации ПК или ноутбука!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-dashboard-web"></i></div>
                        <h4><a href="#" class="text-decoration-none">Создание веб-страниц</a></h4>
                        <p>Мы создаем индивидуальные веб-страницы, целевые страницы, сайты, блоги, занимаемся продвижением, SEO, SMM и многим другим...</p>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End  services -->

    <!-- Begin FAQ section -->
    <section id="faqs" class="faq section-bg">
        <div class="container">
            <div class="section-title">
                <h2>FAQS</h2>
                <p>Наиболее распространенные вопросы, которые нам задают пользователи</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" class="collapsed text-decoration-none" href="#faq-list-1">Как осуществляется оплата? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Оплата осуществляется после того, как позвонили нам или отправили заявку на регистрацию, после этого к вам отправляется менеджер и подписывается с вами контракт, после вы можете оплатить в любом банке или переводом на карточку.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-2" class="collapsed text-decoration-none">Места Ограничены? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Да, места ограничены, в разное время суток проводятся разные курс-консультация, поэтому места и группы имеют лимит!
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-3" class="collapsed text-decoration-none">Сколько в группе участников? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                В группе от 5 до 10 клиентов, проведения курсов – консультации мы группируем по времени, операционной системы и языку!
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-4" class="collapsed text-decoration-none">После курса получим все видео? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Да, во время курсов вы получите доступ к видео уроков, которые вы уже прошли. По окончании всего курса, в течении 30 дней, вы можете скачать все видео или получить за дополнительную плату на Флешке (оплачивайте флэшку/носитель).
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-5" class="collapsed text-decoration-none">По окончанию получу сертификат? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Да мы выдаем сертификат что вы участвовали в курсе и стали пользователем ПК. Многие указывают в своём C.V.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-6" class="collapsed text-decoration-none">Могу ли я пройти курс со скидкой или бесплатно? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Да, если с вами запишутся на курс и другие участники через ваш код, то за каждого которого вы пригласили получите скидку в 500лей.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="600">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-7" class="collapsed text-decoration-none">После окончания курсов действует накопительная скидка? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Да, даже по окончании курсов вы можете рекомендовать новых участников используя наши утилиты, и от каждого кто зарегистрировался вы получите 500 лей/кредитов которые можете использовать на новые курсы или другие нужные услуги в течении 1 года от даты начисления, или что-то купить в нашем интернет-магазине! Вывести начисленные 500 лей/кредиты в реальные деньги невозможно!
                            </p>
                        </div>
                    </li>

                </ul>
            </div>

        </div>
    </section><!-- End FAQ section -->

    <!-- Begin testimonials  -->
    <section id="testimonials" class="testimonials">
        <div class="container">

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Pablo Gómez</h3>
                        <p>
                            <i class="icofont-quote-left quote-icon-left"></i>
                            Acest curs de calculator pentru începători mi-a schimbat complet perspectiva! Nu știam aproape nimic despre utilizarea unui computer, dar lecțiile au fost explicate clar și pe înțelesul meu. Acum pot naviga pe internet, trimite e-mailuri și lucra în Microsoft Word fără probleme. Recomand cu drag acest curs tuturor celor care vor să învețe!
                            <i class="icofont-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Sara Benegas</h3>
                        <p>
                            <i class="icofont-quote-left quote-icon-left"></i>
                            Nu credeam că voi putea învăța să folosesc un calculator la vârsta mea, dar datorită acestui curs am prins curaj. Instructorii au fost foarte răbdători și explicațiile lor au fost foarte clare. Am învățat să folosesc Excel, să creez documente și să caut informații pe internet. Un curs excelent pentru oricine!
                            <i class="icofont-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Paulina Moreno</h3>
                        <p>
                            <i class="icofont-quote-left quote-icon-left"></i>
                            Un curs bine structurat, cu multe exemple practice! La început mi se părea complicat, dar exercițiile pas cu pas m-au ajutat să înțeleg mai bine totul. Acum mă descurc fără probleme să folosesc un calculator pentru muncă și activități personale. Mulțumesc echipei pentru sprijin și profesionalism!
                            <i class="icofont-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Marta Genaro</h3>
                        <p>
                            <i class="icofont-quote-left quote-icon-left"></i>
                            Recomand acest curs tuturor celor care vor să învețe bazele utilizării calculatorului! Profesorii au fost foarte implicați, explicațiile clare și atmosfera plăcută. Acum pot folosi internetul, edita documente și chiar organiza fișierele în calculator fără probleme. A fost o experiență foarte utilă!
                            <i class="icofont-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End testimonials -->

</main><!-- End #main -->

<!-- Footer  -->
<footer id="footer">

{{--    <div class="footer-top">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}

{{--                <div class=" col-md-4 footer-contact">--}}
{{--                    <h3>National Academy</h3>--}}
{{--                </div>--}}
{{--                <div class=" col-md-4 footer-contact">--}}
{{--                    <h3>Address</h3>--}}
{{--                    <p>--}}
{{--                        Street name<br>--}}
{{--                        Ciy name,  35022<br>--}}
{{--                        Country<br><br>--}}
{{--                    </p>--}}
{{--                </div>--}}
{{--                <div class=" col-md-4 footer-contact">--}}
{{--                    <h3>Contact</h3>--}}
{{--                    <p>--}}
{{--                        <strong>Phone:</strong>  555 589 554<br>--}}
{{--                        <strong>Email:</strong> info@example.com<br>--}}
{{--                    </p>--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-left">
            <div class="copyright">
                &copy; Copyright <strong><span> {{ config('app.name') }}</span></strong>. All Rights Reserved
            </div>
            <div class="credits"></div>
        </div>
        <div class="social-links text-center text-md-right pt-3 pt-md-0">
            <!-- Add your social links -->
            @foreach(config('app.socials') as $social)
                @if($social['published'])
                    <a href="{{ $social['url'] }}" target="_blank" rel="nofollow" class="text-decoration-none {{ $social['icon'] }}"><i class="icofont-{{ $social['icon'] }}"></i></a>
                @endif
            @endforeach
        </div>
    </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top text-decoration-none"><i class="icofont-simple-up"></i></a>
<!-- Modal for contact form-->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">{{ __('form.title') }}</h5>
                <button type="button" class="close border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icofont-close-line fs-4"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="name" class="col-form-label">{{ __('form.name') }} <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" id="name">
                        <div>@error('name') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-form-label">{{ __('form.phone') }} <span class="text-danger">*</span></label>
                        <input type="text" name="phone" class="form-control" id="phone">
                        <div>@error('phone') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">{{ __('form.email') }}</label>
                        <input type="text" name="email" class="form-control" id="email">
                        <div>@error('email') {{ $message }} @enderror</div>
                    </div>

                    <div class="form-group">
                        <label for="messageText" class="col-form-label">{{ __('form.message') }}</label>
                        <textarea class="form-control" name="message" id="messageText"></textarea>
                        <div>@error('message') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-res mt-3" style="display: none"></div>
                </form>
            </div>
            <div class="modal-footer" id="footer">

                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('form.close') }}</button>
                <button type="button" class="btn btn-primary" id="sendMyForm" data-submit="myForm" >{{ __('form.submit') }}</button>
            </div>
        </div>
    </div>
</div>
<!--End modal-->
<!-- Vendor JS Files -->
<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap-5.1.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
</body>
</html>
