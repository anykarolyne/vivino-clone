<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Auth;
use App\Models\Expense;
use App\Models\Recipe;
use App\Models\Account;
use App\Models\Contact;
use App\Models\Wine;
use App\Http\Requests;
use App\Http\Requests\RecipeRequest;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {

      $id = Auth::user()->id;


      $wines = Wine::where('of_user', $id)->get();


        return view('admin.dashboard', compact('wines'));
    }
    public function home()
    {

        $id = Auth::user()->id;
        $login = Auth::user()->login;

        $wines = Wine::where('of_user', $id)->get();


        return view('protect.slide', compact('wines','login'));
    }
}




