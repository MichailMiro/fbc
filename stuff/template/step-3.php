<?php require 'header.php'; ?>


<div class="container">
    <h2>About You</h2>
    <h3 class="text-center">This will be used to review your personal credit report.</h3>
</div>
<div class="back-color span-5 steps">
    <ul class="container">
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 1 <span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 2<span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
            STEP 3<span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 4<span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 5
        </li>
    </ul>
</div>
<form class="form-horizontal" role="form" method="post" action="/cart/steps/3">
    <div class="container">   
        <div class="form-group">
            <label for="firstName"  class="col-sm-4 control-label">First Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="firstName" name="first_name">
            </div>
        </div>
        <div class="form-group">
            <label for="lastName"  class="col-sm-4 control-label">Last Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="lastName" name="last_name">
            </div>
        </div>
        <div class="form-group">
            <label for="SocialSecurity" class="col-sm-4 control-label">Last 4 Digits of Social Security</label>
            <div class="col-sm-6">
                <select class="form-control" id="SocialSecurity" name="social_security">
                    <option>Digits of Social Security1</option>
                    <option>Digits of Social Security2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Date" class="col-sm-4 control-label">Date of Birth</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Date" name="date">
            </div>
        </div>
        <div class="form-group">
            <label for="Phone" class="col-sm-4 control-label">Home Phone</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Phone" name="home_phone">
            </div>
        </div>
        <div class="form-group">
            <label for="homeAddress" class="col-sm-4 control-label">Home Address</label>
            <div class="col-sm-6">
                <select class="form-control" id="homeAddress" name="home_address">
                    <option>Home Address1</option>
                    <option>Home Address2</option>
                    <option>Home Address3</option>
                    <option>Home Address4</option>
                    <option>Home Address5</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Zip" class="col-sm-4 control-label">Zip</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Zip" name="zip_code">
            </div>
        </div>
        <div class="form-group">
            <label for="City" class="col-sm-4 control-label">City</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="City" name="city">
            </div>
        </div>
        <div class="form-group">
            <label for="State" class="col-sm-4 control-label">State</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="State" name="state">
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <h3 class="text-center">By continuing, I agree Application Agreement and E-sign Consent Agreement</h3>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-4 control-label">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" id="inputEmail" name="email">
            </div>
        </div>
        <div class="form-group">
            <label for="inputPassword3" class="col-sm-4 control-label">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" id="inputPassword3" name="password">
            </div>
        </div>
        <div class="form-group">
            <small class="col-sm-offset-4 col-sm-10">
                <i>Password must be between 8 and 30 characters</i>
            </small>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" href="step-2.php" class="btn btn-primary">CONTINUE</button>
            </div>
        </div>
       
    </div>
</form>


</div>
<footer></footer>
</body>
</html>