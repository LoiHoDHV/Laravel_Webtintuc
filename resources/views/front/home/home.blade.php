@extends('front.template.master')

@section('title', $PageInfo->Name)
@section('content')


<div class="home_page">
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <div class="card mb-4">
                    @if (isset($NewsMostView) && count($NewsMostView) > 0)
                    @foreach($NewsMostView as $k => $v)
                    <a href="#!"><img class="card-img-top" src="{!!$v->Images!!}" alt="..." /></a>
                    <div class="card-body">
                        <div class="small text-muted">{!!$v->created_at!!}</div>
                        <h2 class="card-title">{!!$v->Name!!} - <i class="fas fa-eye"></i> {!!$v->Views!!}</h2>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($v->SmallDescription, 150, $end='...') }}
                        </p>
                        <a class="btn btn-primary" href="{{url('/'.$v->Alias.'.html')}}">Đọc tiếp →</a>
                    </div>
                    @endforeach
                    @endif
                </div>

                <!-- Nested row for non-featured blog posts-->

                <!-- Blog post-->
                <div class="row">
                    @if(isset($News) && count($News)>0)
                    @foreach($News as $k=>$v)

                    <div class="col-lg-4">

                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="{!!$v->Images!!}" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">{!!$v->created_at!!}</div>
                                <h2 class="card-title h4">{!!$v->Name!!} - <i class="fas fa-eye"></i> {!!$v->Views!!}
                                </h2>
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit($v->SmallDescription, 150, $end='...') }}</p>
                                <a class="btn btn-primary" href="{{url('/'.$v->Alias .'.html')}}">Đọc tiếp →</a>
                            </div>
                        </div>
                    </div>


                    @endforeach
                    @endif
                </div>


                <!-- Blog post-->


                <!-- Pagination-->
                <nav aria-label="Pagination">
                    <hr class="my-0" />
                    <ul class="pagination justify-content-center my-4">

                    </ul>
                </nav>
            </div>
            <!-- Side widgets-->
            <div class="col-lg-4">
                <!-- Search widget-->
                <div class="card mb-4">
                    <div class="card-header">Tìm kiếm</div>
                    <div class="card-body">
                        <form action="{{url('/search')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Tìm kiếm bài viết..."
                                    aria-label="Tìm kiếm bài viết" aria-describedby="button-search"
                                    name="keyword" />
                                <button class="btn btn-primary" id="button-search" type="submit">Go!</button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Categories widget-->
                <div class="card mb-4">
                    <div class="card-header">Danh mục</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <ul class="list-unstyled mb-0">
                                    @if(isset($CatNews) && count($CatNews) > 0)
                                    @foreach($CatNews as $k => $v)
                                    <li> <a href="{{url('/'.$v->Alias)}}">{!!$v->Name!!}</a></li>

                                    @endforeach
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Side widget-->
                <div class="card mb-4">
                    <div class="card-header">Thông tin thêm</div>
                    <div class="card-body">Đây là WebSite tin tức nhóm 9, do Hồ Văn Lợi làm nhóm trưởng</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop