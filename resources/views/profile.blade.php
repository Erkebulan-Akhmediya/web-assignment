<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="{{ url('css/profile.css') }}">
    <!--<scrpit type="text/javascript" src="{{ url('js/profile.js') }}" defer></scrpit>-->
</head>
<body>
    <header>
        <div class="block" id="profile">
            <h1>John Doe</h1>
        </div>
        <div class="block" id="info">
            <a href="{{ route('index') }}" style="color: white;">Home</a>
            <a href="{{ route('convert') }}" style="color: white;">Convert</a>
            <a href="{{ route('about') }}" style="color: white;">About</a>
            <a href="{{ route('contact') }}" style="color: white;">Contact</a>
        </div>
    </header>
    <main>
        <div class="block" id="monthly">
            <h4>Biggest Category</h4>
            <h4>Lowest Category</h4>
            <p>Food: 268412</p>
            <p>Entertainment: 327416</p>
        </div>
        <div class="block" id="categories">
            <h4>Categories</h4>
            <p>Electronics</p>
            <div class="prog-bar">
                <div id="electronics" style="height: 100%; width: 50%; background-color: red;"></div>
            </div>
            <p>Education</p>
            <div class="prog-bar">
                <div id="electronics" style="height: 100%; width: 70%; background-color: orange;"></div>
            </div>
            <p>Healthcare</p>
            <div class="prog-bar">
                <div id="electronics" style="height: 100%; width: 40%; background-color: yellow;"></div>
            </div>
            <p>Entertainment</p>
            <div class="prog-bar">
                <div id="electronics" style="height: 100%; width: 30%; background-color: green;"></div>
            </div>
            <p>Clothes</p>
            <div class="prog-bar">
                <div id="electronics" style="height: 100%; width: 60%; background-color: lightskyblue;"></div>
            </div>
            <p>Food</p>
            <div class="prog-bar">
                <div id="electronics" style="height: 100%; width: 90%; background-color: blue;"></div>
            </div>
            <p>Other</p>
            <div class="prog-bar">
                <div id="electronics" style="height: 100%; width: 80%; background-color: purple;"></div>
            </div>
        </div>
        <div class="block" id="daily">
            <h4>Daily Expenses</h4>
            <p>5773</p>
        </div>
        <div class="block" id="how-much">
            <h4>How Much Did You Spend Today?</h4>
            <p>Category</p>
            <div>
                <p style="color: black; font-size: 20px;" id="categ">---</p>
                <ion-icon name="chevron-down-outline" style="color: black;" id="btn"></ion-icon>
            </div>
            <p>Amount of Money</p>
            <input type="text">
            <button>Add</button>
        </div>
        <div id="drp-down">
            <ul>
                <li>Electronics</li>
                <li>Education</li>
                <li>Healthcare</li>
                <li>Entertainment</li>
                <li>Clothes</li>
                <li>Food</li>
                <li>Other</li>
            </ul>
        </div>
    </main>
    <footer>
        <ul>
            <li><a href="{{ route('profile') }}">Profile</a></li>
            <li><a href="{{ route('index') }}">Home</a></li>
            <li><a href="{{ route('convert') }}">Convert</a></li>
            <li><a href="{{ route('about') }}">About</a></li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
            <li><a href="{{ route('logres') }}">Sign In / Sign Up</a></li>
        </ul>
    </footer>
    <script>
        document.getElementById('btn').addEventListener('click', () => {
            if (document.getElementById('drp-down').style.display == 'block') {
                document.getElementById('drp-down').style.display = 'none';
            } else {
                document.getElementById('drp-down').style.display = 'block';
            }
        })

        for (let i = 0; i < 7; i++) {
            document.getElementsByTagName('li')[i].addEventListener('click', () => {
                document.getElementById('categ').innerHTML = document.getElementsByTagName('li')[i].innerHTML;
            })
        }
    </script>
    <!-- icons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>