<?php
declare(strict_types=1);

namespace App\Http\Helpers;

use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Session;
use ZipArchive;

trait Backhelper

{
    public $address;

    public $object;

    public $timer;

    public $zone = "Africa/lagos";

    public $minuites = 3;//set the 2fa timeout check, can default to laravel sesssion timeout 120.
    public $expires = 5;//set the  2fa code expiry time, best to leave shorter for security then let user request for new code.

    /**
     * @param float & @param int
     * calculates the percentage of a given number
     */
    public function GetpercenTage($percent, $amount)
    {
        $result = ($percent/100 * $amount /1);
        return $result;
    }

    /**
     * check if internet connection is enabled.
     * Returns 1 on success and 0 on failure
     */
    public static function CheckInternet(): bool
    {

        if(@fopen("http://google.com", "r"))
            {
              return true;
            }

            return false;
    }

    public static function Btcrate($amount)
    {
        if(Backhelper::CheckInternet() == true)
        {
            // get the value of bitcoin from bitpay
       $url = "https://bitpay.com/api/rates";

       $json = file_get_contents($url);
       $data = json_decode($json, TRUE);

       $rate = $data[2]["rate"];   //$data[1] is outdated now, they have updated their json order. This new number 2 now fetches USD price.
       $usd_price = $amount;     # Let cost of elephant be 10$
       $rate = $data[2]["rate"];   //$data[1] is outdated now, they have updated their json order. This new number 2 now fetches USD price.
       $bitcoin_price = round( $usd_price / $rate , 8 );
       return $bitcoin_price;

        }
        else

        {
            return null;
        }

    }

    public static function walletaddress(): string
    {
        $object = new self;// instance of the Backhelper class! to enable non static call
        $object->address = '1EDw2GYe9Ykw2qCycwhNWioFjanJmyGL2f14iLDY4bTiUGE1nY2nc7uCngx5kC7k2JHic67f37ad60309b9f07a1f51c57e4546fd7baeb41b0f8f25613399dcec0347b16';
        $build = substr(str_shuffle($object->address),0,34);
        return $build;
    }

    public static function hashid(): string
    {
        $object = new self;// instance of the Backhelper class! to enable non static call
        $object->address = 'c67f37ad60309b9f07a1f51c57e4546fd7baeb41b0f8f25613399dcec0347b16bTiUGE1nY2nc7uCngx5kC7k2J';
        $build = substr(str_shuffle($object->address),0,15);
        return $build;
    }

    public function exceptions($key,$value)
    {
        return Session::flash($key,$value);
    }

    public static function TodaysDate()
    {
        $object = new self;
        $object->timer = Carbon::now()->timezone('Africa/lagos');
        return $object->timer;
    }

    public function convertTomoney($amount,$part)
    {
        return number_format($amount,$part);
    }

            /**
     * This takes symlinks into account.
     *
     * @param ZipArchive $zip
     * @param string     $path
     */
    private function addContent(\ZipArchive $zip, string $path)
    {
        /** @var SplFileInfo[] $files */
        $iterator = new \RecursiveIteratorIterator(
            new \RecursiveDirectoryIterator(
                $path,
                \FilesystemIterator::FOLLOW_SYMLINKS
            ),
            \RecursiveIteratorIterator::SELF_FIRST
        );

        while ($iterator->valid()) {
            if (!$iterator->isDot()) {
                $filePath = $iterator->getPathName();
                $relativePath = substr($filePath, strlen($path) + 1);

                if (!$iterator->isDir()) {
                    $zip->addFile($filePath, $relativePath);
                } else {
                    if ($relativePath !== false) {
                        $zip->addEmptyDir($relativePath);
                    }
                }
            }
            $iterator->next();
        }
    }

    public function GetVolumeLabel($drive) {

        if (preg_match('#Volume Serial Number is (.*)\n#i',
        shell_exec('dir '.$drive.':'), $m)) {
        $volname = ' ('.$m[1].')';
        } else {
        $volname = '';
        }
        return $volname;

        }

        public function isValidModule($modulename)
        {
            $zip = new ZipArchive;
            if ($zip->locateName('module.json') == false)
            {
                return true;
            }
            else
            {
                return false;
            }
        }


}
