@extends('layouts.app')

@section('content')
    <section>
            <form action="/orders" method="POST" class="create-order-form">
                @csrf
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
                        <option value="1">Доставлен</option>
                        <option value="0">В ожидании</option>
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
