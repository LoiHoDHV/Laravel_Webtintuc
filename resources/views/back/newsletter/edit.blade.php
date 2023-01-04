@extends('back.template.master')

@section('title', 'Quản lý email cập nhật')
@section('newsletter','active')
@section('heading','Chỉnh sửa email cập nhật')



@section('content')
<div class="col-md-12">
    <div class="card-header ">
        <a href="{{url('admin/newsletter/list')}}" class="btn btn-block btn-warning" title="Quay lại" class="">
            Quay lại quản lý email cập nhật
        </a>
    </div>
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" action="{{url('admin/newsletter/edit/'.$NewsLetter->RowID)}}" method="POST">
            <div class="card-body">
                {!! csrf_field() !!}
                
                <div class="form-group">
                    <select class="form-control" name="IsViews">

                        <option value="1" @if($NewsLetter->IsViews == 1) selected="" @endif>
                            Trạng thái: Đã xem

                        </option>
                        <option value="0" @if($NewsLetter->IsViews == 0) selected="" @endif>
                            Trạng thái: Chưa xem

                        </option>




                    </select>
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Email<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Email" value="{{$NewsLetter->Email}}">
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