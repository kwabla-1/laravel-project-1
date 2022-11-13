<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <script src="https://cdn.tailwindcss.com"></script>
     <title>Create An estimate</title>
</head>
<body>
     <div class="max-w-2xl mx-auto  p-16">

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
                                   <div class="flex justify-between border-b-2">
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
                                   
                                   {{-- DESCRIPTION --}}
                                   <div class="">
                                       <h2 class="uppercase">Item Description</h2>
                                       <div class="">
                                           <div class="">
                                              <table>
                                                   <thead>
                                                       <tr>
                                                           <th>&nbsp;</th>
                                                           <th>Description</th>
                                                           <th>Rate</th>
                                                           <th>Quantity</th>
                                                           <th>Amount</th>
                                                           <th>Tax</th>
                                                       </tr>
                                                   </thead>
       
                                                   <tbody>
                                                       <tr>
                                                           <td>
                                                               <div class="">
                                                                   <button>X</button>
                                                               </div>
                                                           </td>
                                                           <td>
                                                               <span>
                                                                   <div class="">
                                                                       <input type="text" placeholder="Enter a description">
                                                                   </div>
                                                               </span>
                                                               <span>
                                                                   <div class="">
                                                                       <textarea name="" id="" placeholder="Additional Inform" style="height: 60px !important;"></textarea>
                                                                   </div>
                                                               </span>
                                                           </td>
                                                           
                                                           <td>
                                                               <span>
                                                                   <input type="text">
                                                               </span>
                                                           </td>
       
                                                           <td>
                                                               <span>
                                                                   <input type="text">
                                                               </span>
                                                           </td>
       
                                                           <td>
                                                               <span>
                                                                   <input type="text">
                                                               </span>
                                                           </td>
       
                                                           <td>
                                                               <input type="checkbox">
                                                           </td>
                                                       </tr>
                                                   </tbody>
                                              </table>
       
                                              <h1>Notes</h1>
                                              <textarea name="" id="" cols="30" rows="10" placeholder="Enter notes"></textarea>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                               <button>Submit to client</button>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
     
     </div>
</body>
</html>