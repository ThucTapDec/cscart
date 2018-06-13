;jQuery.noConflict();
(function($)
{
    var baseUrl = 'https://dashboard.revechat.com/';
    var ReveChat =
    {
        init: function () {
            this.toggleForms();
            this.bindFormSubmit();
        },
        toggleForms: function ()
        {
            var toggleForms = function ()
            {
                if ($('#new_revechat_account').is(':checked'))
                {
                    $('#revechat_already_have').hide();
                    $('#revechat_new_account').show();
                }
                else if ($('#has_revechat_account').is(':checked'))
                {
                    $('#revechat_new_account').hide();
                    $('#revechat_already_have').show();
                }
            };
            toggleForms();
            $('input[type="radio"]').click(toggleForms);
        },
        bindFormSubmit: function () {
            $('#revechat-admin-settings-form').submit(function(e)
            {
                //e.preventDefault();

                if (((parseInt($('input[name=revechat_aid]').val()) !== 0)) || $('#has_revechat_account').is(':checked'))
                {
                    return ReveChat.alreadyHaveAccountForm();
                }
                else
                {
                    return ReveChat.newLicenseForm();
                }

            });
        },
        alreadyHaveAccountForm: function()
        {
            if(this.validEmail())
            {
                if((parseInt($('input[name=revechat_aid]').val()) == 0))
                {
                    var login = $.trim($('#edit-revechat-account-email').val());
                    if(!login.length)
                    {
                        $('#edit-revechat-account-email').focus();
                        return false;
                    }
                    $('.ajax_message').removeClass('message').addClass('wait').html('Please wait&hellip;');
                    ReveChat.signin($('#edit-revechat-account-email').val());
                    return false;
                }
            }
            else
            {
                alert('Please provide your valid email address.');
                $('#edit-revechat-account-email').focus();
                return false;
            }
            return true;
        },
        signin: function (email) {

            var signInUrl = baseUrl +'/license/adminId/'+email+'/?callback=?';

            $.getJSON(signInUrl,
                function(response)
                {

                    if (response.error)
                    {

                        alert('Incorrect REVE Chat login.');
                        $('#edit-revechat-account-email').focus();
                        return false;
                    }
                    else
                    {
                        $('input[name=revechat_aid]').val(response.data.account_id);
                        $('#revechat-admin-settings-form').submit();
                    }
                });
        },
        newLicenseForm: function()
        {
            if (parseInt(($('input[name=revechat_aid]').val()) > 0))
            {
                return true;
            }

            if(this.validateNewLicenseForm())
            {
                $('.ajax_message').removeClass('message').addClass('wait').html('Please wait...');

                ReveChat.createLicense();
            }
            return false;
        },
        createLicense: function()
        {

            $('.ajax_message').removeClass('message').addClass('wait').html('Creating new account&hellip;');

            var firstName = $.trim($('#edit-firstname').val());
            var lastName = $.trim($('#edit-lastname').val());
            var email = $.trim($('#edit-email').val());
            var password = $.trim($('#edit-accountpassword').val());
            var rePassword = $.trim($('#edit-retypepassword').val());

            var signUpUrl = baseUrl + 'revechat/cms/api/signup.do';

            $.ajax({
                data: { 'firstname':firstName, 'lastname':lastName, 'mailAddr':email, 'password':password, 'utm_source':'cms', 'utm_content':'CsCart', 'referrer':'http://marketplace.cs-cart.com/' },
                type:'POST',
                url:signUpUrl,
                dataType: 'json',
                cache:false,
                success: function(response) {
                    if(response.status == 'error')
                    {
                         $('.ajax_message').html(response.message).addClass('message alert').removeClass('wait');
                        return false;
                    }
                    else if(response.status == 'success')
                    {
                        $('#edit-revechat-account-email').val(email);
                        ReveChat.signin(email);
                        return false;
                    }
                }
            });
        },
        validEmail: function()
        {
            if($('input[type=submit]').val() != 'Disconnect'){
                if (/^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,6}$/i.test($('#edit-revechat-account-email').val()) == false)
                {
                    return false;
                }
            }
            return true;
        },
        validateNewLicenseForm: function()
        {
            var firstName = $.trim($('#edit-firstname').val());
            var lastName = $.trim($('#edit-lastname').val());
            var email = $.trim($('#edit-email').val());
            var password = $.trim($('#edit-accountpassword').val());
            var rePassword = $.trim($('#edit-retypepassword').val());

            if (!firstName.length)
            {
                $('.ajax_message').removeClass('wait');
                alert('Please provide your first name.');
                $('#edit-firstname').focus();
                return false;
            }

            if (!lastName.length)
            {
                $('.ajax_message').removeClass('wait');
                alert('Please provide your last name.');
                $('#edit-lastname').focus();
                return false;
            }

            if (!ReveChat.isValidEmailAddress(email))
            {
                $('.ajax_message').removeClass('wait');
                alert('Please provide your valid email address.');
                $('#edit-email').focus();
                return false;
            }

             if(password.length < 6){
                $('.ajax_message').removeClass('wait');
                alert('Please provide your password. The password must be at least 6 characters long.');
                $('#edit-accountpassword').focus();
                return false;
             }

            if(!rePassword.length || password.length < 6){
                $('.ajax_message').removeClass('wait');
                alert('Please retype your password.');
                $('#edit-retypepassword').focus();
                return false;
            }

            if(password != rePassword){
                $('.ajax_message').removeClass('wait');
                alert('Password does not match the confirm password.');
                return false;
            }
            return true;
        },
        isValidEmailAddress: function (emailAddress) {
            var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
            return pattern.test(emailAddress);
        },
    }
    $(document).ready(function()
    {
        ReveChat.init();
    });
})(jQuery);