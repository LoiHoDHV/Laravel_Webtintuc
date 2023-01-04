@extends('back.template.master')

@section('title', 'Quản lý email cập nhật')
@section('newsletter','active')
@section('heading','Danh sách email cập nhật')



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
                        aria-label="Browser: activate to sort column ascending">Người gởi</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">Viewed</th>


                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style=""><i
                            class="fas fa-users-cog"></i></th>
                </tr>
            </thead>
            <tbody>

                @if(isset($NewsLetter) && count($NewsLetter) > 0)
                @foreach($NewsLetter as $k => $v)


                <tr class="odd">
                    <td class="dtr-control sorting_1 text_align_center" tabindex="0">{{$k+1}}</td>
                    <td class="dtr-control sorting_1">{{$v->Email}}</td>
                    <td class="dtr-control sorting_1 text_align_center ">
                        @if($v->IsViews == 1 )
                        <span class="text-sucess"> Đã xem </span>
                        @else

                        <a href = "{{ url('admin/newsletter/details/'.$v->RowID)}}">
                        <span class="text-danger"> Chưa xem </span> </a>

                        @endif
                    </td>
                    
                    <td class="dtr-control sorting_1 text_align_center ">
                        <a href="{{url('admin/newsletter/edit/'.$v->RowID)}}" title="Chỉnh sửa" class="ad_button"> <i
                                class="fas fa-edit"></i>
                        </a>
                        <a href="{{url('admin/newsletter/delete/'.$v->RowID)}}" title="Xóa"
                            class="ad_button ad_button_delete"> <i class="fas fa-trash-alt"></i>

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