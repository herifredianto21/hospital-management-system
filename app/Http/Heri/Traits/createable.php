<?php

namespace App\Http\Heri\Traits;

    trait updatableAndCreatable {
        
        public static function bootCreatable(){
            
            if(auth()->check()){

                //Creating function
                static::creating(function($model){
                    $model->created_by_id = auth()->user()->id;
                });

                //Updating function
                static::updating(function($model){
                    $model->updated_by_id = auth()->user()->id;
                });

            }
        }

    }

?>