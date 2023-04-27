<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

class ProductController extends Controller
{
    public function index(String $nama){
        $product = [
            ['name' => 'Asus Vivobook', 'rating' => 'Laptop', 'price' => 'Approx 10M','id' => '1','Description' =>'ASUS VivoBook 14 A416 is an entry-level laptop that delivers powerful performance and immersive visuals. The NanoEdge display offers wide 178° viewing angles and an anti-glare coating for a truly immersive experience. Inside, its powered by a 10th Gen Intel® Core™ i5 processor with up to 8GB of RAM and NVIDIA® MX330 discrete graphics. The dual storage design with up to 256GB PCIe® SSD and 1TB HDD gives you the perfect combination of large storage capacity and fast data read/write speed.', 'Image' => 'asus.jpg'],
            ['name' => 'Lenovo Thinkpad', 'rating' => 'Laptop', 'price' => 'Approx 15M','id' => '2','Description' =>'Lenovo Thinkpad T14 Built to perform and engineered to endure, our flagship business line boasts our most customizable laptops. Features like blazing-fast memory and cutting-edge storage options, along with the latest technology from Intel®, AMD, and NVIDIA®, make the ThinkPad T Series the ideal choice to take your business to the next level.', 'Image' => 'lenovo.jpg'],
            ['name' => 'Samsung S21 5G', 'rating' => 'Smartphone', 'price' => 'Approx 7M','id' => '3','Description' =>'Samsung s21 5g has 8GB of RAM ensuring smooth multitasking performance. The Samsung Galaxy S21 5G also has a high-resolution rear camera. The main camera has a resolution of 12MP, a 12MP ultrawide camera and a 64MP telephoto camera. On the front there is a 10MP selfie camera. The Samsung S21 5G has a 6.2-inch Super AMOLED screen with a 120Hz refresh rate.', 'Image' => 's21.jpg'],
            ['name' => 'Samsung Buds 2', 'rating' => 'Earbuds', 'price' => 'Approx 1M','id' => '4','Description' =>'Samsung Galaxy Buds2 is the newest earbuds that open a new world of audio experience with active noise canceling, comfort fit, and immersive sound.', 'Image' => 'buds.jpg']
        ];
        return view('example.device', compact('product'));
    }

    public function show(String $id){
        $product = [
            ['name' => 'Asus Vivobook', 'rating' => 'Laptop', 'price' => 'Approx 10M','id' => '1','Description' =>'ASUS VivoBook 14 A416 is an entry-level laptop that delivers powerful performance and immersive visuals. The NanoEdge display offers wide 178° viewing angles and an anti-glare coating for a truly immersive experience. Inside, its powered by a 10th Gen Intel® Core™ i5 processor with up to 8GB of RAM and NVIDIA® MX330 discrete graphics. The dual storage design with up to 256GB PCIe® SSD and 1TB HDD gives you the perfect combination of large storage capacity and fast data read/write speed.', 'Image' => 'asus.jpg'],
            ['name' => 'Lenovo Thinkpad', 'rating' => 'Laptop', 'price' => 'Approx 15M','id' => '2','Description' =>'Lenovo Thinkpad T14 Built to perform and engineered to endure, our flagship business line boasts our most customizable laptops. Features like blazing-fast memory and cutting-edge storage options, along with the latest technology from Intel®, AMD, and NVIDIA®, make the ThinkPad T Series the ideal choice to take your business to the next level.', 'Image' => 'lenovo.jpg'],
            ['name' => 'Samsung S21 5G', 'rating' => 'Smartphone', 'price' => 'Approx 7M','id' => '3','Description' =>'Samsung s21 5g has 8GB of RAM ensuring smooth multitasking performance. The Samsung Galaxy S21 5G also has a high-resolution rear camera. The main camera has a resolution of 12MP, a 12MP ultrawide camera and a 64MP telephoto camera. On the front there is a 10MP selfie camera. The Samsung S21 5G has a 6.2-inch Super AMOLED screen with a 120Hz refresh rate.', 'Image' => 's21.jpg'],
            ['name' => 'Samsung Buds 2', 'rating' => 'Earbuds', 'price' => 'Approx 1M','id' => '4','Description' =>'Samsung Galaxy Buds2 is the newest earbuds that open a new world of audio experience with active noise canceling, comfort fit, and immersive sound.', 'Image' => 'buds.jpg']
        ];
        return view('example.description', compact('product','id'));
    }
}
