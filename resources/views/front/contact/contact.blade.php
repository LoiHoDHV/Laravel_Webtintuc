@extends('front.template.master')

@section('title', $PageInfo->Name)





@section('content')


<!-- Contact Us Section -->
<section class="Material-contact-section section-padding section-dark" style="padding:5px;">
    <div class="container">
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-12 wow animated fadeInLeft" data-wow-delay=".2s">
                <h1 class="section-title">Sẵn sàng nghe ý kiến của bạn</h1>
            </div>
        </div>
        <div class="row">
            <!-- Section Titile -->
            <div class="col-md-6 mt-3 contact-widget-section2 wow animated fadeInLeft" data-wow-delay=".2s">
                <p>{!!$PageInfo->Description!!}</p>

                
            </div>
            <!-- contact form -->
            <div class="col-md-6 wow animated fadeInRight" data-wow-delay=".2s">
                <form class="shake" role="form" method="post" id="contactForm" name="contact-form"
                    data-toggle="validator" action="{{ url('/lien-he') }}">


                    {!! csrf_field() !!}
                    <!-- Name -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="name">Họ và tên</label>
                        <input class="form-control" id="name" type="text" name="name" required
                            data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- email -->
                    <div class="form-group label-floating">
                        <label class="control-label" for="email">Email</label>
                        <input class="form-control" id="email" type="email" name="email" required
                            data-error="Please enter your Email">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Subject -->
                    <div class="form-group label-floating">
                        <label class="control-label">Số điện thoại</label>
                        <input class="form-control"  type="text" name="phone" required
                            data-error="Please enter your message subject">
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Message -->
                    <div class="form-group label-floating">
                        <label for="message" class="control-label">Lời nhắn</label>
                        <textarea class="form-control" rows="3" id="message" name="message" required
                            data-error="Write your message"></textarea>
                        <div class="help-block with-errors"></div>
                    </div>
                    <!-- Form Submit -->
                    <div class="form-submit mt-5">
                        <button class="btn btn-primary" type="submit" name = "gui">Gởi đi</button>
                        <div id="msgSubmit" class="h3 text-center hidden"></div>
                        <div class="clearfix"></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@stop