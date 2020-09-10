<!DOCTYPE html>
<html>
<head>
    <title>Chal bhag</title>
    <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/animate.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/chosen.min.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/icofont.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/themify-icons.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/meanmenu.min.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/bundle.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/style.css">
        <link rel="stylesheet" href="{{URL::to('')}}/public/assets/frontend/css/responsive.css">
        <script src="{{URL::to('')}}/public/assets/frontend/js/vendor/modernizr-2.8.3.min.js"></script>
        <script type="text/javascript">
        $(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;
 
    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});
    </script>
</head>
<body>

<div class="container-fluid">
<div class="row">
<div class="col-md-4 col-xs-12">
<form accept-charset="UTF-8" action="/" class="require-validation"
    data-cc-on-file="false"
    data-stripe-publishable-key="test_public_key"
    id="payment-form" method="post">
    {{ csrf_field() }}
    <div class='form-row'>
        <div class='col-xs-12 form-group required'>
            <label class='control-label'>Name on Card</label> <input
                class='form-control' size='4' type='text'>
        </div>
    </div>
    <div class='form-row'>
        <div class='col-xs-12 form-group card required'>
            <label class='control-label'>Card Number</label> <input
                autocomplete='off' class='form-control card-number' size='20'
                type='text'>
        </div>
    </div>
    <div class='form-row'>
        <div class='col-xs-4 form-group cvc required'>
            <label class='control-label'>CVC</label> <input autocomplete='off'
                class='form-control card-cvc' placeholder='ex. 311' size='4'
                type='text'>
        </div>
        <div class='col-xs-4 form-group expiration required'>
            <label class='control-label'>Expiration</label> <input
                class='form-control card-expiry-month' placeholder='MM' size='2'
                type='text'>
        </div>
        <div class='col-xs-4 form-group expiration required'>
            <label class='control-label'> Expiry </label> <input
                class='form-control card-expiry-year' placeholder='YYYY' size='4'
                type='text'>
        </div>
    </div>
    <div class='form-row'>
        <div class='col-md-12'>
            <div class='form-control total btn btn-info'>
                Total: <span class='amount'>$300</span>
            </div>
        </div>
    </div>
    <div class='form-row'>
        <div class='col-md-12 form-group'>
            <button class='form-control btn btn-primary submit-button'
                type='submit' style="margin-top: 10px;">Pay »</button>
        </div>
    </div>
    
    <div class='form-row'>
        <div class='col-md-12 error form-group hide'>
            <div class='alert-danger alert'>Please correct the errors and try
                again.</div>
        </div>
    </div>
</form>

</div>
</div> <!--this is row ending -->
</div> <!-- this is container ending -->

<!-- all js here -->
        <script src="{{URL::To('')}}/public/assets/frontend/js/vendor/jquery-1.12.0.min.js"></script>
        <script src="{{URL::To('')}}/public/assets/frontend/js/popper.js"></script>
        <script src="{{URL::To('')}}/public/assets/frontend/js/bootstrap.min.js"></script>
        <script src="{{URL::To('')}}/public/assets/frontend/js/isotope.pkgd.min.js"></script>
        <script src="{{URL::To('')}}/public/assets/frontend/js/imagesloaded.pkgd.min.js"></script>
        <script src="{{URL::To('')}}/public/assets/frontend/js/jquery.counterup.min.js"></script>
        <script src="{{URL::To('')}}/public/assets/frontend/js/waypoints.min.js"></script>
        
        <script src="{{URL::To('')}}/public/assets/frontend/js/owl.carousel.min.js"></script>
        <script src="{{URL::To('')}}/public/assets/frontend/js/plugins.js"></script>
        <script src="{{URL::To('')}}/public/assets/frontend/js/main.js"></script>

</body>
</html>