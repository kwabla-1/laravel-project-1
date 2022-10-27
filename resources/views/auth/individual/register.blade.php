<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.tailwindcss.com"></script>
     <title>Complete Individual Profile</title>
</head>
<body>
     <h1 class="text-3xl font-bold underline text-center mt-6">Individual Profile Completion</h1>
    @if ($errors->any())
        <div class="">
          <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
          </ul>
        </div>
    @endif
     <div class="">
          <form action="{{route('individualRegisterStore')}}" method="POST" enctype="multipart/form-data">
               @csrf
               <div class=" w-1/2 mx-auto mt-8 p-6">
                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            Full name
                           </label>
                           <input disabled name="fullname" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="" value="{{$viewData['fullname']}}">
                           {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Email
                           </label>
                           <input disabled name="email" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" value="{{$viewData['user_email']}}">
                         </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                          Telephone 1
                        </label>
                        <input name="mobile1" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" value="{{old('mobile1')}}" placeholder="+220542186981">
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Telephone 2
                        </label>
                        <input name="mobile2" value="{{old('mobile2')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" placeholder="+220542186981">
                      </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                          Country
                        </label>
                        <input name="country" value="{{old('country')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="text" placeholder="Albuquerque">
                      </div>

                      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                          Location
                        </label>
                        <input name="location" value="{{old('location')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                      </div>

                      <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                          Address
                        </label>
                        <input name="address" value="{{old('address')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="text" placeholder="90210">
                      </div>
                    </div>

                    

                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                          Profile Picture
                        </label>
                        <input name="profile_picture" value="{{old('profile_picture')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-password" type="file">
                      </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                         Date of birth
                        </label>
                        <input name="date_of_birth" value="{{old('date_of_birth')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date" >
                        {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                      </div>
                      <div class="w-full md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                          Carerr Commence
                        </label>
                        <input name="career_commence"  value="{{old('career_commence')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date">
                      </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                          Profession
                        </label>
                        <div class="relative">
                          <select name="profession" value="{{old('profession')}}" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                            <option>Building And Contruction</option>
                            <option>Air conditioning and refrigiration</option>
                            <option>TIller</option>
                            <option>Plumber</option>
                            <option>Painting And decoration</option>
                            <option>Welding ANd Fabrication</option>
                            <option>Carpentry</option>
                          </select>
                          <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                          </div>
                        </div>
                      </div>
                 </div>


                    {{-- company service --}}
                    <h2 class="mb-8 mt-6 text-md underline text-center">Highest Education</h2>

                    <div class="flex flex-wrap -mx-3 mb-6">
                         <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
                            School name
                           </label>
                           <input name="school_name" value="{{old('school_name')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" placeholder="Welding and fabircation, plumbering, metal works">
                           {{-- <p class="text-red-500 text-xs italic">Please fill out this field.</p> --}}
                         </div>
                         <div class="w-full md:w-1/2 px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-last-name">
                             Completion Date
                           </label>
                           <input name="completion_name" value="{{old('completion_name')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="date">

                         </div>
                    </div>

                    <div class="flex flex-wrap -mx-3 mb-6">
                      <div class="w-full px-3">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                           Descript your self
                           </label>
                           <textarea name="myself" value="{{old('myself')}}" class="appearance-none block w-full text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" placeholder="Descript yourself"></textarea>
                          
                      </div>

                    <h2 class="mb-8 mt-6 text-md underline text-center">Certificates and Licenses</h2>

                    <div class="flex flex-wrap -mx-3 mb-2">
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-city">
                             School Cerficates - Optional 
                           </label>
                           <input name="school_cert" value="{{old('scholl_cert')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-city" type="file" placeholder="Albuquerque">
                         </div>
     
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                              Other Certificate - Optional
                           </label>
                           <div class="relative">
                              <input name="cert" value="{{old('cert')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="file" placeholder="90210">
                           </div>
                         </div>
     
                         <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                           <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-zip">
                               licenses - Optional
                           </label>
                           <input name="cert1" value="{{old('cert1')}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-zip" type="file" placeholder="90210">
                         </div>
                    </div>

                    <button class="text-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> Button </button>
               </div>
          </form>
     </div>
</body>
</html>