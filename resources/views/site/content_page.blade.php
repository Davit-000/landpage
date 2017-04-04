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
                            <img src="{{URL::asset('images/about/1.jpg')}}" alt="" class="img-responsive">
                        </div>
                        <div class="about-item">
                            <img src="{{ URL::asset('images/about/2.jpg') }}" alt="" class="img-responsive">
                        </div>
                        <div class="about-item">
                            <img src="{{ URL::asset('images/about/3.jpg') }}" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{link_to('/')}}
</section>