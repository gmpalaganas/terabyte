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
		$categories = Category::get();

		return View::make('about', compact('categories'));
	}

	public function add()
	{
		$categories = Category::get();

		return View::make('add', compact('categories'));
	}

	public function store()
	{
		$inputs = Input::all();
		$items= array('name' => $inputs['itemName'],
					'price' => $inputs['itemPrice'],
					'category_id' => $inputs['itemCategoryId']);
		
		Item::insert($items);
		
		return Redirect::to('/');
	}

	public function delete()
	{
		$categories = Category::get();

		return View::make('delete', compact('categories'));
	}

	public function postDelete()
	{
		$inputs = Input::all();
		$items = new Item();
		$items->name = $inputs['itemName'];

		Item::where('name', $inputs['itemName'])->delete();

		return Redirect::to('/');		

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
