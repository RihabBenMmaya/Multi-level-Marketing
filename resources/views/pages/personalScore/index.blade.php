<x-app-layout>
    <x-slot name="header_content">
        <h1>
            {{ __('Data Personal Score') }}
        </h1>
        <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Personal Score</a></div>
            <div class="breadcrumb-item"><a href="{{ route('personalScore.index') }}">Data Personal Score</a></div>
        </div>
    </x-slot>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div>
        <livewire:table.main name="personalScore" :model="$personalScore" />
    </div>
</x-app-layout>
