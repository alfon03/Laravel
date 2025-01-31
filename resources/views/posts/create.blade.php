<x-layout meta-title='Create new post' meta-description='Form to create a new post'>
<div class="container">

    <h1>Create new post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf
        @include('posts.form-fields')
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
</x-layout>
