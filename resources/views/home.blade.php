@extends('layouts.home_layout')
@section('content')
<div class="hero hero--skin-1 ">
    <div class="container">
        <div class="row">
            <div class="col-md-14">
                <!-- Push -->
                <div class="push push--150  "> </div>
                <!-- End of Push -->
                <!-- Section Title -->
                <h2 class="section-title section-title--left section-title--light "> What is
                    <span class='section-title__highlight'>Delos?</span>
                </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle section-subtitle--left section-subtitle--hero ">
                    A new app was released, the first one of its kind. It is created to take advantage of the newest,
                    most amazing technology:
                    Smartphones. Everyone wants one, or they will do anything to get it. You are asked to code and
                    program this application
                    so it works well on smartphones. </p>
                <!-- End of Section Subtitle -->
                <!-- Button -->
                <div class="button button--small button--inline button--shadow  ">
                    <a href="http://fytness.com/" class="button__link" target="_blank">See more</a>
                </div>
                <!-- End of Button -->
                <!-- Button -->
                <div class="button button--small button--inline button--blue button--shadow  ">
                    <a href="#download" class="button__link">Download</a>
                </div>
                <!-- End of Button -->
            </div>
            <div class="col-md-10">
                <!-- Device -->
                <div class="device device--right  ">
                    <img src="./assets/img/delo_app.png" class="device__image" alt="Device Image"> </div>
                <!-- End of Device -->
            </div>
        </div>
    </div>
</div>
<!-- End of Hero -->
<!-- Section -->
<section class="section section--grey " id='download'>
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <!-- Section Title -->
                <h2 class="section-title section-title--center "> Download this
                    <span class='section-title__highlight'>Delos</span> app </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle section-subtitle--center "> available on all modern operating systems </p>
                <!-- End of Section Subtitle -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-8 col-lg-offset-2">
                <!-- Download Button -->
                <a class="download-button  " href="#">
                    <img src="assets/img/1.png" class="download-button__icon" alt="Platform Icon">
                    <span class="download-button__platform">Android app on</span>
                    <span class="download-button__store">Google Play</span>
                </a>
                <!-- End of Download Button -->
            </div>
            <div class="col-lg-6 col-md-8 col-lg-offset-1">
                <!-- Download Button -->
                <a class="download-button  " href="#">
                    <img src="assets/img/2.png" class="download-button__icon" alt="Platform Icon">
                    <span class="download-button__platform">Desktop app on</span>
                    <span class="download-button__store">Mac App Store</span>
                </a>
                <!-- End of Download Button -->
            </div>
            <div class="col-lg-6 col-md-8 col-lg-offset-1">
                <!-- Download Button -->
                <a class="download-button  " href="#">
                    <img src="assets/img/3.png" class="download-button__icon" alt="Platform Icon">
                    <span class="download-button__platform">IOS app on</span>
                    <span class="download-button__store">App Store</span>
                </a>
                <!-- End of Download Button -->
            </div>
        </div>
    </div>
