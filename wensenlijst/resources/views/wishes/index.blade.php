<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Mijn Wensenlijst</h1>
        <a href="{{ route('wishes.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Nieuwe Wish</a>
        <div class="mt-6">
            @foreach ($wishes as $wish)
                <div class="border p-4 rounded mb-4">
                    <h2 class="text-xl font-semibold">{{ $wish->title }}</h2>
                    <p>{{ $wish->description }}</p>
                    <p>Prijs: €{{ $wish->price }}</p>
                    @if ($wish->user_id === auth()->id())
                        <a href="{{ route('wishes.edit', $wish) }}" class="text-yellow-500">Bewerk</a>
                        <form action="{{ route('wishes.destroy', $wish) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Verwijder</button>
                        </form>
                    @endif
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
