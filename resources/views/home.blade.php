<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{$portfolio->name}} Portfolio</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicons -->
    <link href="{{asset('assets/img/favicon.png')}}" rel="icon">
    <link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main CSS File -->
    <link href="{{asset('assets/css/main.css')}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <link rel="stylesheet" href="{{asset('font-awesome/css/font-awesome.min.css')}}">
</head>

<body class="index-page">

    <header id="header" class="header dark-background d-flex flex-column">
        <i class="header-toggle d-xl-none bi bi-list"></i>

        <div class="profile-img">
            <img src="assets/img/my-profile-img.jpg')}}" alt="" class="img-fluid rounded-circle">
        </div>

        <a href="index.html" class="logo d-flex align-items-center justify-content-center">
            <!-- Uncomment the line below if you also wish to use an image logo -->
            <!-- <img src="assets/img/logo.png" alt=""> -->
            <h1 class="sitename">{{$portfolio->name}}</h1>
        </a>

        <div class="social-links text-center">
            <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bi bi-skype"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>

        <nav id="navmenu" class="navmenu">
            <ul>
                <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Home</a></li>
                <li><a href="#about"><i class="bi bi-person navicon"></i> About</a></li>
                <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Resume</a></li>
                <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
                <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Services</a></li>
                <!-- <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i
                            class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Dropdown 1</a></li>
                        <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i
                                    class="bi bi-chevron-down toggle-dropdown"></i></a>
                            <ul>
                                <li><a href="#">Deep Dropdown 1</a></li>
                                <li><a href="#">Deep Dropdown 2</a></li>
                                <li><a href="#">Deep Dropdown 3</a></li>
                                <li><a href="#">Deep Dropdown 4</a></li>
                                <li><a href="#">Deep Dropdown 5</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Dropdown 2</a></li>
                        <li><a href="#">Dropdown 3</a></li>
                        <li><a href="#">Dropdown 4</a></li>
                    </ul>
                </li> -->
                <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contact</a></li>
            </ul>
        </nav>

    </header>

    <main class="main">

        <!-- Hero Section -->
        <section id="hero" class="hero section dark-background">

            <img src="{{asset('assets/img/new-bg.png')}}" alt="" data-aos="fade-in" class="">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <h2>{{$portfolio->name}}</h2>
                <p>I'm <span class="typed" data-typed-items="{{$experts}}">Developer</span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
            </div>

        </section><!-- /Hero Section -->

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4">
                        <img src="{{asset('assets/img/my-profile-img.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-8 content">
                        <h2>Full Stack Web Developer.</h2>
                        <p class="fst-italic py-3">
                            {!!$portfolio->introduction!!}
                        </p>
                        <div class="row">
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong>
                                        <span>{{\Carbon\Carbon::parse($portfolio->date_of_birth)->format('F d, Y')}}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong>
                                        <span>www.example.com</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Phone/Whatsapp:</strong>
                                        <span>{{$portfolio->phone}}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>City:</strong>
                                        <span>{{$portfolio->city}}</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6">
                                <ul>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong>
                                        <span>{{$portfolio->age()}} years</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong>
                                        <span>{{$portfolio->email}}</span>
                                    </li>
                                    <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong>
                                        <span>Available</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- <p class="py-3">
                            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt
                            adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus
                            itaque neque.
                        </p> -->
                    </div>
                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <!-- <section id="stats" class="stats section"> -->

        <!-- <div class="container" data-aos="fade-up" data-aos-delay="100"> -->

        <!-- <div class="row gy-4"> -->

        <!-- <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-emoji-smile"></i>
                            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Happy Clients</strong> <span>consequuntur quae</span></p>
                        </div>
                    </div> -->
        <!-- End Stats Item -->

        <!-- <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-journal-richtext"></i>
                            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Projects</strong> <span>adipisci atque cum quia aut</span></p>
                        </div>
                    </div> -->
        <!-- End Stats Item -->

        <!-- <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-headset"></i>
                            <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hours Of Support</strong> <span>aut commodi quaerat</span></p>
                        </div>
                    </div> -->
        <!-- End Stats Item -->

        <!-- <div class="col-lg-3 col-md-6">
                        <div class="stats-item">
                            <i class="bi bi-people"></i>
                            <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1"
                                class="purecounter"></span>
                            <p><strong>Hard Workers</strong> <span>rerum asperiores dolor</span></p>
                        </div>
                    </div> -->
        <!-- End Stats Item -->

        <!-- </div> -->

        <!-- </div> -->

        <!-- </section> -->
        <!-- /Stats Section -->

        <!-- Skills Section -->
        <section id="skills" class="skills section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Skills</h2>
                <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row skills-content skills-animation">
                    @foreach ($skills as $key=>$skill)
                    <div class="col-lg-6">
                        <div class="progress">
                            <span class="skill"><span>{{$skill->skill_name}}</span> <i class="val">{{$skill->level}}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->level}}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach



                </div>

            </div>

        </section><!-- /Skills Section -->

        <!-- Resume Section -->
        <section id="resume" class="resume section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Resume</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">


                        <h3 class="resume-title">Education</h3>
                        @foreach($educations as $education)
                        <div class="resume-item">
                            <h4>{{$education->degree_name}}</h4>
                            <h5>{{$education->duration}}</h5>
                            {!!$education->education_intro!!}
                        </div><!-- Edn Resume Item -->
                        @endforeach

                        <h3 class="resume-title">Trainings / Courses</h3>
                        @foreach($trainings as $training)
                        <div class="resume-item">
                            <h4>{{$training->name}}</h4>
                            <h5>{{$training->duration}}</h5>
                            <h5>{{$training->institution}}</h5>
                            {!!$training->introduction!!}
                        </div><!-- Edn Resume Item -->
                        @endforeach

                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <h3 class="resume-title">Professional Experience</h3>
                        @foreach($experiences as $experience)
                        <div class="resume-item">
                            <h4>{{$experience->position}}</h4>
                            <h5>{{$experience->duration}}</h5>
                            <p><em>{{$experience->firm}}</em></p>
                            {!!$experience->responsibility!!}
                        </div><!-- Edn Resume Item -->
                        @endforeach
                    </div>

                </div>

            </div>

        </section><!-- /Resume Section -->

        <!-- Portfolio Section -->
        <section id="portfolio" class="portfolio section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Portfolio</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        @foreach($projectCategories as $category)
                        <li data-filter=".filter-{{$category->project->project_category_id}}">{{$category->name}}</li>
                        @endforeach
                        <!-- <li data-filter=".filter-product">Product</li>
                        <li data-filter=".filter-branding">Branding</li>
                        <li data-filter=".filter-books">Books</li> -->
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                        @foreach($projects as $project)
                        @if($project->projectImage)
                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{$project->project_category_id}}">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('storage/'. $project->projectImage?->image??'')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>{{$project->short_name}}</h4>
                                    <!-- <p>Lorem ipsum, dolor sit amet consectetur</p> -->
                                    <a href="assets/img/portfolio/app-1.jpg" title="App 1" data-gallery="portfolio-gallery-{{str_replace(' ', '',$project->projectCategory->name)}}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach

                        <!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/portfolio/product-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/product-1.jpg" title="Product 1" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/portfolio/branding-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/portfolio/books-1.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 1</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/books-1.jpg" title="Branding 1" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/app-2.jpg" title="App 2" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/portfolio/product-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/product-2.jpg" title="Product 2" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/portfolio/books-2.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 2</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/books-2.jpg" title="Branding 2" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/app-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>App 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/app-3.jpg" title="App 3" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/portfolio/product-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Product 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/product-3.jpg" title="Product 3" data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/portfolio/branding-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Branding 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2" data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                            <div class="portfolio-content h-100">
                                <img src="{{asset('assets/img/portfolio/books-3.jpg')}}" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <h4>Books 3</h4>
                                    <p>Lorem ipsum, dolor sit amet consectetur</p>
                                    <a href="assets/img/portfolio/books-3.jpg" title="Branding 3" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <a href="portfolio-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                                </div>
                            </div>
                        </div><!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Services Section -->
        <section id="services" class="services section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint
                    consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia
                    fugiat sit in iste officiis commodi quidem hic quas.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
                        <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Dolor Sitema</a>
                            </h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                                aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Sed ut
                                    perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum
                                dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Magni Dolores</a>
                            </h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                                officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
                        <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
                        <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                        <div>
                            <h4 class="title"><a href="service-details.html" class="stretched-link">Eiusmod Tempor</a>
                            </h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Testimonials Section -->
        <section id="testimonials" class="testimonials section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Testimonials</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="swiper init-swiper">
                    <script type="application/json" class="swiper-config">
                        {
                            "loop": true,
                            "speed": 600,
                            "autoplay": {
                                "delay": 5000
                            },
                            "slidesPerView": "auto",
                            "pagination": {
                                "el": ".swiper-pagination",
                                "type": "bullets",
                                "clickable": true
                            },
                            "breakpoints": {
                                "320": {
                                    "slidesPerView": 1,
                                    "spaceBetween": 40
                                },
                                "1200": {
                                    "slidesPerView": 3,
                                    "spaceBetween": 1
                                }
                            }
                        }
                    </script>
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Proin iaculis purus consequat sem cure digni ssim donec porttitora entum
                                        suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et.
                                        Maecen aliquam, risus at semper.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                                <h3>Saul Goodman</h3>
                                <h4>Ceo &amp; Founder</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Export tempor illum tamen malis malis eram quae irure esse labore quem cillum
                                        quid malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet
                                        legam anim culpa.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{asset('assets/img/testimonials/testimonials-2.jpg')}}" class="testimonial-img" alt="">
                                <h3>Sara Wilsson</h3>
                                <h4>Designer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla
                                        quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore
                                        quis sint minim.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                                <h3>Jena Karlis</h3>
                                <h4>Store Owner</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim
                                        fugiat dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore
                                        illum veniam.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{asset('assets/img/testimonials/testimonials-4.jpg')}}" class="testimonial-img" alt="">
                                <h3>Matt Brandon</h3>
                                <h4>Freelancer</h4>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <p>
                                    <i class="bi bi-quote quote-icon-left"></i>
                                    <span>Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor
                                        noster veniam sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore
                                        nisi cillum quid.</span>
                                    <i class="bi bi-quote quote-icon-right"></i>
                                </p>
                                <img src="{{asset('assets/img/testimonials/testimonials-5.jpg')}}" class="testimonial-img" alt="">
                                <h3>John Larson</h3>
                                <h4>Entrepreneur</h4>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

        </section><!-- /Testimonials Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-5">

                        <div class="info-wrap">
                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                                <i class="bi bi-geo-alt flex-shrink-0"></i>
                                <div>
                                    <h3>Address</h3>
                                    <p>A108 Adam Street, New York, NY 535022</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                                <i class="bi bi-telephone flex-shrink-0"></i>
                                <div>
                                    <h3>Call Us</h3>
                                    <p>+1 5589 55488 55</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                                <i class="bi bi-envelope flex-shrink-0"></i>
                                <div>
                                    <h3>Email Us</h3>
                                    <p>info@example.com</p>
                                </div>
                            </div><!-- End Info Item -->

                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" frameborder="0" style="border:0; width: 100%; height: 270px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                    <div class="col-lg-7">
                        <form id="contactUsForm" action="" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            @csrf
                            <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <label for="name-field" class="pb-2">Your Name</label>
                                    <input type="text" name="name" id="name-field" class="form-control" required="true">
                                </div>

                                <div class="col-md-6">
                                    <label for="email-field" class="pb-2">Your Email</label>
                                    <input type="email" class="form-control" name="email" id="email-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="subject-field" class="pb-2">Subject</label>
                                    <input type="text" class="form-control" name="subject" id="subject-field" required="">
                                </div>

                                <div class="col-md-12">
                                    <label for="message-field" class="pb-2">Message</label>
                                    <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message">testing</div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message <i class="fa fa-spinner fa-spin" style="font-size:18px"></i></button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

    </main>

    <footer id="footer" class="footer position-relative light-background">

        <div class="container">
            <div class="copyright text-center ">
                <p>© <span>Copyright</span> <strong class="px-1 sitename"></strong> <span>All Rights
                        Reserved</span></p>
            </div>
            <div class="credits">
                Developed by <a href="#">Sohail Afzal</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
    <script src="{{asset('assets/vendor/typed.js/typed.umd.js')}}"></script>
    <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
    <script src="{{asset('assets/vendor/waypoints/noframework.waypoints.js')}}"></script>
    <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
    <script src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <!-- Google Recaptcha -->
    <script src="https://www.google.com/recaptcha/api.js?render=6LfU1eEqAAAAAEJEOMM8xLr2SGBKCVKc2_B0PRnr"></script>

    <script>
        $(document).ready(function() {

            $(".fa-spin").hide();


            function getRecaptcha() {
                grecaptcha.ready(function() {
                    grecaptcha.execute("6LfU1eEqAAAAAEJEOMM8xLr2SGBKCVKc2_B0PRnr", {
                        action: 'contact'
                    }).then(function(token) {
                        $('#recaptchaResponse').val(token); // here i set value to hidden field
                    });
                });
            }

            getRecaptcha();



            $("#contactUsForm").submit(function(e) {
                e.preventDefault();
                let thisForm = this;
                thisForm.querySelector('.loading').classList.add('d-block');
                thisForm.querySelector('.error-message').classList.remove('d-block');
                thisForm.querySelector('.sent-message').classList.remove('d-block');
                $(".fa-spin").show();
                let url = "{{route('contactusform')}}";
                let type = 'POST';
                let formData = {
                    name: $('#name-field').val(),
                    email: $('#email-field').val(),
                    message: $('#message-field').val(),
                    subject: $('#subject-field').val(),
                    _token: "{{ csrf_token() }}",
                    recaptcha_response: $('#recaptchaResponse').val(),

                };

                $.ajax({
                    type: type,
                    url: url,
                    data: formData,
                    //    dataType: 'json',
                    success: function(response) {
                        $(".fa-spin").hide();
                        thisForm.reset();
                        thisForm.querySelector('.sent-message').classList.add('d-block');
                        thisForm.querySelector('.loading').classList.remove('d-block');
                    },
                    error: function(error) {
                        var errortext = '';
                        $.each(error.responseJSON.errors, function(key, value) {
                            errortext = errortext + value + ' ,'
                        })
                        if (error.responseJSON.error) {
                            errortext = errortext + error.responseJSON.error;
                        }
                        $(".fa-spin").hide();
                        thisForm.querySelector('.loading').classList.remove('d-block');
                        thisForm.querySelector('.error-message').innerHTML = errortext;
                        thisForm.querySelector('.error-message').classList.add('d-block');
                    }
                });
            });






        });
    </script>

</body>

</html>