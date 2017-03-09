<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Abono extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('AbonoModel');
    }

    public function abono() {
        $this->form_validation->set_rules('folio', 'Folio', 'trim|required|integer');
        $this->form_validation->set_rules('sucursal', 'Sucursal', 'trim|required');
        $this->form_validation->set_rules('fecha', 'Fecha', 'trim|required');
        $this->form_validation->set_rules('abono', 'Abono', 'trim|required');
        $this->form_validation->set_rules('fore', 'Folio Resibo', 'trim|required');

        if ($this->form_validation->run() == true) {
            $fol = $this->input->post('folio');
            $sucu = $this->input->post('sucursal');
            $fech = $this->input->post('fecha');
            $abono = $this->input->post('abono');
            $fore = $this->input->post('fore');
            $this->AbonoModel->agregarabono($fol, $sucu, $abono, $fore, $fech);
            redirect('Show/abono');
        } else {
            redirect('Show/abono');
        }
    }

}
