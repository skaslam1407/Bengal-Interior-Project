=== Sitepact's Contact Form 7 Extension For Klaviyo ===
Contributors: ryonwhyte, sitepact
Donate link: https://paypal.me/ryonwhyte
Tags: contact form 7, klaviyo, klaviyo custom fields, newsletter, audiences, cf7
Requires at least: 4.7
Tested up to: 6.0.3
Stable tag: 5.3.1
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Integrate Contact Form 7 with Klaviyo. Automatically add form submissions to predetermined lists and fields in Klaviyo.

== Description ==

WordPress Extension for Klaviyo. Integrate Contact form 7 With Klaviyo. This plugin allows you to send form submissions into Klaviyo. This form data is added to profiles (leads, contacts, audience) in preconfigured lists. You can then use this for segmentation and other powerful marketing features within Klaviyo.
This extension allows you to send data to multiple lists and use multiple Klaviyo API keys.
This plugin will keep a log of all data sent to Klaviyo. From the log you can also resend requests.

> <strong>Contact Form 7 Extension For Klaviyo Support</strong><br>
> We will try our best to solve issues in the WordPress forums. However, you can also get one and one support directly at the [developer's website](https://sitepact.com/contact-form-7-klaviyo-integration/) over email or live chat (when available).
>
> <strong>Bug Reports</strong><br>
> Bug reports for the Contact Form 7 Mailchimp Extension are welcome at the WordPress developer's website.

= Key Features =

* FREE!
* Easy to use
* Support for many custom fields
* Unlimited contact forms
* Use a different Klaviyo API Key per contact form
* Use a different Klaviyo mailing list per contact form
* Log all form submission with option to resend.
* Opt-in checkbox – add the chance to opt-in/opt-out
* GDPR privacy checkbox – Add text and supporting privacy link
* Constantly updated

= Premium Features =

* Add Unlimited Custom Fields to Klaviyo
* Trigger Custom Metric Flows in Klaviyo
* Create Unsubscribe Form with Contact Form 7
* NEW Subscribe phone number for SMS marketing in Klaviyo
* NEW Exclude data from profile but send to metric flow
* Many more features coming soon
[Get the PRO version]( https://sitepact.com/contact-form-7-klaviyo-integration/)

= Requirements =

1. Contact Form 7
2. Klaviyo account

= How to Use =
1. Go to Contact Form 7 and edit the form you are configuring
2. Go to the Klaviyo Tab and check the “Enable Klaviyo Integration” Box
3. Enter your Klaviyo API key
4. Select the list where you want your entries to go
5. Map Fields
6. Save form and test.

== Frequently Asked Questions ==

Do you have questions or issues with Contact Form 7 Klaviyo Extension? Use these support channels appropriately.

= Where do I get support? =

Our team provides free support at the [developer's website](https://sitepact.com/contact-form-7-klaviyo-integration/) or Live Chat if available. You may also request support in the WordPress forums, though directly at the developers website may be faster.

= Submissions not going to Klaviyo =

There are **4 main reasons** for this.
1. Single Opt-In in not enabled on the Klaviyo list
	*If single opt-in is not enabled on a klaviyo list then subscribers will need to click the confirmation link that klaviyo sends to their email address before they are added to list.

2. GDPR option is enabled
	*If the GDPR option is enabled in the plugin and the user does not consent on the form, their details will not be sent to Klaviyo.

3. Phone number subscription
	*If you are subscribing phone numbers, please ensure numbers are sent in E.164 format. Eg. +12345678900. [More details here](https://help.klaviyo.com/hc/en-us/articles/360046055671-Accepted-phone-number-formats-for-SMS-in-Klaviyo)

3. Incorrect API Key
	*Please ensure you are using the correct __private__ API key. [More details here](https://help.klaviyo.com/hc/en-us/articles/115005062267-How-to-manage-your-account-s-API-keys)


= How so I Disable the opt-in email sent to contact on form submission =

You need to ask Klaviyo to disable double opt in on the list you are sending details to. Unfortunately, we cannot control that. They are available over live chat and can do this in 2 minutes.

== Changelog ==

= 1.0.0 =

* Release version

= 1.0.2 =

* Updated to Klaviyo new API
* Fixed Bugs and improved interface

= 1.0.3 =

* Removed warning messages

= 1.0.4 =

* Fixed GDPR checkbox bug

= 1.0.45 =

* Fixed deprecation warning

= 1.0.5 =

* Fixed log page 404 error

== Screenshots ==

1. Plugin configuration screen.
2. Adding fields on configuration screen.
3. Plugin submission log.