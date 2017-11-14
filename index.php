<?php
/**
* Plugin Name: Bangla Number And Month
* Description: Change All Number and Month Name into bangla.
* Plugin URI: http://#
* Author: Md Mortuza Hossain
* Author URI: http://web.facebook.com/mdmortuza.hossain
* Version: 0.0.1
* License: GPL2
*/
if ( ! defined( 'ABSPATH' ) ) exit;
class bnm_TranslateWordpress {

public function __construct() {add_filter( 'the_time', array( $this, 'bnm_translate_function' ) );add_filter( 'the_date', array( $this, 'bnm_translate_function' ) );add_filter( 'get_the_date', array( $this, 'bnm_translate_function' ) );add_filter( 'get_the_time', array( $this, 'bnm_translate_function' ) );add_filter( 'date_i18n', array( $this, 'bnm_translate_function' ) );add_filter( 'comments_number', array( $this, 'bnm_translate_function' ) );add_filter( 'get_comment_date', array( $this, 'bnm_translate_function' ) );add_filter( 'get_comment_time', array( $this, 'bnm_translate_function' ) );add_filter( 'number_format_i18n', array( $this, 'bnm_translate_function' ) );}

function bnm_translate_function( $inclming_or_outgoing_string ) {if ( !$inclming_or_outgoing_string ) {return;}$inclming_or_outgoing_string = $this->bnm_translate_number( $inclming_or_outgoing_string );$inclming_or_outgoing_string = $this->bnm_translate_day( $inclming_or_outgoing_string );$inclming_or_outgoing_string = $this->bnm_translate_am_pm( $inclming_or_outgoing_string );return $inclming_or_outgoing_string;}

function bnm_translate_number( $inclming_or_outgoing_string ) {$english_letter = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 );$bangla_letter = array( '০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯' );$inclming_or_outgoing_string = str_replace( $english_letter, $bangla_letter, $inclming_or_outgoing_string );return $inclming_or_outgoing_string;}

function bnm_translate_day( $inclming_or_outgoing_string ) {$english_letter = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );$english_letter_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );$bangla_letter = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );$inclming_or_outgoing_string = str_replace( $english_letter, $bangla_letter, $inclming_or_outgoing_string );$inclming_or_outgoing_string = str_replace( $english_letter_short, $bangla_letter, $inclming_or_outgoing_string );return $inclming_or_outgoing_string;}

function bnm_translate_am_pm( $inclming_or_outgoing_string ) {$english_letter = array( 'am', 'pm' );$bangla_letter = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );$inclming_or_outgoing_string = str_replace( $english_letter, $bangla_letter, $inclming_or_outgoing_string );return $inclming_or_outgoing_string;}

}new bnm_TranslateWordpress();
