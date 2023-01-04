@extends('back.template.master')

@section('title', 'Chào mừng bạn đến với trang quản trị WebSite abc xyz')

@section('heading','Nhóm 9 2k2 _ Admin Page ')



@section('content')

<div class="col-md-12">
    <div class="card card-primary">
        <div class="row">
            <div class="col-lg-6 col-6">

                <div class="small-box bg-info">
                    <div class="inner">
                        @if(isset($views))
                        <h3>{!!$views!!}</h3>
                        @endif
                        <p>Số lượng xem bài</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-6">

                <div class="small-box bg-success">
                    <div class="inner">
                        @if(isset($counts))
                        <h3>{!!$counts!!}</h3>
                        @endif
                        <p>Bài đăng</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-stats-bars"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-6">

                <div class="small-box bg-warning">
                    <div class="inner">
                        @if(isset($staffCount))
                        <h3>{!!$staffCount!!}</h3>
                        @endif
                        <p>Nhân Viên Đang Hoạt Động</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-6">

                <div class="small-box bg-danger">
                    <div class="inner">
                        @if(isset($numContacts))
                        <h3>{!!$numContacts!!}</h3>
                        @endif
                        <p>Tin nhắn</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-chart-pie"></i>
                    </div>
                    <a href="#" class="small-box-footer">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

@stop