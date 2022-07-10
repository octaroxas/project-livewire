<x-slot>
    <header>
        Listagem de livros
    </header>
</x-slot>

<main class="sm:w-full lg:w-4/5 2xl:w-1/2  mx-auto">

    
    <x-jet-dialog-modal wire:model='openModalDelete' id="deleteBookModal">
        <x-slot name="title">
            {{ __("Confirmar Exclusão") }}
        </x-slot>
    
        <x-slot name='content'>
            <span>Deseja realmente excluir esse item ?</span>
        </x-slot>
    
        <x-slot name='footer'>
            <button class="h-12 w-1/5 m-1 text-center bg-indigo-500 rounded-lg text-white hover:shadow-lg ease-in-out duration-300" wire:click='destroy'>Deletar</button>
            <a class="h-12 w-1/5 m-1 flex items-center justify-center text-center bg-red-400 rounded-lg text-white hover:shadow-lg ease-in-out duration-300" href="{{route('books.index')}}">Descartar</a>
        </x-slot>
    </x-jet-dialog-modal>

    <x-jet-nav-link href="{{route('books.form')}}">Cadastrar</x-jet-nav-link>
    <table class="table w-full shadow-lg rounded-lg">
        <thead class="bg-gray-200">
            <tr class="p-9">
                <th scope="col" class="col-span-2 text-left p-6" >ID</th>
                <th scope="col" class="col-span-2 text-left">Nome</th>
                <th scope="col" class="col-span-2 text-left">Genero</th>
                <th scope="col" class="col-span-2 text-left">Opções</th>
            </tr>
        </thead>
        <tbody class="">
            @forelse ( $books as $book )

            <tr class="">
                

                <td class="col-span-2 p-6 text-left">{{$book->id}}</td>
                <td class="col-span-2 text-left">{{$book->name}}</td>
                <td class="col-span-2 text-left">{{$book->genero}}</td>
                <td>
                    <x-jet-nav-link href="{{route('books.edit',['id'=>$book->id])}}">
                        Editar
                    </x-jet-nav-link>
                    <x-jet-button wire:click="openModalDelete({{$book->id}})">
                        Excluir
                    </x-jet-button>
                    <a href="{{route('books.show',['id'=>$book->id])}}">
                        Visualizar
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td class="col-span-2">Sem nada</td>
                <td class="col-span-2">Sem nada</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</main>

