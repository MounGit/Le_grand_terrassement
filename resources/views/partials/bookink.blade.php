<section class="dark-wrapper opaqued parallax" data-parallax="scroll" data-image-src="{{asset('img/'. $section[0]->sect4_bg)}}" data-speed="0.8">
    <div class="section-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">
                    <h2 class="section-heading">{{ $section[0]->sect4_title }}<span
                            class="theme-accent-color"></span>
                    </h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">{{$section[0]->sect4_title}}</h3>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row mb100">
                <!-- Address, Phone & Email -->
                <div class="col-md-5 col-md-offset-1 col-sm-5 wow fadeIn">
                    <h3 class="mb30">Address</h3>
                    <p class="lead">{{ $bookink[0]->adress1 }}</p>
                    <p class="lead">{{ $bookink[0]->adress2 }}<br>
                        {{ $bookink[0]->adress3 }} </p>
                    <p class="lead">{{ $bookink[0]->phone }}<br>
                </div>

                <div class="col-md-5 col-sm-7 wow fadeIn">
                    <h3 class="mb30">Opening Times</h3>
                    <div class="row">
                        <div class="col-xs-5">
                            <ul class="list-unstyled weekdays">
                                <li>Monday</li>
                                <li>Tuesday</li>
                                <li>Wednesday</li>
                                <li>Thursday</li>
                                <li>Friday</li>
                                <li>Saturday</li>
                                <li>Sunday</li>
                            </ul>
                        </div>
                        <div class="col-xs-7">
                            <ul class="list-unstyled">
                                <li>{{ $bookink[0]->mday }}</li>
                                <li>{{ $bookink[0]->tuday }}</li>
                                <li>{{ $bookink[0]->wday }}</li>
                                <li>{{ $bookink[0]->thday }}</li>
                                <li>{{ $bookink[0]->fday }}</li>
                                <li>{{ $bookink[0]->satday }}</li>
                                <li>{{ $bookink[0]->sunday }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div id="message"></div>
                    <form method="post" action="{{ route('bookinks.store') }}" id="contactform" class=" wow fadeIn"
                        data-wow-delay="0.2s">
                        @csrf
                        <input type="text" value="{{ old('name') }}" class="form-control col-md-4" name="name"
                            placeholder="Your Name *" id="name" required
                            data-validation-required-message="Please enter your name." />
                        <input type="text" value="{{ old('email') }}" class="form-control col-md-4" name="email"
                            placeholder="Your Email *" id="email" required
                            data-validation-required-message="Please enter your email address." />
                        <input type="text" value="{{ old('url') }}" class="form-control col-md-4" name="url"
                            placeholder="Your URL *" id="website" required
                            data-validation-required-message="Please enter your web address." />
                        <textarea name="msg" class="form-control" id="comments" placeholder="Your Message *" required
                            data-validation-required-message="Please enter a message.">{{ old('msg') }}</textarea>

                        <button class="btn btn-primary mt30 pull-right" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
