<header>
    <div class="bg-blue-700 flex justify-between items-center h-14 p-3">
        <div class="flex items-center space-x-3">
            <i class="fa-solid fa-bars text-white text-2xl bg-blue-900 p-2"></i>
            <h1 class="text-white font-bold text-3xl">HelpDesk</h1>
        </div>
        <div class="flex items-center space-x-10">
            <div>
                <fieldset class="w-full space-y-1 dark:text-gray-800">
                    <label for="Search" class="hidden">Search</label>
                    <div class="relative">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                            <button type="button" title="search" class="p-1 focus:outline-none focus:ring">
                                <svg fill="currentColor" viewBox="0 0 512 512" class="w-4 h-4 dark:text-gray-800">
                                    <path d="M479.6,399.716l-81.084-81.084-62.368-25.767A175.014,175.014,0,0,0,368,192c0-97.047-78.953-176-176-176S16,94.953,16,192,94.953,368,192,368a175.034,175.034,0,0,0,101.619-32.377l25.7,62.2L400.4,478.911a56,56,0,1,0,79.2-79.195ZM48,192c0-79.4,64.6-144,144-144s144,64.6,144,144S271.4,336,192,336,48,271.4,48,192ZM456.971,456.284a24.028,24.028,0,0,1-33.942,0l-76.572-76.572-23.894-57.835L380.4,345.771l76.573,76.572A24.028,24.028,0,0,1,456.971,456.284Z"></path>
                                </svg>
                            </button>
                        </span>
                        <input type="search" name="Search" placeholder="Search..." class="w-32 py-2 pl-10 text-sm rounded-md sm:w-auto focus:outline-none dark:bg-gray-100 dark:text-gray-800 focus:dark:bg-gray-50 focus:dark:border-violet-600">
                    </div>
                </fieldset>
            </div>
            <div>
                <i class="fa-regular fa-bell text-white text-2xl"></i>
            </div>
            <div class="flex items-center space-x-3 text-white">
                <span>Max Rodrigues</span>
                <img src="{{ asset('img/avatar.jpg') }}" alt="" class="rounded-full w-10" />
            </div>
        </div>
    </div>
    <div class="flex justify-between items-center">
        <ul class="flex">
            <a href="{{ route('tickets.index') }}">
                <li class="p-3 cursor-pointer w-32 text-center hover:border-b-4 hover:-mb-1 border-b-blue-700">
                    Tikets
                </li>
            </a>
{{--            <li class="p-3 cursor-pointer w-32 text-center hover:border-b-4 hover:-mb-1 border-b-blue-700">Users</li>--}}
{{--            <li class="p-3 cursor-pointer w-32 text-center hover:border-b-4 hover:-mb-1 border-b-blue-700">My Tickets</li>--}}
{{--            <li class="p-3 cursor-pointer w-32 text-center hover:border-b-4 hover:-mb-1 border-b-blue-700">Quick Access</li>--}}
        </ul>
    </div>
</header>
