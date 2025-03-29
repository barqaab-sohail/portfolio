@extends('layouts.app')

@section('title', $portfolio->name . ' Portfolio')
@section('portfolio_name', $portfolio->name)

@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
    <img src="{{asset('storage/'. $portfolio->banner)}}" alt="" data-aos="fade-in" class="">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2>{{$portfolio->name}}</h2>
        <p>I'm <span class="typed" data-typed-items="{{$experts}}">Developer</span><span
                class="typed-cursor typed-cursor--blink" aria-hidden="true"></span><span
                class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
    </div>
</section><!-- /Hero Section -->

<!-- About Section -->
<section id="about" class="about section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>About</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
                <img src="{{asset('storage/'. $portfolio->picture)}}" class="img-fluid" alt="">
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
                                <span>{{$portfolio->web}}</span>
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
            </div>
        </div>
    </div>
</section><!-- /About Section -->

<!-- Skills Section -->
<section id="skills" class="skills section light-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Skills</h2>
    </div><!-- End Section Title -->

    <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row skills-content skills-animation">
            @foreach ($skills as $key=>$skill)
            <div class="col-lg-6">
                <div class="progress">
                    <span class="skill"><span>{{$skill->skill_name}}</span> <i class="val">{{$skill->level}}%</i></span>
                    <div class="progress-bar-wrap">
                        <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->level}}" aria-valuemin="0"
                            aria-valuemax="100"></div>
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
                </div><!-- End Resume Item -->
                @endforeach

                <h3 class="resume-title">Trainings / Courses</h3>
                @foreach($trainings as $training)
                <div class="resume-item">
                    <h4>{{$training->name}}</h4>
                    <h5>{{$training->duration}}</h5>
                    <h5>{{$training->institution}}</h5>
                    {!!$training->introduction!!}
                </div><!-- End Resume Item -->
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
                </div><!-- End Resume Item -->
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
    </div><!-- End Section Title -->

    <div class="container">
        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
            <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                <li data-filter="*" class="filter-active">All</li>
                @foreach($projectCategories as $category)
                <li data-filter=".filter-{{$category->project->project_category_id}}">{{$category->name}}</li>
                @endforeach
            </ul><!-- End Portfolio Filters -->

            <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                @foreach($projects as $key=>$project)
                @if($project->projectImage)
                <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{$project->project_category_id}}">
                    <div class="portfolio-content h-100">
                        <img src="{{asset('storage/'. $project->projectImage?->image??'')}}" class="img-fluid" alt="">
                        <div class="portfolio-info">
                            <h4>{{$project->short_name}}</h4>
                            <a href="{{asset('storage/'. $project->projectImage?->image??'')}}"
                                title="{{$project->short_name}}"
                                data-gallery="portfolio-gallery-{{str_replace(' ', '',$project->projectCategory->name)}}"
                                class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            <a href="{{route('project_detail',$project->id)}}" title="More Details"
                                class="details-link"><i class="bi bi-link-45deg"></i></a>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div><!-- End Portfolio Container -->
        </div>
    </div>
</section><!-- /Portfolio Section -->

<!-- Services Section -->
<section id="services" class="services section">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>

    </div><!-- End Section Title -->

    <div class="container">
        <div class="row gy-4">
            @foreach($services as $service)
            <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
                <div class="icon flex-shrink-0"><i class="{{$service->icon}}"></i></div>
                <div>
                    <h4 class="title"><a href="#" class="stretched-link">{{$service->name}}</a></h4>
                    <p class="description">{!!$service->intro!!}</p>
                </div>
            </div><!-- End Service Item -->
            @endforeach
        </div>
    </div>
</section><!-- /Services Section -->


<!-- Contact Section -->
<section id="contact" class="contact section light-background">

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
                            <p>{{$portfolio->city}}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                        <i class="bi bi-telephone flex-shrink-0"></i>
                        <div>
                            <h3>Call Us</h3>
                            <p>{{$portfolio->phone}}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                        <i class="bi bi-envelope flex-shrink-0"></i>
                        <div>
                            <h3>Email Us</h3>
                            <p>{{$portfolio->email}}</p>
                        </div>
                    </div><!-- End Info Item -->

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13606.19585434962!2d74.3342258!3d31.56025885!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDMzJzM2LjkiTiA3NMKwMjAnMDMuMiJF!5e0!3m2!1sen!2s!4v1719500000000!5m2!1sen!2s"
                        width="100%" height="270" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <form id="contactUsForm" action="" method="post" class="php-email-form" data-aos="fade-up"
                    data-aos-delay="200">
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
                            <textarea class="form-control" name="message" rows="10" id="message-field"
                                required=""></textarea>
                        </div>

                        <div class="col-md-12 text-center">
                            <div class="loading">Loading</div>
                            <div class="error-message">testing</div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>

                            <button type="submit">Send Message <i class="fa fa-spinner fa-spin"
                                    style="font-size:18px"></i></button>
                        </div>

                    </div>
                </form>
            </div><!-- End Contact Form -->

        </div>

    </div>

</section><!-- /Contact Section -->
@endsection

@section('scripts')
<script>
$(document).ready(function() {
    $(".fa-spin").hide();

    function getRecaptcha() {
        grecaptcha.ready(function() {
            grecaptcha.execute("6LfU1eEqAAAAAEJEOMM8xLr2SGBKCVKc2_B0PRnr", {
                action: 'contact'
            }).then(function(token) {
                $('#recaptchaResponse').val(token);
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
@endsection