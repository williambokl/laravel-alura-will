<x-layout title="Nova série">
    
    <form action="/series/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="nome">Nome: </label>
            <input type="text" id="nome" name="nome" class="form-control">
        <div>

        <button type="submit" class="btn btn-primary mt-2">Adicionar</button>

    </form>
</x-layout>