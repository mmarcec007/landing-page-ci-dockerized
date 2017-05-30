<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cars extends MX_Controller {

	public function index($car = '')
	{
        $this->load->model('base/car_dealership');

        $data['destination'] = array(
            'site' => 'about',
        );

        $data['collection'] = $this->car_dealership->getAllCars();
        $data['lastShown'] = '';

        if ($car != '') {
            $data['lastShown'] = $car;
        }

        $this->load->ext_view('modules/base/views', 'modular_view_index', $data);
	}

    public function back_to_index($car = '')
    {
        $this->index($car);
    }
}
