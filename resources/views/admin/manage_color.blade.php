@extends('admin.layout')
@section('page_title','Manage color')
@section('container')
@section('color_select','active')
    <h1>Manage color</h1>
    <a href="{{url('/admin/color')}}">
    <button type="button" class="btn btn-success">Back</button>
    </a>
    <div class="row m-t-30">
        <div class="col-lg-12">
            <div class="row">

                <div class="col-lg-12">
                    <div class="card">
                            <form action="{{route('color.manage_color_process')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="color" class="control-label mb-1">Color</label>
                                    <input id="color" value="{{$color}}" name="color" type="text" class="form-control" aria-required="true" aria-invalid="false" required>
                                    @error('color')
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
