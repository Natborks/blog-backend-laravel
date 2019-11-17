@extends('layout')

@section('content')
<div class="row">
    <div class="col-md-12">
        <form id="new-post-form">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" value=title placeholder="Add Awesome post title here..."/>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" value=slug   placeholder="Add post slug here (small description of post or tagline).">
            </div>
            <div class="form-group">
                <!-- <textarea class="description" name="description"></textarea>
                <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
                <script>
                    tinymce.init({
                        selector:'textarea.description',
                        width: 900,
                        height: 300
                    });
                </script> -->
                <textarea type="text" class="form-control" name="content" id="content" rows="10" cols="30"  placeholder="Add post here."></textarea>

            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="col-md-6">
        
    </div>

</div>

@endsection