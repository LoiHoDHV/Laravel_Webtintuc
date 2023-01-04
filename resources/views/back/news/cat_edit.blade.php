@extends('back.template.master')

@section('title', 'Quản lý danh mục tin tức')
@section('news','active')
@section('heading','Chỉnh sửa danh mục tin tức')



@section('content')
<div class="col-md-12">
    <div class="card-header ">
        <a href="{{url('admin/news_cat/list')}}" class="btn btn-block btn-warning" title="Quay lại" class=""> 
            Quay lại quản lý danh mục tin tức
        </a>
    </div>
    <div class="card card-primary">
        <!-- form start -->
        <form role="form" action="{{url('admin/news_cat/edit/'.$NewsCategory->RowID)}}" method="POST">
            <div class="card-body">
                {!! csrf_field() !!}

                <div class="form-group">
                    <select class="form-control" name="Status">

                        <option value="1" @if($NewsCategory->Status == 1) selected="" @endif>
                            Trạng thái: Hoạt động

                        </option>
                        <option value="0" @if($NewsCategory->Status == 0) selected="" @endif>
                            Trạng thái: Ngừng hoạt động

                        </option>




                    </select>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Name"  id = "title" onkeyup="ChangeToSlug()" value="{{$NewsCategory->Name}}">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Alias<span class="color_red">*</span></label>
                    <input type="text" class="form-control" name="Alias" id="slug" value="{{$NewsCategory->Alias}}">
                    
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