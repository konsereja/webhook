

@extends('app')


@section('content')

<form method="post" id="ajax_form" action="{{ route('amoapi.handler') }}" >
        <h1>Создать сделку</h1>
        <label >Название сделки </label>
        <input type="text" name="name" required/><br>
        <label >Тег сделки </label>
        <input type="text" name="tag"/><br>
        <label >Бюджет (руб.) </label>
        <input type="number" name="order_price"/><br>
        <label >Реализовать до</label>
        <input type="date" name="date_end"/><br>
        <label >Проект</label>
        <input type="text" name="name_project"/><br>
        <label > Проект одобрен</label>
        <input type="checkbox" name="project_ok"/><br>

        <input type="submit" id="btn" name="btn" value="Отправить" />
    </form>
<br>

    <div id="result_form"></div> 

@stop('content') 