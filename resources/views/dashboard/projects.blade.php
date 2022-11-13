<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        
                        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                            <div class="flex justify-between items-center pb-4 bg-white dark:bg-gray-900">
                                    <div>
                                        <a href="{{route('create_project',Auth::id() ) }}" id="dropdownActionButton" data-dropdown-toggle="dropdownAction" class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-3 py-1.5 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700" >
                                            <span class="sr-only">Action button</span>
                                            New Project
                                            {{-- <svg class="ml-2 w-3 h-3" aria-hidden="true" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg> --}}
                                        </a>
                                        <!-- Dropdown menu -->
                                        <div id="dropdownAction" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                                                <li>
                                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reward</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Promote</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Activate account</a>
                                                </li>
                                            </ul>
                                            <div class="py-1">
                                                <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete User</a>
                                            </div>
                                        </div>
                                    </div>
                                    <label for="table-search" class="sr-only">Search</label>
                                    <div class="relative">
                                        <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                        </div>
                                        <input type="text" id="table-search-users" class="block p-2 pl-10 w-80 text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for anything">
                                    </div>
                                </div>


                            <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
                                <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">
                                            Project ID
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Project Title
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Start Date
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            End Date
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            location
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Client
                                        </th>
                                        <th scope="col" class="py-3 px-6">
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($viewData['user_projects'])
                                        @foreach ($viewData['user_projects'] as $project)
                                            <tr class="bg-blue-500 border-b border-blue-400">
                                                <td class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                                   {{ $project->id;}}
                                                </td>
                                                <td class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                                    {{ $project->project_name;}}
                                                 </td>
                                                 <td class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                                    {{ $project->start_date;}}
                                                 </td>
                                                 <td class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                                    {{ $project->end_date;}}
                                                 </td>
                                                 <td class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                                    {{ $project->location;}}
                                                 </td>
                                                 <td class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                                    {{ $project->client_name;}}
                                                 </td>
                                                <td>
                                                    <a href="{{ route('viewProject', ['user' => Auth::id(), 'project' => $project->id] )  }}">view</a>
                                                    <a href="{{ route('editProject', ['project' => $project->id]) }}">Edit</a>
                                                    
                                                </td>
                                            </tr>
                                        @endforeach

                                        {{-- <tr class="bg-blue-500 border-b border-blue-400">
                                            <th scope="row" class="py-4 px-6 font-medium text-blue-50 whitespace-nowrap dark:text-blue-100">
                                                #12f232
                                            </th>
                                            <td class="py-4 px-6">
                                                Tillys Project
                                            </td>
                                            <td class="py-4 px-6">
                                                Gh1000.00
                                            </td>
                                            <td class="py-4 px-6">
                                                29 April 2020
                                            </td>
                                            <td class="py-4 px-6">
                                                <a href="#" class="font-medium text-white hover:underline">Uncompleted</a>
                                            </td>
                                        </tr> --}}
                                    @else
                                        <tr >
                                            <a href="#" class="text-lg text-center">Create new project here</a>
                                        </tr>
                                    @endif

                                  
                                    
                    
                                </tbody>
                                
                            </table>
                            
                        </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>