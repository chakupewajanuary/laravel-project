<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'ProductID';

    protected $fillable = ['ProductID', 'name', 'Description','Price','stock','Picture','manufacturer_id']; // Columns that can be mass-assigned
   
    public function manufacturers()
    {
        return $this->belongsTo(Manufacturer::class, 'manufacturer_id');

    }
    public function getImageSrc()
    {
        if (!$this->Picture) {
            # code..
            return null;
        }
        $finfo = new \finfo(FILEINFO_MIME_TYPE);
        $mimeType = $finfo->buffer($this->Picture);

        return 'data:' . $mimeType . ';base64' . base64_encode($this->Picture);
    }

    
}
