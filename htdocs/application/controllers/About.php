<?php
class About extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($car = '')
	{
		$this->load->model('car_dealership');
        
		$data['destination'] = array(
			'site' => 'block_view/about',
		);
		
		$data['collection'] = $this->car_dealership->getAllCars();
        $data['lastShown'] = '';

		if ($car != '') {
            $data['lastShown'] = $car;
        }


		$this->load->view('modular_view_index', $data);
	}

    public function back_to_index($car = '')
    {
        $this->index($car);
    }
}
