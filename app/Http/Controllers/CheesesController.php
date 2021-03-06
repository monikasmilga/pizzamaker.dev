<?php namespace App\Http\Controllers;

use App\models\Cheeses;
use Illuminate\Routing\Controller;

class CheesesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /cheeses
	 *
	 * @return Response
	 */
	public function index()
	{
		// will show list of Data
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cheeses/create
	 *
	 * @return Response
	 */
	public function create()
	{
        $data = request()->all();
        $record = Cheeses::create(array(
            'name' => $data['cheeses'],
            'calories' => $data['calories']
        ));
        return view('cheeses', $record->toArray());
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /cheeses
	 *
	 * @return Response
	 */
	public function store()
	{
		// w
	}

	/**
	 * Display the specified resource.
	 * GET /cheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /cheeses/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /cheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /cheeses/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}