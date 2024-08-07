
3
<?php

use Illuminate\Support\Arr;

if (! function_exists('getPageId')) {
 function getPageId($type)
 {
 $dataPage = Arr::get(config('webflow.routes'), request()->route()->getName());

 return Arr::get($dataPage, $type);
 }
}
