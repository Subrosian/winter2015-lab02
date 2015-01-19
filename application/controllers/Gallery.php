<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends Application {

	/**
	 * Index Page for this controller.
	 */
	public function index()
	{
                $this->data['pagebody'] = 'gallery'; $this->render();
	}
}

/* End of file Gallery.php */
/* Location: ./application/controllers/Gallery.php */