</section>
<!-- End of Section -->
<!-- Section -->
<section class="section section--skin-1 " id='products'>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12">
                <!-- Push -->
                <div class="push push--60  "> </div>
                <!-- End of Push -->
                <!-- Section Title -->
                <h2 class="section-title "> Our Products </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle "> In the current video app, we will introduce video function, both for users
                    and for publishers. Users can upload a video,
                    or choose one from the cloud drive. </p>
                <!-- End of Section Subtitle -->
                <!-- List -->
                <ul class="list list--check  ">
                    <li class="list__item">Similar to pitch template slide</li>
                    <li class="list__item">Live: Fytness</li>
                    <li class="list__item">In development: Fashyn</li>
                    <li class="list__item">Future: Artyst/Muzyk/performynce</li>
                </ul>
                <!-- End of List -->
                <!-- List -->
                <ul class="list list--boxes  ">
                    <li class="list__item">
                        <!-- Box -->
                        <div class="box  ">
                            <img src="assets/img/phone.png" class="box__icon" alt="Box icon"> </div>
                        <!-- End of Box -->
                    </li>
                    <li class="list__item">
                        <!-- Box -->
                        <div class="box  ">
                            <img src="assets/img/clock.png" class="box__icon" alt="Box icon"> </div>
                        <!-- End of Box -->
                    </li>
                    <li class="list__item">
                        <!-- Box -->
                        <div class="box  ">
                            <img src="assets/img/tester.png" class="box__icon" alt="Box icon"> </div>
                        <!-- End of Box -->
                    </li>
                </ul>
                <!-- End of List -->
            </div>
            <div class="col-lg-12 col-md-11 col-md-offset-1 col-lg-offset-0">
                <!-- Screens Preview -->
                <div class="screens-preview screens-preview--right  ">
                    <img src="assets/img/product1.jpg" class="screens-preview__primary" alt="Primary Screenshot">
                    <img src="assets/img/product2.jpg" class="screens-preview__secondary" alt="Secondary Screenshot">
                </div>
                <!-- End of Screens Preview -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-13 col-md-13">
                <!-- Screens Preview -->
                <div class="screens-preview  ">
                    <img src="assets/img/three girl.jpg" class="screens-preview__primary" alt="Primary Screenshot">
                    <img src="assets/img/man.jpg" class="screens-preview__secondary" alt="Secondary Screenshot"> </div>
                <!-- End of Screens Preview -->
            </div>
            <div class="col-lg-11 col-md-10 col-lg-offset-0 col-md-offset-1" id="insights">
                <!-- Push -->
                <div class="push push--100  "> </div>
                <!-- End of Push -->
                <!-- Section Title -->
                <h2 class="section-title "> Insights </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle "> If you are looking for a profitable business idea to start with, look no
                    further. People love to film events and share
                    the experience through social media. You just need to connect this need with the right people and
                    you will be on your
                    way to success. </p>
                <!-- End of Section Subtitle -->
                <ul class="list list--check  ">
                    <li class="list__item"> Repost articles related to tech startups, investors, Forbes/Medium/etc.
                        business stuff related to our business and
                        business model and the short-form video industry as a whole</li>
                    <li class="list__item">Write blog posts: thought provoking pieces on new and emerging tech
                        solutions, utilizations, and emerging trends in
                        the tech, app, fitness, and fashion industry</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- End of Section -->
<!-- Section -->
<section class="section section--grey " id='delos'>
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <!-- Section Title -->
                <h2 class="section-title section-title--center "> Delos Development College Ambassador
                    <span class='section-title__highlight'>Program</span>
                </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle section-subtitle--center ">If you’re a college student or collegiate
                    student-athlete, contact us (see form below) to learn more about becoming
                    a Delos Ambassador!</p>
                <!-- End of Section Subtitle -->
            </div>
        </div>
    </div>
    <!-- Video -->
    <div class="video  ">
        <a href="https://youtu.be/q4xKvHANqjk" class="video__holder js-video">
            <img src="assets/img/video cover.jpg" class="video__primary" alt="Primary Video Thumbnail">
            <img src="assets/img/video cover1.jpg" class="video__secondary video__secondary--left"
                alt="Secondary Video Thumbnail">
            <img src="assets/img/video cover2.jpg" class="video__secondary video__secondary--right"
                alt="Secondary Video Thumbnail">
            <span class="video__button"></span>
        </a>
    </div>
    <!-- End of Video -->
