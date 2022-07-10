<main class="mt-20 flex flex-col bg-white max-w-lg mx-auto my-auto px-10 py-10 rounded-lg shadow-lg">
    <x-jet-dialog-modal wire:model='modalShow'>
        <x-slot name="title">
            {{ __("Confirmar alterações") }}
        </x-slot>
    
        <x-slot name='content'>
            <span>Salvar alterações ?</span>
        </x-slot>
    
        <x-slot name='footer'>
            <button class="h-12 w-1/5 m-1 text-center bg-indigo-500 rounded-lg text-white hover:shadow-lg ease-in-out duration-300" wire:click="edit({{$id_book}})">Salvar</button>
            <a class="h-12 w-1/5 m-1 flex items-center justify-center text-center bg-red-400 rounded-lg text-white hover:shadow-lg ease-in-out duration-300" href="{{route('books.edit',['id'=>$id_book])}}">Descartar</a>
        </x-slot>
    </x-jet-dialog-modal>
    

    <header class="text-2xl my-5">
        Formulário de edição
    </header>

    <x-jet-label class="flex flex-col">
        Nome
        <x-jet-input class="h-12 p-4 rounded-lg mb-5 bg-slate-50 outline-none ease-in-out duration-300" placeholder='Nome do livro' wire:model='name' />
    </x-jet-label>

    <x-jet-label class="flex flex-col">
        Gênero
        <x-jet-input class="h-12 p-4 rounded-lg bg-slate-50 outline-none ease-in-out duration-300" placeholder='Gênero do livro' wire:model='genero' />
    </x-jet-label>
    
    {{-- <x-jet-button wire:click='openModal'>Abrir modal</x-jet-button> --}}
    <button class="h-14 w-1/3 m-1 my-2 text-center bg-indigo-500 rounded-lg text-white hover:shadow-lg ease-in-out duration-300" wire:click='openModal'>Editar</button>
   
</main>
