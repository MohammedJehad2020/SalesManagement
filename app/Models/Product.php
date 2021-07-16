<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    use HasFactory;

    protected $perPage = 6;

    protected $fillable = [
        'name', 'slug', 'price', 'quantity', 'image', 'image_price', 'status',
         
    ]; 


    
    // Accessor:
    //get{AttrName}Attribute
    // $product->image_url
    public function getImageUrlAttribute(){
        if($this->image){
            return asset('uploads/' . $this->image);
            return Storage::disk('uploads')->url($this->images);
        }
     }
}
