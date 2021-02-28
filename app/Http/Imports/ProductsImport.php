<?php

namespace App\Imports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use App\Http\Controllers\ConnectionController;

class ProductsImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    protected $woocommerce ; 

    public function __construct(){
        $Cnx = new ConnectionController();
        $this->woocommerce = $Cnx->woocommerce;
    }


    public function collection(Collection $rows)
    {
        foreach ($rows as $row) 
        {
            $product = [
                "name" => $row[1],
                "slug" => $row[2],
            ];
            
            $this->woocommerce->post("products",$product);
            
        }
        return null;
    }
}
