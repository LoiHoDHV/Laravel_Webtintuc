@extends('front.template.master')

@section('title', $newsCat->Name)





@section('content')


<!-- Contact Us Section -->
<div class="home_page">
    <!-- Page content-->
    <div class="container mt-5">
        <div class="row">
            <!-- Blog entries-->
            

                <!-- Nested row for non-featured blog posts-->

                <!-- Blog post-->
                <div class="row">
                @if(isset($listNews) && count($listNews)>0)
                @foreach($listNews as $k=>$v)
                
                    <div class="col-lg-4">

                        <div class="card mb-4">
                            <a href="#!"><img class="card-img-top" src="{!!$v->Images!!}" alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">{!!$v->created_at!!}</div>
                                <h2 class="card-title h4">{!!$v->Name!!} - <i class="fas fa-eye"></i> {!!$v->Views!!}</h2>
                                <p class="card-text">
                                    {{ \Illuminate\Support\Str::limit($v->SmallDescription, 150, $end='...') }}</p>
                                <a class="btn btn-primary" href="{{url('/'.$v->Alias.'.html')}}">Đọc tiếp →</a>
                            </div>
                        </div>
                    </div>

                
                @endforeach
                @endif
                </div>
                {{ $listNews->links()}}


                <!-- Blog post-->


                
            
                
                
            </div>
        </div>
    </div>
</div>
</div>
@stop