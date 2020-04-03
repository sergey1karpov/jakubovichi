<?php

namespace App\Mods;

use Illuminate\Http\Request;

class Calculate {

    public static function calc(Request $request) {
        $num = $request->num;

        $num = str_replace(',', '.', $num);

        if(is_numeric($num)) {
            return $res = round($num/1.68, 2);
        }
    }

}
