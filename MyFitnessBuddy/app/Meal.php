<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
  /**
  * Attributes that are mass-assignable
  **/
    protected $fillable = ['name'];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function foods(){
      return $this->hasMany(Food::class);
    }

    public function carbs(){
      $mealCarbs = $this->foods()->pluck("carbohydrates");
      return $mealCarbs->sum();
    }
    public function protein(){
      $mealProteins = $this->foods()->pluck("protein");
      return $mealProteins->sum();
    }
    public function fats(){
      $mealFats = $this->foods()->pluck("fat");
      return $mealFats->sum();
    }
    public function calories(){
      $mealFat = $this->foods()->pluck("fat");
      $mealProt = $this->foods()->pluck("protein");
      $mealCarb = $this->foods()->pluck("carbohydrates");
      $mealCalories = ($mealProt->sum() * 4) + ($mealCarb->sum() * 4) + ($mealFat->sum() * 9);
      return $mealCalories;
    }

}
