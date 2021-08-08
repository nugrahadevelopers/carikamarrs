<x-app-layout>
    <div class="flex flex-col min-h-screen">
        <div class="min-w-screen min-h-screen bg-gray-200 flex items-center justify-center px-5 py-5">
            <div class="rounded-lg shadow-xl bg-gray-900 text-white" style="width:450px;">
                <div class="border-b border-gray-800 px-8 py-3">
                    <div class="inline-block w-3 h-3 mr-2 rounded-full bg-red-500"></div>
                    <div class="inline-block w-3 h-3 mr-2 rounded-full bg-yellow-300"></div>
                    <div class="inline-block w-3 h-3 mr-2 rounded-full bg-green-400"></div>
                </div>
                <div class="px-8 py-6">
                    <p><em class="text-blue-400">public</em> <em class="text-green-400">function </em> <span
                            class="text-blue-400">aboutMe</span>() {</p>
                    <p>&nbsp;&nbsp;<span class="text-pink-500">return</span> {</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;name: <span class="text-yellow-300">'Reno Nugraha'</span>,</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;position: <span class="text-yellow-300">'fullstack-developer'</span>,</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;instagram: <span class="text-yellow-300">'<a
                                href="https://instagram.com/_renonugraha" target="_blank"
                                class="text-yellow-300 hover:underline focus:border-none">@_renonugarha</a>'</span>,
                    </p>
                    <p>&nbsp;&nbsp;};</p>
                    <p>}</p>
                </div>
                <div class="px-8 py-6">
                    <p><em class="text-blue-400">public</em> <em class="text-green-400">function </em> <span
                            class="text-blue-400">thisApp</span>() {</p>
                    <p>&nbsp;&nbsp;<span class="text-pink-500">return</span> {</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;name: <span class="text-yellow-300">'Cari Kamar RS'</span>,</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;framework: <span class="text-yellow-300">'Laravel'</span>,</p>
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;api: <span class="text-yellow-300">'<a
                                href="https://github.com/satyawikananda/rs-bed-covid-indo-api/" target="_blank"
                                class="text-yellow-300 hover:underline focus:border-none">satyawikananda</a>'</span>,
                    </p>
                    <p>&nbsp;&nbsp;};</p>
                    <p>}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>