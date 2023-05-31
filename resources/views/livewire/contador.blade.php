<div>
    <h1 class="text-2xl">Contador: {{$contador}} </h1>
    <button wire:click="incrementar" class="p-2 border border-indigo-500">+</button>
    <button wire:click="decrementar" class="p-2 border border-indigo-500">-</button>
    <br/>
    <div class="mt-4 p-4 rounded-lg bg-slate-300 space-y-2">
        <h1 class="text-2xl">
            @if ($saudacao)
                {{$cumprimento}}
            @endif
                {{$nome}}
        </h1>
        <input type="text" wire:model.lazy="nome">

        <input type="checkbox" wire:model="saudacao"> Saudação

        <select wire:model="cumprimento">
            <option>Olá</option>
            <option>Oi</option>
            <option>Bacana?</option>
            <option>Blz</option>
        </select>
    </div>
</div>
