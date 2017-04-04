@if(isset($pages) && is_object($pages))
    @foreach($pages as $k => $page)
        @if($k % 2 == 0)
            <section id="hero-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="block">
                                {!! $page->text !!}
                                <div class="wow fadeInDown" data-wow-delay="0.3s">
                                    <a class="btn btn-default btn-home" href="{{ route('page', array('alias' => $page->alias)) }}" role="button">
                                        Get Started
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow zoomIn">
                            <div class="block">
                                <div class="counter text-center">
                                    <ul id="countdown_dashboard">
                                        <li>
                                            <div class="dash days_dash">
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <span class="dash_title">Days</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dash hours_dash">
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <span class="dash_title">Hours</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dash minutes_dash">
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <span class="dash_title">Minutes</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dash seconds_dash">
                                                <div class="digit">0</div>
                                                <div class="digit">0</div>
                                                <span class="dash_title">Seconds</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!-- .row close -->
                </div><!-- .container close -->
            </section><!-- header close -->
        @else
            <!--
            About start
            ==================== -->
            <section id="about" class="section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-sm-12 wow fadeInLeft">
                            <div class="sub-heading">
                                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam ipsa recusandae consequatur veniam, reiciendis odit quia eaque vel eius a.</h3>
                            </div>
                            <div class="block">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ulla-mco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in</p>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, aspernatur.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12 wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="about-slider">
                                <div class="init-slider">
                                    <div class="about-item">
                                        <img src="images/about/1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="about-item">
                                        <img src="images/about/2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="about-item">
                                        <img src="images/about/3.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- #about close -->
        @endif
    @endforeach
@endif

@if(isset($services) && is_object($services))
    <!--
    Service start
    ==================== -->
    <section id="service" class="section">
        <div class="container">
            <div class="row">
                <div class="heading wow fadeInUp">
                    <h2>Our service</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                </div>
                @foreach($services as $service)
                    <div class="col-sm-6 col-md-3 wow fadeInLeft">
                        <div class="service">
                            <div class="icon-box">
                            	<span class="icon">
                                    <i class="{{ $service->icon }}"></i>
                                </span>
                            </div>
                            <div class="caption">
                                <h3>{{ $service->name }}</h3>
                                <p>{{ $service->text }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div><!-- .container close -->
    </section><!-- #service close -->
@endif

<section id="call-to-action" class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow text-center">
                <div class="block">
                    <h2>Lorem ipsum dolor sit amet, consectetur adipisicing</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</p>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Enter Your Email Address">
                        <button class="btn btn-default btn-submit" type="submit">Get Notified</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- #call-to-action close -->

<!--
Contact start
==================== -->
<section id="contact" class="section">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="block">
                    <div class="heading wow fadeInUp">
                        <h2>Get In Touch</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <br> dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex</p>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 wow fadeInUp">
                <div class="block text-left">
                    <div class="sub-heading">
                        <h4>Contact Address</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet quos maxime voluptate doloribus, voluptatum nemo vel ipsa in eligendi, ullam. Ducimus consequuntur labore error hic.</p>
                    </div>
                    <address class="address">
                        <hr>
                        <p>Dhanmondi 32,<br> Dhaka,<br> Bangladesh</p>
                        <hr>
                        <p><strong>E:</strong>&nbsp;hello@foundry.net<br>
                            <strong>P:</strong>&nbsp;+614 3948 2726</p>


                    </address>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-5 col-md-offset-1 wow fadeInUp" data-wow-delay="0.3s">
                <div class="form-group">
                    <form action="{{route('home')}}" method="post" id="contact-form">
                        {{csrf_field()}}
                        <div class="input-field">
                            <input type="text" class="form-control" placeholder="Your Name" name="name">
                        </div>
                        <div class="input-field">
                            <input type="email" class="form-control" placeholder="Email Address" name="email">
                        </div>
                        <div class="input-field">
                            <textarea class="form-control" placeholder="Your Message" rows="3" name="message"></textarea>
                        </div>
                        <button class="btn btn-send" type="submit">Send me</button>
                    </form>

                    <div id="success">
                        <p>Your Message was sent successfully</p>
                    </div>
                    <div id="error">
                        <p>Your Message was not sent successfully</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section clas="wow fadeInUp">
    <div class="map-wrapper">
    </div>
</section>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block">
                    <p>Copyright &copy; <a href="http://www.Themefisher.com">Themefisher</a>| All right reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>