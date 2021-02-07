@extends('layouts.app')

@push('head')
    <script src="{{ asset('js/components/deleteBtn.js')}}"></script>
@endpush

@section('content')
    <section>
        <div class="order-main-card">
            <div class="order-main-card_field">
                Название:
                {{$order->name}}
            </div>
            <div class="order-main-card_field">
                Цена:
                {{$order->price}}
            </div>
            <div class="order-main-card_field">
                Статус:
                {{$order->textStatus}}
            </div>
            <button class="btn order-main-card_btn">Удалить</button>
        </div>
    </section>

@endsection
