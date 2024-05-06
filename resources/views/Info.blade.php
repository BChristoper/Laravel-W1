@extends("template.main")
@section('title', 'Message')
@section('body')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8 text-center">
            <div class="jumbotron">
                <h1 class="display-4">Thank You!</h1>
                <p class="lead">{{ $message }}</p>
                <hr class="my-4">
                <p class="lead">
                    <a class="btn btn-primary btn-lg" href="{{ $contactListRoute }}" role="button">View Contact List</a>
                    <a class="btn btn-secondary btn-lg" href="{{ $formRoute }}" role="button">Return to Form</a>
                </p>
            </div>
        </div>
    </div>
</div>
@endsection
