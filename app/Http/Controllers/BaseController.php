<?php

namespace App\Http\Controllers;

use App\Models\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class BaseController extends Controller
{
    public function index(){
        $this->middleware('auth');
        return view('home.index');
    }

    public function login(){
        return view('login.index');
    }

    public function main(){
        $category = DB::table('category')->get();

        return view('main.index', ['category' => $category]);
    }

    public function service(){
        $param = $_GET['product'];

        $category = DB::table('category')->get();

        $service = DB::table('service');
        $service->where('category', '=', $param);
        $result_service = $service->get();

        return view('product_service.index', ['category' => $category], ['service' => $result_service])->with('param', $param);
    }

    public function list_order(){
        $order = DB::table('list_order')->get();

        return view('list_order.index', ['order' => $order]);
    }

    public function form_service(){
        $category = DB::table('category')->get();

        return view('form_service.index', ['category' => $category]);
    }

    public function input_order(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'telp'=>'required',
            'date'=>'required',
            'time'=>'required',
            'year'=>'required',
            'merk'=>'required',
            'model'=>'required',
            'category'=>'required',
            'product'=>'required',
            'desc'=>'required'
        ]);

        $query = DB::table('list_order')->insert([
            'id_order'=>$request->input('NULL'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'no_telp'=>$request->input('telp'),
            'date'=>$request->input('date'),
            'time'=>$request->input('time'),
            'motor_year'=>$request->input('year'),
            'motor_merk'=>$request->input('merk'),
            'motor_model'=>$request->input('model'),
            'category_service'=>$request->input('category'),
            'product_service'=>$request->input('product'),
            'description'=>$request->input('desc')
        ]);

        if($query){
            return back()->with('success','Data have been successfuly inserted');
        }else{
            return back()->with('fail','Something when wrong');
        }
    }

    public function form_product(){
        $category = DB::table('category')->get();

        return view('form_product.index', ['category' => $category]);
    }

    public function store(Request $request){
        $size = $request->file('img')->getSize();
        $name = $request->file('img')->getClientOriginalName();

        $request->file('img')->storeAs('../../public/img/', $name);

        $query = DB::table('service')->insert([
            'id_service'=>$request->input('NULL'),
            'service_name'=>$request->input('name'),
            'price'=>$request->input('price'),
            'category'=>$request->input('category'),
            'description'=>$request->input('desc'),
            'image'=>$name
        ]);
        return redirect()->back();
    }

    public function admin_order(){
        $order = DB::table('list_order')->get();

        return view('list_order_admin.index', ['order' => $order]);
    }

    public function detail(){
        $param = $_GET['id'];
        $order = DB::table('list_order');
        $order->where('id_order', '=', $param);
        $result_order = $order->get();

        return view('detail_order.index', ['order' => $result_order]);
    }

    public function delete(){
        $param = $_GET['id'];

        $order = DB::table('list_order');
        $order->where('id_order', '=', $param);
        $result_order = $order->delete();

        return redirect()->back();
    }

    public function sparepart(){
        $category = DB::table('category')->get();

        return view('form_sparepart.index', ['category' => $category]);
    }

    public function buy_sparepart(Request $request){
        $query = DB::table('buy_sparepart')->insert([
            'id_sparepart'=>$request->input('NULL'),
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'no_telp'=>$request->input('telp'),
            'amount'=>$request->input('amount'),
            'object'=>$request->input('object'),
            'description'=>$request->input('desc')
        ]);
        $sparepart = DB::table('buy_sparepart')->get();

        return view('list_buying.index', ['sparepart' => $sparepart]);
    }

    public function buying(){
        $sparepart = DB::table('buy_sparepart')->get();

        return view('list_buying.index', ['sparepart' => $sparepart]);
    }

    public function details(){
        $param = $_GET['id'];
        $sparepart = DB::table('buy_sparepart');
        $sparepart->where('id_sparepart', '=', $param);
        $result_sparepart = $sparepart->get();

        return view('detail_buying.index', ['sparepart' => $result_sparepart]);
    }
}
