<x-app-layout>
     <x-slot name="header">
         <h2 class="font-semibold text-xl text-gray-800 leading-tight">
             {{ __('Estimates') }}
         </h2>
     </x-slot>

     <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h1>Estimate</h1>
                </div>

                <div class="">
                    <form action="/" method="POST" class="p-4">
                        <div class="flex justify-between mb-20">
                            <input type="text" name="estimate_name" placeholder="Estimate name">

                            <div class="border">
                                <label for="company_logo">Company Logo</label>
                                <input type="file" class="hidden" name="company_logo" id="company_logo">
                            </div>
                        </div>
                        
                        {{-- FROM --}}
                        <div class="">
                            <div class="flex justify-between ">
                                <div class=" w-1/2 p-5">
                                    <h1 class="bolder text-xl">From</h1>
                                    <div class="">
                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Name</label>
                                            <input type="text" name="from_name" class="w-[80%] rounded-md" placeholder="Martin">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Email</label>
                                            <input type="email" name="email" class="w-[80%] rounded-md" placeholder="something@gmail.com">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Address</label>
                                            <input type="text" name="from_name" class="w-[80%] rounded-md" placeholder="Nii adote obour street">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Mobile number</label>
                                            <input type="text" name="from_name" class="w-[80%] rounded-md" placeholder="244-543-53454">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Business no</label>
                                            <input type="text" name="from_name" class="w-[80%] rounded-md" placeholder="Martin">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Estimate Date</label>
                                            <input type="date" name="from_name" class="w-[80%] rounded-md" placeholder="Martin">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="w-1/2 p-5">
                                    <h1 class="bolder text-xl">To</h1>
                                    <div class="">
                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Client name</label>
                                            <input type="text" name="from_name" class="w-[80%] rounded-md" placeholder="Martin">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Client email</label>
                                            <input type="email" name="email" class="w-[80%] rounded-md" placeholder="something@gmail.com">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Client Address</label>
                                            <input type="text" name="from_name" class="w-[80%] rounded-md" placeholder="Nii adote obour street">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">CLient num</label>
                                            <input type="text" name="from_name" class="w-[80%] rounded-md" placeholder="244-543-53454">
                                        </div>

                                        {{-- <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Business no</label>
                                            <input type="text" name="from_name" class="w-[80%] rounded-md" placeholder="Martin">
                                        </div>

                                        <div class="flex justify-center justify-between items-center p-2 w-full">
                                            <label for="From_name">Estimate Date</label>
                                            <input type="date" name="from_name" class="w-[80%] rounded-md" placeholder="Martin">
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

 
 </x-app-layout>