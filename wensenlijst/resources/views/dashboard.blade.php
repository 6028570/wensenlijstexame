<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-4">Alle Wensen</h1>
        <div class="mt-6">
            @foreach ($wishes as $wish)
                <div class="border p-4 rounded mb-4">
                    <h2 class="text-xl font-semibold">{{ $wish->title }}</h2>
                    <p>{{ $wish->description }}</p>
                    <p>Prijs: €{{ $wish->price }}</p>
                    
                    <p>Gepubliceerd door: 
                        {{ $wish->user ? $wish->user->name : 'Onbekende gebruiker' }}
                    </p>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>
