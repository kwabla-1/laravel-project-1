<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @php
                       var_dump(Auth::user()->profile()->exists());

                       if (Auth::user()->profile()->exists()) {
                            // RETUREN USER TO THE COMPLETE DASHBOARD

                            // RETURN TO A BLANK DAHBOARD
                       }

                    //    if (isset($viewData['hasCompleteProfile'])) {
                    //        print_r($viewData);
                    //    }else {
                    //         echo 'no its not set </br>';
                    //    }


                    @endphp
                    {{-- @if ($viewData["hasCompleteProfile"])
                        <h1>Welcome to your account</h1> 
                        <p>
                            please complete your profile to ulilse the power of fleet
                        </p>
                    @endif --}}

                    {{-- <h1>Welcome to fleet</h1>
                    <p>
                        start create by creating new projects, estisamate an been accrose the world
                    </p> --}}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
