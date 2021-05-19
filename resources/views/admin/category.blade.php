@extends('admin.layout')
@section('page_title','Category')
@section('container')
@section('cataegory_select','active')
{{session('message')}}
    <h1>Category</h1>
    <a href="{{url('admin/category/manage_category')}}">
    <button type="button" class="btn btn-success">Add Category</button>
    </a>
    <div class="row m-t-30">
        <div class="col-lg-12">
            <div class="table-responsive table--no-card m-b-30">
                <table class="table table-borderless table-striped table-earning">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category Name</th>
                            <th>Category Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $list)
                        <tr>
                            <td>{{$list->id}}</td>
                            <td>{{$list->category_name}}</td>
                            <td>{{$list->category_slug}}</td>
                            <td>
                                <a href="{{url('/admin/category/manage_category/')}}/{{$list->id}}">
                                     <button type="button" class="btn btn-success">Edit</button></a>

                                @if($list->status==1)
                                <a href="{{url('/admin/category/status/0')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-primary">Active</button></a>
                                @elseif($list->status==0)
                                <a href="{{url('/admin/category/status/1')}}/{{$list->id}}">
                                    <button type="button" class="btn btn-warning">Deactive</button></a>

                                @endif
                                <a href="{{url('/admin/category/delete/')}}/{{$list->id}}">
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
