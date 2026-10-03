<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdct;
use App\Models\Producs;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function stor(StoreProdct $request ){



  products::query()->create(
$request->validated()




  );
return $request->validated();

    }
    public function update(Request $request){
        DB::table('products')->update(
            [[
'name'=>$request->name
            ]]
        );
    }
}
