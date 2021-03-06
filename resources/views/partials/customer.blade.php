<section class="dark-wrapper opaqued parallax" data-parallax="scroll"
    data-image-src="{{ asset('img/'. $section[0]->sect3_bg) }}" data-speed="0.8">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading"><span class="theme-accent-color">{{$section[0]->sect3_title}}</span></h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">{{$section[0]->sect3_subtitle}}</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1"
                        data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]"
                        data-items-mobile="[479,1]">
                        <li>
                            <div class="row">

                                <div class="col-xs-8 col-xs-offset-2 item-caption">
                                    @foreach ($customer as $customer)
                                        @if ($customer->grade === 5)
                                            <div class="col-sm-2">

                                            <img src="{{ asset('img/' . $customer->url) }}"
                                                class="img-responsive testimonial-author" alt="">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4>{{ $customer->name }} {{ $customer->firstname }}</h4>
                                            <p>{{ $customer->comment }}</p>
                                            <ul class="list-inline">
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                                <li><i class="fa fa-star theme-accent-color"></i></li>
                                            </ul>
                                        </div>
                                        @endif
                                        
                                    @endforeach

                                </div>

                            </div>
                        </li>


                        {{-- <li>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 item-caption">
                                    <div class="col-sm-2">
                                        <img src="assets/img/team/small2.jpg" class="img-responsive testimonial-author" alt="">
                                    </div>
                                    <div class="col-sm-10">                                                
                                        <h4>Charles Davies</h4>
                                        <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>






{{-- <section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('assets/img/bg/bg10.jpg')}}" data-speed="0.8">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">Our <span class="theme-accent-color">Happy</span> Customers</h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">Satisfaction, everytime.</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul class="owl-carousel-paged testimonial-owl wow fadeIn list-unstyled" data-items="1" data-items-desktop="[1200,1]" data-items-desktop-small="[980,1]" data-items-tablet="[768,1]" data-items-mobile="[479,1]">
                        <li>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 item-caption">
                                    <div class="col-sm-2">
                                        <img src="assets/img/team/small1.jpg" class="img-responsive testimonial-author" alt="">
                                    </div>
                                    <div class="col-sm-10">                                                
                                        <h4>Charles Davies</h4>
                                        <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-2 item-caption">
                                    <div class="col-sm-2">
                                        <img src="assets/img/team/small2.jpg" class="img-responsive testimonial-author" alt="">
                                    </div>
                                    <div class="col-sm-10">                                                
                                        <h4>Charles Davies</h4>
                                        <p>Compellingly customize highly efficient outsourcing with premium quality vectors. Conveniently target customer directed relationships after highly efficient process improvements.</p>
                                        <ul class="list-inline">
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                            <li><i class="fa fa-star theme-accent-color"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> --}}
