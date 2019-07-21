@extends('layouts.app')

@section('title', 'Login')

@section('content')

<div class="w-full max-w-xs mx-auto">
  <form method="POST" action="{{ route('login') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
    @csrf
    <div class="mb-4">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
        E-mail
      </label>
      <input id="email" type="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('email') border-error @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
            <p class="text-error text-xs italic" role="alert">
                <strong>{{ $message }}</strong>
            </p>
        @enderror
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
        Password
      </label>
      <input id="password" type="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline @error('password') border-error @enderror" name="password" required autocomplete="current-password">
        @error('password')
            <p class="text-error text-xs italic" role="alert">
                <strong>{{ $message }}</strong>
            </p>
        @enderror
    </div>
    <div class="mb-6">
      <label class="block text-gray-700 text-sm font-bold mb-2">
        <input class="mr-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> 
        Lembre de Mim
      </label>
    </div>
    <div class="flex items-center justify-between">
      <button class="bg-primary hover:bg-codigofalado text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
        Entrar
      </button>
        @if (Route::has('password.request'))
            <a class="inline-block align-baseline font-bold text-sm text-codigofalado hover:text-gray-800" href="{{ route('password.request') }}">
                Esqueceu a Senha?
            </a>
        @endif
    </div>
  </form>
</div>
@endsection
