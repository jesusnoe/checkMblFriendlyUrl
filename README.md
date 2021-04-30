# checkMblFriendlyUrl
Small PHP code to test if a url is mobile friendly using the Google Test Mobile-Friendly API

You need to pass two parameters in the URL:

	url 	-> the url you want to check
	apiKey 	-> api key provided by Google

An example:
http://yoururl/check_mbl_friendly.php?url=http://theurltocheck.dot&apiKey=yourgoogleapikey

You will recieve a json object with the Google response.

More information about the Google API:
https://developers.google.com/webmaster-tools/search-console-api/reference/rest/?apix=true

How to create a valid API Key from Google:
https://developers.google.com/maps/documentation/embed/get-api-key

Enjoy coding :)

