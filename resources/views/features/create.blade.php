<form action="{{ route('features.store') }}" method="POST">
    @csrf
    <label for="description">Descrição:</label>
    <input type="text" name="description" id="description">

    <label for="longitude">Longitude:</label>
    <input type="text" name="longitude" id="longitude">

    <label for="latitude">Latitude:</label>
    <input type="text" name="latitude" id="latitude">

    <button type="submit">Adicionar Marcação</button>
</form>