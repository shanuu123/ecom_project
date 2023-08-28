<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Session;
use Validator;
use Illuminate\Support\Facades\DB;

class Productcontroller extends Controller
{
   
 
   function store(Request $req)
   {
      $validator=Validator::make($req->all(),[
         
         'price'=>'required|max:4',
         'category'=>'required|max:191',
         'image'=>'required|max:191',
         'discription'=>'required|max:191',
         'name'=>'required|max:191',
     ]);

   
       if($validator->fails()){
           return response()->json([
               'status'=>400,
               'errors'=>$validator->messages(),
           ]);
       }
       else{
           $product=new Product;
           $product->name=$req->input('name');
           $product->discription=$req->input('discription');
           $product->category=$req->input('category');
           $product->gallery=$req->input('image');
           $product->price=$req->input('price');
           $product->save();
           return response()->json([
               'status'=>200,
               'message'=>'product added successfully',
           ]);
       }
      
      }



    public function addthecart($id)
    {
      $data=Product::find($id);
        $cart=new Cart;
        $cart->user_id=session()->get('user')['id'];
        $cart->product_id=$id;
        $cart->save();


        return response()->json([
            'status'=>200,
            'message'=>'cart added successfully',
        ]);
    }



    function searching($name)
    {
    
        $data=Product::where('name',$name)->get();
        return view('products',['products'=>$data]);
    }



    function deleting($id)
    {
       $data=Cart::find($id);
       $data->delete();
       return response()->json([
        'status'=>200,
        'message'=>'cart deleted successfully ',
    ]);
    }


    function index()
    {
        $data=Product::all();
        return view('product',['products'=> $data]);
    }




    function details($id)
    {
        $data=Product::find($id);
        return view('detail',['product'=>$data]);
    }

 

  
    static function cartitem()
     {
        $userid=Session::get('user')['id'];
        return Cart::where('user_id',$userid)->count();
     }




     static function cartlist()
     {
        $userid=Session::get('user')['id'];
        $products=DB::table('Cart')
        ->join('products','Cart.product_id',"=",'products.id')
        ->where('cart.user_id',$userid)
        ->select('products.*','cart.id as cart_id')
        ->get();
        return View('cartlist',['products'=>$products]);
     }
  


     function ordernow()
     {
        $userid=Session::get('user')['id'];
        $total=$products=DB::table('Cart')
        ->join('products','Cart.product_id',"=",'products.id')
        ->where('cart.user_id',$userid)
        ->sum('products.price');
        return View('ordernow',['total'=>$total]);
     }



     function orderplace(Request $req)
     {
      
        $userid=Session::get('user')['id'];
        $allcarts=Cart::where('user_id',$userid)->get();
        foreach($allcarts as $cart)
        {
            $order=new Order;
            $order->product_id=$cart['product_id'];
            $order->user_id=$cart['user_id'];
            $order->address=$req->address;
            $order->payment_status="pending";
            $order->status="pending";
            $order->payment_method=$req->payment;
            $order->save();
            Cart::where('user_id',$userid)->delete();
        }
        $req->input();
        return redirect('/');
     }




     function orders()
     {
        $userid=Session::get('user')['id'];
        $ordersdetail=DB::table('orders')
        ->join('products','orders.product_id',"=",'products.id')
        ->where('orders.user_id',$userid)
        ->get();
        return View('orders',['orderdetail'=>$ordersdetail]);
     }




     public function autocompleteSearch(Request $request)
       {
         $query = $request->get('query');
         $filterResult = Product::where('name', 'LIKE', '%'. $query. '%')->get();
         return response()->json($filterResult);
      } 

   
      function data()
      {
       $data=Product::all();

       return view('productdetails',['products'=> $data]);
      }



       function data1($mobile)
      {
       $data=Product::where('category',$mobile)->get();
        return view('productdetails',['products'=> $data]);
     }



       function data2($watches)
      {
       $data=Product::where('category',$watches)->get();
       return view('productdetails',['products'=> $data]);
     }



      function data3($homeappliances)
      {
       $data=Product::where('category',$homeappliances)->get();
       return view('productdetails',['products'=> $data]);
     }



   function data4($glasses)
   {
       $data=Product::where('category',$glasses)->get();
       return view('productdetails',['products'=> $data]);
    }



   function data5($gaming_accessories)
   {
       $data=Product::where('category',$gaming_accessories)->get();
       return view('productdetails',['products'=> $data]);
   }


   function data6($beauty_product)
   {
       $data=Product::where('category',$beauty_product)->get();
       return view('productdetails',['products'=> $data]);
    }
  
}
