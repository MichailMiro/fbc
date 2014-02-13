<?php require 'header.php'; ?>


<div class="container">
    <h2>Financial Needs</h2>
    <h3 class="text-center">Tell us a little bit about your borrowing needs</h3>
</div>
<div class="back-color span-5 steps">
    <ul class="container">
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 1 <span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 2<span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 3<span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
            STEP 4<span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 5
        </li>
    </ul>
</div>
<form class="form-horizontal" role="form" method="post" action="/cart/steps/4">
    <div class="container">   

        <div class="form-group">
            <label for="Howmuch" class="col-sm-5 control-label">How much would you like to borrow?</label>
            <div class="col-xs-5">
                <select class="form-control" id="Howmuch" name="how_much">
                    <option>How much</option>
                    <option>How much2</option>
                    <option>How much3</option>
                    <option>How much4</option>
                    <option>How much5</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="Howsoon" class="col-sm-5 control-label">How soon do you need the money?</label>
            <div class="col-xs-5">
                <select class="form-control" id="Howsoon" name="how_soon">
                    <option>How soon</option>
                    <option>How soon</option>
                    <option>How soon</option>
                    <option>How soon</option>
                    <option>How soon</option>
                </select>
            </div>
        </div>

    </div>

    <hr>

    <div class="container">
        <h3 class="text-center">Tell us how you intend to use the loan </h3>
        <div class="form-group ">
            <div class="col-xs-6 col-md-4 col-lg-4 text-right">
                <label class="checkbox-inline">
                    Buying equipment <input type="checkbox" id="inlineCheckbox1" value="option1" name="loan[]">
                </label>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 text-right">
                <label class="checkbox-inline">
                    Remodeling/Expansion <input type="checkbox" id="inlineCheckbox2" value="option2" name="loan[]">
                </label>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 text-right">
                <label class="checkbox-inline">
                    Refinancing debt <input type="checkbox" id="inlineCheckbox3" value="option3" name="loan[]">
                </label>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 text-right">
                <label class="checkbox-inline">
                    Hiring employees <input type="checkbox" id="inlineCheckbox4" value="option4" name="loan[]">
                </label>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 text-right">
                <label class="checkbox-inline">
                    Working capital <input type="checkbox" id="inlineCheckbox5" value="option5" name="loan[]">
                </label>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 text-right">
                <label class="checkbox-inline">
                    Purchasing inventory  <input type="checkbox" id="inlineCheckbox6" value="option6" name="loan[]">
                </label>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 text-right">
                <label class="checkbox-inline">
                    Marketing <input type="checkbox" id="inlineCheckbox7" value="option7" name="loan[]">
                </label>
            </div>
            <div class="col-xs-6 col-md-4 col-lg-4 text-right">
                <label class="checkbox-inline">
                    Other <input type="checkbox" id="inlineCheckbox8" value="option8" name="loan[]">
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" class="btn btn-primary">CONTINUE</button>
            </div>
        </div>
    </div>
</form>

</div>
<footer></footer>
</body>
</html>