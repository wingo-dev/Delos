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
                    Delos is a mobile-first technology platform powering a suite of apps utilizing short-form video and
                    livestream to drive social community with integrated ecommerce known as “Social Selling” </p>
                <!-- End of Section Subtitle -->
                <!-- Button -->
                <div class="button button--small button--inline button--shadow  ">
                    <a href="#products" class="button__link">See more</a>
                </div>
                <!-- End of Button -->
                <!-- Button -->
                <div class="button button--small button--inline button--blue button--shadow  ">
                    <a href="https://apps.apple.com/us/app/fytness/id1573929271" class="button__link"
                        target="_blank">Download</a>
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
<section class="section section--skin-1 " id='products'>
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <!-- Section Title -->
                <h2 class="section-title section-title--center ">Our Products</h2>
                <!-- End of Section Title -->
                <p class="section-subtitle"> Fytness - A short form video based fitness app
                    building a community to
                    inspire physical and emotional well-being, positive mental health and providing a space for users to
                    share their fitness talents, passions, and journeys. </p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-8 col-lg-offset-2">
                <div class="download-button">
                    <span class="download-button__store">Fashyn</span>
                    <div class="list__item">Fashyn-In Development</div>
                    <div class="box  ">
                            <img src="assets/img/phone.png" class="box__icon" alt="Box icon"> </div>
                        
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-lg-offset-1">
                <div class="download-button">
                    <span class="download-button__store">Fytness</span>
                    <div class="list__item">Fytness-live</div>
                     <div class="box  ">
                            <img src="assets/img/clock.png" class="box__icon" alt="Box icon"> </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-8 col-lg-offset-1">
                <div class="download-button">
                    <span class="download-button__store">Muzyk</span>
                    <div class="list__item">Muzyk- In Development</div>
                    <div class="box  ">
                            <img src="assets/img/tester.png" class="box__icon" alt="Box icon"> </div>
                </div>
            </div>
        </div>
     
    </div>
</section>
<!-- End of Section -->
<!-- Section -->
<section class="section section--grey " id='download'>
    <div class="container">
        <div class="row">
            <div class="col-md-24">
                <!-- Section Title -->
                <h2 class="section-title section-title--center "> Download the
                    <span class='section-title__highlight'>Fytness</span> app </h2>
                <!-- End of Section Title -->
                <!-- Section Subtitle -->
                <p class="section-subtitle section-subtitle--center "> available on iOS </p>
                <!-- End of Section Subtitle -->
            </div>
        </div>
        <div class="row">
            <div class="col-lg-24 col-md-24">
                <!-- Download Button -->
                <a class="download-button  " href="https://apps.apple.com/us/app/fytness/id1573929271" target="_blank">
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
                            <img src="assets/img/portfolio/great2.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great3.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great4.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great5.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great6.png" class="tabs__screenshot" alt="Screen preview">
                        </div>
                        <div class="tabs__regular">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great1.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great2.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great3.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great4.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great5.webp" class="tabs__screenshot"
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
                            <img src="assets/img/portfolio/great2.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great3.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great4.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great5.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great6.png" class="tabs__screenshot" alt="Screen preview">
                        </div>
                        <div class="tabs__regular">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great1.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great2.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great3.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great4.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great5.webp" class="tabs__screenshot"
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
                            <img src="assets/img/portfolio/great2.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great3.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great4.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great5.webp" class="tabs__screenshot" alt="Screen preview">
                            <img src="assets/img/portfolio/great6.png" class="tabs__screenshot" alt="Screen preview">
                        </div>
                        <div class="tabs__regular">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great1.png" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great2.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great3.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great4.webp" class="tabs__screenshot"
                                        alt="Screen preview"> </div>
                                <div class="col-md-8 col-sm-12 col-xs-24">
                                    <img src="assets/img/portfolio/great5.webp" class="tabs__screenshot"
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