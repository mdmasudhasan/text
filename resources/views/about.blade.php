
@extends('master.about')

@section('content')

@section('title', 'Kiddy School')





<section class="home-slider owl-carousel">
    <div class="slider-item" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-8 text-center ftco-animate">
                    <h1 class="mb-4">This Is design and created <span> by Md Masud Hasan <span> For contact Plz phone <span> 01711191586 </span></span></h1>
                    <p><a href="{{route('welcome')}}" class="btn btn-secondary px-4 py-3 mt-3">Read More</a></p>
                </div>
            </div>
        </div>
    </div>


@endsection