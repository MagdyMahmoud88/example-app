<x-layout>
    <x-slot name="headings">
        Reqister
    </x-slot>


    <form method="post" action="/reqister">
        @csrf

        <div class="space-y-12">

                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for="name">name</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="name" id="name" required />
                            <x-form-error name="name"/>
                        </div>
                    </x-form-field>

                </div>
            </div>

            <div class="border-b border-gray-900/10 pb-12">

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
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
                    <x-form-field>
                        <x-form-label for="password_confirmation">Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="password_confirmation" name="password_confirmation" id="password_confirmation"  required />
                            <x-form-error name="password_confirmation"/>
                        </div>
                    </x-form-field>

                </div>
            </div>


<div class="text-sm/6 font-semibold text-gray-900 mt-6 it">
            <a  href="/">Cancel</a>
            <x-form-button> Reqister </x-form-button>
        </div>
    </form>


</x-layout>
