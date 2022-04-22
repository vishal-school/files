<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
  

    protected $fillable = [
        'name',
        'slug',
        'description',
        'image',
        'gallery_images',
        'status',
        'updated_at',
        'created_at'
    ];

    /**
     * Get the options for generating the slug.
    */
    

    // Gallery image Accessor
    public function getGalleryImagesAttribute($value)
    {
        $gallery_images = (!empty($value)) ? json_decode($value) : [];
        $show_images = [];
        if(count($gallery_images) > 0 ){
            foreach ($gallery_images as $key => $value) {
                if (file_exists( public_path().$value )) {
                    $image = url($value) ;
                }else{
                    $image = url('images/No_image_found.png');
                    
                }
                array_push($show_images,$image);
            }
        }

        return $show_images;
    }
}