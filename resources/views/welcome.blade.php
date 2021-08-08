<x-app-layout>
    <div class="flex flex-col min-h-screen">
        <div class="p-4">
            <div class="mb-3">
                <h1 class="text-xl font-bold">Cek Ketersedian Tempat Tidur Rumah Sakit</h1>
                <p class="text-sm text-gray-500 font-bold">{{ now() }}</p>
            </div>
        </div>
        <div class="px-4">
            <livewire:select-location-form />
        </div>
    </div>
</x-app-layout>