<?php

if (!function_exists("char2bin")) {
    function char2bin($char) {
        $ascii = ord($char);
        $ascii = base_convert($ascii, 10, 2);
        while (strlen($ascii) !== 8) {
            $ascii = ("0" . $ascii);
        }
        $chunks = str_split($ascii, 4);
        return $chunks;
    }
}

if (!function_exists("base16_encode")) {
    function base16_encode($str) {
        $table = [
            "0000" => "0",
            "0001" => "1",
            "0010" => "2",
            "0011" => "3",
            "0100" => "4",
            "0101" => "5",
            "0110" => "6",
            "0111" => "7",
            "1000" => "8",
            "1001" => "9",
            "1010" => "a",
            "1011" => "b",
            "1100" => "c",
            "1101" => "d",
            "1110" => "e",
            "1111" => "f"
        ];
        
        $characters = str_split($str);
        $chunks = [];
        for ($i = 0; $i < count($characters); $i++) {
            $temp = char2bin($characters[$i]);
            $chunks[] = $temp[0];
            $chunks[] = $temp[1];
        }
        $result = "";
        for ($i = 0; $i < count($chunks); $i++) {
            $result .= $table[$chunks[$i]];
        }
        return $result;
    }
}

if (!function_exists("base16_decode")) {
    function base16_decode($str) {
        if (strlen($str) % 2 === 1) {
            return FALSE;
        }
        
        $table = [
            "0" => "0000",
            "1" => "0001",
            "2" => "0010",
            "3" => "0011",
            "4" => "0100",
            "5" => "0101",
            "6" => "0110",
            "7" => "0111",
            "8" => "1000",
            "9" => "1001",
            "a" => "1010",
            "b" => "1011",
            "c" => "1100",
            "d" => "1101",
            "e" => "1110",
            "f" => "1111"
        ];
        
        $characters = str_split($str);
        $chunks = [];
        for ($i = 0; $i < count($characters); $i++) {
            $chunks[] = $table[$characters[$i]];
        }
        
        $result = "";
        for ($i = 0; $i < count($chunks); $i += 2) {
            $bin = $chunks[$i] . $chunks[$i + 1];
            $code = base_convert($bin, 2, 10);
            $result .= chr($code);
        }
        return $result;
    }
}