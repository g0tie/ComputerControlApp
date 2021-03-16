<x-app-layout>
    <x-slot name="header">
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                  Vous êtes connecté
                </div>
                
                

                @if(isset($error))
                <div class="bg-red-200 text-center">
                   {{ $error }}
                </div>
                @else

                    @php
                        $message="Bienvenue " . $user->firstname . ' '. $user->lastname . " ! . Le Poste informatique " . $computer->name . " vous a été attribué jusqu'au " . $attribution->expiration_date
                    @endphp

                    <div class="bg-green-200 text-center py-6">
                        {{ $message }}
                    </div>

                @endif
            </div>
        </div>
    </div>
</x-app-layout>
