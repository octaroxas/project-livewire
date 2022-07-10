<x-slot>
    <header>
        Cadastrar Livros
    </header>
</x-slot>

<main class="mt-20 flex flex-col max-w-lg mx-auto my-auto px-4 py-10 rounded-lg shadow-lg">
        
    <header class="text-2xl my-5">
        Formulário de cadastro
    </header>

    <x-jet-label class="flex flex-col">
        Nome
        <x-jet-input class="h-12 p-4 rounded-md" placeholder='Nome do livro' wire:model='name' />
    </x-jet-label>

    <x-jet-label class="flex flex-col">
        Gênero
        <x-jet-input class="h-12 p-4 rounded-md" placeholder='Gênero do livro' wire:model='genero' />
    </x-jet-label>
    
    <button class="h-14 my-2 text-center" wire:click="store">Cadastrar</button>

    {{-- <x-jet-button class="h-14 my-2 text-center" wire:click="save">Cadastrar</x-jet-button> --}}
</main>