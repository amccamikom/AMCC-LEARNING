@extends('layouts.app')

@section('contents')
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-8 col-lg-6">
            <div class="card">
                <form action="" method="post">
                <div class="card-header d-flex justify-content-between">
                    <h3 class="h3 text-uppercase text-bold m-0">Feedback</h3>
                </div>
                <div class="card-body">
                    @csrf
                    <div class="form-group">
                        <textarea name="subject" id="subject" class="form-control" cols="30" rows="10" placeholder="Enter your feedback here..."></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm btn-block">Submit</button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
