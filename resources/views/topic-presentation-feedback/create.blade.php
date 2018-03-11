@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('topics.presentations.feedback.store', [$topic, $presentation]) }}" enctype="multipart/form-data">
                    @csrf

                    <h1>Add a presentation</h1>
                    
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="form-group">
                        <label for="link">Link</label>
                        <input type="text" class="form-control" id="link" name="link" aria-describedby="link-help" placeholder="Enter a link" value="{{ old('link') }}">
                        <small id="link-help" class="form-text text-muted">A link to the feedback, from somewhere like Joind.in or Twitter</small>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection