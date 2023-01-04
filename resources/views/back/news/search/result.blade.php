@extends('back.template.master')

@section('title', 'Quản lý tin tức')
@section('news_list','active')
@section('heading','Danh sách tin tức')



@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        @if(@isset($message))
        <h1> {{$message}} </h1>
        @endif
        <!-- <div class="card-header ">
            <a href="{{url('admin/news/add')}}" class="btn btn-block btn-primary" title="Thêm nhân viên" class=""> Thêm
                tin tức</a>
        </div> -->
        <div class="card-header ">
            <a href="{{url('admin/news/list')}}" class="btn btn-block btn-warning" title="Quay lại" class="">
                Quay lại quản lý tin tức
            </a>
        </div>

        <!-- form start -->
        <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid"
            aria-describedby="example2_info">
            <thead>
                <tr role="row ">
                    <th class="sorting sorting_asc text_align_center" tabindex="0" aria-controls="example2" rowspan="1"
                        colspan="1" aria-sort="ascending"
                        aria-label="Rendering engine: activate to sort column descending">
                        STT</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">Tên tin tức</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">Thuộc danh mục</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">Trạng thái</th>


                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style=""><i
                            class="fas fa-users-cog"></i></th>
                </tr>
            </thead>
            <tbody>

                @if(isset($News) && count($News) > 0)
                @foreach($News as $k => $v)


                <tr class="odd">
                    <td class="dtr-control sorting_1 text_align_center" tabindex="0">{{$k+1}}</td>
                    <td class="dtr-control sorting_1">{{$v->Name}}</td>
                    <td class="dtr-control sorting_1">{{$v->CategoryName}}</td>
                    <td class="dtr-control sorting_1 text_align_center ">
                        @if($v->Status == 1 )
                        Bật
                        @else
                        Tắt

                        @endif
                    </td>

                    <td class="dtr-control sorting_1 text_align_center ">
                        <a href="{{url('admin/news/edit/'.$v->RowID)}}" title="Chỉnh sửa" class="ad_button"> <i
                                class="fas fa-edit"></i>
                        </a>
                        <a href="{{url('admin/news/delete/'.$v->RowID)}}" title="Xóa"
                            class="ad_button ad_button_delete"> <i class="fas fa-trash-alt"></i>
                        </a>

                    </td>
                </tr>
                @endforeach
                @endif
            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>

@stop