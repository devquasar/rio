<div class="blog-post">
    <h2 class="blog-post-title">{{ $oneNews->title }}</h2>
    <p class="blog-post-meta">{{ date('M d Y', strtotime($oneNews->created_at)) }} by {{ $oneNews->author }}</p>
    <p>{{ $oneNews->text }}</p>
    <hr>
</div>
