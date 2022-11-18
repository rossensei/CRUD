<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller
{
    public function index() {

        $stores = Store::get();

        return view('stores.index', ['stores'=>$stores]);

    }

    public function create() {
        return view('stores.create');
    }

    public function edit(Store $store){

        return view ('stores.edit',[
            'store' => $store
        ]);
    }

    public function update(Request $request, $store){
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'owner' => 'required',
            'net_worth' => 'required|numeric'
        ]);

        $input = $request->all();
        $store = Store::find($store);
        $store->name=$input['name'];
        $store->location=$input['location'];
        $store->owner=$input['owner'];
        $store->net_worth=$input['net_worth'];

        // $store->save();

        if($store->save()){
            return redirect('/stores')->with('info', 'Store updated!');
        }else{
            return redirect('/stores')->with('info', 'You made no changes to the store.');
        }
        
    }


    public function delete($store){
        Store::find($store)->delete();

        return redirect('/stores')->with('info', 'Store deleted!');
    }


    public function store(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'location' => 'required',
            'owner' => 'required',
            'net_worth' => 'required|numeric'
        ]);

        Store::create([
            'name' => $request['name'],
            'location' => $request['location'],
            'owner' => $request['owner'],
            'net_worth' => $request['net_worth'],
        ]);
        
        return redirect('/stores')->with('info', 'A new store has been added.');
    }
}
