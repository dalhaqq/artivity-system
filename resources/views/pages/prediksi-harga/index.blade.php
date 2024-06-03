@extends('layouts.landing')

@section('title', 'Prediksi Harga')

@section('content')
    <section class="min-h-screen bg-white">
        <div class="py-8 px-4 mx-auto max-w-screen-xl">
            <div>
                <livewire:uploader /> 
            </div>
        </div>
    </section>
@endsection
