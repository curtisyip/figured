@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Add a post</h1>
            <form id="add_post_form" method="post" action="{{url('post')}}">
              {!! csrf_field() !!}
              <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title">
              </div>
              <div class="form-group">
                <label for="copy">Copy</label>
                <textarea class="form-control" id="copy" rows="3"></textarea>
              </div>
              <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image">
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection
