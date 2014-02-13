<?php require 'header.php'; ?>


<div class="container">
    <h2>Business Information</h2>
    <h3 class="text-center">Please enter your business information below. </h3>
</div>
<div class="back-color span-5 steps">
    <ul class="container">
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
            STEP 1 <span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="active col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center">
            STEP 2<span class="glyphicon glyphicon-play hidden-xs"></span>
        </li>
        <li class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-center hidden-xs">
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
<div class="container">   
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label for="businessName"  class="col-sm-4 control-label">Legal Business Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="businessName">
            </div>
        </div>
        <div class="form-group">
            <label for="businessAdress" class="col-sm-4 control-label">Business Address</label>
            <div class="col-sm-6">
                <select class="form-control" id="businessAdress">
                    <option>Business Address</option>
                    <option>Business Address2</option>
                    <option>Business Address3</option>
                    <option>Business Address4</option>
                    <option>Business Address5</option>
                </select>
            </div>
        </div>       
        
        <div class="form-group">
            <label for="businessTelephone" class="col-sm-4 control-label">Business Telephone</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="businessTelephone">
            </div>
        </div>
        <div class="form-group">
            <label for="Zip" class="col-sm-4 control-label">Zip</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="Zip">
            </div>
        </div>
        <div class="form-group">
            <label for="businessyears" class="col-sm-4 control-label">Years in Business</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="businessyears">
            </div>
        </div>
        <div class="form-group">
            <label for="City" class="col-sm-4 control-label">City</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="City">
            </div>
        </div>
        <div class="form-group">
            <label for="LegalType" class="col-sm-4 control-label">Legal Entity Type</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="LegalType">
            </div>
        </div>
        <div class="form-group">
            <label for="State" class="col-sm-4 control-label">State</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" id="State">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-4 col-sm-10">
                <button type="submit" href="step-2.php" class="btn btn-primary">CONTINUE</button>
            </div>
        </div>
         <a href="step-3.php"> Step-3 link >></a>
    </form>

</div>

</div>
<footer></footer>
</body>
</html>