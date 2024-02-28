<aside class="col-span-1 space-y-5 text-gray-600">

    <div class="p-3 space-y-4 bg-white shadow">
        <div>
            {{-- Start Discusson Button --}}
            <a href="{{ route('pages.threads.create') }}" class="inline-flex items-center px-4 py-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-blue-400 border border-transparent rounded hover:bg-blue-400 active:bg-blue-600 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25" }}>
                {{ __('Click here to add your post') }}
            </a>
        </div>

    </div>

    {{-- Categories --}}
    {{-- <div class="p-4 space-y-4 bg-white shadow ">
        <div class="pb-4 mb-4 border-b border-gray-200">
            <h2 class="uppercase">Categories</h2>
        </div>

        <ul class="space-y-4">
            <li>
                <a href="#" class="flex items-center justify-between">
                    <b>EUNOIA</b>
                    <span class="px-2 text-white bg-green-300 rounded"></span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                    <b>IRENIC</b>
                    <span class="px-2 text-white bg-green-300 rounded"></span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                    <b>METANOIA</b>
                    <span class="px-2 text-white bg-green-300 rounded"></span>
                </a>
            </li>
            <li>
                <a href="#" class="flex items-center justify-between">
                    <b>UTOPIA</b>
                    <span class="px-2 text-white bg-green-300 rounded"></span>
                </a>
            </li>
        </ul>
    </div> --}}


</aside>
