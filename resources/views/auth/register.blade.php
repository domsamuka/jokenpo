@extends('layouts.app')

@section('title', 'Registre-se')

@section('content')
<div class="flex flex-wrap justify-center">
    <div class="w-full max-w-sm">
        <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

            <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                {{ __('Cadastre-se') }}
            </div>

            <form class="w-full p-6" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="flex flex-wrap mb-6">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Name') }}:
                    </label>

                    <input id="name" type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('name') ? ' border-error' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                    @if ($errors->has('name'))
                        <p class="text-error text-xs italic mt-4">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('E-Mail Address') }}:
                    </label>

                    <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-error' : '' }}" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <p class="text-error text-xs italic mt-4">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Password') }}:
                    </label>

                    <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('password') ? ' border-error' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <p class="text-error text-xs italic mt-4">
                            {{ $errors->first('password') }}
                        </p>
                    @endif
                </div>

                <div class="flex flex-wrap mb-6">
                    <label for="password-confirm" class="block text-gray-700 text-sm font-bold mb-2">
                        {{ __('Confirm Password') }}:
                    </label>

                    <input id="password-confirm" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="password_confirmation" required>
                </div>

                <div class="flex flex-wrap">
                    <button type="submit" class="inline-block align-middle text-center select-none border font-bold whitespace-no-wrap py-2 px-4 rounded text-base leading-normal no-underline text-gray-100 bg-primary hover:bg-codigofalado">
                        {{ __('Cadastrar') }}
                    </button>

                    <p class="w-full text-xs text-center text-gray-700 mt-8 -mb-4">
                        Já tem uma conta?
                        <a class="text-codigofalado hover:text-gray-700 no-underline" href="{{ route('login') }}">
                            Login
                        </a>
                    </p>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection