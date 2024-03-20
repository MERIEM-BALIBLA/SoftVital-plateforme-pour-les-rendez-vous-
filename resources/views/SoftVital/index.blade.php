@extends('Layouts.app')

@section('content')
    <div class="relative w-full bg-blue-500 py-20 px-10 mb-4 rounded-b-2xl">
        <div class="text-center relative z-10 w-full">
            <h2 class="text-2xl text-white font-medium title-font mb-16">Prenez rendez-vous avec votre médecin au cabinet
            </h2>

            <div class="sm:w-2/3 my-auto mx-auto px-4">
                <form class=" ">
                    <label for="default-search"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                    <div class="relative flex">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Mockups, Logos..." />
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Mockups, Logos..." />
                        <input type="search" id="default-search"
                            class="block w-full p-4 ps-10 text-sm text-gray-900 border-r  border-gray-300 bg-gray-50 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Search Mockups, Logos..." />

                        <button type="submit"
                            class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                    </div>
                </form>

            </div>

        </div>

        <div class="flex flex-wrap -m-4 mx-auto justify-center mt-8">

        </div>
    </div>

    <div class="absolute flex gap-8 top-72 left-0 right-0 mx-auto">
        <div class="relative max-w-xl mx-auto">
            <img class="h-64 w-full object-cover rounded-md"
                src="https://images.unsplash.com/photo-1680725779155-456faadefa26" alt="Random image">
            <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
            <div class="absolute inset-0 flex flex-col items-center justify-center">
                <h2 class="text-white text-3xl font-bold">Get Lost in Mountains</h2>
                <p>Hello hdhs zhh iaioz mlkzme slkls sppqksa</p>
            </div>
        </div>
        <div class="relative max-w-xl mx-auto">
            <img class="h-64 w-full object-cover rounded-md"
                src="https://images.unsplash.com/photo-1680725779155-456faadefa26" alt="Random image">
            <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <h2 class="text-white text-3xl font-bold">Get Lost in Mountains</h2>
            </div>
        </div>
        <div class="relative max-w-xl mx-auto">
            <img class="h-64 w-full object-cover rounded-md"
                src="https://images.unsplash.com/photo-1680725779155-456faadefa26" alt="Random image">
            <div class="absolute inset-0 bg-gray-700 opacity-60 rounded-md"></div>
            <div class="absolute inset-0 flex items-center justify-center">
                <h2 class="text-white text-3xl font-bold">Get Lost in Mountains</h2>
            </div>
        </div>
    </div>

    <section class="text-gray-600 body-font mt-56 dark:bg-gray-950">
        <div class="container px-5 py-24 mx-auto">
            <h2 class="sm:text-3xl text-2xl font-medium title-font text-center text-gray-900 mb-20">SoftVital : au service
                de votre santé
            </h2>
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
                <div class="p-4 md:w-1/3 flex flex-col">
                    <div
                        class="ml-8 w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 128 128">
                            <path fill="#bdbdbd"
                                d="M6.81 35.5v75.03c0 3.12 2.9 5.21 6.32 7.61c3.53 2.48 5.48 2.25 7.17 2.25l95.86.62c3.77 0 5.03-2.57 5.03-5.34V35.5z" />
                            <linearGradient id="notoSpiralCalendar0" x1="117.05" x2="117.05" y1="68.631"
                                y2="111.352" gradientUnits="userSpaceOnUse">
                                <stop offset=".337" stop-color="#616161" />
                                <stop offset="1" stop-color="#616161" stop-opacity="0" />
                            </linearGradient>
                            <path fill="url(#notoSpiralCalendar0)" d="m121.19 115.66l-8.28-8.51V35.5l8.28 5.02z"
                                opacity="0.29" />
                            <path fill="#c62828"
                                d="m121.19 41.22l-6.46-4.05L104.62 14h5.44c9.65 0 11.13 5.57 11.13 7.47z" />
                            <path fill="#fafafa"
                                d="M9.75 36.33v72.13c0 2.7 2.19 4.88 4.88 4.88h94.85c2.7 0 5.22-2.01 5.22-4.71v-72.3z" />
                            <path fill="#f44336"
                                d="M114.73 37.17H6.81V18.55c0-2.51 2.57-4.55 5.75-4.55h96.59c3.19 0 5.77 2.05 5.75 4.58z" />
                            <path fill="#757575"
                                d="M103.71 116.62c-3.18.39-6.36.55-9.54.83c-3.18.2-6.36.38-9.54.49c-3.18.16-6.36.19-9.54.28l-9.54.09l-9.54-.09c-3.18-.09-6.36-.13-9.54-.28c-3.18-.11-6.36-.29-9.54-.49c-3.18-.28-6.36-.45-9.54-.83v-.2l38.15-.1l38.15.1v.2z" />
                            <path fill="#b3e5fc" d="M42.46 45.08V57.2h-26.3v49.25h52.15V94.18h38.74v-49.1z" />
                            <ellipse cx="19.11" cy="19.8" fill="#af1e1e" rx="2.96" ry="3.3" />
                            <path fill="#94d1e0"
                                d="M20.48 17.08c-.41-.86-.69-1.93-.69-3.08c0-2.67 1.39-4.93 3.04-4.93c1.65 0 3.04 2.26 3.04 4.93h4.48c0-5.47-3.37-9.93-7.51-9.93S15.33 8.52 15.33 14c0 1.95.43 3.76 1.16 5.3c.67 1.39 2.1 2.01 3.37 1.34c1.06-.58 1.2-2.36.62-3.56" />
                            <path fill="#2f7889"
                                d="M30.35 14c0-3.35-1.27-6.31-3.19-8.11c.02.06.57 1.49-.21 2.86c-.79 1.4-2.43 1.18-2.43 1.18c.81.9 1.35 2.4 1.35 4.07z" />
                            <ellipse cx="35.59" cy="19.8" fill="#af1e1e" rx="2.96" ry="3.3" />
                            <path fill="#94d1e0"
                                d="M36.96 17.08c-.41-.86-.69-1.93-.69-3.08c0-2.67 1.39-4.93 3.04-4.93s3.04 2.26 3.04 4.93h4.48c0-5.47-3.37-9.93-7.51-9.93S31.81 8.52 31.81 14c0 1.95.43 3.76 1.16 5.3c.67 1.39 2.1 2.01 3.37 1.34c1.06-.58 1.2-2.36.62-3.56" />
                            <path fill="#2f7889"
                                d="M43.64 5.89c.02.06.57 1.49-.21 2.86C42.64 10.14 41 9.93 41 9.93c.81.9 1.35 2.4 1.35 4.07h4.49c0-3.35-1.28-6.31-3.2-8.11" />
                            <ellipse cx="52.06" cy="19.8" fill="#af1e1e" rx="2.96" ry="3.3" />
                            <path fill="#94d1e0"
                                d="M53.44 17.08c-.41-.86-.69-1.93-.69-3.08c0-2.67 1.39-4.93 3.04-4.93c1.65 0 3.04 2.26 3.04 4.93h4.48c0-5.47-3.37-9.93-7.51-9.93S48.29 8.52 48.29 14c0 1.95.43 3.76 1.16 5.3c.67 1.39 2.1 2.01 3.37 1.34c1.06-.58 1.2-2.36.62-3.56" />
                            <path fill="#2f7889"
                                d="M60.11 5.89c.02.06.57 1.49-.21 2.86c-.79 1.4-2.43 1.18-2.43 1.18c.81.9 1.35 2.4 1.35 4.07h4.51c.01-3.35-1.29-6.31-3.22-8.11" />
                            <ellipse cx="68.54" cy="19.8" fill="#af1e1e" rx="2.96" ry="3.3" />
                            <path fill="#94d1e0"
                                d="M69.92 17.08c-.41-.86-.69-1.93-.69-3.08c0-2.67 1.39-4.93 3.04-4.93c1.65 0 3.04 2.26 3.04 4.93h4.48c0-5.47-3.37-9.93-7.51-9.93S64.77 8.52 64.77 14c0 1.95.43 3.76 1.16 5.3c.67 1.39 2.1 2.01 3.37 1.34c1.06-.58 1.19-2.36.62-3.56" />
                            <path fill="#2f7889"
                                d="M76.59 5.89c.02.06.57 1.49-.21 2.86c-.79 1.4-2.43 1.18-2.43 1.18c.81.9 1.35 2.4 1.35 4.07h4.52c.01-3.35-1.3-6.31-3.23-8.11" />
                            <ellipse cx="85.02" cy="19.8" fill="#af1e1e" rx="2.96" ry="3.3" />
                            <path fill="#94d1e0"
                                d="M86.39 17.08c-.41-.86-.69-1.93-.69-3.08c0-2.67 1.39-4.93 3.04-4.93s3.04 2.26 3.04 4.93h4.48c0-5.47-3.37-9.93-7.51-9.93S81.24 8.52 81.24 14c0 1.95.43 3.76 1.16 5.3c.67 1.39 2.1 2.01 3.37 1.34c1.06-.58 1.2-2.36.62-3.56" />
                            <path fill="#2f7889"
                                d="M93.07 5.89c.02.06.57 1.49-.21 2.86c-.79 1.4-2.43 1.18-2.43 1.18c.81.9 1.35 2.4 1.35 4.07h4.54c0-3.35-1.33-6.31-3.25-8.11" />
                            <ellipse cx="101.5" cy="19.8" fill="#af1e1e" rx="2.96" ry="3.3" />
                            <path fill="#94d1e0"
                                d="M102.87 17.08c-.41-.86-.69-1.93-.69-3.08c0-2.67 1.39-4.93 3.04-4.93c1.65 0 3.04 2.26 3.04 4.93h4.48c0-5.47-3.37-9.93-7.51-9.93S97.72 8.52 97.72 14c0 1.95.43 3.76 1.16 5.3c.67 1.39 2.1 2.01 3.37 1.34c1.06-.58 1.2-2.36.62-3.56" />
                            <path fill="#2f7889"
                                d="M112.8 14.18c-.15-4.02-1.45-6.6-3.26-8.28c.02.06.57 1.49-.21 2.86c-.79 1.4-2.43 1.18-2.43 1.18c.81.9 1.21 2.4 1.21 4.07h1.53c1.27-.02 3.16.17 3.16.17" />
                            <path fill="none" stroke="#1e88e5" stroke-linecap="square" stroke-miterlimit="10"
                                d="M16.66 45.12v61.33m12.91-61.33v61.33m12.91-61.33v61.33M55.4 45.12v61.33m12.91-61.33v61.33m12.91-61.33v61.33m12.92-61.33v61.33m12.91-61.33v61.33m-90.39 0h90.39M16.66 94.18h90.39M16.66 81.92h90.39M16.66 69.65h90.39M16.66 57.39h90.39M16.66 45.12h90.39" />
                            <g fill="#1e88e5">
                                <circle cx="103.68" cy="48.12" r="1.26" />
                                <circle cx="90.7" cy="48.12" r="1.26" />
                                <circle cx="77.72" cy="48.12" r="1.26" />
                                <circle cx="64.73" cy="48.12" r="1.26" />
                                <circle cx="51.75" cy="48.12" r="1.26" />
                                <circle cx="38.77" cy="48.12" r="1.26" />
                                <circle cx="25.79" cy="48.12" r="1.26" />
                            </g>
                            <g fill="#1e88e5">
                                <circle cx="103.68" cy="60.39" r="1.26" />
                                <circle cx="90.7" cy="60.39" r="1.26" />
                                <circle cx="77.72" cy="60.39" r="1.26" />
                                <circle cx="64.73" cy="60.39" r="1.26" />
                                <circle cx="51.75" cy="60.39" r="1.26" />
                                <circle cx="38.77" cy="60.39" r="1.26" />
                                <circle cx="25.79" cy="60.39" r="1.26" />
                            </g>
                            <g fill="#1e88e5">
                                <circle cx="103.68" cy="72.65" r="1.26" />
                                <circle cx="90.7" cy="72.65" r="1.26" />
                                <circle cx="77.72" cy="72.65" r="1.26" />
                                <circle cx="64.73" cy="72.65" r="1.26" />
                                <circle cx="51.75" cy="72.65" r="1.26" />
                                <circle cx="38.77" cy="72.65" r="1.26" />
                                <circle cx="25.79" cy="72.65" r="1.26" />
                            </g>
                            <g fill="#1e88e5">
                                <circle cx="103.68" cy="97.18" r="1.26" />
                                <circle cx="90.7" cy="97.18" r="1.26" />
                                <circle cx="77.72" cy="97.18" r="1.26" />
                                <circle cx="64.73" cy="97.18" r="1.26" />
                                <circle cx="51.75" cy="97.18" r="1.26" />
                                <circle cx="38.77" cy="97.18" r="1.26" />
                                <circle cx="25.79" cy="97.18" r="1.26" />
                            </g>
                            <g fill="#1e88e5">
                                <circle cx="103.68" cy="84.92" r="1.26" />
                                <circle cx="90.7" cy="84.92" r="1.26" />
                                <circle cx="77.72" cy="84.92" r="1.26" />
                                <circle cx="64.73" cy="84.92" r="1.26" />
                                <circle cx="51.75" cy="84.92" r="1.26" />
                                <circle cx="38.77" cy="84.92" r="1.26" />
                                <circle cx="25.79" cy="84.92" r="1.26" />
                            </g>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">

                        <p class="leading-relaxed text-base">Accédez simplement et rapidement à une large communauté de
                            praticiens.</p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex flex-col">
                    <div
                        class="ml-8 w-20 h-20 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" width="3em" height="3em" viewBox="0 0 24 24">
                            <path fill="#5baefb"
                                d="M20.13 4.155a5 5 0 0 0-4.39-1.07A6 6 0 0 0 12 5.665a6 6 0 0 0-3.72-2.58a5.09 5.09 0 0 0-4.4 1c-1.58 1.38-2.45 4.44-1.46 7.54c.112.342.246.676.4 1c.04.075.077.152.11.23c2.57 5.24 8.51 8 8.77 8.13a.672.672 0 0 0 .31.07a.702.702 0 0 0 .31-.07c.25-.11 6.25-2.85 8.8-8.15l.08-.17c.158-.34.295-.691.41-1.05c.94-3 .08-6.06-1.48-7.46m-.31 7.93c-.14.314-.3.618-.48.91h-3.31a1 1 0 0 1-.83-.45l-1.05-1.56l-2.23 4.46a1 1 0 0 1-.73.54h-.16a1 1 0 0 1-.71-.3l-2.71-2.7H4.7a10.595 10.595 0 0 1-.5-1a6.336 6.336 0 0 1-.38-1h4.21a.999.999 0 0 1 .71.29l2 2l2.38-4.76a1 1 0 0 1 .84-.55a1 1 0 0 1 .89.44l1.7 2.56h3.7a6.572 6.572 0 0 1-.43 1.12" />
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">

                        <p class="leading-relaxed text-base">Gérez votre santé et celle de vos proches de façon sécurisée :
                            compte, rendez-vous.</p>

                    </div>
                </div>
                <div class="p-4 md:w-1/3 flex">
                    <div
                        class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-indigo-100 text-indigo-500 mb-4 flex-shrink-0">
                        <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                            <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                    <div class="flex-grow pl-6">
                        <h2 class="text-gray-900 text-lg title-font font-medium mb-2">Neptune</h2>
                        <p class="leading-relaxed text-base">Prévenez l’apparition de maladies grâce à des messages de
                            sensibilisation..</p>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-24 py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="w-5/6 object-cover object-center rounded" alt="hero"
                    src="{{ asset('assets/images/Pic.png') }}">
            </div>
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h3 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Vous êtes professionnel de santé
                    ?</h3>
                <p class="mb-8 leading-relaxed">Rejoignez SoftVital et gagnez sur tous les plans!</p>
                <ul class="list-none mb-8">
                    <li>&#9733; Un cabinet plus visible</li>
                    <li>&#9733; Davantage de flux grâce à la prise de RDV 24/24</li>
                    <li>&#9733; Des confirmations et rappels de RDV par SMS envoyés à tous vos patients</li>
                </ul>
                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">En
                        savoir plus</button>

                </div>
            </div>
        </div>
    </section>
    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex px-24 py-24 md:flex-row flex-col items-center">
            <div
                class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
                <h3 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Bien dans sa tête, bien dans sa
                    vie
                </h3>
                <p class="mb-8 leading-relaxed">Anxiété, souffrance au travail, troubles du sommeil, problèmes au sein du
                    couple, inquiétudes pour son enfant…<br>Pour aller mieux, on a parfois besoin de parler à un
                    professionnel</p>

                <div class="flex justify-center">
                    <button
                        class="inline-flex text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">En
                        savoir plus</button>

                </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
                <img class="w-4/5 object-cover object-center rounded" alt="hero"
                    src="{{ asset('assets/images/doc.png') }}">
            </div>

        </div>
    </section>
    <section class="w-full h-screen bg-blue-200 py-20 px-80">
        <div class="flex justify-center items-center gap-40">
            <h4 class="text-white font-bold text-4xl">SoftVital c'est...</h4>
            <p class="text-center"><span class="font-medium text-3xl text-indigo-800">80 millions</span><br>de patients</p>
            <p class="text-center"><span class="font-medium text-3xl text-indigo-800">900 000</span><br>utilisateurs professionnels</p>
            <p class="text-center"><span class="font-medium text-3xl text-indigo-800">97%</span><br>evenements</p>
        </div>
    </section>
@endsection