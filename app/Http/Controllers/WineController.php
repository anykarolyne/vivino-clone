<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Wine;
use App\Http\Requests;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;

class WineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        
        $wines = Wine::where('of_user', $id)->get();
        return view('wines', compact('wines'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         Wine::create([
                    'of_user' => Auth::user()->id,
                    'producer'  => $request->producer,
                    'name'  => $request->name,
                    'country' => $request->country,
                    'type' => $request->type,
                    'style' => $request->style,
                    'grape' => $request->grape,
                    'harmonization' => $request->harmonization,

            ]);



        return  redirect()->route('index_wine');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $idU = Auth::user()->id;
        $wine = Wine::where(['id' => $id, 'of_user' => $idU])->first();

        if($wine != null) 
        {
            $wine = Wine::where('of_user', $idU)->get();
            return view('wines.register', compact('wines','wine'));    
        }


        return redirect()->route('index_wine');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $idU = Auth::user()->id;

            $wine = Wine::where(['id' => $id, 'of_user' => $idU])->first();

            if($wine != null) 
            {
                $wine->producer = $request->producer;
                $wine->name  = $request->name;
                $wine->country = $request->country;
                $wine->type = $request->type;
                $wine->style = $request->style;
                $wine->grape = $request->grape;
                $wine->harmonization = $request->harmonization;
                
                $wine->save();

            }

        return  redirect()->route('index_wine');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
