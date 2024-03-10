<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        if(Auth::id())
        {
            $user_type = Auth()->user()->usertype;

            if($user_type == 'admin')
            {
                return view ('admin.index');
            } 
                else if($user_type == 'student' || $user_type == 'faculty')
                {
                    return view ('home.index');
                }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function category_page()
    {
        $data = Category::all();
        return view ('admin.category', compact('data'));
    }

    public function add_category(Request $_request)
    {
        $data = new Category;
        $data -> cat_title = $_request -> category;
        $data -> save();
        return redirect() -> back() -> with('message', 'Category added successfully');;
    }

    public function cat_delete($id)
    {
        $data = Category::findOrFail($id);
        $data -> delete();
        return redirect() -> back() ->with('message', 'Category deleted successfully');
    }
}

