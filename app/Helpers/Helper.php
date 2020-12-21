<?php
namespace App\Helpers;

use PhpParser\Node\Stmt\If_;

class Helper
{
    public static function IDGenerator($model, $trow, $length =6, $prefix){
        $data = $model::orderBy('id','desc')->first();
        if(!$data){
            $og_length = $length;
            $last_number = '';
            return "LME2020-000001";
        }else{
            $code = substr($data->$trow, strlen($prefix)+5);
            $actual_last_number =($code/1)*1;
            $increment_last_number = $actual_last_number+1;
            $last_number_length = strlen($increment_last_number);
            $og_length = $length - $last_number_length;
            $last_number =$increment_last_number;
        }
        $zeros = "";

        for($i=0; $i < $og_length;  $i++) {
            $zeros.="0";
        }
        return $prefix.date('Y').'-'.$zeros.$last_number;
    }
}

?>
