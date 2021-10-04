<section id="welcome" class="top-border-me">
    <div class="section-inner">

        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb100">                        
                    <h2 class="section-heading"><span class="theme-accent-color">{{$section[0]->sect1_title}}</span></h2>
                    <hr class="thin-hr">
                    <h3 class="section-subheading secondary-font">{{$section[0]->sect1_subtitle}}</h3>
                </div>
            </div>
        </div>

        <div>
            <div class="container">
                <div class="col-md-5 col-md-offset-1">
                    <h2 class="mb50">About <span class="theme-accent-color">DuJour</span></h2>
                    <p class="lead">{{$welcome[0]->about_part1}}</p>
                    <p>{{$welcome[0]->about_part2}}</p>
                </div>

                <div class="col-md-5">
                    <h2 class="mb50">Latest <span class="theme-accent-color">Awards</span></h2>
                    <p class="lead">{{$welcome[0]->award_part1}}</p>
                    <p>{{$welcome[0]->award_part2}}</p>
                </div>
            </div>
        </div>
    </div>
</section>

