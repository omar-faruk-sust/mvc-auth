
<div class=".col-md-offset-3 .col-md-6 .col-md-offset-3">
    <form class="form-signin" method="post" action="?controller=authentication&action=login">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    </br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required autofocus>
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember_me" value="remember-me"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign In</button>
        <br/>
        <a href="?controller=authentication&action=registration">
            <button class="btn btn-lg btn-primary btn-block" type="button">Sign Up</button>
        </a>
    </form>
</div>