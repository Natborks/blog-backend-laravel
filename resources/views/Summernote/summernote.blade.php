<div class="row">
    <div class="col-md-12">
        <form action="{{route('blog') }}" method="POST">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" value=title placeholder="Add Awesome post title here..."/>
            </div>
            <div class="form-group">
                <label for="slug">Slug</label>
                <input type="text" class="form-control" value=slug   placeholder="Add post slug here (small description of post or tagline).">
            </div>
            <div class="form-group">
                
            </div>
    </div>

    <div class="col-md-6">
    
                {{ csrf_field() }}
                <textarea name="summernoteInput" class="summernote"></textarea>
                <br>
                <button type="submit">Submit</button>
            </form>

            <!-- include libraries(jQuery, bootstrap) -->
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script> 
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
        
        <!-- include summernote css/js-->
        <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>    
        
        <script>
                $(document).ready(function() {
                    $('.summernote').summernote();
                });
        </script>
    </div>

</div>