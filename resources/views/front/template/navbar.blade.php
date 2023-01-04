<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="container">
        <a class="navbar-brand" style="padding: 0px; margin-left: -300px;" href="{{url('/')}}">
            <div>
                <img src="{{url('image/logo/logo.png')}}" class="img-thumbnail" style="width: 50px; height:50px ">
                Group 9 News Website
            </div>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right:-300px;">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="float:right;">
                @if(isset($Page) && count($Page) > 0)
                @foreach($Page as $k => $v)

                <li class="nav-item "><a class="nav-link" href="{{url(''.$v->Alias)}}">{!!$v->Name!!}</a></li>

                @endforeach
                @endif
                <li class="nav-item "><a class="nav-link" href="{{url('/login')}}" target="_blank">Đăng nhập</a></li>
                <li class="nav-item" style="margin: 10px 0px 0px 5px !important; font-style:italic;">
                    <form action="{{url('/search')}}" method="post">
                        {{ csrf_field() }}
                        <input type="text" id="btnSearch" placeholder="Nhập từ khóa tìm kiếm" name="keyword" /></i>
                        <button class="btn btn-info bg-dark" style="border-radius: 50%; text-align:center; border:none;"
                            type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                </li>

                <!-- <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Đăng nhập</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Blog</a></li> -->
            </ul>

        </div>
    </div>

</nav>