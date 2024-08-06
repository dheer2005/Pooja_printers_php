<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Http\Middleware\UserAuth;



class ProductController extends Controller
{

    public function index()
    {
        $Product = Product::all();
        return view('Product', compact('Product'));
    }
  
    public function ProductCart()
    {
        return view('Cart',compact('Cart'));
    }
    static function addtoCart()
    {   
        $customerData = Session::get('customers');
        if ($customerData && is_array($customerData) && array_key_exists('customer_id', $customerData)) 
        {
            $userid = $customerData['customer_id'];
        }  
        else 
        {
            // Handle the case where 'customer_id' is not found in the session data or the session itself is not present.
            // You can set a default value or redirect the user to an appropriate page.
        $userid = null; // or any other suitable handling
        }
        return cart::where('user_id',$userid)->count();
    }
    //     $Product = Product::findOrFail($id);

        
    //     if(!empty($Product)){
    //         // dd($Product);
    //         $data = new cart;
    //         $data->name = $Product->name;
    //         $data->quantity = 1;
    //         $data->price = $Product->price;
    //         $data->image = $Product->image;
    //         $data->save();
            
    //     }
    //     $cart = session()->get('cart',[]);
    //     if(isset($cart[$id])) {
    //         $cart[$id]['quantity']++;
    //         return redirect('Cart');
        
    //     } else {
    //         $cart[$id] = [
    //             "name" => $Product->name,
    //             "quantity" => 1,
    //             "price" => $Product->price,
    //             "image" => $Product->image
    //         ];
    //     }
    //     session()->put('cart', $cart);
    //     return redirect()->back()->with('success', 'Product has been added to cart!');
    // }
    public function updateCart(Request $request)
    {
        if($request->session()->has('customer')){

            $cart = new cart;
            $cart = session()->get('cart'['id']);
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Product added to cart.');
        }
    }
  
    public function deleteProduct($id)
    {
       // dd($name);
        if($id) {
            $cart = session()->get('cart');
           
            if(isset($cart[$id])) 
            {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            return redirect()->back();
            //session()->flash('success', 'Product successfully deleted.');
        }
    }
}


