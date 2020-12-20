<?php require_once $_SERVER['DOCUMENT_ROOT']. '/app/views/header.php' ?>

<!-- <form name="form_login" action="/mvc/login/login" method="post">
    <label for="login">
        Login
    </label>
    <br/>
    <input type="text" name="login" value="" placeholder="Login" id="login"/>
    <br/>

    <label for="login">
        Password
    </label>
    <br/>
    <input type="password" name="password" value="" placeholder="Password" id="password"/>
    <br/> <br/>
    <input type="submit" value="Sign In"/>

</form> -->

<div class="container">
        <div class="card card-container">
            <!-- <img class="profile-img-card" src="//lh3.googleusercontent.com/-6V8xOA6M7BA/AAAAAAAAAAI/AAAAAAAAAAA/rzlHcD0KYwo/photo.jpg?sz=120" alt="" /> -->
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Login" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                <br>

                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Sign in</button>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->

<?php require_once $_SERVER['DOCUMENT_ROOT']. '/app/views/footer.php' ?>