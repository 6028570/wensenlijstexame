<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">{{ $wish->title }}</h1>
        <p>{{ $wish->description }}</p>
        <p>Prijs: €{{ $wish->price }}</p>
        <a href="{{ route('wishes.index') }}" class="text-blue-500">Terug naar overzicht</a>
    </div>
</x-app-layout>
