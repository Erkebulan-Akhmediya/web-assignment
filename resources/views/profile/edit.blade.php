@extends('template')

@section('head')
<title>Create</title>
<link rel="stylesheet" href="{{ url('css/profile-edit.css') }}">
@endsection

@section('main')
<form class="block">
    <h4>Add New Expenses to {{$user['username']}}</h4>
    <p>Category</p>
    <input type="text" name="category">
    <p>Amount of money</p>
    <input type="number" name="money">
    <input type="submit" value="Add">
</form>
@endsection