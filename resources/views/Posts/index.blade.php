@extends('layout')

@section('content')


<h1 class="display-4 font-italic top-buffer-small">Hey there, I'm Nathanel!</h1>

<p>I'm putting this blog together to explore a love for coding and an incipient interest writing. I'm looking forward to sharing some of the ideas i have. Hopefully, we learn somethings together!</p>
<hr>


<div class="row">
    <div class="col-md-6 top-buffer-small">
        <div> 
                <h2>Articles</h2>

                <div>
                    @forelse ($posts as $post)
                        <h6 class="text-primary display-md">{{$post->title}}</h6>
                        <p class="blog-post-meta display-sm mb-1 ">{{$post->created_at}} <span> by Nathanel</span></p> 
                        <p class="">{{$post->slug}}</p>
                    @empty
                        <p>nothing here</p>
                    @endforelse

                </div>


        </div>
    </div>

    <div class="col-md-6 top-buffer-small">
        <div> 
            <h2>Categories</h2>

            <div>
                <h5 class="text-primary"><a href="">&#8212; Coding and Tech</a></h5>
                <p class="blog-post-meta">Everything about coding and technology. This is not a news site though</p>
            </div>

        </div>

        <aside class="blog-sidebar top-buffer-small">

            <div class="p-1 mb-3 bg-light rounded top-buffer-small" >
                <blockquote class="blockquote text-center">
                        <p class="mb-0"> Everything is flux, and was meant to be. Life flows. We may live at the same number of the street, but it is never the same man who lives there.</p>
                    <footer class="blockquote-footer">Henry Ford in <cite title="Source Title">My life and work</cite></footer>
                </blockquote>
            </div>

        </aside>
    </div>

</div>

@endsection
