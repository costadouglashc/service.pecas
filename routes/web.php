<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Http\Request;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/getItens', function (Request $request) {
    
    return $array = 
         [
             [
                "id" => "1",
                "descricao" => "porta",
                "valor" => "5500,00",
             ],
            [

                "id"=> "2",
                "descricao" => "Farol direito",
                "valor" => "480,00",
            ],
            [
                "id" => "3",
                "descricao" => "Escapamento",
                "valor" => "500,00",
            ],
            [
                "id" => "4",
                "descricao" => "Carpete",
                "valor" => "200,00",
            ],
            [
                "id" => "5",
                "descricao" => "Retrovisor",
                "valor" => "150,00",
            ],
            [
                "id" => "6",
                "descricao" => "Banco passageiro - direito",
                "valor" => "3335,00",
            ]
        ];
        
});

Route::get('/getItem', function (Request $request) {
       $produto =  $request->input('produto');
    $array = 
         [
             [
                "id" => "1",
                "descricao" => "porta",
                "valor" => "5500,00",
             ],
            [

                "id"=> "2",
                "descricao" => "Farol direito",
                "valor" => "480,00",
            ],
            [
                "id" => "3",
                "descricao" => "Escapamento",
                "valor" => "500,00",
            ],
            [
                "id" => "4",
                "descricao" => "Carpete",
                "valor" => "200,00",
            ],
            [
                "id" => "5",
                "descricao" => "Retrovisor",
                "valor" => "150,00",
            ],
            [
                "id" => "6",
                "descricao" => "Banco passageiro - direito",
                "valor" => "3335,00",
            ]
        ];
    
        foreach ($array as $key => $values) {
            $return = array_search($produto, $values);
            if($return) {
                return json_encode($array[$key]);
                break;
            }
        }
        return false;
});


