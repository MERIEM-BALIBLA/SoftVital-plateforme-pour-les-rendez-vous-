@extends('Layouts.app')
@section('content')
    <div class="w-full bg-indigo-500 p-14">
        <div class="container">
            <div class="sm:flex items-center bg-white overflow-hidden px-2 py-1 md:justify-between rounded-full">
                <div class="ms:flex items-center px-2 rounded-lg space-x-2 md:space-x-4 mx-auto ">
                    <select id="ville" class="text-sm text-gray-700 outline-none border-2 px-2 py-2 rounded-md">
                        <option selected>Vile</option>
                        @foreach ($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                        @endforeach
                    </select>
                    <select id="specialite" class="text-sm text-gray-700 outline-none border-2 px-2 py-2 rounded-md">
                        <option selected>Selectionner la spécialité</option>
                        @foreach ($specialites as $specilaite)
                            <option value="{{ $specilaite->id }}">{{ $specilaite->specialite }}</option>
                        @endforeach
                    </select>
                </div>
                <input name="search_input" class="text-sm text-gray-700 flex-grow outline-none px-2 " type="text"
                    placeholder="Medecin généraliste" />
                {{-- <button class="bg-indigo-500 text-white text-base px-4 py-2 font-thin rounded-r-2xl">Search</button> --}}
            </div>
        </div>
    </div>
    @include('SoftVital.liste');
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            function fetchData() {
                // var specialite = $("#specialite").val();
                var search_input = $("#search_input").val();
                $.ajax({
                    url: "{{ route('filtre') }}",
                    type: "POST",
                    data: {
                        // specialite: specialite,
                        search: search_input
                    },
                    success: function(res) {
                        console.log(res);
                        displayProfiles(res.profile);
                    }
                });
            };
            // $("#specialite").change(function() {
            //     fetchData();
            // });
            $("#search_input").on('input', function() {
                fetchData();
            });
        });

        function displayProfiles(profile) {
            console.log(profile);
        }
    </script>

    <footer>
        @include('layouts.footer')

    </footer>
@endsection
