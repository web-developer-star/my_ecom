@extends('admin.layout')
@section('page_title','color')
@section('container')
@section('color_select','active')
{{session('message')}}
    <h1>Color</h1>
    <a href="{{url('admin/color/manage_color')}}">
    <button type="button" class="btn btn-success">Add color</button>
    </a>
    <div class="row m-t-30">
        <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Color</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->color}}</td>
                            <td>
                                <a href="{{url('/admin/color/manage_color/')}}/{{$list->id}}">
                                     <button type="button" class="btn btn-success">Edit</button></a>

                                @if($list->status==1)
                                <a href="{{url('/admin/color/status/0')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-primary">Active</button></a>
                                @elseif($list->status==0)
                                <a href="{{url('/admin/color/status/1')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-warning">Deactive</button></a>

                                @endif
                                <a href="{{url('/admin/color/delete/')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-danger">Delete</button></a>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>

    </div>

@endsection
