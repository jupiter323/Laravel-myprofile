@extends('layouts.app')

@section('content')
<section id="main-slider">
<div class="section">
    <div class="container">
        <div class="row">
        <div class="col-sm-12">
                <h2>We are leading IT world</h2>
                <h3>Specializing in Web/APP Development</h3>
                <p>
                    We are senior web and mobile application designers and developers team and have +10 years of experience. I have gained vast experiences building a lot of kinds of small and big business and personal web sites.
                    I know all aspects of not only core PHP and Javascript but also various frameworks. I and my friends will deliver powerful and perfect web/app products to clients.
                </p>
            
            </div>
        </div>
    </div>
</div>
</section>

@include('portfolio.recent')

@include('portfolio.history')

@endsection