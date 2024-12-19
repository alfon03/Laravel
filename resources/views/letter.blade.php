<x-layout meta-title="Regalos">
    <x-slot:sidebar>
        <div class="text-center mb-5">
            <h1 class="text-danger mb-4">Cartas de Navidad</h1>
        </div>

        <div class="container mt-5  mb-5">
            <div class="card shadow-lg border-danger mb-5">
                <div class="card-body">
                    <h3 class="card-title text-center mb-4">Lista de Cartas de Navidad</h3>
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered mb-5">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Título</th>
                                    <th scope="col">Regalo</th>
                                    <th scope="col">Carta</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <th scope="row" class="text-muted">{{ $loop->iteration }}</th>
                                        <td>{{ $post['nombre'] }}</td>
                                        <td>{{ $post['regalo'] }}</td>
                                        <td>{{ $post['carta'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <img src="https://as01.epimg.net/epik/imagenes/2019/10/14/portada/1571045349_997999_1571045529_noticia_normal.jpg" alt="Baltasar" class="img-fluid rounded shadow-lg mb-4" style="border: 5px solid #b71c1c;">

        </div>
    </x-slot:sidebar>
</x-layout>
