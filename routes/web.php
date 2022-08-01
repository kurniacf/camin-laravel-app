<?php

use App\Models\Products;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function(){
    $products = Products::all();
    return view('supermarket.index', ['products' => $products]);
});

Route::get('/signup', function(){
    $user = User::all();
    return view('user.signup', ['user' => $user]);
});

Route::post('/signup', function(Request $request){
    $this->validate($request, [
        'email' => 'email|required|unique:users',
        'password' => 'required|min:8',
        'name' => 'required'
    ]);

    $user = new User([
        'email' => $request->input('email'),
        'password'=> bcrypt($request->input('password')),
        'name' => $request->input('name')
    ]);
    $user->save();

    return redirect()->route('product.index');
});

/*Route::resource("/products", ProductsController::class);
Route::get("/products/{id}", [ProductsController::class, 'show']);

Route::get('/users', function () {
    return 'Welcome to users page';
});*/
