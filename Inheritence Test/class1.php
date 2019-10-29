<?php

namespace WPMailSMTP;

// Load PHPMailer class, so we can subclass it.
if ( ! class_exists( 'PHPMailer', false ) ) {
	require_once ABSPATH . WPINC . '/class-phpmailer.php';
}

// Fails to compile with:
//   Code:        PHP1018
//   Description: Class 'WPMailSMTP\MailCatcher' doesn't implement abstract method System\IDisposable::Dispose()
class MailCatcher extends \PHPMailer {
}
