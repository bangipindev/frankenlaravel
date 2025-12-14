<div>
    <div class="fixed top-0 left-0 w-full h-full">
        <div class="h-full w-full left-0 top-0 bg-gray-500 absolute opacity-50 -z-10"></div>
        <div class="max-w-md mx-auto bg-white mt-10 rounded overflow-hidden">
            <div class="bg-gray-100 px-3 py-2 border-b border-gray-300 mb-2">
                Create Data
            </div>
            <div class="grid grid-cols-1 gap-4 px-2">
                <div>
                    <input wire:model='title' type="text" class="w-full border border-gray-300 py-1.5 px-3 rounded my-2" placeholder="Title"/>
                    <textarea wire:model='content' class="w-full border border-gray-300 py-1.5 px-3 rounded my-2" placeholder="Content"></textarea>
                </div>
            </div>
            <div class="mx-2 my-3 pb-2">
                <button wire:click="$dispatch('submit')" class="bg-orange-400 py-1.5 px-4 text-white rounded-xl">Simpan</button>
                <button wire:click="$dispatch('closedModal')" class="bg-gray-300 py-1.5 px-4 text-black rounded-xl">Tutup</button>
            </div>
        </div>
    </div>
</div>
