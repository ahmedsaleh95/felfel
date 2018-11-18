<?php
use App\User;
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

Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/index', function(){
	return view('index');
});

Route::post('/userMessage',function (Request $request)
{
       // $request->validate([
       //      'firstname' => 'bail|required|min:2',
       //      'lastname' => 'required|min:2',
       //      'email' => 'required|email',
       //      'subject' => 'required',
       //      'message' => 'required',
       //  ]);
	User::create($request->all());
	session()->flash('message','Form Submitted Successfully');
	return redirect('/');
});



Route::get('/', function(){
	return view('products');
});
// php -S 127.0.0.1:8000 -t public -f serve.php.