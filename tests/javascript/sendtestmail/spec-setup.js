/**
 * @package     Joomla.Tests
 * @subpackage  JavaScript Tests
 *
 * @copyright   (C) 2016 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * @since       3.6.3
 * @version     1.0.0
 */

define(['jquery', 'text!testsRoot/sendtestmail/fixtures/fixture.html', 'libs/sendtestmail', 'libs/core'], function ($, fixture) {
	$('body').append(fixture);

	mailResponses = {
		success: {
			status: 200,
			statusText: 'HTTP/1.1 200 OK',
			responseText: '{"messages": {"message": "text"}}'
		},
		successInvalid: {
			status: 200,
			statusText: 'HTTP/1.1 200 OK',
			responseText: '{"messages": "text"}'
		},
		fail: {
			status: 404,
			statusText: 'HTTP/1.1 404 Not Found',
			responseText: 'Error'
		}
	};

	email_data = {
		smtpauth  : ['smtpauth'],
		smtpuser  : ['smtpuser'],
		smtppass  : ['smtppass'],
		smtphost  : ['smtphost'],
		smtpsecure: ['smtpsecure'],
		smtpport  : ['smtpport'],
		mailfrom  : ['mailfrom'],
		fromname  : ['fromname'],
		mailer    : ['mailer'],
		mailonline: ['mailonline']
	};

	$('#sendtestmail').click(sendTestMail);
});
