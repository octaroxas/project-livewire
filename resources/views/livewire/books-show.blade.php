<div class="flex w-full mt-10">
    <div class="w-1/2 mx-auto rounded-lg shadow-lg bg-white px-10 py-5">
       
        <div class="flex flex-row-reverse">
            <x-jet-button class="h-12"  wire:click='backToListage' >
                Voltar a alistagem
            </x-jet-button>
        </div>
        
        <section>
            <header class="text-2xl pb-3 font-bold text-slate-500 border-b">
                Informações gerais
            </header>
            <article class="mt-5 grid grid-cols-2 grid-rows-2 gap-5">

                    <label class="font-lg font-bold">
                        Nome
                    </label>
                    <p>{{$book->name}}</p>
    
                    <label class="font-lg font-bold">
                        Gênero
                    </label>
                    <p>{{$book->genero}}</p>


                    <label class="font-lg font-bold ">
                        Data de criação
                    </label>
                    <p>{{$book->created_at}}</p>
    
                    <label class="font-lg font-bold">
                        Última atualização
                    </label>
                    <p>{{$book->updated_at}}</p>
            </article>
        </section>

        {{-- <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Gênero</th>
                    <th>Última Atualização</th>
                    <th>Data de criação</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>{{$book->id}}</td>
                    <td>{{$book->name}}</td>
                    <td>{{$book->genero}}</td>
                    <td>{{$book->created_at}}</td>
                    <td>{{$book->updated_at}}</td>
                </tr>
            </tbody>
        </table> --}}
    </div>
</div>
