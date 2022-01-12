<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/colors/solid/color.css') }}">
    <link rel="stylesheet" href="{{ asset('template/css/style.css') }}">
    <title>Fábrica da net</title>
</head>

<body class="no-scroll-y">
    <!-- ==================================================
       Preloader
    ================================================== -->

    <section>
        <div id="preloader">
            <div id="ctn-preloader" class="ctn-preloader">
                <div class="animation-preloader">
                    <div class="spinner"></div>
                    <div class="txt-loading">
                        <span data-text-preloader="F" class="letters-loading">
                            F
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            Á
                        </span>
                        <span data-text-preloader="B" class="letters-loading">
                            B
                        </span>
                        <span data-text-preloader="R" class="letters-loading">
                            R
                        </span>
                        <span data-text-preloader="I" class="letters-loading">
                            I
                        </span>
                        <span data-text-preloader="C" class="letters-loading">
                            C
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <br>
                        <span data-text-preloader="D" class="letters-loading">
                            D
                        </span>
                        <span data-text-preloader="A" class="letters-loading">
                            A
                        </span>
                        <br>
                        <span data-text-preloader="N" class="letters-loading">
                            N
                        </span>
                        <span data-text-preloader="E" class="letters-loading">
                            E
                        </span>
                        <span data-text-preloader="T" class="letters-loading">
                            T
                        </span>
                    </div>
                </div>
                <div class="loader-section section-left"></div>
                <div class="loader-section section-right"></div>
            </div>
        </div>
    </section>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('template/images/logo.png') }}" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item ">
                        <a class="nav-link " href="#" id="homeMenu" data-toggle="dropdown">
                            Home
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#service">Serviços</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">Quem somos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contato</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <section id="banner" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-8 wow fadeInLeft" data-wow-duration="2.5s">
                    <div class="bnr-social">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-fw fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-fw fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-fw fa-dribbble"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-fw fa-linkedin"></i></a></li>
                        </ul>
                    </div>

                    <h1>Fábrica da net</h1>
                    <p>Soluções<span> para você e para o seu negócio.</span></p>
                    <div class="bnr-btn">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#contact">Contato</a></li>
                            <li class="list-inline-item"><a href="#">Chame no whatsapp</a></li>
                        </ul>
                    </div>
                    <div class="bnr-left-sape">
                        <img src="{{ asset('template/images/side-shape-left.png') }}" alt="shape">
                    </div>

                </div>
            </div>
        </div>
        <div class="bnr-shape-img"></div>
    </section>

    <div class="space" style="height: 115px"></div>

    <div class="container" id="service">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <span>Serviços</span>
                    <h1>Nossas soluções para você.</h1>
                    <img src="{{ asset('template/images/dot-bluecolor.png') }}" alt="img">
                </div>
                <div class="space" style="height: 40px"></div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1s">
                <div class="service-item">
                    <i class="flaticon-pencil-case"></i>
                    <h5>Design Gráfico</h5>
                    <p>Lorem ipsum dummy text in
                        print and website industry are usually
                        use in these section</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1.5s">
                <div class="service-item">
                    <i class="flaticon-support"></i>
                    <h5>Sistemas Web</h5>
                    <p>Lorem ipsum dummy text in
                        print and website industry are usually
                        use in these section</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="2.5s">
                <div class="service-item">
                    <i class="flaticon-digital-marketing"></i>
                    <h5>Marketing Digital</h5>
                    <p>Lorem ipsum dummy text in
                        print and website industry are usually
                        use in these section</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1.5s">
                <div class="service-item">
                    <i class="flaticon-support"></i>
                    <h5>Catálogo de produtos</h5>
                    <p>Lorem ipsum dummy text in
                        print and website industry are usually
                        use in these section</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1.5s">
                <div class="service-item">
                    <i class="flaticon-support"></i>
                    <h5>Loja virtual</h5>
                    <p>Lorem ipsum dummy text in
                        print and website industry are usually
                        use in these section</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 wow fadeInUp" data-wow-duration="1.5s">
                <div class="service-item">
                    <i class="flaticon-support"></i>
                    <h5>Sites institucionais e Blogs</h5>
                    <p>Lorem ipsum dummy text in
                        print and website industry are usually
                        use in these section</p>
                </div>
            </div>
        </div>
    </div>



    <div class="space" style="height: 130px"></div>
    <div class="container" id="about">
        <div class="row">

            <div class="col-lg-6 col-sm-12 text-center wow fadeInLeft" data-wow-duration="2.5s">
                <img class="img-shadow img-fluid" data-tilt src="{{ asset('template/images/img-1.png') }}" alt="img">
            </div>
            <div class="col-lg-5 col-sm-12 offset-lg-1 wow fadeInRight" data-wow-duration="2.5s">
                <div class="space d-none d-xl-block d-sm-block" style="height: 60px"></div>
                <div class="section-title">
                    <span>Quem somos</span>
                    <h1>Somos uma empresa com foco em <span>soluções web</span> para você e para o seu negócio</h1>
                    <img src="{{ asset('template/images/dot-bluecolor.png') }}" alt="img">
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>

                <ul>
                    <li>Tllamco laboris nisi ut aliquip ex ea commodo conse</li>
                    <li>Consectetur adipisicing elit, sed do eiusmod tempor</li>
                    <li>Tllamco laboris nisi ut aliquip ex ea commodo conseq</li>
                </ul>

                <div class="space" style="height: 30px"></div>

                <div class="thegncy-btn">
                    <a href="#contact">Contato</a>
                </div>
            </div>
        </div>
    </div>

    <div class="space" style="height: 130px"></div>

    {{-- <section class="gradient-bg">
        <div class="space" style="height: 60px"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-duration="0.5s">
                    <div class="progress-circle" data-percent="30"></div>
                    <h5 class="progress-title">Bootstrap</h5>
                </div>
                <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-duration="1s">
                    <div class="progress-circle" data-percent="70"></div>
                    <h5 class="progress-title">Web Development</h5>
                </div>
                <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-duration="1.5s">
                    <div class="progress-circle" data-percent="80"></div>
                    <h5 class="progress-title">JavaScript</h5>
                </div>
                <div class="col-lg-3 col-sm-6 text-center wow fadeInUp" data-wow-duration="2.5s">
                    <div class="progress-circle" data-percent="90"></div>
                    <h5 class="progress-title">HTML5</h5>
                </div>
            </div>
        </div>
        <div class="space" style="height: 80px"></div>
    </section> --}}

    <div class="space" style="height: 130px"></div>

    <div id="features" class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 wow fadeInLeft" data-wow-duration="2.5s">
                <div class="section-title">
                    <span>Nossa soluções</span>
                    <h1>Soluções prontas <span>que realmente</span> farão você e o seu negócio crescer</h1>
                    <img src="{{ asset('template/images/dot-bluecolor.png') }}" alt="img">
                </div>
                <div class="space" style="height: 50px"></div>
                <div class="feature-item wow bounceInUp" data-wow-duration="2.5s">
                    <div class="feature-item-icon">
                        <i class="flaticon-bar-chart"></i>
                    </div>
                    <div class="feature-item-content">
                        <h5>Quer vender mais?</h5>
                        <p>Catálogo de produtos, Loja virtuais, PDV. Consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt</p>
                    </div>
                </div>
                <div class="feature-item wow bounceInUp" data-wow-duration="3s">
                    <div class="feature-item-icon">
                        <i class="flaticon-digital-marketing"></i>
                    </div>
                    <div class="feature-item-content">
                        <h5>Quer ser encontrado na internet?</h5>
                        <p>Google Meu Negócio, Google Ads, Facebook Ads, Instagran Ads, youtube Ads.</p>

                    </div>
                </div>
                <div class="feature-item wow bounceInUp" data-wow-duration="3.5s">
                    <div class="feature-item-icon">
                        <i class="flaticon-support"></i>
                    </div>
                    <div class="feature-item-content">
                        <h5>Quer uma solução personalizada?</h5>
                        <p>Sistemas Web, Aplicativos. Consectetur adipisicing elit,
                            sed do eiusmod tempor incididunt</p>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-sm-12 offset-lg-1 text-center wow fadeInRight" data-wow-duration="2.5s">
                <img class="img-shadow img-fluid" data-tilt src="{{ asset('template/images/img-2.png') }}"
                    alt="img">

                <div class="pic-right-bottom">
                    <img src="{{ asset('template/images/dot-squire.png') }}" alt="Img">
                </div>

            </div>
        </div>
    </div>

    <div class="space" style="height: 110px"></div>


    <div class="space" style="height: 100px"></div>
    <section class="gradient-bg">
        <div class="space" style="height: 60px"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="section-title text-center white">
                        <span>Texto</span>
                        <h1>Algum texto bem legal aqui</h1>
                        <img src="{{ asset('template/images/dot-white.png') }}" alt="img">
                    </div>
                    <div class="space" style="height: 35px"></div>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="testimonials">
                        <div class="testimonial-item">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                                dolor in reprehenderit in voluptate</p>
                            <h4>Ibrahim emran</h4>
                            <span>UI designer and CEO</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="space" style="height: 60px"></div>
    </section>

    <div class="space" style="height: 120px"></div>

    <div id="contact" class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-12 wow fadeInLeft" data-wow-duration="2.5s">
                <div class="section-title">
                    <span>Contato</span>
                    <h1>Entre em contato <span>agora</span></h1>
                    <img src="{{ asset('template/images/dot-bluecolor.png') }}" alt="img">
                </div>
                <div class="space" style="height: 50px"></div>
                <div class="row contact-form">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Nome">
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="E-mail">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Telefone">
                    </div>
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Assunto">
                    </div>
                    <div class="col-md-12">
                        <textarea class="form-control" rows="3"></textarea>
                        <div class="thegncy-btn">
                            <input class="contact-btn" type="submit" value="Enviar">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-sm-none d-lg-block wow fadeInRight" data-wow-duration="2.5s">
                <img class="img-fluid" src="{{ asset('template/images/contact-vector.png') }}" alt="Contact">
            </div>
        </div>
    </div>

    <div class="space" style="height: 125px"></div>



    <footer class="site-footer">
        <div class="col-sm-12 text-center">
            <img src="{{ asset('template/images/logo-alt.png') }}" alt="logo">
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#service">Serviços</a></li>
                <li class="list-inline-item"><a href="#about">Quem somos</a></li>
                <li class="list-inline-item"><a href="#contact">Contato</a></li>
            </ul>
        </div>
        <div class="footer-copyright">
            <p>Copyrighs @ 2022 fábrica da net</p>
        </div>
    </footer>
    <div id="backtotop"><i class="fa fa-2x fa-long-arrow-up"></i></div>
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('template/js/circliful.min.js') }}"></script>
    <script src="{{ asset('templatejs/bootstrap.min.js') }}"></script>
    <script src="{{ asset('template/js/isotope.js') }}"></script>
    <script src="{{ asset('template/js/slick.min.js') }}"></script>
    <script src="{{ asset('template/js/tilt.min.js') }}"></script>
    <script src="{{ asset('template/js/wow.min.js') }}"></script>
    <script src="{{ asset('template/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('template/js/counterup.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('template/js/main.js') }}"></script>

</html>
