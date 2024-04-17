<?php

namespace App\Models;
class Listing {

    public static function all(){
return [
         [ 
            'id' => 1,
            'title' => 'Listing one',
            'description' => 'lorem cksnckjdbv nvbdshvb vdhbv ndjvnd njdbvjkdsvb 
                              dvnsjkbvkdjvndjksvbkdj vbdjkhbvvhcbdhjcv 
                              bjhdbcvhdbvhdvhd jcbvdhvdhjvcd bjvdshbvhjdsvbdfjhsv dhbcvhdbvc
                              jdbvhdjbvd mekkhfirehbf ndjbcdcb'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'lorem cksnckjdbv nvbdshvb vdhbv ndjvnd njdbvjkdsvb 
                              dvnsjkbvkdjvndjksvbkdj vbdjkhbvvhcbdhjcv 
                              bjhdbcvhdbvhdvhd jcbvdhvdhjvcd bjvdshbvhjdsvbdfjhsv dhbcvhdbvc
                              jdbvhdjbvd mekkhfirehbf ndjbcdcb'
        ] 
       ];
    }

   public static function find($id){
        $listings =self::all();
        foreach($listings as $listing)
          if($listing['id'] == $id){
            return $listing;
          }
   }
};