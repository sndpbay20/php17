<?php
namespace app\models;   

class product
{
    public ?int $id = null;
    public ?string $title = null;
    public ?string $description = null;
    public ?float $price = null;
    public ?string $imagePath = null;
    public ?array $imageFile = null;
 
    public function load($data)
    {
        
    }

}