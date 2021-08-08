<div>
    <div class="flex flex-col items-center justify-center space-y-4">
        <div wire:loading.delay wire:target="prosesCari">
            <div class="loader ease-linear rounded-full border-4 border-t-4 border-gray-200 h-12 w-12 mb-4"></div>
        </div>
        <div class="relative w-full">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-non" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 412 232">
                <path
                    d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                    fill="#648299" fill-rule="nonzero" /></svg>
            <select wire:model="selectedProvince" wire:target="prosesCari" wire:loading.attr="disabled"
                class="w-full border border-gray-300 rounded-md text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                <option>Pilih Provinsi ...</option>
                @foreach ($provinces as $province)
                <option value="{{ $province->id }}">{{ $province->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="relative w-full">
            <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 412 232">
                <path
                    d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z"
                    fill="#648299" fill-rule="nonzero" /></svg>
            <select wire:model="selectedCity" wire:target="selectedProvince,prosesCari" wire:loading.attr="disabled"
                class="w-full border border-gray-300 rounded-md text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                @if (!empty($cities))
                <option>Pilih Kabupaten / Kota ...</option>
                @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
                @else
                <option>Pilih Provinsi Terlebih Dahulu</option>
                @endif
            </select>
        </div>
        <div class="flex flex-row items-center justify-center">
            <div class="text-gray-700 mr-2">
                Jenis Tempat Tidur :
            </div>
            <label class="inline-flex items-center mr-2">
                <input type="radio" value="1" wire:model="isCovid" name="type" wire:target="prosesCari"
                    wire:loading.attr="disabled" class="form-radio h-5 w-5 text-blue-600"><span
                    class="ml-2 text-sm text-gray-700">Covid
                    19</span>
            </label>
            <label class="inline-flex items-center">
                <input type="radio" value="2" wire:model="isCovid" name="type" wire:target="prosesCari"
                    wire:loading.attr="disabled" class="form-radio h-5 w-5 text-blue-600"><span
                    class="ml-2 text-sm text-gray-700">Non-Covid
                    19</span>
            </label>
        </div>
        <div class="w-full">
            <button wire:click="prosesCari" wire:target="prosesCari" wire:loading.attr="disabled"
                class="bg-blue-500 w-full hover:bg-blue-600 text-white font-bold py-2 px-4 rounded">
                Cari
            </button>
        </div>

        <livewire:bed-list />
    </div>
</div>