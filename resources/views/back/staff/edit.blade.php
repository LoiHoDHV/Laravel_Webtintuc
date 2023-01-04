@extends('back.template.master')

@section('title', 'Quản lý nhân viên')

@section('heading','Chỉnh sửa nhân viên')



@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" action="{{url('admin/staff/edit/'.$User->id)}}" method="POST">
            <div class="card-body">
                {!! csrf_field() !!}

                <div class="form-group">
                    <select class="form-control" name = "level">
                        @if(isset($UserLevel) && count($UserLevel) > 0){
                            @foreach($UserLevel as $k => $v){
                                <option value="{{$v->id}}" @if($v->id == $User->level) selected="" @endif> Cấp bậc: {{$v->name}}</option>
                            
                            }
                            @endforeach
                        }@endif
                        
                        
                    </select>
                </div>
                <div class="form-group">
                <select class="form-control" name = "status">
                        <option value = "1" @if($User->status == 1) selected="" @endif> Hoạt động</option>
                        <option value = "0" @if($User->status == 0) selected="" @endif> Ngừng hoạt động</option>
                        
                        
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Họ và tên <span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="fullname" value ="{{$User->fullname}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="email" value = "{{$User->email}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Số điện thoại<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="phone" value = "{{$User->phone}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Địa chỉ<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="address" value = "{{$User->address}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tài khoản<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="username" value = "{{$User->username}}" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu<span class="color_red">*</span></label>
                    <input type="password" class="form-control" name="password" value = "">
                    <p class = "ad_note_password"> Nếu không thay đổi thì thôi, để trống ⛄ ⛄ ⛄ </p>

                </div>


            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
            </div>
        </form>
    </div>
</div>

@stop