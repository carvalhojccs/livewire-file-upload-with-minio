<div class="relative overflow-x-auto p-4">
    <form class="max-w-sm mx-auto" wire:submit='save'>
        <div class="mb-5">
            <label for="code" class="block mb-2 text-sm font-medium text-gray-900" wire:model='code'>{{ __('Código') }}</label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="{{ __('Código do catálogo') }}" required />
        </div>
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900" wire:model='name'>{{ _('Nome') }}</label>
            <input type="text"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                placeholder="{{ __('Descrição do catálogo') }}" required />
        </div>
        <div class="mb-5">
            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 ">{{ _('Imagem') }}</label>
            <input type="file" wire:model='image'
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                required />
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Salvar</button>
    </form>
</div>
