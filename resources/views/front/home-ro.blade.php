<!DOCTYPE html>
<html lang="ro">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Cursuri calculator pentru incepatori</title>
    <meta name="description" content="Tempalte for use as a landing or home page in a website study academy" >
    <meta name="keywords" content="training, learning, marketing" >

    <link rel="canonical" href="https://cursuricalculator.md/ro">

    <link rel="alternate" hreflang="ro" href="https://cursuricalculator.md/ro">
    <link rel="alternate" hreflang="ru" href="https://cursuricalculator.md/ru">

    <link rel="alternate" hreflang="x-default" href="https://cursuricalculator.md/ro" />

    <meta property="og:title" content="Cursuri calculator pentru incepatori">
    <meta property="og:description" content="Descrierea paginii">
    <meta property="og:image" content="https://cursuricalculator.md/imagini/preview.jpg">
    <meta property="og:url" content="https://cursuricalculator.md/ro">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Cursuri calculator pentru incepatori">
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
                    <a href="{{ $social['url'] }}" target="_blank" class="text-decoration-none {{ $social['icon'] }}"><i class="icofont-{{ $social['icon'] }}"></i></a>
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
                    <a href="/ro" class="logo me-4 text-decoration-none">
                        <img src="{{ asset('assets/img/logo.png') }}" alt="Curs calculator incepatori" class="img-fluid">Curs calculator</a></h2>
                <div><a href="/ru" class="appointment-btn  text-decoration-none m-0">Русский</a></div>
            </div>
        </div>
        <div class="col-1 col-lg-5">
            <nav class="navbar navbar-expand-lg navbar-light justify-content-end">
                <div class="nav-menu d-none d-lg-block" id="navBar">
                    <ul>
                        <li>
                            <a href="#header" class="text-decoration-none" >Cursuri</a>
                        </li>
                        <li>
                            <a href="#services" class="text-decoration-none" >Servicii</a>
                        </li>
                        <li>
                            <a href="#faqs" class="text-decoration-none">Întrebări frecvente</a>
                        </li>
                        <li>
                            <a href="#testimonials" class="text-decoration-none" >Recenzii</a>
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
        <h1>Cursuri calculator pentru incepatori</h1>
        <h2>Un mediu de studiu perfect pentru viitorul tău</h2>
        <div class="my-3">
            <a href="#about" class="appointment-btn scrollto text-decoration-none me-2 me-sm-5">Despre cursuri</a>
            <a href="#" class="appointment-btn text-decoration-none" data-bs-toggle="modal" data-bs-target="#formModal" data-bs-whatever="Book me"> Registrare</a>
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
                        <h3 class="text-center">Cursuri PC pentru începători!</h3>
                        <p>
                            Noi propunem pentru cei ce nu cunosc calculatorul (PC) să descopere noile experiențe alături de noi, astfel veți putea deveni un utilizator adevărat de calculator, descoperind multe funcții utile, sincronizarea cu telefonul, email, youtube, google și multe alte programe ce real sunt necesare și utile în viața contemporană.
                        </p>
                        <div class="text-center">
                            <a href="#services" class="more-btn alert-darkappointment-btn scrollto text-decoration-none">Citește</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 d-flex align-items-stretch">
                    <div class="icon-boxes d-flex flex-column justify-content-center">
                        <div class="row">
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="icofont-teacher"></i>
                                    <h4>De ce noi?</h4>
                                    <p>Metodă online de consultanță a calculatorului și lecții video care puteți să le revedeți oricînd!</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="icofont-tick-mark"></i>
                                    <h4>Rezultat 100%</h4>
                                    <p>Va garantăm calitatea cursurilor, ve-ți descoperi multe lucruri noi, noi lucrăm la Rezultat!</p>
                                </div>
                            </div>
                            <div class="col-xl-4 d-flex align-items-stretch">
                                <div class="icon-box mt-4 mt-xl-0">
                                    <i class="icofont-bank"></i>
                                    <h4>Preț/Calitate</h4>
                                    <p>Garanție la preț/calitate, dacă după cursurile noatre nu ve-ți putea folosi pc noi va rambursăm banii!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- End study here -->

    <section id="about" class="about">
        <div class="container-fluid px-0">
            <div class="row">
                <div class="col-xl-5 col-lg-6 imagen-box d-flex justify-content-center align-items-stretch"> </div>
                <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                    <h3>Doriți să cunoașteți bine Calculatorul?</h3>
                    <p>Noi facem lecții Online și vă învățăm Windows 10 sau 11 în Limba Rusă sau Română, MS office pentru începători, programe care vă vor ajută să utilizați PC mai ușor, sincronizarea cu telefon, Google, Youtube, Gmail, Drive, Uninstall tool, soft cu ajutorul cărui puteți descarca video</p>

                    <div class="icon-box">
                        <div class="icon"><i class="icofont-presentation"></i></div>
                        <h4 class="title"><a href="#" class="text-decoration-none">Analizăm Calculatorul DMV, ce Windows, MS office și în ce limbă ve-ți face Cursurile.</a></h4>
                        <p class="description">Primul pas este analiză calculatorului dmv, care windows ve-ți studia și în ce limbă va fi interfața și în ce limbă vor fi cursurile.</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="icofont-handshake-deal"></i></div>
                        <h4 class="title"><a href="#" class="text-decoration-none">Setări, Instalare și Upgrade</a></h4>
                        <p class="description">Pentru ca să asimilați mai bine lecțiile noi vă vom face setările calculatorului la aceeași limbă care ați ales, vom reînnoi softul necesar și vă vom recomanda dacă aveți nevoie de modernizare la notebook sau PC</p>
                    </div>

                    <div class="icon-box">
                        <div class="icon"><i class="icofont-certificate-alt-1"></i></div>
                        <h4 class="title"><a href="#" class="text-decoration-none">Video cu lecțiile trecute.</a></h4>
                        <p class="description">După finisarea fiecărei Lecții online, ve-ți primi acces la această lecție pentru a o vizualiza sau a o descărca în calculatorul DMV pentru a o revedea dacă ceva ve-ți uita!</p>
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
                <h2>Consultații Online</h2>
                <p>Consultații online sunt pentru începători sau pentru persoanele care au nevoie de ajutor de setări sau de a instala un soft sau de o consultație individuală. Toate consultațiile sunt însoțite de înregistrare video.</p>
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
                            <button class="nav-link w-100 text-start" data-bs-toggle="tab" data-bs-target="#tab-3">Consultație PC individuală</button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link w-100 text-start" data-bs-toggle="tab" data-bs-target="#tab-4">Instalare Soft, Printer, etc.</button>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        <div class="tab-pane active show" id="tab-1">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Windows 10/11 RU/RO</h3>
                                    <p class="font-italic">Oferim Consultație în sistemul de operare Windows 10/11 , consultația online sau ajutor online, vă arătăm, vă ajutăm să vă reamintiți sau dacă aveți nevoie de o reîmprospătare a cunoștințelor a sistemului Windows, limba Română și limba Rusă.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('assets/img/training-1.jpg') }}" alt="Curs calculator Windows 10/11 RU/RO" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-2">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>MS Office</h3>
                                    <p class="font-italic">Ajutor în utilizarea suitei Microsoft Office, setări și consultanță online, prin programe la distanță, sau ajutor în formarea a cărora documentelor, tabelelor și alte după nevoile dmv.   </p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('assets/img/training-2.png') }}" alt="jutor în utilizarea suitei Microsoft Office" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-3">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Consultație PC individuală</h3>
                                    <p class="font-italic">Consultanță individuală la distanță, unde sunteți doar dmv unde puteți oferi orice întrebări individuale la care consultantul/profesorul vă arată, vă învață și vă lasă apoi video cu tot ce ați întrebat.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('assets/img/training-3.jpg') }}" alt="Consultație PC individuală" class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab-4">
                            <div class="row">
                                <div class="col-lg-8 details order-2 order-lg-1">
                                    <h3>Instalare Soft, Printer, etc.</h3>
                                    <p class="font-italic">Acest compartiment cuprinde orice feluri de setări personalizate, instalarea printerului, programe după placul clientului sau orice alt soft.</p>
                                    <p>Deseori se primește că persoană întâmpină greutăți cu careva instalări sau setări a Windows-ului și multe alte programe, noi vă ajutăm să le instalați, să le setați să le procurați.</p>
                                </div>
                                <div class="col-lg-4 text-center order-1 order-lg-2">
                                    <img src="{{ asset('assets/img/training-4.jpg') }}" alt="Instalare Soft, Printer" class="img-fluid">
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
                <h2>Servicii</h2>
                <p>...</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-architecture-alt"></i></div>
                        <h4><a href="#" class="text-decoration-none">Cursuri Online</a></h4>
                        <p>Cursuri pentru începători Windows 10 sau 11 în limba Rusă și Română</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-teacher"></i></div>
                        <h4><a href="#" class="text-decoration-none">Consultații Online</a></h4>
                        <p>Consultații la distanță pentru a reîmprospăta cunoștințele sau de a primi răspuns și rezolva o întrebare la calculator!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-binary"></i></div>
                        <h4><a href="#" class="text-decoration-none">Instalare Driver/Programe</a></h4>
                        <p>Ajutăm să instalăm orice soft, Printer, video, 3d sau driver pentru PC dmv, fie la distanța sau la chemare.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-live-support"></i></div>
                        <h4><a href="#" class="text-decoration-none">Suport tehnic PC</a></h4>
                        <p>Mentenanța PC sau Notebook, curățire, schimb termopasta, UpGrade, etc.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-computer"></i></div>
                        <h4><a href="#" class="text-decoration-none">Recomandări PC & Notebook</a></h4>
                        <p>Pentru clienții noștri, facem recomandări la procurare, reparare sau Upgrade a PC sau Notebook!</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
                    <div class="icon-box">
                        <div class="icon"><i class="icofont-dashboard-web"></i></div>
                        <h4><a href="#" class="text-decoration-none">Crearea de Web-pagini</a></h4>
                        <p>Creăm web-pagini la comandă, Landing Page, site-uri, bloguri, Promovare, SEO, SMM și altele...</p>
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
                <p>Cele mai frecvente întrebări pe care le primim de la utilizatori</p>
            </div>

            <div class="faq-list">
                <ul>
                    <li data-aos="fade-up">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" class="collapsed text-decoration-none" href="#faq-list-1">Cum se face plata? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-1" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Plata se face după ce ne sunați sau trimiteți o cerere de înregistrare, după care vi se trimite un manager și se semnează un contract cu dumneavoastră, după care puteți plăti la orice banca sau prin transfer pe card.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="100">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-2" class="collapsed text-decoration-none">Locurile sunt limitate? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Da, locurile sunt limitate, sunt diferite cursuri și consultații la diferite ore ale zilei, așa că locurile și grupurile sunt limitate!
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="200">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-3" class="collapsed text-decoration-none">Câți membri sunt în grup? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Într-un grup sunt de la 5 până la 10 membri, grupăm cursurile și consultațiile după timp, sistem de operare și limbă!
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="300">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-4" class="collapsed text-decoration-none">Vom primi toate videoclipurile după curs? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Da, în timpul cursurilor veți avea acces la lecțiile video pe care le-ați finalizat deja. La finalizarea întregului curs, în termen de 30 de zile, puteți descărca toate videoclipurile sau le puteți primi pe o unitate flash contra unei taxe suplimentare (plătiți pentru unitatea flash/media).
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="400">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-5" class="collapsed text-decoration-none">Voi primi un certificat la finalizare? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Da, emitem un certificat că ați participat la curs și ați devenit utilizator de PC. Mulți indică în C.V.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="500">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-6" class="collapsed text-decoration-none">Pot urma cursul cu reducere sau gratuit? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Da, dacă alți participanți se înscriu la curs cu tine folosind codul tău, atunci pentru fiecare invitat vei primi o reducere de 500 de lei.
                            </p>
                        </div>
                    </li>

                    <li data-aos="fade-up" data-aos-delay="600">
                        <i class="icofont-question icon-help"></i> <a data-bs-toggle="collapse" href="#faq-list-7" class="collapsed text-decoration-none">Există o reducere cumulativă după finalizarea cursurilor? <i class="icofont-rounded-down icon-show"></i><i class="icofont-rounded-up icon-close"></i></a>
                        <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                            <p>
                                Da, chiar și după finalizarea cursurilor, puteți recomandă noi participanți folosind utilitățile noastre, iar de la fiecare persoană care s-a înscris veți primi 500 lei/credite pe care le puteți folosi pentru cursuri noi sau alte servicii necesare în termen de 1 an de la dată acumulării, sau cumpărați ceva din magazinul nostru online! Este imposibil să retragi cei 500 lei/credite acumulate în bani reali!
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
                        <h3>Maria Popescu</h3>
                        <p>
                            <i class="icofont-quote-left quote-icon-left"></i>
                            Acest curs de calculator pentru începători mi-a schimbat complet perspectiva! Nu știam aproape nimic despre utilizarea unui computer, dar lecțiile au fost explicate clar și pe înțelesul meu. Acum pot naviga pe internet, trimite e-mailuri și lucra în Microsoft Word fără probleme. Recomand cu drag acest curs tuturor celor care vor să învețe!
                            <i class="icofont-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Ion Rusu</h3>
                        <p>
                            <i class="icofont-quote-left quote-icon-left"></i>
                            Nu credeam că voi putea învăța să folosesc un calculator la vârsta mea, dar datorită acestui curs am prins curaj. Instructorii au fost foarte răbdători și explicațiile lor au fost foarte clare. Am învățat să folosesc Excel, să creez documente și să caut informații pe internet. Un curs excelent pentru oricine!
                            <i class="icofont-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Elena Dumitru</h3>
                        <p>
                            <i class="icofont-quote-left quote-icon-left"></i>
                            Un curs bine structurat, cu multe exemple practice! La început mi se părea complicat, dar exercițiile pas cu pas m-au ajutat să înțeleg mai bine totul. Acum mă descurc fără probleme să folosesc un calculator pentru muncă și activități personale. Mulțumesc echipei pentru sprijin și profesionalism!
                            <i class="icofont-quote-right quote-icon-right"></i>
                        </p>
                    </div>
                </div>

                <div class="testimonial-wrap">
                    <div class="testimonial-item">
                        <h3>Vasile Andrei</h3>
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
                    <div class="form-res mt-3 d-none"></div>
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
