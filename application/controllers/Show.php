<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Show extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('UsuariosModel');
        $this->load->model('OrdenModel');
        $this->load->model('BuscadorModel');
        $this->load->model('AbonoModel');
    }

    public function index() {

        $data['tit'] = 'Inicio';
        $data['cont'] = 'index';
        $data['nom'] = '';
        $this->load->view('showIndex', $data);
    }

    public function administrador() {

        if ($this->session->userdata('login')) {
            $data['tit'] = 'Menú';
            $data['cont'] = 'administrador';
            $data['su'] = $this->OrdenModel->sel();
            $data['lista'] = $this->OrdenModel->listarSucursal();
            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('showAdmin', $data);
        } else {
            $this->index();
        }
    }

    public function usuario() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Menú';
            $data['cont'] = 'usuario';
            $data['su'] = $this->OrdenModel->sel();
            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('showAdmin', $data);
        } else {
            $this->index();
        }
    }

    public function menuUsuario() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Menú usuario';
            $data['cont'] = 'menuUsuario';
            $data['fol'] = $this->UsuariosModel->usu();
            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('showAdmin', $data);
        } else {
            $this->index();
        }
    }

    public function registrarUsuario() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Nuevo usuario';
            $data['cont'] = 'newUser';
            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function listarUsuario() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Mostrar usuario';
            $data['cont'] = 'listarUsuario';
            $data['lista'] = $this->UsuariosModel->listarUsuario();

            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function modificarUsuario() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Modificar usuario';
            $data['cont'] = 'newUser';
            $id = $this->input->post('identificador');

            $data['modificar'] = $this->UsuariosModel->modificarUsuario($id);
            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function listarSucursal() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Mostrar sucursal';
            $data['cont'] = 'sucursal';
            $data['nom'] = $this->session->userdata('nombre');
            $data['lista'] = $this->OrdenModel->listarSucursal();
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function menuOrden() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Menú orden';
            $data['cont'] = 'menuOrden';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $this->load->view('showAdmin', $data);
        } else {
            $this->index();
        }
    }

    public function agregarOrden() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrden';
            $data['nom'] = $this->session->userdata('nombre');
            $data['idAtend'] = $this->session->userdata('usuario');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function listarOrden() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Mostrar Orden';
            $data['cont'] = 'listarOrden';
            $data['lista'] = $this->OrdenModel->listarOrden();
            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function modificarOrden() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Modificar Orden';
            $data['cont'] = 'modificarOrden';
            $id = $this->input->post('identificador');
            $data['modificar'] = $this->OrdenModel->seleccionarOrden($id);

            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('show', $data);
            //echo $datos;
        } else {
            $this->index();
        }
    }

    public function menuOrdenComunidad() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Menú orden Apoyo a la Comunidad';
            $data['cont'] = 'menuOrdenComunidad';
            $data['fol'] = $this->OrdenModel->folioApoyo(); //
            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('showAdmin', $data);
        } else {
            $this->index();
        }
    }

    public function agregarOrdenComunidad() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrdencomunidad';
            $data['nom'] = $this->session->userdata('nombre');
            $data['idAtend'] = $this->session->userdata('usuario');
            $data['fol'] = $this->OrdenModel->folioApoyo();
            $data['su'] = $this->OrdenModel->sel();
//          $data['tipo'] = $this->OrdenModel->seltipo(); 
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function listarOrdenComunidad() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Mostrar Orden';
            $data['cont'] = 'listarOrdenComunidad';
            $data['lista'] = $this->OrdenModel->listarOrdenComunidad();

            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function modificarOrdenComunidad() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Modificar Orden';
            $data['cont'] = 'modificarOrdenComunidad';
            $idor = $this->input->post('identificador');
            $data['modificar'] = $this->OrdenModel->seleccionarOrdenCom($idor);

            $data['nom'] = $this->session->userdata('nombre');
            $this->load->view('show', $data);
            
        } else {
            $this->index();
        }
    }

    public function buscador() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Buscador';
            $data['cont'] = 'buscador';
            $data['nom'] = $this->session->userdata('nombre');

            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function abono() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Abono';
            $data['cont'] = 'abono';
            $data['su'] = $this->OrdenModel->sel();
            $data['nom'] = $this->session->userdata('nombre');
            $idf = $this->input->post('identificador');
            $data['resultado'] = $this->AbonoModel->seleccionar($idf);
            $data['res'] = $this->AbonoModel->abonos($idf);
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function infBusqueda() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Información';
            $data['cont'] = 'resBuscador';
            $id = $this->input->post('identificador');
            $data['resultado'] = $this->BuscadorModel->seleccionar($id);
            $data['nom'] = $this->session->userdata('nombre');

            $this->load->view('showResBus', $data);
        } else {
            $this->index();
        }
    }

    public function solicitantes() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Solicitantes';
            $data['cont'] = 'solicitantes';
            $data['nom'] = $this->session->userdata('nombre');

            $this->load->view('showResBus', $data);
        } else {
            $this->index();
        }
    }

    public function nuevaOrden() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Solicitantes';
            $data['cont'] = 'newOrdenSol';
            $data['nom'] = $this->session->userdata('nombre');
            $ido = $this->input->post('identificador');
            $data['resultado'] = $this->OrdenModel->seleccionar($ido);
            $data['idAtend'] = $this->session->userdata('usuario');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
//            $data['tipo'] = $this->OrdenModel->seltipo();

            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

    public function nuevaOrdenComunidad() {
        if ($this->session->userdata('login')) {
            $data['tit'] = 'Orden Nueva de programa de apoyo a la comunidad';
            $data['cont'] = 'newOrdencomunidadSoli';
            $data['nom'] = $this->session->userdata('nombre');
            $ido = $this->input->post('identificador');
            $data['resultado'] = $this->OrdenModel->seleccionar($ido); //seleccionar solicitante
            $data['idAtend'] = $this->session->userdata('usuario');
            $data['fol'] = $this->OrdenModel->folioApoyo();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }
    
    public function nuevaordenApoAFune(){
         if ($this->session->userdata('login')) {
            $data['tit'] = 'Solicitantes';
            $data['cont'] = 'newOrdenSApoaFun';
            $data['nom'] = $this->session->userdata('nombre');
            $ido = $this->input->post('identificador');
            $data['resultado'] = $this->OrdenModel->seleccionar($ido);//seleccionar solicitante
            $data['idAtend'] = $this->session->userdata('usuario');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
//            consuta beneficiario
            $idor = $this->input->post('identificador');
            $data['resultado'] = $this->OrdenModel->seleccionarOrdenCom($idor);
//            

            $this->load->view('show', $data);
        } else {
            $this->index();
        }
    }

}
