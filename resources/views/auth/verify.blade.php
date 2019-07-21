@extends('layouts.app')

@section('title', 'Verifique seu endereço de e-mail')

@section('content')
    <div class="container mx-auto">
        <div class="flex flex-wrap justify-center">
            <div class="w-full max-w-sm">

                @if (session('resent'))
                    <div class="text-sm border border-t-8 rounded text-success border-success bg-gray-100 px-3 py-4 mb-4" role="alert">
                        Um link de verificação foi enviado para o seu endereço de e-mail
                    </div>
                @endif

                <div class="flex flex-col break-words bg-white border border-2 rounded shadow-md">
                    <div class="font-semibold bg-gray-200 text-gray-700 py-3 px-6 mb-0">
                        Verifique seu endereço de e-mail
                    </div>

                    <div class="w-full flex flex-wrap p-6">
                        <p class="leading-normal mb-6">
                            Antes de prosseguir, por favor acesse seu e-mail e clique no link de verificação.
                        </p>

                        <a class="bg-primary hover:bg-codigofalado text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline no-underline mx-auto" href="{{ route('verification.resend') }}">
                            Reenvie o e-mail de verificação
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection