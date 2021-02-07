@extends('layouts.app')

@push('head')
    <script src="{{ asset('js/components/showOrder.js')}}"></script>
@endpush

@section('content')
    <section>
        <div class="order-main-card">
            <a href="/orders">
                <svg class="btn to-orders-btn"
                xmlns="http://www.w3.org/2000/svg"
                height="24" viewBox="0 0 24 24" width="24">
                <path d="M0 0h24v24H0z"
                fill="none"/><path fill="white" d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/></svg></a>
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