</section>
<!-- End of Section -->
<!-- Section -->
<section class="section section--skin-2 " id='screenshots'>
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <!-- Section Title -->
                <h2 class="section-title section-title--center "> Our app has
                    <span class='section-title__highlight'>everything</span>
                </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle section-subtitle--center "> Lorem ipsum dolor sit amet, eos fierent
                    pertinacia eu est elit tincidunt sadipscing te </p>
                <!-- End of Section Subtitle -->
                <!-- Tabs -->
                <div class="tabs js-tabs ">
                    <ul class="tabs__header">
                        <li class="tabs__title">
                            <a class="tabs__link" href="#firstTab">
                                <img src="assets/img/greaticon.png" class="tabs__icon" alt="Tab icon"> Great design </a>
                        </li>
                        <li class="tabs__title">
                            <a class="tabs__link" href="#secondTab">
                                <img src="assets/img/usabilityicon.png" class="tabs__icon" alt="Tab icon"> Usability
                            </a>
                        </li>
                        <li class="tabs__title">
                            <a class="tabs__link" href="#thirdTab">
                                <img src="assets/img/functionalityicon.png" class="tabs__icon" alt="Tab icon">
                                Functionality </a>
                        </li>
                    </ul>
                    <div id="firstTab" class="tabs__content">
                        <div class="tabs__izometric">
                            <img src="assets/img/portfolio/great1.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great2.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great3.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great4.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great5.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great6.png" class="tabs__screenshot" alt="Screen preview">
                        </div>
                        <div class="tabs__regular">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great1.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great2.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great3.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great4.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great5.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great6.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                            </div>
                        </div>
                    </div>
                    <div id="secondTab" class="tabs__content">
                        <div class="tabs__izometric">
                            <img src="assets/img/portfolio/great1.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great2.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great3.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great4.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great5.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great6.png" class="tabs__screenshot" alt="Screen preview">
                        </div>
                        <div class="tabs__regular">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great1.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great2.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great3.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great4.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great5.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great6.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                            </div>
                        </div>
                    </div>
                    <div id="thirdTab" class="tabs__content">
                        <div class="tabs__izometric">
                            <img src="assets/img/portfolio/great1.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great2.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great3.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great4.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great5.png" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great6.png" class="tabs__screenshot" alt="Screen preview">
                        </div>
                        <div class="tabs__regular">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great1.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great2.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great3.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great4.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great5.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great6.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Tabs -->
                <!-- Push -->
                <div class="push push--150  "> </div>
                <!-- End of Push -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-24">
                <!-- Section Title -->
                <h2 class="section-title section-title--center "> Some
                    <span class='section-title__highlight'>cool stats</span> about our app </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle section-subtitle--center "> Lorem ipsum dolor sit amet, eos fierent
                    pertinacia eu est elit tincidunt sadipscing te </p>
                <!-- End of Section Subtitle -->
            </div>
            <div class="col-md-6 col-md-offset-2 col-sm-8">
                <!-- Stats -->
                <div class="stats  ">
                    <h3 class="stats__number js-stats__number" data-units="" data-number="15">0</h3>
                    <p class="stats__description">App Awards</p>
                </div>
                <!-- End of Stats -->
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-8">
                <!-- Stats -->
                <div class="stats stats--short  ">
                    <h3 class="stats__number js-stats__number" data-units="k" data-number="200">0</h3>
                    <p class="stats__description">Downloads</p>
                </div>
                <!-- End of Stats -->
            </div>
            <div class="col-md-6 col-md-offset-1 col-sm-8">
                <!-- Stats -->
                <div class="stats  ">
                    <h3 class="stats__number js-stats__number" data-units="" data-number="50">0</h3>
                    <p class="stats__description">Design Awards</p>
                </div>
                <!-- End of Stats -->
            </div>
        </div>
    </div>
