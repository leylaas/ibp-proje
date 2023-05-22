<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Order;
use App\Models\Product;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public static function maincategorylist()
    {

        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public function categoryproducts($id){
        $category = Category::find($id);
        $products = DB::table('products')->where('category_id',$id)->get();
        $parenCategories = Category::where('parent_id', '=', 0)->with('children')->get();
        return view('home.categoryproducts', [
         'category' => $category,
         'products' => $products,
         'parenCategories' => $parenCategories
        ]);


    }

    public function index()
    {
        $sliderdata = Product::limit(3)->get();
        $productlist1 = Product::limit(3)->get();
        $setting = Setting::first();

        return view('home.index', [
            'setting' => $setting,
            'sliderdata' => $sliderdata,
            'productlist1' => $productlist1
        ]);
    }

    public function about()
    {
        $setting = Setting::first();
        return view('home.about', [
            'setting' => $setting,
        ]);
    }

    public function references()
    {

        $setting = Setting::first();
        return view('home.references', [
            'setting' => $setting,
        ]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', [
            'setting' => $setting,
        ]);
    }

    public function faq()
    {
        $setting = Setting::first();
        $datalist = Faq::all();
        return view('home.faq', [
            'setting' => $setting,
            'datalist' => $datalist
        ]);
    }

    public function storemessage(Request $request)
    {
        //dd($request);
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('contact')->with('info', 'Your Message has been sent, Thank you.');
    }

    public function storecomment(Request $request)
    {
        // dd($request); // Check out values
        $data = new Comment();
        $data->user_id = Auth::id(); // logged in user id
        $data->product_id = $request->input('product_id');
        $data->subject = $request->input('subject');
        $data->review = $request->input('review');
        $data->rate = $request->input('rate');
        $data->ip = request()->ip();
        $data->save();

        return redirect()->route('product', ['id' => $request->input('product_id')])->with('success', 'Your comment has been sent, Thank you.');
    }

    public function product($id)
    {
        $data = Product::find($id);
        $images = DB::table('images')->where('product_id', $id)->get();
        $reviews = Comment::where('product_id', $id)->where('status', 'True')->get();
        return view('home.product', [
            'data' => $data,
            'images' => $images,
            'reviews' => $reviews,
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginadmincheck(Request $request)
    {
        // dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }

        return back()->withErrors([
            'error' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }


    public function order(Request $request, $id)
    {
        $data = Product::find($id);
        return view("home.user.order",
            [
                'data' => $data
            ]);
    }

    public function storeorder(Request $request, $id)
    {
        $cardcheck = 'True';

        if ($cardcheck == 'True') {
            $data = new Order();
            $productdata = Product::find($id);
            $data->name = $request->input('name');
            $data->phone = $request->input('phone');
            $data->email = $request->input('email');
            $data->user_id = Auth::id();
            $data->product_id = $productdata->id;
            $data->months = $productdata->months;
            $data->price = $productdata->price;
            $data->IP = $_SERVER['REMOTE_ADDR'];
            $data->StartDate = Carbon::now();
            $data->FinishDate = Carbon::now()->addMonths($productdata->months);
            $data->save();

            return redirect()->route('ordercomplete')->with('success', 'Product Buying Successfuly');
        } else
            return redirect()->route('ordercomplete')->with('error', 'Your credit card is not valid');

    }

    public function ordercomplete()
    {

        return view('home.user.ordercomplete');
    }
}
