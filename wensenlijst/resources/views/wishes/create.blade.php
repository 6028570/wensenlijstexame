<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Nieuwe Wish</h1>
        <form action="{{ route('wishes.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block">Titel:</label>
                <input type="text" name="title" class="border rounded w-full p-2" required>
            </div>
            <div class="mb-4">
                <label for="description" class="block">Beschrijving:</label>
                <textarea name="description" class="border rounded w-full p-2" required></textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block">Prijs:</label>
                <input type="number" name="price" class="border rounded w-full p-2" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Opslaan</button>
        </form>
    </div>
</x-app-layout>
