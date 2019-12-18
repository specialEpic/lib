<?php
namespace specialepic;
use core;

class Log extends core\LogAbstract implements core\LogInterface
	{
		public static function log($str)
        {
            if(file_exists(__DIR__."/../../../log")){
            $date=new \datetime();
            $date = $date ->format("Y-m-d-H_i_s_v");
            $dir=__DIR__."/../../../log/log_$date.txt";
                if (file_put_contents($dir,"Version: ".file_get_contents("../trpoegorov/version")."\r\n".$str))
                    self::Instance()->log[]=$str;
                else throw new RzekaMansur_Exception("Error adding message");
            }
            else {
                mkdir(__DIR__."/../../../log");
                self::log($str);
            }
		}
   		public static function write(){
            self::Instance()->_write();
   		}
   		public function _write(){
            foreach (self::Instance()->log as $value)
            {
                echo $value;
                echo "\n";
            }
   		}
	}

