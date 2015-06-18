<?php

class ItemsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{

        $items = Item::join('categories','items.category_id','=','categories.id')
            ->select('items.name','items.price','categories.name as category')->get();
        
        $categories = Category::all();        

		return View::make('index', compact('items'),compact('categories'));


	}

	public function showByCategory($id)
	{
        $items = Item::join('categories','items.category_id','=','categories.id')
            ->where('category_id','=',$id)
            ->select('items.name','items.price','categories.name as category')
            ->get();

		$categories = Category::get();

		return View::make('items.category',compact('items'),compact('categories'));
	}

	public function about()
	{
		$items = Item::get();
		$categories = Category::get();

		return View::make('about', compact('items'), compact('categories'));
	}

	public function add()
	{
		$items = Item::get();
		$categories = Category::get();

		return View::make('add', compact('items'), compact('categories'));
	}

	public function delete()
	{
		$items = Item::get();
		$categories = Category::get();

		return View::make('delete', compact('items'), compact('categories'));
	}



	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
