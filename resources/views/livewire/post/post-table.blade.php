<div>
    <div class="max-w-2xl mx-auto h-full">
        <div class="py-4">
            <button wire:click="createTambah" class="py-1.5 px-4 bg-orange-500 text-white rounded-xl">Tambah</button>
        </div>
        <div class="py-4">
            <input wire:model.live.debounce.500ms="search" type="text" class="py-1.5 px-4 border rounded-xl" placeholder="Cari data" />
        </div>
        <table class="w-full mb-2">
            <thead>
                <tr>
                    <th class="bg-gray-100 border-gray-300 border py-1.5 px-3">
                        Title
                    </th>
                    <th class="bg-gray-100 border-gray-300 border py-1.5 px-3">
                        Content
                    </th>
                </tr>
            </thead>
            <tbody>
                @forelse($this->posts as $post)
                    <tr>
                        <td class="border-gray-300 border py-1.5 px-3">
                            {{ $post->title}}
                        </td>
                        <td class="border-gray-300 border py-1.5 px-3">
                            {{ $post->content}}
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="3" class="border-gray-300 border py-1.5 px-3"> Data Tidak Ditemukan</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $this->posts->links() }}
    </div>
    @if($showModal)
        <livewire:post.post-form />
    @endif
</div>
