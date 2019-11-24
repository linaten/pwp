<?php
/**
 * mail-config.php
 * This file contains your reCAPTCHA API keys and your recipient's email addresses.
 *
 * @param string $siteKey your public reCAPTCHA API key
 * @param string $secret your secret reCAPTCHA API key
 * @param string $mailgunDomain your mailgun private api key.
 * @param string $mailgunApiKey your mailgun domain relay.
 * @param array $MAIL_RECIPIENTS array of email addresses and corresponding recipient names to send form responses to
 *
 * @author Rochelle Lewis <rlewis37@cnm.edu>
 *
 * This file contains sensitive information and should ALWAYS be gitignored!
 **/

//mailgun API Key authorization

$mailgunApiKey = "pubkey-508834962fc71bb3afebb03465ba8319";
$mailgunDomain = "key-ca1b5843ba34a53875307dd58553cf2c";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LeyTsQUAAAAAOcy7HZ5rCMA3NHna8JVKAozW1rq';
$secret = '6LeyTsQUAAAAAO3pkXPZDmM5ap2CP_mRD4kZTG4S';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = [ "lindsey.atencio@gmail.com"=>"Lindsey Atencio"];
$MAIL_RECIPIENT = ["lindsey.atencio@gmail.com"];
