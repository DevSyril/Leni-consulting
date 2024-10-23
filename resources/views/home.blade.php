@extends('layouts.base')


@section('content')
    @include('includes.toptinybar')
    @include('includes.menubar')
    <div class="carousel">
        <div class="carousel-container">
            <div class="banner slide-carousel" style="background-image: url({{ URL::asset('db/banners/01.jpg') }})">
                <div class="mask">
                    <div data-aos="fade-up">
                        <h1 class="banner-head-line">
                            LENDI Consulting LLC
                        </h1>
                        <h2 class="banner-second-line">
                            Trusted Advisors for CPA Financial Services & Compliance.
                        </h2>

                        <div class="banner-buttons">
                            <button class="cssbuttons-io-button">
                                Contact us
                                <div class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </button>

                            <button class="button">
                                <span>
                                    Consulting request
                                </span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
            <div class="banner slide-carousel" style="background-image: url({{ URL::asset('db/banners/02.jpg') }})">
                <div class="mask">
                    <div data-aos="fade-up">
                        <h1 class="banner-head-line">
                            LENDI Consulting LLC
                        </h1>
                        <h2 class="banner-second-line">
                            Trusted Advisors for CPA Financial Services & Compliance.
                        </h2>

                        <div class="banner-buttons">
                            <button class="cssbuttons-io-button">
                                Contact us
                                <div class="icon">
                                    <svg height="24" width="24" viewBox="0 0 24 24"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M16.172 11l-5.364-5.364 1.414-1.414L20 12l-7.778 7.778-1.414-1.414L16.172 13H4v-2z"
                                            fill="currentColor"></path>
                                    </svg>
                                </div>
                            </button>

                            <button class="button">
                                <span>
                                    Consulting request
                                </span>
                            </button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br /><br /><br />
    <div class="container">
        <div class="about-section" id="about-us">
            <div data-aos="slide-right">
                <img src="{{ URL::asset('db/about/01.jpg') }}" alt="About" width="100%"
                    style="border-radius: 20px;" />
            </div>
            <div data-aos="slide-left">
                <h4>
                    Know more about us
                </h4>
                <p style="text-align: justify;">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquam, reprehenderit similique aut
                    nobis reiciendis optio corrupti vel ipsum possimus. Aperiam, velit natus! Voluptatem voluptatum
                    magnam vero eligendi vitae ad.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab aliquam, reprehenderit similique aut
                    nobis reiciendis optio corrupti vel ipsum possimus. Aperiam, velit natus! Voluptatem voluptatum
                    magnam vero eligendi vitae ad.
                </p>
                <button class="button">
                    <span>
                        Read more &nbsp; &rightarrow;
                    </span>
                </button>
            </div>
        </div>


        <br /><br /><br /><br />

        <div class="section-title" id="services">
            DISCOVER OUR SERVICES
        </div>
        <div class="section-title-divider"></div>
        <br /><br /><br />
        <div class="services-section">
            <div data-aos="fade-up" data-aos-delay="{{ 0 }}" class="text-center">
                <img src="{{ URL::asset('db/services/01.svg') }}" alt="Service" height="100" /><br /><br />
                <h5>Bookkeeping & Accounting Services</h5>

                <a href="">
                    Read more &nbsp; &rightarrow;
                </a>
            </div>
            <div data-aos="fade-up" data-aos-delay="{{ 200 }}" class="text-center">
                <img src="{{ URL::asset('db/services/02.svg') }}" alt="Service" height="100" /><br /><br />
                <h5>Technology & System Integration</h5>

                <a href="">
                    Read more &nbsp; &rightarrow;
                </a>
            </div>
            <div data-aos="fade-up" data-aos-delay="{{ 400 }}" class="text-center">
                <img src="{{ URL::asset('db/services/03.svg') }}" alt="Service" height="100" /><br /><br />
                <h5>Nonprofit Services</h5>

                <a href="">
                    Read more &nbsp; &rightarrow;
                </a>
            </div>
            <div data-aos="fade-up" data-aos-delay="{{ 600 }}" class="text-center">
                <img src="{{ URL::asset('db/services/04.svg') }}" alt="Service" height="100" /><br /><br />
                <h5>Audit & Compliance Services</h5>

                <a href="">
                    Read more &nbsp; &rightarrow;
                </a>
            </div>
        </div>

        <br /><br /><br /><br /><br /><br />

        <div class="section-title" id="our-teams">
            DISCOVER OUR TEAMS
        </div>
        <div class="section-title-divider"></div>
        <br /><br /><br /><br />
        <div class="teams-section">
            @for ($i = 0; $i < 4; $i++)
                <div class="text-center">
                    <img src="{{ URL::asset('db/teams/01.jpg') }}" alt="Member" data-aos="zoom-in"
                        data-aos-delay="{{ 200 * $i }}" />
                    <h5>Jean Piak DOUTI</h5>
                    <p>Company technical team leader</p>
                </div>
            @endfor
        </div>

        <br /><br /><br /><br /><br />

        <div class="section-title">
            OUR PARTNERS
        </div>
        <div class="section-title-divider"></div>
        <br /><br /><br /><br />

        <div class="partners-section">
            <div class="slider">
                <div class="slide-track">
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250"
                            alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100"
                            width="250" alt="" />
                    </div>
                    <div class="slide">
                        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100"
                            width="250" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br /><br /><br /><br /><br /><br />

    @include('includes.footer')

@endsection

@section('js')
    <script>
        let slideIndex = 0
        let intervalId

        function moveSlide(n) {
            slideIndex += n
            showSlide(slideIndex)
        }

        function showSlide(n) {
            const slides = document.querySelectorAll('.slide-carousel')
            if (n >= slides.length) {
                slideIndex = 0
            } else if (n < 0) {
                slideIndex = slides.length - 1
            }
            slides.forEach((slide) => {
                slide.style.transform = `translateX(-${slideIndex * 100}%)`
            })
        }

        function startAutoplay() {
            intervalId = setInterval(() => {
                moveSlide(1);
            }, 5000)
        }

        function stopAutoplay() {
            clearInterval(intervalId)
        }

        startAutoplay()
    </script>
@endsection
