@extends('back.template.master')

@section('title', 'Quản lý nhân viên')

@section('heading','Thêm nhân viên')



@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" action="{{url('admin/staff/add')}}" method="POST">
            <div class="card-body">
                {!! csrf_field() !!}

                <div class="form-group">
                    <select class="form-control" name = "level">
                        @if(isset($UserLevel) && count($UserLevel) > 0){
                            @foreach($UserLevel as $k => $v){
                                <option value="{{$v->id}}"> Cấp bậc: {{$v->name}}</option>
                            
                            }
                            @endforeach
                        }@endif
                        
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Họ và tên <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="fullname">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số điện thoại<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="address">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tài khoản<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu<span class="color_red">*</span></label>
                    <input type="password" class="form-control" name="password">

                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Thêm nhân viên</button>
            </div>
        </form>
    </div>
</div>

@stop