@extends('template')

@section('head')
<title>Welcome</title>
<link rel="stylesheet" href="{{ url('css/index.css') }}">
@endsection

@section('main')
<div class="block" id="welcome">
    <h1>Welcome to Currency Converter</h1>
</div>
<a href="{{ route('convert') }}">
    <div class="block" id="get-started">Get Started</div>
</a>
<div id="what">
    <div class="block" id="header">
        <h1>What you can do here?</h1>
    </div>
    <div class="block" id="first">
        <h4>Convert</h4>
            <p>By using our webiste you will know how much money you will end up having 
                after you convert them into another currency</p>
    </div>
    <div class="block" id="second">
        <h4>E-Wallet</h4>
        <p>Additionally, this website has a functionality of a smart wallet, 
            which keeps track of your incomes and outcomes in every category</p>
    </div>
</div>
<div id="contact">
    <div class="block" id="header">
        <h1>Contact Us</h1>
    </div>
    <div class="block">
        <form>
            <label for="email">Email</label>
            <input type="email" name="email">
            <label for="text">Title</label>
            <input type="text" name="title">
            <label for="message">Message</label>
            <input type="text" name="message">
            <input type="submit" name="submit">
        </form>
    </div>
</div>
@endsection