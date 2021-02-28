<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ConnectionController;
use Illuminate\Http\Request;
use Storage;
use Excel;
use App\Exports\ProductExport;

class productsController extends Controller
{
    protected $woocommerce ; 

    public function __construct(){
        $Cnx = new ConnectionController();
        $this->woocommerce = $Cnx->woocommerce;
    }

    // Getting All products
    public function list(){
        //dd($this->woocommerce->get("products"));
        $data = [
            'list_products' => $this->woocommerce->get("products", array('per_page'=>100,'page'=>1)),
        ];
        return view('dashboard.products.list')->with($data);
    }

    // Getting one product
    public function show($id){
        $data = [
            'product' => $this->woocommerce->get("products/".$id),
        ];
        return view('dashboard.products.show')->with($data);
    }

    // Updating Product
    public function update($id){
        $data = [
            'product' => $this->woocommerce->get("products/".$id),
        ];
        return view('dashboard.products.update')->with($data);
    }

    // Modifying Product
    public function modify(Request $request){
        $this->woocommerce->put("products/".$request->id , $request->all());
        return redirect('/dashboard/products');
    }

    // Deleting Product
    public function delete(Request $request){
        $this->woocommerce->delete("products/".$request->id);
        return redirect()->back();
    }

    // Create Product
    public function create(){
        $data = [
            'list_categories' => $this->woocommerce->get("products/categories"),
        ];
        return view('dashboard.products.create')->with($data);
    }

    // Add Product
    public function add(Request $request){
       
        $this->woocommerce->post("products",$request->all());
        return redirect('/dashboard/products');
    }

    // Exporting
    public function export(){
        return Excel::download(new ProductExport, "products.xlsx");
    }
    
    // Import
    public function import(Request $request){
        //dd($request->all());
        Excel::import(new ProductsImport ,$request->excelfile);
        return redirect('dashboard/products');
    }
    
}
