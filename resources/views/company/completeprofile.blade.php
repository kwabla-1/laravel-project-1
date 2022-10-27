<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.tailwindcss.com"></script>
     <title>Complete Company Profile</title>
</head>
<body>
     <h1 class="text-3xl font-bold underline text-center mt-6">Please complete fill in all inputs for your company</h1>

     <div class="">
          <form action="">
               @csrf
               <div class=" w-1/2 mx-auto mt-8 p-6">
                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             Company Name
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jacob And Co">
                           {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Postal Addres
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                         </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             location
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Jacob And Co">
                           {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Contact Person
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="Doe">
                         </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             Telephone 1
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="+220542186981">
                           {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Telephone 2
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="+220542186981">
                         </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             Company website - <span>Optional</span>
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="www.mycompanywebsite.com">
                           {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Corperate Email
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="company@gmail.com">
                         </div>
                    </div>

                    {{-- company service --}}
                    <h2 class="mb-8 mt-6 text-md underline text-center">About your company</h2>

                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             Company service
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Welding and fabircation, plumbering, metal works">
                           {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Business type
                           </label>
                           <select name="c" id="" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                              <option value="">One person</option>
                              <option value="">Partnership</option>
                              <option value="">Private Company</option>
                              <option value="">other</option>
                           </select>
                         </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             Company Establishement Date
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date" placeholder="Welding and fabircation, plumbering, metal works">
                           {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Number Of Workers
                           </label>
                           <select name="c" id="" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                              <option value="">1 to 5</option>
                              <option value="">10 to 30</option>
                              <option value="">40 to 60 </option>
                              <option value="">70 to 100</option>
                              <option value="">More than 100</option>
                           </select>
                         </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                             Company Size
                           </label>
                            <select name="c" id="" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                   <option value="">Small</option>
                                   <option value="">Medium</option>
                                   <option value="">Larget</option>
                                   <option value="">Gigabit Company</option>
                              </select>
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                              Working days
                           </label>
                           <select name="c" id="" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                              <option value="">Monday to Friday</option>
                              <option value="">Monday to Saturday</option>
                              <option value="">Everyday</option>
                              <option value="">Other</option>
                           </select>
                         </div>
                    </div>


                    <h2 class="mb-8 mt-6 text-md underline text-center">Certificates and Licenses</h2>






     
                    {{-- <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full px-3">
                              <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                              Password
                              </label>
                              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="password" placeholder="******************">
                              <p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p>
                         </div>
                    </div> --}}
     
                    <div class="flex flex-wrap -mx-3 mb-2">
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                             Certifcate 1
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="file" placeholder="Albuquerque">
                         </div>
     
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                              Certifcate 2
                           </label>
                           <div class="relative">
                              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="file" placeholder="90210">

                             <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                               <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                             </div>
                           </div>
                         </div>
     
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                              Certifcate 1
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="file" placeholder="90210">
                         </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-2">
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                             License 1
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="file" placeholder="Albuquerque">
                         </div>
     
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                              License 2
                           </label>
                           <div class="relative">
                              <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="file" placeholder="90210">

                             <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                               <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                             </div>
                           </div>
                         </div>
     
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                              License 1
                           </label>
                           <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="file" placeholder="90210">
                         </div>
                    </div>

                    <button class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                         Button
                    </button>
               </div>
          </form>
     </div>
</body>
</html>