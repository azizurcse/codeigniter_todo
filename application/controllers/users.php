<?php 


class Users extends CI_Controller{


public function show ()
{
	// $this->load->model('user_model');
	$data['results']=$this->user_model->get_users(1);

	$this->load->view('user_view',$data);
	// foreach ($result as $object) {
	// 	echo $object->username. "<br>";
	// }
}

public function insert()
{
	$username="azizur";
	$password="123";
	$this->user_model->create_users([
		'username'=>$username,
		'password'=>$password

		]);
}


public function update()
{
	$id=3;
	$username="azizur rahman";
	$password="123456";
	$this->user_model->update_users([
		'username'=>$username,
		'password'=>$password

		],$id);
}

public function delete()
{
	$id=3;
	$this->user_model->delete_users($id);
}

}










?>