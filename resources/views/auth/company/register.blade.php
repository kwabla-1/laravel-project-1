<x-guest-layout>
     <x-auth-card>
          <a href="/">Fleet Gang</a>
     </x-auth-card>

     <form method="POST" action="">
          @csrf

          <!-- Name -->
          <div>
               <x-input-label for="company_name" :value="__('Company name')" />
               <x-text-input id="company_name" class="block mt-1 w-full" type="text" name="company_name" :value="old('company_name')" required autofocus />
               <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
           </div>

            <!-- Email Address -->
            <div class="mt-4">
               <x-input-label for="email" :value="__('Companys Corperate email')" />
               <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
               <x-input-error :messages="$errors->get('email')" class="mt-2" />
           </div>

           <!-- Password -->
           <div class="mt-4">
               <x-input-label for="password" :value="__('Password')" />
               <x-text-input id="password" class="block mt-1 w-full" type="password"  name="password" required autocomplete="new-password" />
               <x-input-error :messages="$errors->get('password')" class="mt-2" />
           </div>

           <!-- Confirm Password -->
           <div class="mt-4">
               <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
               <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required />
               <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
           </div>

           <div class="flex items-center justify-end mt-4">
               <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                   {{ __('Already registered?') }}
               </a>

               <x-primary-button class="ml-4">
                   {{ __('Register') }}
               </x-primary-button>
           </div>
     </form>
</x-guest-layout>