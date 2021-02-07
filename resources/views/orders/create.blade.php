@extends('layouts.app')

@section('content')
    <section>
            <form action="/orders" method="POST" class="create-order-form">
                @csrf
                <a href="/orders">
                    <svg class="btn to-orders-btn"
                         xmlns="http://www.w3.org/2000/svg"
                         height="24" viewBox="0 0 24 24" width="24">
                        <path d="M0 0h24v24H0z"
                              fill="none"/><path fill="white" d="M21 11H6.83l3.58-3.59L9 6l-6 6 6 6 1.41-1.41L6.83 13H21z"/></svg></a>
                <div>
                    <label for="name" class="create-order-form_label">Название Товара:</label>
                    <input name="name" type="text" class="create-order-form_input">
                </div>
                <div>
                    <label for="price" class="create-order-form_label">Цена:</label>
                    <input name="price" type="text" class="create-order-form_input">
                </div>
                <div>
                    <label for="status" class="create-order-form_label">Статус Заказа:</label>
                    <select name="status" class="create-order-form_input">
                        <option value="0">В пути</option>
                        <option value="1">В ожидании</option>
                        <option value="">Отменен</option>
                    </select>
                </div>

                <button type="submit" class="btn create-order-form_btn">
                    Создать Заказ
                </button>
                @if (count($errors))
                    <ul class="alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
            </form>
            </form>
    </section>

@endsection
