<?php namespace App\Controllers;

use App\Models\BlogModel;

class Pages extends BaseController
{
	public function index()
	{

		 $model = new BlogModel();
		 $data['news'] = $model->getPosts();


		echo view('templates/header', $data);
		echo view('pages/home');
		echo view('templates/footer');
	}
	 function showme($page = 'home')
 			{

	// 	// if(! is_file(APPATH.'/Views/pages'.$page.'php'))
	// 	// 	{
	// 	// 		throw new \Codeigniter\Exceptions\PageNotFoundExeption($page);
	// 	// 	}		
				echo view('templates/header');
				echo view('pages/'.$page);
				echo view('templates/footer');

	
			}
	

	//--------------------------------------------------------------------

}
