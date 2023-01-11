<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{

   public function developed()
   {
       //
   }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $data = $request->all();
        //error_log('DATA: ', $data);
        $country = Country::create($data);

        /*
        $message = __('message.update_form',[ 'form' => __('message.country') ] );
		if($country->wasRecentlyCreated){
			$message = __('message.save_form',[ 'form' => __('message.country') ] );
		}
        */

        $response = [
            'success' => true,
            'data' => $data,
            'message' => 'Pais creado',
        ];


        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show(Country $country)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function edit(Country $country)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Country $country)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy(Country $country)
    {
        //
    }
}
