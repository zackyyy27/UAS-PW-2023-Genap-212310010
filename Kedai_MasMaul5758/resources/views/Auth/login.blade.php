<link rel="stylesheet" type="text/css" href="css/Login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7?.0/css/font-awesome.min.css">

{{-- GIMANA NGABS? --}}

<title>Login</title>

<div class="container">
    <div class="login-box">
        <img src={{ '../assets/Kedai.png' }} alt="Logo" class="logo">
        <h2>Login</h2>
        <form action="/login" method="post">
            @csrf
            <div class="user-box" style="margin-bottom:50px">
                <input type="text" name="code" required="" id="code" autofocus>
                <label for="code">Code</label>
            </div>
            <div class="user-box" style="margin-bottom:30px">
                <input type="text" name="password" id="password" required="">
                <label for="password">Password</label>
            </div>
            <div class="showpw">
                <input type="checkbox" id="show-password" name>
                <label for="show-password" class="show-password-label">Show Password</label>
            </div>
            <div>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
</div>

<script src="js/validasilogin.js"></script>
