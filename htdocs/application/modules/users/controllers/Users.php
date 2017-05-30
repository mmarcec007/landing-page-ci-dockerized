<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller {

	public function index($car = '')
	{
        $this->load->model('users/car_dealership');

        $data['destination'] = array(
            'site' => 'block_view/about2',
        );

        $data['collection'] = $this->car_dealership->getAllCars();
        $data['lastShown'] = '';

        if ($car != '') {
            $data['lastShown'] = $car;
        }

		$this->load->view('modular_view_index', $data);
	}
}

/* End of file users.php */
/* Location: ./application/modules/users/controllers/users.php */