<section id="main-slider" class="no-margin">
<div class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <li data-target="#main-slider" data-slide-to="1"></li>
        <li data-target="#main-slider" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="item active" style="background-image: url({{ asset('img/slides/1.jpg') }})">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="carousel-content centered">
                            <h2 class="animation animated-item-1">Welcome to my page</h2>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        <div class="item" style="background-image: url({{ asset('img/slides/2.jpg') }} )">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="carousel-content center centered">
                            <h2 class="animation animated-item-1">Powerful and Responsive web site developer</h2>
                            <p class="animation animated-item-2">I am specialized in both of front end and back end. I am very familiar with back end management. Full Stack</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
        <div class="item" style="background-image: url( {{ asset('img/slides/3.jpg') }} )">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="carousel-content centered">
                            <h2 class="animation animated-item-1">Amazing Mobile App Developer</h2>
                            <p class="animation animated-item-2">I am specialized in native app and hybrid app development. Full Stack</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/.item-->
    </div><!--/.carousel-inner-->
</div><!--/.carousel-->
<a class="prev hidden-xs" href="#main-slider" data-slide="prev">
    <i class="icon-angle-left"></i>
</a>
<a class="next hidden-xs" href="#main-slider" data-slide="next">
    <i class="icon-angle-right"></i>
</a>
</section><!--/#main-slider-->