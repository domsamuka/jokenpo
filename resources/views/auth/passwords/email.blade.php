@extends('layouts.app')

@section('title', 'Recupere sua Senha')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">

                @if (session('status'))
                    <div class="text-sm border border-t-8 rounded text-success border-success bg-gray-100 px-3 py-4 mb-4" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">

                    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                        Esqueci Minha Senha
                    </div>

                    <form class="w-full p-6" method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="flex flex-wrap mb-6">
                            <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                                {{ __('E-Mail Address') }}:
                            </label>

                            <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker leading-tight focus:outline-none focus:shadow-outline{{ $errors->has('email') ? ' border-error' : '' }}" name="email" value="{{ old('email') }}" required>

                            @if ($errors->has('email'))
                                <p class="text-error text-xs italic mt-4">
                                    {{ $errors->first('email') }}
                                </p>
                            @endif
                        </div>

                        <div class="flex flex-wrap">
                            <button type="submit" class="bg-primary hover:bg-codigofalado text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Enviar Link de Redefinição de Senha
                            </button>

                            <p class="w-full text-xs text-center text-grey-dark mt-8 -mb-4">
                                <a class="text-codigofalado hover:text-gray-700 no-underline" href="{{ route('login') }}">
                                    Voltar para Login
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection