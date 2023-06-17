<section>
    <h1 class="text-2xl text-amber-500 font-medium ">Carros</h1>

    {{-- Campo de pesquisa --}}
    <div class="flex justify-end items-center">
        <x-loading wire:loading wire:target="pesquisa"/>
        <input class="mt-1 ml-4 block w-1/4 rounded-md border-amber-300 focus:border-amber-300 focus:ring focus:ring-amber-500 focus:ring-opacity-50 shadown-sm"
            type="text" wire:model="pesquisa">
    </div>

    {{-- Botão de adicionar --}}
    <x-admin.botao-adicionar href="/carros/inserir"/>

    <table class="bg-gradient-to-r from-amber-500 to-amber-700 mx-auto m-5 w-5/6 rounded-t-lg text-amber-50"
        wire:loading.remove>
        <thead>
            <tr class="text-left border-b border-amber-400">
                <th class="px-4 py-3">Placa</th>
                <th class="px-4 py-3">Modelo</th>
                <th class="px-4 py-3">Marca</th>
                <th class="px-4 py-3">Cor</th>
                <th class="px-4 py-3">Diária</th>
                <th class="px-4 py-3">Opções</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($carros as $carro)
                <tr class="bg-amber-600 border-b border-amber-300 hover:bg-amber-500">
                    <td class="px-4 py-3">{{$carro->placa}}</td>
                    <td class="px-4 py-3">{{$carro->modelo}}</td>
                    <td class="px-4 py-3">{{$carro->marca}}</td>
                    <td class="px-4 py-3">{{$carro->cor}}</td>
                    <td class="px-4 py-3">{{$carro->diaria}}</td>
                    <td class="px-4 py-3">
                        {{-- Botão deletar --}}
                        <x-admin.button-delete wire:click="$emit('confirmarDeletar', '{{$carro->id}}')"/>
                    </td>
                </tr>
            @empty
                <tr class="bg-amber-600 border-b border-amber-300 hover:bg-amber-500">
                    <td colspan="6" class="px-4 py-3">Nenhum registro encontrado.</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</section>
