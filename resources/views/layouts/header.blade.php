<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/"><img src="img/logo.png" alt="Basica"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="@if($menu == 'home') active @endif"><a href="/">Home</a></li>
                <li class="@if($menu == 'portfolio') active @endif"><a href="/portfolio">Portfolio</a></li>
                <li class="@if($menu == 'aboutme') active @endif"><a href="/aboutme">About US</a></li>
                
                <li class="@if($menu == 'contact') active @endif"><a href="/contact">Contact</a></li>
            </ul>
        </div>
    </div>
</header><!--/header-->

