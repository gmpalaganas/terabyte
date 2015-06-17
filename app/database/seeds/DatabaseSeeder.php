<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
    
    public function run(){
        
       $this->call('CategoryTableSeeder'); 
       $this->call('ItemTableSeeder');
    }    

}

class CategoryTableSeeder extends Seeder {
    
    public function run(){
        
        DB::table('categories')->delete();        

        $categories = array('Mouse','Keyboard','Monitor');

        foreach($categories as $category){
            DB::table('categories')->insert(array('name'=>$category));
        }
        
	}

}

class ItemTableSeeder extends Seeder {
    
    public function run(){

        DB::table('items')->delete();

        $items = [ 
            'Razer Naga' => ['Mouse', 5000 ], 
            'SteelSeries Sensei' => ['Mouse', 4500],
            'Razer Anansi' => ['Keyboard', 6000],
            'SteelSeries Apex' => ['Keyboard', 7000],
            'ASUS ROG Swift' => ['Monitor', 10000],
            'Acer XB280HK' => ['Monitor', 120000],
        ]; 

        foreach( $items as $item => $details){
            $category = Category::where('name','=',$details[0])->select('id')->first();
            DB::table('items')->insert(array(
               'name' => $item,
               'price' => $details[1],
               'category_id' => $category->id
            )); 
        }

    }

}
