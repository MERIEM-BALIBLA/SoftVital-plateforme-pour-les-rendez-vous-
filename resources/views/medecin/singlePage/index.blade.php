@extends('Layouts.app')

<!-- component -->

{{-- <body class="bg-gray-300 antialiased"> --}}
<div class="mx-auto my-40 antialiased w-full">
    <div>

        <div class="bg-white relative shadow rounded-lg w-5/6 md:w-5/6 mx-auto">
            <div class="flex justify-center">
                <img alt="content" src="{{ asset('assets/images/calender.png') }}"
                    class="rounded-full mx-auto absolute -top-20 w-32 h-32 shadow-md border-4 border-white transition duration-200 transform hover:scale-110">
            </div>
            <div class="mt-16">
                <h1 class="font-bold text-center text-3xl text-gray-900">
                    {{ ucfirst(substr($medecin->user_name, 0, 1)) . substr($medecin->user_name, 1) }}
                </h1>

                <p class="text-center text-sm text-gray-400 font-medium">{{ $medecin->specialite->specialite }}
                </p>
                <div class=" w-full mt-2 mb-2 px-6 md:w-1/4 mx-auto">
                    <button id="btn"
                        class="text-white text-xl block rounded-lg text-center font-medium leading-6 px-6 py-3 bg-blue-300 hover:bg-blue-500">Prenez
                        un rendez-vous
                    </button>
                </div>

                {{-- popup --}}
                @if (auth()->check())
                    <div id="popup" tabindex="-1"
                        class="hidden bg-black/50 overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 h-full items-center justify-center flex">
                        <div class="relative p-4 w-full max-w-md h-full md:h-auto">

                            <div class="relative bg-white rounded-lg shadow">
                                <button type="button" id="close"
                                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center popup-close"><svg
                                        aria-hidden="true" class="w-5 h-5" fill="#c6c7c7" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d=" M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414
                        10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293
                        5.707a1 1 0 010-1.414z" cliprule="evenodd"></path>
                                    </svg>
                                    <span class="sr-only">Close popup</span>
                                </button>

                                <div class="p-5">
                                    <h3 class="text-2xl mb-0.5 font-medium">Prendre un rendez vous le : 18-04-2024 11:00
                                    </h3>
                                    <form class="w-full" method="POST" action="{{ route('rendez-vous') }}">
                                        @csrf
                                        @method('POST')
                                        {{-- <input type="hidden" name="" value="{{ $medecin->id }}"> --}}
                                        <input type="hidden" name="medecin_id" value="{{ $medecin->id }}">

                                        <label for="horaire" class="sr-only">Horaire d'ouverture</label>
                                        <select name="event_id" id=""
                                            class="mt-4 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1">
                                            <option value="Rien selectionné">Rien selectionné</option>
                                            @foreach ($events as $event)
                                                <option value="{{ $event->id }}">
                                                    {{ date('m-d H:i', strtotime($event->start)) }} -
                                                    {{ date('H:i', strtotime($event->end)) }}
                                                </option>
                                            @endforeach
                                        </select>
                                        {{-- <label for="email" class="sr-only">Email address</label>
                                        <input name="nom" type="text" required=""
                                            class="mt-4 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                                            placeholder="Vote nom" value=""> --}}
                                        {{-- <input name="email" type="email" autocomplete="email" required=""
                                            class="mt-4 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                                            placeholder="Email Address" value=""> --}}
                                        {{-- <input name="numero" type="text" autocomplete="email" required=""
                                            class="mt-4 block w-full rounded-lg border border-gray-300 px-3 py-2 shadow-sm outline-none placeholder:text-gray-400 focus:ring-2 focus:ring-black focus:ring-offset-1"
                                            placeholder="Numéro de téléphone" value=""> --}}
                                        <button type="submit"
                                            class="mt-4 inline-flex w-full items-center justify-center rounded-lg bg-blue-500 hover:bg-blue-300 p-2 py-3 text-sm font-medium text-white outline-none focus:ring-2 focus:ring-black focus:ring-offset-1 disabled:bg-gray-400">
                                            Continue
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                {{-- end popup --}}

                <div class="w-full mx-auto">
                    <!-- Tab Buttons -->
                    <div class=" p-2 rounded-t-lg">
                        <div class="md:flex md:justify-center md:space-x-4">
                            <button
                                class="px-4 py-2 text-gray-500 font-semibold hover:bg-blue-700 focus:outline-none tab-button"
                                onclick="showTab('tab1')">Recent activites</button>
                            <button
                                class="px-4 py-2 text-gray-500 font-semibold hover:bg-blue-700 focus:outline-none tab-button"
                                onclick="showTab('tab2')">Mes informations personnelles</button>
                            <button
                                class="px-4 py-2 text-gray-500 font-semibold hover:bg-blue-700 focus:outline-none tab-button"
                                onclick="showTab('tab3')">Mes information de proffession</button>
                        </div>
                    </div>
                    <!-- Tab Content -->
                    <div id="tab1" class="p-4 tab-content bg-white">
                        <div class="mt-2">
                            @if ($posts->isEmpty())
                                <p>Aucun post trouvé pour ce médecin.</p>
                            @else
                                @foreach ($posts as $post)
                                    <!-- Blog post with featured image -->
                                    <div class="w-full px-5 py-4 bg-white dark:bg-gray-800 shadow-md rounded-lg">
                                        <p>{{ $post->title }}</p>
                                        <span
                                            class="block text-sm text-gray-500 dark:text-gray-400 font-light leading-snug">
                                            {{ $post->created_at }}
                                        </span>
                                        <p class="text-gray-800 dark:text-gray-100 leading-snug md:leading-normal">
                                            {{ $post->description }}.</p>
                                        <img src="{{ asset('storage/' . $post->image) }}" alt=""
                                            class="h-50 w-50">
                                        <div class="flex justify-between items-center mt-5">
                                            <div class="flex ">
                                                <svg class="p-0.5 h-6 w-6 rounded-full z-20 bg-white dark:bg-gray-800 "
                                                    xmlns='http://www.w3.org/2000/svg'
                                                    xmlns:xlink='http://www.w3.org/1999/xlink' viewBox='0 0 16 16'>
                                                    <defs>
                                                        <linearGradient id='a1' x1='50%' x2='50%'
                                                            y1='0%' y2='100%'>
                                                            <stop offset='0%' stop-color='#18AFFF' />
                                                            <stop offset='100%' stop-color='#0062DF' />
                                                        </linearGradient>
                                                        <filter id='c1' width='118.8%' height='118.8%'
                                                            x='-9.4%' y='-9.4%' filterUnits='objectBoundingBox'>
                                                            <feGaussianBlur in='SourceAlpha' result='shadowBlurInner1'
                                                                stdDeviation='1' />
                                                            <feOffset dy='-1' in='shadowBlurInner1'
                                                                result='shadowOffsetInner1' />
                                                            <feComposite in='shadowOffsetInner1' in2='SourceAlpha'
                                                                k2='-1' k3='1' operator='arithmetic'
                                                                result='shadowInnerInner1' />
                                                            <feColorMatrix in='shadowInnerInner1'
                                                                values='0 0 0 0 0 0 0 0 0 0.299356041 0 0 0 0 0.681187726 0 0 0 0.3495684 0' />
                                                        </filter>
                                                        <path id='b1'
                                                            d='M8 0a8 8 0 00-8 8 8 8 0 1016 0 8 8 0 00-8-8z' />
                                                    </defs>
                                                    <g fill='none'>
                                                        <use fill='url(#a1)' xlink:href='#b1' />
                                                        <use fill='black' filter='url(#c1)' xlink:href='#b1' />
                                                        <path fill='white'
                                                            d='M12.162 7.338c.176.123.338.245.338.674 0 .43-.229.604-.474.725a.73.73 0 01.089.546c-.077.344-.392.611-.672.69.121.194.159.385.015.62-.185.295-.346.407-1.058.407H7.5c-.988 0-1.5-.546-1.5-1V7.665c0-1.23 1.467-2.275 1.467-3.13L7.361 3.47c-.005-.065.008-.224.058-.27.08-.079.301-.2.635-.2.218 0 .363.041.534.123.581.277.732.978.732 1.542 0 .271-.414 1.083-.47 1.364 0 0 .867-.192 1.879-.199 1.061-.006 1.749.19 1.749.842 0 .261-.219.523-.316.666zM3.6 7h.8a.6.6 0 01.6.6v3.8a.6.6 0 01-.6.6h-.8a.6.6 0 01-.6-.6V7.6a.6.6 0 01.6-.6z' />
                                                    </g>
                                                </svg>
                                                <span
                                                    class="ml-1 text-gray-500 dark:text-gray-400  font-light">8</span>
                                            </div>
                                            <div class="ml-1 text-gray-500 dark:text-gray-400 font-light">33 comments
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @endif

                        </div>
                    </div>
                    <div id="tab2" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
                        <div class="w-full md:px-20">
                            <div class="mx-auto">
                                <table class="w-full">
                                    <tr class="border-b border-gray-400">
                                        <td class="p-2">Email :</td>
                                        <td>{{ $medecin->user_email }}</td>
                                    </tr>
                                    <tr class="border-b border-gray-400">
                                        <td class="p-2">Numéro de téléphone :</td>
                                        <td>{{ $medecin->telephone }}</td>
                                    </tr>
                                    <tr class="border-b border-gray-400">
                                        <td class="p-2">Originaire de :</td>
                                        <td>{{ $medecin->location }}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="tab3"
                    class="p-4 tab-content bg-white shadow-md rounded-lg hidden flex flex-col md:flex-row justify-center gap-10">

                    <div class="md:w-1/2 w-full">
                        <div class="mx-auto">
                            <table class="w-full">
                                <tr class="border-b border-gray-400">
                                    <td class="p-2">Le nom du cabinet :</td>
                                    <td>{{ $medecin->cabinet }}</td>
                                </tr>
                                <tr class="border-b border-gray-400">
                                    <td class="p-2">L'adresse du cabinet :</td>
                                    <td>{{ $medecin->adresse_cabinet }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class=" gap-4 md:w-1/3 w-full">
                        <h2 class="text-xl font-semibold mb-2 text-gray-500">Medecins de meme specialite</h2>
                        <div class="w-full">
                            @foreach ($decinsMemeSpecialite as $medecin)
                                <div
                                    class="mb-4 py-10 bg-gray-100 dark:bg-gray-700 relative shadow-lg overflow-hidden hover:shadow-2xl group rounded-xl p-5 transition-all duration-500 transform">
                                    <div class="flex items-center gap-4">
                                        <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=M3w0NzEyNjZ8MHwxfHNlYXJjaHwyfHxhdmF0YXJ8ZW58MHwwfHx8MTY5MTg0NzYxMHww&ixlib=rb-4.0.3&q=80&w=1080"
                                            class="w-32 group-hover:w-36 group-hover:h-36 h-32 object-center object-cover rounded-full transition-all duration-500 delay-500 transform" />
                                        <div class="w-fit transition-all transform duration-500">
                                            <h1 class="text-gray-600 dark:text-gray-200 font-bold">
                                                {{ $medecin->nom }}
                                            </h1>
                                            <p class="text-gray-400">{{ $medecin->cabinet }}</p>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <style>
                    .tab-button.active {
                        background-color: #fff;
                        border-color: #4299e1;
                        color: #4299e1;
                    }
                </style>

                <script>
                    function showTab(tabId) {
                        // Hide all tab content
                        const tabContents = document.querySelectorAll('.tab-content');
                        tabContents.forEach((content) => {
                            content.classList.add('hidden');
                        });

                        // Show the selected tab content
                        const selectedTab = document.getElementById(tabId);
                        if (selectedTab) {
                            selectedTab.classList.remove('hidden');
                        }

                        // Remove the 'active' class from all tab buttons
                        const tabButtons = document.querySelectorAll('.tab-button');
                        tabButtons.forEach((button) => {
                            button.classList.remove('active');
                        });

                        // Add the 'active' class to the clicked tab button
                        const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
                        if (clickedButton) {
                            clickedButton.classList.add('active');
                        }
                    }

                    // Initialize the first tab
                    showTab('tab1');
                </script>
                <script>
                    document.getElementById('btn').addEventListener('click', function() {
                        document.getElementById('popup').classList.remove('hidden');
                    });
                    document.getElementById('close').addEventListener('click', function() {
                        document.getElementById('popup').classList.add('hidden');
                    });
                </script>


                <div class="w-full">

                </div>
            </div>
        </div>

    </div>
</div>
{{-- </body> --}}

</html>
