<?php

namespace App\Http\Helpers;

use Carbon\Carbon;
use Exception;

class Codedwebltd
{

    protected $generate;
    protected $ipinfo;
    protected $username;


    static function getAffiliate()
    {

        $gen = new self;
        $gen->generate = strtoupper((substr(str_replace([' ', '-'], '', env('APP_NAME')), 0, 4))) . rand(200, 4000);
        return $gen->generate;
    }

    public function __construct()
    {
        date_default_timezone_set("Africa/lagos"); //replace with your timezone
        $date = date("Y-m-d h:i:s");
    }

    static function generateaffiliateid()
    {
        $GetObject = new self;

        $GetObject->generate = uniqid(true);
        return $GetObject->generate;
    }

    static function fetchos()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
        {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
        {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

    static function countryinfo()
    {
        $object = new self;

        $object->ipinfo = simplexml_load_file("http://www.geoplugin.net/xml.gp?ip=" . $object->fetchos());

        return  $object->ipinfo;
    }

    /**
     * pass a random string to generate username
     * @param string $request->name | $name
     */
    static function generateusername($string)
    {
        /**
         * add your banned username keywords to the array! users cannot signup with a banned username
         *
         */
        $object = new self;

        $blacklist = [
            'admin', 'Admin', 'User', 'user', 'hacker', 'Hacker', 'robot', 'Robot', 'Google', 'google',
            'Yahoo', 'avatar'
        ];

        if (in_array($string, $blacklist)) {
?>
            <script>
                alert('Oops, The username You Provided is banned! Try another username')
            </script>
<?php
        } else {
            $object->username = substr($string, 0, 9) . rand(0, 200);

            return  $object->username;
        }
    }

    /**
     * generate unique cryptographically secure tranxaction refrence!
     */
    static function generaterefrence()
    {
        $object = new self;

        $object->generate =  uniqid(true);
        return $object->generate;
        //  "#".str_shuffle(md5("16b1d9234b61e8778d9e3588f20"));


    }

    static function DateDiff($date1, $date2)
    {
        //formulate the difference b/w two dates
        $date1 = strtotime($date1);
        $date2 = strtotime($date2);

        $diff = abs($date1 - $date2);

        //to get the year, divide the resultant data into total seconds in a year (365*60*60*24)
        $years = floor($diff / (365 * 60 * 60 * 24));

        //to get the month, subtract it with years and divide the resultant date into
        //total seconds in a month (30*60*60*24)
        $months = floor(($diff - $years * 365 * 60 * 60 * 24) / (30 * 60 * 60 * 24));

        //to get the day subtract it with years and months and divide the
        //resultant date into total seconds in a days(60*60*24)
        $days = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24) / (60 * 60 * 24));


        //to get the hours subtract it with years months and seconds and divide the resultant date into total seconds
        // in a hour (60*60)

        $hours = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24) / (60 * 60));

        //to get the minuites subtrat it with years months seconds and hours and
        //divide the resultant date into total seconds i.e (60)

        $minuites = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60) / 60);

        //to get the minuites , subtract it with  years , month , seconds hours and minuites

        $seconds = floor(($diff - $years * 365 * 60 * 60 * 24 - $months * 30 * 60 * 60 * 24 - $days * 60 * 60 * 24 - $hours * 60 * 60 - $minuites * 60));

        //print result

        //  printf("%d years, %d months, %d days, %d hours, "."%d minuites, %d seconds", $years, $months, $days, $hours, $minuites, $seconds);

    }



    static function getPercentage($PercentageAmount, $MoneyAmount)
    {


        $num = $MoneyAmount; //300

        $percent = $PercentageAmount; //3.8

        return $calc = $percent / 100 * $num;
    }

    static function generateid()
    {
        $object = new self;
        $object->generate = uniqid(true);
        return   $object->generate;
    }

    /**
     * Timezone for all our app
     */
    public function currentdate()
    {

        $date = Carbon::now()->timezone("Africa/lagos");
        return $date;
    }

    /**
     * check if internet connection is enabled.
     * Returns 1 on success and 0 on failure
     */
    public static function CheckInternet(): bool
    {

        if (@fopen("http://google.com", "r")) {
            return true;
        }

        return false;
    }
}
