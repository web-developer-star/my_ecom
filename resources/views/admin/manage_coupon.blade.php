@extends('admin.layout')
@section('page_title','Manage Coupon')
@section('container')
@section('coupon_select','active')
    <h1>Manage Coupon</h1>
    <a href="{{url('/admin/coupon')}}">
    <button type="button" class="btn btn-success">Back</button>
    </a>
    <div class="row m-t-30">
        <div class="col-lg-12">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                            <form action="{{route('coupon.manage_coupon_process')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="title" class="control-label mb-1">Title</label>
                                    <input id="title" value="{{$title}}" name="title" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    @error('title')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="code" class="control-label mb-1">Code</label>
                                    <input id="code" value="{{$code}}" name="code" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    @error('code')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                 <div class="form-group">
                                    <label for="value" class="control-label mb-1">value</label>
                                    <input id="value" value="{{$value}}" name="value" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    @error('value')
                                    <div class="alert alert-danger" role="alert">
                                        {{$message}}
                                    </div>
                                    @enderror
                                </div>

                                <div>
                                    <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                        Submit
                                    </button>
                                </div>
                                <input type="hidden" name="id" value="{{$id}}"/>
                            </form>
                        </div>
                    </div>
                </div>

            </div>


        </div>

    </div>

@endsection
