<?php

namespace saeed;


class Stopgninnip
{

    public function spinWords(string $str): string {


//        https://minwook-shin.github.io/how-to-solve-stop-gninnips-my-sdrow!/
//        public String spinWords(String sentence) {
//        String[] arr = sentence.split(" ");
//        for(int i=0;i<arr.length;i++){
//            if(arr[i].length() >= 5)
//                arr[i] = new StringBuffer(arr[i]).reverse().toString();
//        }
//        return String.join(" ",arr);
//    }

        preg_replace_callback('/(\b\w{5,}\b)+/i', fn($str) => strrev($str[0]), 'Hello world, this is a test string.');




}

//echo (new Stopgninnip)->quarterOf(7);

