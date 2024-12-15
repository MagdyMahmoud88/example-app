<x-layout>
    <x-slot name="headings">
        login
    </x-slot>


    <form method="post" action="/login">
        @csrf

        <div class="space-y-12">

            <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <x-form-field>
                    <x-form-label for="Email">Email</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="email" name="Email" id="Email"  required />
                        <x-form-error name="Email"/>
                    </div>
                </x-form-field>

                <x-form-field>
                    <x-form-label for="password">password</x-form-label>
                    <div class="mt-2">
                        <x-form-input type="password" name="password" id="password" required />
                        <x-form-error name="password"/>
                    </div>
                </x-form-field>
            </div>
        </div>



        <div class="text-sm/6 font-semibold text-gray-900 mt-6 it">
            <a  href="/">Cancel</a>
            <x-form-button> Log In </x-form-button>
        </div>
    </form>


</x-layout>
