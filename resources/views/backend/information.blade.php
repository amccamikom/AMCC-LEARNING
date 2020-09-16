@extends('layouts.app')

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <form action="{{ route('admin.information.update', $information['id']) }}" method="post">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="h3 text-uppercase text-bold m-0">Information</h3>
                </div>
                <div class="card-body">
                    @csrf
                    @method("PUT")
                    <div class="form-group">
                        <textarea name="paragraph" id="paragraph" class="form-control" cols="30" rows="10">{{ $information['paragraph'] }}</textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
