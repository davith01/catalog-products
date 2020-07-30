<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = new \App\Category(); 
        $category1->name = "Pellentesque et risus"; 
        $category1->description = "Viverra mauris in aliquam sem fringilla ut morbi tincidunt augue. Cras ornare arcu dui vivamus arcu. Orci phasellus egestas tellus rutrum tellus.";
        $category1->save();

        $category2 = new \App\Category(); 
        $category2->description = "Tellus id interdum velit laoreet id donec ultrices. Felis donec et odio pellentesque diam volutpat commodo sed egestas. Scelerisque fermentum dui faucibus in ornare. Platea dictumst vestibulum rhoncus est pellentesque. Donec ac odio tempor orci dapibus ultrices";
        $category2->name = "Mauris blandit"; 
        $category2->save();

        $images = [
            'https://loremflickr.com/cache/resized/65535_50148690626_60f7f31b63_c_640_360_nofilter.jpg',
            'https://loremflickr.com/cache/resized/65535_50140422781_f67e74d118_z_640_360_nofilter.jpg',
            'https://loremflickr.com/cache/resized/65535_49753624557_f98ebc4de0_z_640_360_nofilter.jpg',
            'https://loremflickr.com/cache/resized/65535_49953179987_bb98b0bcf4_c_640_360_nofilter.jpg',
            'https://loremflickr.com/cache/resized/65535_49893876713_6f84caeef0_z_640_360_nofilter.jpg' ];

        $products = [
            ['name'=>'Mauris ornare elit semper augue faucibus vestibulum.', 'image'=> $images[0], 'category_id'=>$category1->id],
            ['name'=>'Curabitur hendrerit turpis a est tincidunt, viverra fringilla velit varius.', 'image'=> $images[1],'category_id'=>$category1->id],
            ['name'=>'Integer ac dui nec quam pellentesque ultricies.', 'image'=> $images[2],'category_id'=>$category2->id],
            ['name'=>'Donec ac augue eget enim vestibulum iaculis ac eget nunc.', 'image'=> $images[3],'category_id'=>$category2->id],
            ['name'=>'Nam in diam in sem fringilla pellentesque ac a nisl.', 'image'=> $images[4],'category_id'=>$category1->id],
        ];
        foreach ($products as $product) {
            $productN = new \App\Product();
            $productN->name = $product['name'];
            $productN->image = $product['image'];
            $productN->category_id = $product['category_id'];
            $productN->save();
        }
    }
}
