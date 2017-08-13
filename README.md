# reCAPTCHA-with-PHP-
integrate reCAPTCHA with a PHP form (easy on Humans, HARD on Bots)


Go to google.com/recaptcha

Give any label name; for Domain, put in your domain name (I did this on WAMP so I entered localhost)

Click Register and you'll get a Site key, a Secret key, JS plugin for recaptcha and a <div> tag to paste at the end of the submit form

Inside index.html- simple input box and div for recaptcha (enter the Site key also)

Get the values entered on response.php (POST request)

From Google documentation of reCAPTCHA-

When your users submit the form where you integrated reCAPTCHA, you'll get as part of the payload a string with the name "g-recaptcha-response". In order to check whether Google has verified that user, send a POST request with these parameters: secret, response, remoteip

URL: https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$captcha&remoteip=$ip

Use file_get_contents to get content from the URL above and use json_decode because the response is a JSON object

Use if contdition to check if the hash contains success/failure
