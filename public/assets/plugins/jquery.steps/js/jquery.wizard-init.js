
!function($) {
    "use strict";

    var FormWizard = function() {};

    FormWizard.prototype.createBasic = function($form_container) {
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft"
        });
        return $form_container;
    },
    //creates form with validation
    FormWizard.prototype.createValidatorForm = function($form_container) {
        $form_container.validate({
            errorPlacement: function errorPlacement(error, element) {
                element.after(error);
            }
        });
        $form_container.children("div").steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex) {
                $form_container.validate().settings.ignore = ":disabled,:hidden";
                return $form_container.valid();
            },
            onFinishing: function (event, currentIndex) {
                $form_container.validate().settings.ignore = ":disabled";
                return $form_container.valid();
            },
            onFinished: function (event, currentIndex) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                let myForm = document.getElementById('wizard-validation-form');
                $.ajax({
                    type: 'POST',
                    url: '/admin/create/user',
                    data: new FormData(myForm),
                    dataType: 'JSON',
                    contentType: false,
                    processData: false,
                    beforeSend: function(){
                        $('#otpBtn').html('Requesting...');
                        $('#otpBtn').attr('disabled', 'disabled');
                    },
                    success:function(response){
                        $('#otpBtn').html('Mail Sent');
                        $('#res_message').html(response.success);
                        $('#msg_div').show();
                        setTimeout(function(){
                        // $('#res_message').hide();
                        // $('#msg_div').hide();
                            $('#otpBtn').removeAttr('disabled');
                            $('#otpBtn').html('Request Again?');
                        },3000);
                    },
                    error: function (response) {
                        console.log({response})
                        $('#otpBtn').html('Mail Sent');
                        $('#res_message').html(response);
                        $('#msg_div').show();
                        setTimeout(function(){
                        // $('#res_message').hide();
                        // $('#msg_div').hide();
                            $('#otpBtn').removeAttr('disabled');
                            $('#otpBtn').html('Request Again?');
                        },3000);
                    },
                });
            }
        });

        return $form_container;
    },
    //creates vertical form
    FormWizard.prototype.createVertical = function($form_container) {
        $form_container.steps({
            headerTag: "h3",
            bodyTag: "section",
            transitionEffect: "fade",
            stepsOrientation: "vertical"
        });
        return $form_container;
    },
    FormWizard.prototype.init = function() {
        //initialzing various forms

        //basic form
        this.createBasic($("#basic-form"));

        //form with validation
        this.createValidatorForm($("#wizard-validation-form"));

        //vertical form
        this.createVertical($("#wizard-vertical"));
    },
    //init
    $.FormWizard = new FormWizard, $.FormWizard.Constructor = FormWizard
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.FormWizard.init()
}(window.jQuery);