</section>
<!-- End of Section -->
<!-- Section -->
<section class="section section--grey section--large " id='board'>
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <!-- Section Title -->
                <h2 class="section-title section-title--center "> What our
                    <span class='section-title__highlight'>Board of Advisors</span> say </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle section-subtitle--center "> </p>
                <!-- End of Section Subtitle -->
                <!-- Testimonials -->
                <div class="testimonials js-testimonials ">
                    <ul class="testimonials__header">
                        <li class="testimonials__title">
                            <a class="testimonials__link" href="#first-testimonial">
                                <img src="assets/img/advisor1.jpg" class="testimonials__photo" alt="Testimonial Photo">
                                <span class="testimonials__name">Vlad Sargu</span>
                                <span class="testimonials__position">CEO at
                                    <span class='testimonials__highlight'>VSArt</span>
                                </span>
                            </a>
                        </li>
                        <li class="testimonials__title">
                            <a class="testimonials__link" href="#second-testimonial">
                                <img src="assets/img/advisor2.jpg" class="testimonials__photo" alt="Testimonial Photo">
                                <span class="testimonials__name">Christine May</span>
                                <span class="testimonials__position">marketer at
                                    <span class='testimonials__highlight'>SpicyTeam</span>
                                </span>
                            </a>
                        </li>
                        <li class="testimonials__title">
                            <a class="testimonials__link" href="#third-testimonial">
                                <img src="assets/img/advisor3.jpg" class="testimonials__photo" alt="Testimonial Photo">
                                <span class="testimonials__name">Andy Way</span>
                                <span class="testimonials__position">designer at
                                    <span class='testimonials__highlight'>DDB</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <div class="testimonials__wrapper">
                        <i class="fontello-quote-right"></i>
                        <div class="testimonials__content">
                            <blockquote id="first-testimonial" class="testimonials__quote">
                                <span>Delos is an immersive, interactive music and event experience. Delos is the first
                                    digital music service to offer
                                    streaming concerts and events in virtual reality.</span>
                            </blockquote>
                            <blockquote id="second-testimonial" class="testimonials__quote">
                                <span>With Delos video app, you can stream live events together, enjoy your own curated
                                    library of videos and music,
                                    or explore exciting new content. The app is free to download and use on your Android
                                    device.</span>
                            </blockquote>
                            <blockquote id="third-testimonial" class="testimonials__quote">
                                <span>Delos is a video app that allows users to share the best in music, events, and
                                    culture.</span>
                            </blockquote>
                        </div>
                    </div>
                </div>
                <!-- End of Testimonials -->
            </div>
        </div>
    </div>
</section>
<!-- End of Section -->
<!-- Section -->
<section class="section section--skin-3 section--large " id='contacts'>
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <!-- Section Title -->
                <h2 class="section-title section-title--center "> Get in touch
                    <span class='section-title__highlight'>with us</span>
                </h2>
                <!-- End of Section Title -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-20 col-lg-offset-2 col-md-24 col-md-offset-0">
                <!-- Contact Form -->
                <div class="contact-form  ">
                    <form action="" class="contact-form__form js-contact-form">
                        <div class="contact-form__modal js-contact-form__modal">
                            <h3 class="contact-form__message"> Your message was sent
                                <span>successfully</span>
                                <br>Thank you! </h3>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <label class="contact-form__label" for="name-input">Your name</label>
                                <!-- Input -->
                                <div class="input input--contact  ">
                                    <input type="text" name="name-input" class="input__field" placeholder=""
                                        id="name-input" data-validation="required"> </div>
                                <!-- End of Input -->
                                <label class="contact-form__label" for="email-input">Your e-mail</label>
                                <!-- Input -->
                                <div class="input input--contact  ">
                                    <input type="text" name="email-input" class="input__field" placeholder=""
                                        id="email-input" data-validation="required email"> </div>
                                <!-- End of Input -->
                                <label class="contact-form__label" for="subject-input">Subject</label>
                                <!-- Input -->
                                <div class="input input--contact  ">
                                    <input type="text" name="subject-input" class="input__field" placeholder=""
                                        id="subject-input" data-validation="required"> </div>
                                <!-- End of Input -->
                            </div>
                            <div class="col-md-12">
                                <label class="contact-form__label" for="message-input">Your Message</label>
                                <textarea name="message-input" id="message-input" class="contact-form__textarea"
                                    data-validation="required"></textarea>
                                <!-- Button -->
                                <div class="button button--small button--shadow  ">
                                    <input type="submit" class="button__input" value="Send us the message"> </div>
                                <!-- End of Button -->
                            </div>
                        </div>
                    </form>
                </div>
                <!-- End of Contact Form -->
            </div>
        </div>
    </div>
</section>
<!-- End of Section -->
@endsection