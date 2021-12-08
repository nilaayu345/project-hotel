<?php
   if (!function_exists('numberPagination')) {
      /**
       * menampilkan nomer urut dalam tabel walaupun dalam bentuk pagination
      *
      * @param [integer] $paginationNumber
      * @return void
      */
      function numberPagination($paginationNumber)
      {
         $number = 1;

         if (request()->has('page') && request()->get('page') > 1) {
            $number += (request()->get('page') - 1) * $paginationNumber;
         }

         return $number;
      }
   }
?>