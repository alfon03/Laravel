<x-layout>
    <div class="container mt-4">
        <h1 class="text-center">{{$post->title}}</h1>
        <p class="lead mt-3">{{$post->body}}</p>
        <div class="text-center mt-4">
            <a href="/blog" class="btn btn-primary">Back</a>
        </div>
    </div>
</x-layout>
