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

$mailgunApiKey = "0f3e1201aefd817b194a5b966dbb2e54-1df6ec32-af0f5f2a";
$mailgunDomain = "sandboxff83d9ace6444d84aa6ff2af8c200013.mailgun.org";


// your Google reCAPTCHA keys here
// your Google reCAPTCHA keys here
$siteKey = '6LeuKsIUAAAAAKmCaWKGEc-n_BPunv0tezg3B9VS';
$secret = '6LeuKsIUAAAAAMB8rKDeEZaZFfpA8nQKj_lWniak';

/**
 * attach the recipients to the message
 * notice this an array that can include or omit the the recipient's real name
 * use the recipients' real name where possible; this reduces the probability of the Email being marked as spam
 **/
$MAIL_RECIPIENTS = ["lindsey.atencio@gmail.com" => "Lindsey Atencio"];
$MAIL_RECIPIENT = ["lindsey.atencio@gmail.com"];
