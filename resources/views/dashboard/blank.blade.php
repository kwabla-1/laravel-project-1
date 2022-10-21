<x-app-layout>
     <x-slot name="header">
         <h2 class="text-center font-semibold text-xl text-gray-800 leading-tight">
            @php
                $navigate_to = route('individualRegister');
                if ($viewData['user_type'] == 'company') {
                    $navigate_to = route('companyRegister');
                }
                
            @endphp
             {{ __('Welcome, ')  }} {{ $viewData['user_name'] }} Complete registration at  <a href="{{ $navigate_to  }}">Here</a>
         </h2>
     </x-slot>


     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class=" text-center">
                        <img src="img/no_data.svg" alt="no data" class="text">
                        <h1 class="uppercase">Welcome to your accoutn {{$viewData['user_name']}}</h1>
                        <p class="text-lg">
                            Please complete your profile to enjoy the full potential of the app <a href="{{$navigate_to}}" class="">Company registration</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
