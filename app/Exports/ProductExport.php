<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use App\Http\Controllers\ConnectionController;


class ProductExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    protected $woocommerce;

    public function __construct(){
        $Cnx = new ConnectionController();
        $this->woocommerce = $Cnx->woocommerce;
    }

    public function collection()
    {
        $collection = collect([
            (object) $this->woocommerce->get("products"),
        ]);
        return $collection;
    }
}
