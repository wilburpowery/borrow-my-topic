@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form method="post" action="{{ route('topics.update', [$topic]) }}" enctype="multipart/form-data">
                    @method("PATCH")
                    @csrf
                    
                    <h1>Update a topic</h1>

                    @if ($topic->hidden_at)
                        <div class="alert alert-danger">
                            This topic has been hidden. Please contact an administrator for assistance.
                        </div>
                    @endif
                    
                    @include('includes.errors')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input dusk="name" type="text" class="form-control" id="name" name="name" aria-describedby="name-help" placeholder="Enter a name" value="{{ old('name', $topic->name) }}">
                        <small id="name-help" class="form-text text-muted">A name to help you recognise the topic in a list</small>
                    </div>
                    <div class="form-group">
                        <label for="abstract">Abstract</label>
                        <textarea class="form-control" id="abstract" name="abstract" aria-describedby="abstract-help" placeholder="Enter an abstract">{{ old('abstract', $topic->abstract) }}</textarea>
                        <small id="abstract-help" class="form-text text-muted">A short description of the topic, like the kind of thing that would appear on a conference website</small>
                    </div>
                    <div class="form-group">
                        <label for="abstract">Additional</label>
                        <textarea class="form-control" id="additional" name="additional" aria-describedby="additional-help" placeholder="Enter additional information">{{ old('additional', $topic->additional) }}</textarea>
                        <small id="additional-help" class="form-text text-muted">Details to motivate the selection of this topic, such as your qualifications</small>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="includes-mentoring" name="includes-mentoring" value="1"
                                @if (old('includes-mentoring', $topic->includes_mentoring))
                                    checked="checked"
                                @endif
                            >
                            <label class="form-check-label" for="includes-mentoring">Are you willing to mentor another presenter on this topic?</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="willing-to-present" name="willing-to-present" value="1"
                                @if (old('willing-to-present', $topic->willing_to_present))
                                    checked="checked"
                                @endif
                            >
                            <label class="form-check-label" for="willing-to-present">Are you willing to present this topic again?</label>
                        </div>
                    </div>
                    <p>
                        <strong>When you click save</strong>, you're also saying that this topic is <strong>your original work</strong> or that you have the permission of the person, whose original work it is, to do so.
                        If this submission is found to be someone else's work, we will hide it until you can prove that it is your original work.
                        For more information, please refer to the <strong>terms of use</strong>.
                    </p>
                    <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection
