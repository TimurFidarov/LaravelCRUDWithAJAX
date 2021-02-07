@extends('layouts.app')

@push('head')
    <script src="{{ asset('js/components/deleteBtn.js')}}"></script>
    <script src="{{ asset('js/components/selectStatus.js')}}"></script>
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
                <select  id="status" class="status-select select">
                    <option @if($order->status === null) selected @endif value="abolished">Отменен</option>
                    <option @if($order->status === false) selected @endif value="0">В пути</option>
                    <option @if($order->status === true) selected @endif value="1">Ожидает</option>
                </select>
            </div>
            <button class="btn order-main-card_btn">Удалить</button>
        </div>
    </section>

@endsection
