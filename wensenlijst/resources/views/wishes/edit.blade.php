<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Wish bewerken</h1>
        <form action="{{ route('wishes.update', $wish) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block">Titel:</label>
                <input type="text" name="title" value="{{ $wish->title }}" class="border rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block">Beschrijving:</label>
                <textarea name="description" class="border rounded w-full p-2" required>{{ $wish->description }}</textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block">Prijs:</label>
                <input type="number" name="price" value="{{ $wish->price }}" class="border rounded w-full p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
        </form>
    </div>
</x-app-layout>
