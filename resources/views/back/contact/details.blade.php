@extends('back.template.master')

@section('title', 'Quản lý email cập nhật')
@section('newsletter','active')
@section('heading','Chi tiết tin nhắn')


@section('content')
<div class="col-md-12">
    <div class="card-header ">
        <a href="{{url('admin/newsletter/list')}}" class="btn btn-block btn-warning" title="Quay lại" class="">
            Quay lại quản lý email cập nhật
        </a>
    </div>
    @if(isset($Contact))
    
    
    <div class="col-md-12">

        <div class="card card-widget">
            <div class="card-header">
                <div class="user-block">
                    
                    <span class="username"><a href="#">{!!$Contact->Email!!}</a></span>
                    <span class ="username">{!!$Contact->Name!!}</span>
                    <span class="description">{!!$Contact->created_at!!}</span>
                </div>

                <div class="card-tools">
                    
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    
                </div>

            </div>

            <div class="card-body">

                <p> {!!$Contact->Message!!}

                


                
            </div>

            

        </div>

    </div>

    @endif
</div>

@stop