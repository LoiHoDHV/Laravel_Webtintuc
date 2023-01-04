@extends('back.template.master')

@section('title', 'Tìm kiếm tin tức')
@section('more_search','active')
@section('heading','Tìm kiếm tin tức')

@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="row">

            <!-- <div class=" card-header col-md-6">






            </div> -->



            <div class="card-body">
                <form action="{{url('/admin/news/moresearch')}}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-4">
                        <label for="nameBaiViet">Tên bài viết</label>
                            @if(isset($name)) 
                            <input type="text" class="form-control" placeholder="Tên bài viết.." id="nameBaiViet"
                                name="nameBaiViet" value = "{{$name}}">
                            @else
                            <input type="text" class="form-control" placeholder="Tên bài viết.." id="nameBaiViet"
                                name="nameBaiViet">
                            @endif
                            
                            
                        </div>
                        <div class="col-4">
                            @if(isset($fDate))
                            <label for="fromDate">Từ ngày</label>
                            <input type="date" class="form-control" placeholder=".col-4" id="fromDate" name="fDate"
                                value="{{$fDate}}">
                            @else
                            <label for="fromDate">Từ ngày</label>
                            <input type="date" class="form-control" placeholder=".col-4" id="fromDate" name="fDate">
                            @endif

                        </div>
                        <div class="col-4">
                            <label for="toDate">Đến ngày</label>
                            @if(isset($tDate))
                            <input type="date" class="form-control" placeholder=".col-5" id="toDate" name="tDate"
                                value="{{$tDate}}">
                            @else
                            <input type="date" class="form-control" placeholder=".col-5" id="toDate" name="tDate"
                                value="">
                            @endif
                            
                        </div>

                    </div>
                    <div class="row">
                        <br>

                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Tìm Kiếm</button>
                        </div>
                    </div>

                </form>
            </div>




        </div>

        @if(isset($foundValue))
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

        @endif



    </div>
</div>
@stop