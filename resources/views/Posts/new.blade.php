@extends('layout')

@section('content')
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.css" rel="stylesheet">

<form action="{{route('posts.store') }}" method="POST">
@csrf
<div class="row">
    <div class="col-md-12">
        <form id="new-post-form">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" placeholder="Add Awesome post title here..."/>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" name="slug"  placeholder="Add post slug here (small description of post or tagline).">
            </div>
            <div class="form-group">
                <textarea type="text" class="summernote" name="content" id="content" rows="10" cols="30"  placeholder="Add post here."></textarea>

            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="col-md-6">
        
    </div>

</div>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.4/summernote.js"></script>
<script type="text/javascript">
      $(document).ready(function() {
           $('.summernote').summernote({
            height: 200,
            dialogsInBody: true,
            callbacks:{
                onInit:function(){
                $('body > .note-popover').hide();
                }
             },
         });
      });
</script>

@endsection