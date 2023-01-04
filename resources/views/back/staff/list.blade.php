@extends('back.template.master')

@section('title', 'Quản lý nhân viên')

@section('heading','Danh sách nhân viên')



@section('content')
<div class="col-md-12">
    <div class="card card-primary">
        <div class="card-header ">
        <a href="{{url('admin/staff/add')}}" class="btn btn-block btn-primary" title="Thêm nhân viên" class = ""> Thêm nhân viên</a>
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
                        aria-label="Browser: activate to sort column ascending">Họ và tên</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Browser: activate to sort column ascending">Cấp bậc</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Platform(s): activate to sort column ascending" style="">Email</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="Engine version: activate to sort column ascending" style="">Số điện thoại</th>
                    <th class="sorting text_align_center" tabindex="0" aria-controls="example2" rowspan="1" colspan="1"
                        aria-label="CSS grade: activate to sort column ascending" style=""><i class="fas fa-users-cog"></i></th>
                </tr>
            </thead>
            <tbody>

                @if(isset($User) && count($User) > 0)
                @foreach($User as $k => $v)


                <tr class="odd">
                    <td class="dtr-control sorting_1 text_align_center" tabindex="0">{{$k+1}}</td>
                    <td>{{$v->fullname}}</td>
                    <td style="">{{$v->name}}</td>
                    <td style="">{{$v->email}}</td>
                    <td style="">{{$v->phone}}</td>
                    <td style=""><a href="{{url('admin/staff/edit/'.$v->id)}}" title="Chỉnh sửa" class = "ad_button"> <i class="fas fa-edit"></i>
                        </a>
                        <a href="{{url('admin/staff/delete/'.$v->id)}}" title="Xóa" class = "ad_button ad_button_delete"> <i class="fas fa-trash-alt"></i>
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