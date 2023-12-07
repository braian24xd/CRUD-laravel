@extends('adminlte::page')

@section('title', 'Perfil de usuario')

@section('content')
    <x-app-layout>
        

        <div>
            <div id="profile" class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                    <div id="password" class="mt-10 sm:mt-0">
                        @livewire('profile.update-password-form')
                    </div>
                    <x-section-border />
                @endif
            </div>
        </div>
    </x-app-layout>
@stop
