@extends('adminlte::page')

@section('title', 'Perfil de usuario')

@section('content')
    <x-app-layout>
        

        <div>
            <div id="profile" class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Fortify\Features::canUpdateProfileInformation())
                    @livewire('profile.update-profile-information-form')

                    <x-section-border />
                @endif
            </div>
        </div>
    </x-app-layout>
@stop
