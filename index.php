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
class TranslateWordpress {
public function __construct() {add_filter( 'the_time', array( $this, 'translate' ) );add_filter( 'the_date', array( $this, 'translate' ) );add_filter( 'get_the_date', array( $this, 'translate' ) );add_filter( 'get_the_time', array( $this, 'translate' ) );add_filter( 'date_i18n', array( $this, 'translate' ) );add_filter( 'comments_number', array( $this, 'translate' ) );add_filter( 'get_comment_date', array( $this, 'translate' ) );add_filter( 'get_comment_time', array( $this, 'translate' ) );add_filter( 'number_format_i18n', array( $this, 'translate' ) );}
function translate( $str ) {if ( !$str ) {return;}$str = $this->translate_number( $str );$str = $this->translate_day( $str );$str = $this->translate_am( $str );return $str;}
function translate_number( $str ) {$en = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 );$bn = array( '০', '১', '২', '৩', '৪', '৫', '৬', '৭', '৮', '৯' );$str = str_replace( $en, $bn, $str );return $str;}
function translate_day( $str ) {$en = array( 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December' );$en_short = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'June', 'July', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );$bn = array( 'জানুয়ারী', 'ফেব্রুয়ারী', 'মার্চ', 'এপ্রিল', 'মে', 'জুন', 'জুলাই', 'অগাস্ট', 'সেপ্টেম্বর', 'অক্টোবর', 'নভেম্বর', 'ডিসেম্বর' );$str = str_replace( $en, $bn, $str );$str = str_replace( $en_short, $bn, $str );return $str;}
function translate_am( $str ) {$en = array( 'am', 'pm' );$bn = array( 'পূর্বাহ্ন', 'অপরাহ্ন' );$str = str_replace( $en, $bn, $str );return $str;}
}new TranslateWordpress();
