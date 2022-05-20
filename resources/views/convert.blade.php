@extends('template')

@section('head')
<title>Converter</title>
<link rel="stylesheet" href="{{ url('css/convert.css') }}">

@section('main')
<div id="cont">
    <div class="block convert" id="first">
        <h4>Currency</h4>
        <div>
            <p style="color: black;">---</p>
            <ion-icon name="chevron-down-outline" style="color: black;" id="drop-btn1"></ion-icon>
        </div>
        <div class="block" id="dropdown1">
            <ul>
                <li>KZT</li>
                <li>USD</li>
                <li>EUR</li>
                <li>GBP</li>
                <li>JPY</li>
            </ul>
        </div>
        <h4>Amount of Money</h4>
        <input type="text">
    </div>
    <div class="block convert" id="second">
        <h4>Currency</h4>
        <div>
            <p style="color: black;">---</p>
            <ion-icon name="chevron-down-outline" style="color: black;" id="drop-btn2"></ion-icon>
        </div>
        <div class="block" id="dropdown2">
            <ul>
                <li>KZT</li>
                <li>USD</li>
                <li>EUR</li>
                <li>GBP</li>
                <li>JPY</li>
            </ul>
        </div>
        <h4>Amount of Money</h4>
        <input type="text">
    </div>
</div>
<div style="width: 100%; display: flex; justify-content: center;">
    <button class="block" id="conv-btn">Convert</button>
</div>
<script src="{{ url('js/convert.js') }}"></script>
@endsection