<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.tailwindcss.com"></script>
     <title>Create projects</title>
</head>
<body>
     <div class="max-w-2xl mx-auto  p-16">

          <form method="POST" action="{{route('store_project')}}">
               @csrf
               <div class="grid gap-6 mb-6 lg:grid-cols-2">
                    <div>
                         <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project name</label>
                         <input type="text" id="first_name" name="project_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tilly's Cabinent" required>
                    </div>
                    <div>
                         <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">client_name</label>
                         <input type="text" id="name" name="client_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Doe" required>
                    </div>
                    <div>
                         <label for="company" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Start Date</label>
                         <input type="date" id="company" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="start_date" required>
                    </div>  
                    <div>
                         <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">End Date</label>
                         <input type="date" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="end_date" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                    </div>
                    <div>
                         <label for="website" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project Location</label>
                         <input type="text" id="location" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="project_location" required>
                    </div>
                    <div>
                         <label for="visitors" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Project size</label>
                         <select name="project_size" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                              <option value="small">Small</option>
                              <option value="medium">medium</option>
                              <option value="large">large</option>
                              <option value="mega">Mega</option>
                         </select>
                    </div>
               </div>
               <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Description</label>
                   <textarea name="project_description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" cols="30" rows="10"></textarea>
               </div> 
               <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Images</label>
                    <input type="file" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="project_images" required>
               </div> 
               <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Videos</label>
                    <input type="file" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" name="project_videos" required>
               </div> 
               {{-- <div class="mb-6">
                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">project_size	</label>
                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="•••••••••" required>
               </div> 
               <div class="flex items-start mb-6">
                    <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800" required>
                    </div>
                    <label for="remember" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-400">I agree with the <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a>.</label>
               </div> --}}
               <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
          </form>
     
     </div>
</body>
</html>