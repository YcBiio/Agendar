@extends('layouts.guest')

@section('content')
    <div class="w-full max-w-md mx-auto bg-white rounded shadow p-8">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Créer un compte</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Nom</label>
                <input id="name" name="name" type="text" required autofocus
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" name="email" type="email" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" name="password" type="password" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirmation</label>
                <input id="password_confirmation" name="password_confirmation" type="password" required
                       class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">S'inscrire</button>

            <p class="mt-4 text-center text-sm text-gray-600">
                Déjà inscrit ?
                <a href="{{ route('login') }}" class="text-blue-600 hover:underline">Se connecter</a>
            </p>
        </form>
    </div>
@endsection
