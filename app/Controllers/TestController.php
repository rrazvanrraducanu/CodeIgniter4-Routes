<?php 
namespace App\Controllers;
use CodeIgniter\Controller;
class TestController extends Controller
{
	public function index(){
		return redirect()->route('welcome');
	}
        public function welcome(){
            echo "Welcome!!!";
        }     
}
 