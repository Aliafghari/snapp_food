<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="LoginInfo">
            <x-jet-authentication-card-logo/>
        </x-slot>

        <x-slot name="LoginForm">
            <div
                class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                <h2 class="intro-x font-bold text-2xl xl:text-3xl text-right xl:text-right ">
                    بازنشانی رمزعبور
                </h2>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                <x-jet-validation-errors class="mb-4"/>

                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                    <div class="intro-x mt-8 ">
                        <label for="email"></label>
                        <input type="email" id="email" name="email"
                               :value="{!! old('email', $request->email) !!}"
                               class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4 "
                               placeholder="{!! __('ایمیل') !!}" required autofocus>
                        <label for="password"></label>
                        <input type="password" name="password" id="password"
                               autocomplete="new-password"
                               class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4 "
                               placeholder="رمزعبور" required>
                        <label for="password_confirmation"></label>
                        <input type="password" id="password_confirmation"
                               class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4 "
                               placeholder="تایید رمزعبور" name="password_confirmation" required
                               autocomplete="new-password">
                        {{--                            <div class="intro-x w-full grid grid-cols-12 gap-4 h-1 mt-3 ">--}}
                        {{--                                <div class="col-span-3 h-full rounded bg-theme-10 "></div>--}}
                        {{--                                <div class="col-span-3 h-full rounded bg-theme-10 "></div>--}}
                        {{--                                <div class="col-span-3 h-full rounded bg-theme-10 "></div>--}}
                        {{--                                <div class="col-span-3 h-full rounded bg-gray-200 dark:bg-dark-2"></div>--}}
                        {{--                            </div>--}}
                        {{--                            <button class="intro-x text-gray-600 block my-4 text-xs sm:text-sm">رمزعبور امن چیست؟--}}
                        {{--                            </button>--}}
                    </div>
                    <div class="intro-x mt-5 xl:mt-8 text-right xl:text-right ">
                        <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                                type="submit">{{ __('بازنشانی') }}
                        </button>
                    </div>
                </form>
            </div>
        </x-slot>
    </x-jet-authentication-card>
</x-guest-layout>
