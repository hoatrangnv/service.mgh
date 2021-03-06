<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MigEvents\Enum;

class Language extends \ArrayObject {

    const REQUEST_SUCCESS = 100000;
    const REQUEST_FAILED = -100006;
    const INVALID_PARAMS_HEADER = -100002;
    const EMPTY_PARAMS_HEADER = -100003;
    const INVALID_PARAMS_PAY = -100004;
    const ACCESS_TOKEN_EXPIRE = -100005;
    const AUTHORIZE_SUCCESS = 100005;
    const PACKAGE_NONE_INIT = -100006;
    const AUTHORIZE_FAIL = -100007;
    const HASH_KEY_NOT_DEFINE = -100008;
    const APP_NOT_DEFINE = -100009;
    const EXCEPTION = -100010;
    const SYSTEM_ERROR = -6;
    const INVALID_PARAMS = -5;
    const INVALID_SCOPE = -3;
    const INVALID_TOKEN = -1;
    const NOT_PERMISSION_APP = -4;
    const DUPLICATE_TRANSACTION = -5;
    const ACCOUNT_EXIST = 100;
    const ACCOUNT_NOT_EXIST = 101;
    const PHONE_INVALID = 102;
    const NTP = 103;
    const ACCESS_TOKEN_INVALID = 104;
    const ACTIVE_CODE_INVALID = 105;
    const ACCOUNT_NOT_ACTIVE = 106;
    const FB_ACCESS_TOKEN_INVALID = 107;
    //PAYMENT-CARD
    const CARD_SUCCESS = 1000;
    const CARD_MAINTAIN = 1001;
    const CARD_INVALID = 1002;
    const CARD_VALIDATE_INVALIAD = 1003;
    const CARD_BAN = 1004;
    const CARD_ADDMONEY_FAIL = 1005;
    const CARD_EXCEPTION = 1006;
    //BUY-BUYCARD
    const BUYCARD_SUCCESS = 1100;
    const BUYCARD_CONNECTION_TIMEOUT = 1101;
    const BUYCARD_OUT_OF_MONEY = 1102;
    const BUYCARD_MAINTAIN = 1103;
    const BUYCARD_FAIL = 1104;
    const BUYCARD_INVALID_SUPPLIER = 1105;
    const BUYCARD_OUT_OF_CARD = 1106;
    const BUYCARD_ALL_ACC_OUT_OF_MONEY = 1107;
    //INAPP APPLE
    const APPLE_SUCCESS = 1200;
    const APPLE_VERIFY_INVALID = 1201;
    const APPLE_VERIFY_FAIL_CONNECT = 1203;
    const APPLE_EXIST = 1204;
    const APPLE_INVALID_BUNDLEID = 1205;
    const APPLE_ADDMONEY_FAIL = 1206;
    //INAPP GOOGLE
    const GOOGLE_SUCCESS = 1300;
    const GOOGLE_VERIFY_INVALID = 1301;
    const GOOGLE_INVALID_PACKAGENAME = 1302;
    const GOOGLE_INVALID_PUBLIC_KEY = 1303;
    const GOOGLE_INVALID_SIGNATURE = 1304;
    const GOOGLE_INVALID_ITEM = 1305;
    const GOOGLE_EXIST = 1306;
    const GOOGLE_ADDMONEY_FAIL = 1307;
    //INAPP WINDOWSPHONE
    const WP_SUCCESS = 1400;
    const WP_VERIFY_INVALID = 1401;
    const WP_INVALID_PACKAGENAME = 1402;
    const WP_INVALID_PUBLIC_KEY = 1403;
    const WP_INVALID_SIGNATURE = 1404;
    const WP_INVALID_ITEM = 1405;
    const WP_EXIST = 1406;
    const WP_ADDMONEY_FAIL = 1407;
    const WP_INVALID_DATA = 1408;
    const WP_DUPLICATE_TRANSACTION = 1409;
    //
    const BUYCARDRATE_SUCCESS = 1500;
    const BUYCARD_GETTRANSACTION_SUCCESS = 1600;
    const BUYCARD_GETTRANSACTION_IS_FAIL = 1601;
    const BUYCARD_GETTRANSACTION_NO_EXIST = 1602;
    const INVALID_DATA = 100232;
    const BUTTON_NEXT = 100233;
    const EMPTY_BTCE = 100234;
    const BTC_COIN_FILTER = 100235;
    const AMOUNT_INVALID = 100236;
    const RECHARGE_FAILED = 100237;
    const SUBMIT_INVALID = 100238;
    const SERVICE_INVALID = 100239;
    const NOT_ENUOGH_DATA = 100240;
    const SYSTEM_BTC_ERROR = 100241;
    const RECHARGE_SUCCESS = 100242;
    const EMPTY_SERIAL = 100243;
    const EMPTY_PIN = 100244;

    public function __construct($lang = "vi") {
        $class = "\\MigEvents\\Language\\" . $lang;
        if (class_exists($class) == false)
            $class = "\\MigEvents\\Language\\vi";
        $lang = new $class();
        parent::__construct($lang);
    }

}
