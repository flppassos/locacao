<aside class="fixed top-0 pb-3 px-4 h-screen border-r w-[15%] ml-0">
    <nav>
        {{-- Logo --}}
        <div class="-mx-6 px-6 py-2 flex justify-center">
            <a href="#">
                <img src="{{ asset('images/car.png') }}" class="w-28" alt="Logo">
            </a>
        </div>

        {{-- Links --}}
        <ul class="space-y-2 mt-6">

            {{-- Carros --}}
            <li>
                <a href="#" class="px-2 py-3 flex items-center space-x-4 text-amber-500 group">

                    {{-- Ícone --}}
                    <span class="group-hover:text-amber-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path
                                d="M3.375 4.5C2.339 4.5 1.5 5.34 1.5 6.375V13.5h12V6.375c0-1.036-.84-1.875-1.875-1.875h-8.25zM13.5 15h-12v2.625c0 1.035.84 1.875 1.875 1.875h.375a3 3 0 116 0h3a.75.75 0 00.75-.75V15z" />
                            <path
                                d="M8.25 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0zM15.75 6.75a.75.75 0 00-.75.75v11.25c0 .087.015.17.042.248a3 3 0 015.958.464c.853-.175 1.522-.935 1.464-1.883a18.659 18.659 0 00-3.732-10.104 1.837 1.837 0 00-1.47-.725H15.75z" />
                            <path d="M19.5 19.5a1.5 1.5 0 10-3 0 1.5 1.5 0 003 0z" />
                        </svg>
                    </span>

                    {{-- Texto do menu --}}
                    <span class="group-hover:text-amber-700">
                        Carros
                    </span>

                </a>
            </li>

            {{-- Clientes --}}
            <li>
                <a href="#" class="px-2 py-3 flex items-center space-x-4 text-amber-500 group">

                    {{-- Ícone --}}
                    <span class="group-hover:text-amber-700">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd"
                                d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z"
                                clip-rule="evenodd" />
                            <path
                                d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                        </svg>

                    </span>

                    {{-- Texto do menu --}}
                    <span class="group-hover:text-amber-700">
                        Clientes
                    </span>

                </a>
            </li>

        </ul>
    </nav>
</aside>
