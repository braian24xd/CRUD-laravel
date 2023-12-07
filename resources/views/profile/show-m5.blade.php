@extends('adminlte::page')

@section('title', 'Perfil de usuario')

@section('content')
    <x-app-layout>
        

        <div>
            <div id="profile" class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
                @if (Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures())
                    <x-section-border />

                    <div id="delete" class="mt-10 sm:mt-0">
                        @livewire('profile.delete-user-form')
                    </div>
                @endif
            </div>
        </div>
    </x-app-layout>
@stop
