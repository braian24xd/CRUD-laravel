@extends('adminlte::page')

@section('title', 'Perfil de usuario')

@section('content')
    <x-app-layout>
        <div>
            <div id="profile" class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">

                <div id="sessions" class="mt-10 sm:mt-0">
                    @livewire('profile.logout-other-browser-sessions-form')
                </div>

            </div>
        </div>
    </x-app-layout>
@stop
