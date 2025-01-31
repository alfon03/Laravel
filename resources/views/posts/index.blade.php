@component('components.layout')
    <h1>Blog</h1>

    <a class="btn btn-primary m-3" href="{{ route('posts.create') }}">Crear nueva entrada</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Título</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>
                        <a href="{{ route('posts.show', $post) }}">
                            {{ $post['title'] }}
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endcomponent
