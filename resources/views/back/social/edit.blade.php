@extends('back.template.master')

@section('title', 'Quản lý mạng xã hội')
@section('social','active')
@section('heading','Chỉnh sửa thông tin mạng xã hội')



@section('content')
<div class="col-md-12">
    <div class="card-header ">
        <a href="{{url('admin/social/list')}}" class="btn btn-block btn-warning" title="Quay lại" class=""> 
            Quay lại quản lý mạng xã hội
        </a>
    </div>
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" action="{{url('admin/social/edit/'.$Social->RowID)}}" method="POST">
            <div class="card-body">
                {!! csrf_field() !!}

                <div class="form-group">
                    <select class="form-control" name="Status">

                        <option value="1" @if($Social->Status == 1) selected="" @endif>
                            Trạng thái: Hoạt động

                        </option>
                        <option value="0" @if($Social->Status == 0) selected="" @endif>
                            Trạng thái: Ngừng hoạt động

                        </option>




                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tên mạng xã hội<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Name" value="{{$Social->Name}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Font<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Font" value="{{$Social->Font}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sắp xếp<span class="color_red">*</span></label>
                    <input type="number" class="form-control" name="Sort" value="{{$Social->Sort}}">
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