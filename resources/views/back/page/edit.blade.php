@extends('back.template.master')

@section('title', 'Quản lý trang')
@section('page','active')
@section('heading','Chỉnh sửa trang')



@section('content')
<div class="col-md-12">
    <div class="card-header ">
        <a href="{{url('admin/page/list')}}" class="btn btn-block btn-warning" title="Quay lại" class="">
            Quay lại quản lý trang
        </a>
    </div>
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" action="{{url('admin/page/edit/'.$Page->RowID)}}" method="POST">
            <div class="card-body">
                {!! csrf_field() !!}

                <div class="form-group">
                    <select class="form-control" name="Status">

                        <option value="1" @if($Page->Status == 1) selected="" @endif>
                            Trạng thái: Hoạt động

                        </option>
                        <option value="0" @if($Page->Status == 0) selected="" @endif>
                            Trạng thái: Ngừng hoạt động

                        </option>




                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tên trang<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Name" value="{{$Page->Name}}" id="title"
                        onkeyup="ChangeToSlug()">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Đường dẫn</label>
                    <input type="text" class="form-control" name="Alias" id="slug" value="{{$Page->Alias}}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Font</label>
                    <input type="text" class="form-control" name="Font" value="{{$Page->Font}}  ">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Sắp xếp<span class="color_red">*</span></label>
                    <input type="number" class="form-control" name="Sort" value="{{$Page->Sort}}">
                </div>


                <div class="form-group">
                    <label for="exampleInputEmail1">Mô tả trang<span class="color_red">*</span></label>
                    <textarea type="text" class="form-control" name="Description" rows="10"
                        id="ckeditor">{{$Page->Description}}</textarea> </textarea>

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