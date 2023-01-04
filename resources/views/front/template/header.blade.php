<header class="py-0 bg-light border-bottom mb-4">

    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Tin Tức Nhóm 4</h1>
            <!-- <p class="lead mb-0">Web môn lập trình PHP_MySQL 02_ Nhóm 4</p> -->

            <div class="header_social ">
                @if(isset($Social) && count($Social) > 0)
                @foreach($Social as $k => $v)
                <a href="{{$v->Alias}}" title="{{$v->Name}}" target="_blank">
                    {!!$v->Font!!}
                </a>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <!-- Danh mục tin tức -->


    <div class="col d-flex justify-content-center ">
        <ul class="list-group list-unstyled list-group-horizontal ">
            @if(isset($CatNews) && count($CatNews) > 0)
            @foreach($CatNews as $k => $v)
            <li class="list-group-item list-group-item-dark "><a href="{{url('/'.$v->Alias)}}" class="link-dark"
                    style="text-decoration: none;">{!!$v->Name!!}</a></li>

            @endforeach
            @endif
            <!-- <ul class="list-group list-unstyled list-group-horizontal ">
                <li class="list-group-item list-group-item-dark"><a href="#!" class="link-dark"
                        style="text-decoration: none;">Web Design</a></li>
                <li class="list-group-item list-group-item-dark"><a href="#!" class="link-dark"
                        style="text-decoration: none;">HTML</a></li>
                <li class="list-group-item list-group-item-dark"><a href="#!" class="link-dark"
                        style="text-decoration: none;">Freebies</a></li>
                <li class="list-group-item list-group-item-dark"><a href="#!" class="link-dark"
                        style="text-decoration: none;">JavaScript</a></li>
                <li class="list-group-item list-group-item-dark"><a href="#!" class="link-dark"
                        style="text-decoration: none;">CSS</a></li>
                <li class="list-group-item list-group-item-dark"><a href="#!" class="link-dark"
                        style="text-decoration: none;">Tutorials</a></li>
            </ul> -->
        </ul>
    </div>


    </div>


</header>