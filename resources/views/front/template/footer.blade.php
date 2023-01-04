<div class="">
    <!----------- Footer ------------>
    <footer class="footer-bs">
        <div class="row">
            <div class="col-md-3 footer-brand animated fadeInLeft ">
                <img src="{{url('image/logo/logo.png')}}" class="img-thumbnail center"
                    style="width: 100px; height:100px ">
                <h4 class="text-center">{!!$NameGroup->Description!!}</h4>
            </div>
            <div class="col-md-4 footer-nav animated fadeInUp">
                <div class="col-md-12">
                    <ul class="pages">
                        <li>
                            <h4>Email: {!!$Email->Description!!}</h4>
                        </li>
                        <li>
                            <h4>Số điện thoại: {!!$Phone->Description!!}</h4>
                        </li>
                        <li>
                            <h4>Địa chỉ: {!!$Add->Description!!}</h4>
                        </li>

                    </ul>
                </div>
            </div>
            <div class="col-md-2 footer-social animated fadeInDown text-center">
                <h4>Theo dõi chúng tôi qua </h4>
                <ul class="list-group list-group-horizontal" style="justify-content: center;">

                    @if(isset($Social) && count($Social) > 0)
                    @foreach($Social as $k => $v)
                    <li class=""><a href="{{$v->Alias}}" title="{{$v->Name}}" target="_blank">
                            {!!$v->Font!!}
                        </a></li>
                    @endforeach
                    @endif

                </ul>
            </div>
            <div class="col-md-3 footer-ns animated fadeInRight">
                <h4>Đăng kí nhận tin</h4>

                <p>
                <form action="{{url('/dang-ky-nhan-tin')}}" method="post">
                {!! csrf_field() !!}
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Đăng kí nhận tin..." name="txtEmailSub">
                    <span class="input-group-btn">
                        <input class="btn btn-default" type="submit" name = "gui"><span
                                class="glyphicon glyphicon-envelope"></span></input>
                </form>
                <!-- <div class="input-group">
                    <input type="text" class="form-control" placeholder="Đăng kí nhận tin..." id="txtEmailSub">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="btnSendSub"><span
                                class="glyphicon glyphicon-envelope"></span></button>
                    </span>
                </div> -->
                <!-- /input-group -->
                </p>
            </div>
        </div>
    </footer>
    <section style="text-align:center; margin:10px auto;">
        <p>{!!$CopyRight->Description!!}</p>
    </section>



</div>