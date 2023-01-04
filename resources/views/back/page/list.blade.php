@extends('back.template.master')

@section('title', 'Quản lý trang')
@section('page','active')
@section('heading','Danh sách trang')



@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        
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
                        aria-label="Browser: activate to sort column ascending">Tên trang</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">Trạng thái</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending" style="">Sắp xếp</th>

                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style=""><i
                            class="fas fa-users-cog"></i></th>
                </tr>
            </thead>
            <tbody>

                @if(isset($Page) && count($Page) > 0)
                @foreach($Page as $k => $v)


                <tr class="odd">
                    <td class="dtr-control sorting_1 text_align_center" tabindex="0">{{$k+1}}</td>
                    <td class="dtr-control sorting_1">{{$v->Name}}</td>
                    <td class="dtr-control sorting_1 text_align_center ">
                        @if($v->Status == 1 )
                        Bật
                        @else
                        Tắt
                        
                        @endif
                    </td>
                    <td class="dtr-control sorting_1 text_align_center ">{{$v->Sort}}</td>
                    <td class="dtr-control sorting_1 text_align_center ">
                        <a href="{{url('admin/page/edit/'.$v->RowID)}}" title="Chỉnh sửa" class="ad_button"> <i
                                class="fas fa-edit"></i>
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