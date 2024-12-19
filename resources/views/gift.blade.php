


<x-layout  meta-title="Carta Reyes Magos">

    <x-slot:sidebar>

    <div class="container mt-5">
        <h1 class="text-center mb-4">Carta para los Reyes Magos</h1>

        <form action="/submit-form" method="POST">

            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="name" name="name" required placeholder="Escribe tu nombre">
            </div>

            <div class="mb-3">
                <label for="gift" class="form-label">Regalo</label>
                <input type="text" class="form-control" id="gift" name="gift" required placeholder="¿Qué regalo deseas?">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Tu Carta para los Reyes Magos</label>
                <textarea class="form-control" id="message" name="message" rows="4" placeholder="Escribe tu mensaje aquí..." required></textarea>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Enviar Carta</button>
            </div>
        </form>
    </div>

    </x-slot:sidebar>

  

</x-layout>

  
