@extends('front.template.master')

@section('title', $newsDetail->Name)





@section('content')


<!-- Contact Us Section -->
<div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- News Detail Start -->
                    <div class="position-relative mb-12">
                        <img class="img-fluid w-100" src="{!!$newsDetail->Images!!}" style="object-fit: cover;">
                        <div class="overlay position-relative bg-light">
                            <div class="mb-3 pt-3">
                                <a href= "{{url(''.$newsDetail->NewsCatAlias)}}"> <h2>{!!$newsDetail->NewsCatName!!}<span class="px-1">/</span>
                                <span>{!!$newsDetail->created_at!!}</span></h2></a>
                                
                            </div>
                            <div>
                                <h1 class="mb-3">{!!$newsDetail->Name!!}</h1>
                                {!!$newsDetail->Description!!}
                            </div>
                        </div>
                    </div>
                    <!-- News Detail End -->
                </div>

                
            </div>
        </div>
    </div>
@stop