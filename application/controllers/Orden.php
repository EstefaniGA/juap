<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Orden extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('OrdenModel');
    }

    public function agregarSucursal() {
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|is_unique[sucursal.Nombre]');
        if ($this->form_validation->run() == true) {
            $n = $this->input->post('nombre');
            $this->OrdenModel->agregarSucursal($n);
            redirect('Show/listarSucursal');
        } else {
            redirect('Show/listarSucursal');
        }
    }

    public function actualizarSucursal() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        $this->form_validation->set_rules('nombre', 'Nombre', 'trim|required|is_unique[usuarios.Nombre]');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $n = $this->input->post('nombre');
            $this->OrdenModel->actualizarSucursal($id, $n);
            redirect('Show/listarSucursal');
        } else {
            redirect('Show/listarSucursal');
        }
    }

    public function eliminarSucursal() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $this->OrdenModel->eliminarSucursal($id);
            redirect('Show/listarSucursal');
        } else {
            redirect('Show/listarSucursal');
        }
    }

    public function selecSucursal() {
        $this->form_validation->set_rules('sucursal', 'Sucursal', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('sucursal');
            $this->OrdenModel->selecSucursal($id);
            redirect('Show/administrador');
        }
    }

    public function agregarOrden() {

        $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        //$this->form_validation->set_rules('personasolicitante','Persona que atendió','trim|required');
        //$this->form_validation->set_rules('subtotalempresa','Sub-Total ','trim|required|integer');
        //$this->form_validation->set_rules('stotalempresa','Total ','trim|required|integer');

        if ($this->form_validation->run() == true) {
            $finadoo = $this->input->post('finado');
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
            $fech = $this->input->post('fechabono');
            $nomf = $this->input->post('nombrefinado');
            $domfin = $this->input->post('domiciliofinado');
            $ciu = $this->input->post('ciudadadfinado');
            $fechf = $this->input->post('fechafinado');
            $edf = $this->input->post('edadfinado');
            $apf = $this->input->post('apellidopafinado');
            $nuf = $this->input->post('numerofinado');
            $colf = $this->input->post('coloniafinado');
            $ecf = $this->input->post('estadociv');
            $escf = $this->input->post('escolaridadfinado');
            $apmf = $this->input->post('apellidomafinado');
            $naf = $this->input->post('nacionalidadfinado');
            $ocf = $this->input->post('ocupacionfinado');
            $dhf = $this->input->post('derechofinado');
            $sef = $this->input->post('sexo');
            $noms = $this->input->post('nombresolicitante');
            $doms = $this->input->post('domiciliosolicitante');
            $cius = $this->input->post('ciudadadsolicitante');
            $eds = $this->input->post('edadsolicitante');
            $aps = $this->input->post('apellidopasolicitante');
            $nus = $this->input->post('numerosolicitante');
            $cols = $this->input->post('coloniasolicitante');
            $ecs = $this->input->post('estadocivs');
            $ams = $this->input->post('apellidomasolicitante');
            $pares = $this->input->post('parentesco');
            $tels = $this->input->post('telefonosolicitante');
            $pers = $this->input->post('personasolicitante');
            $lug = $this->input->post('lugardifuncion');
            $hord = $this->input->post('horadifuncion');
            $fecd = $this->input->post('fechadifuncion');
            $caud = $this->input->post('causasdifuncion');
            $lud = $this->input->post('lugarvelacion');
            $hov = $this->input->post('horavelacion');
            $fev = $this->input->post('fechavelacion');
            $igv = $this->input->post('iglesiavelacion');
            $horv = $this->input->post('horasepvelacion');
            $nev = $this->input->post('nombreexhumar');
            $panv = $this->input->post('panteonvelacion');
            $ubv = $this->input->post('ubicacionvelacion');
            $prpv = $this->input->post('perpetuidad');
            $tempv = $this->input->post('temporalvelacion');
            $apav = $this->input->post('apellidopaexhumar');
            $fede = $this->input->post('fechadifexhumar');
            $apmae = $this->input->post('apellidomaexhumar');
            $ate = $this->input->post('ataudempresa');
            $mode = $this->input->post('modeloempresa');
            $cae = $this->input->post('capillasempresa');
            $eme = $this->input->post('embalsamadaempresa');
            $adoe = $this->input->post('adomicilioempresa');
            $care = $this->input->post('carrozaempresa');
            $trase = $this->input->post('trasladoempresa');
            $ure = $this->input->post('urnaempresa');
            $modee = $this->input->post('modelouempresa');
            $creme = $this->input->post('cremacionempresa');
            $otre = $this->input->post('otrosgasempresa');
            $luge = $this->input->post('lugarcremaempresa');
            $sube = $this->input->post('subtotalempresa');
            $ime = $this->input->post('impuestosempresa');
            $cere = $this->input->post('certificadoempresa');
            $ote = $this->input->post('otrosempresa');
            $obe = $this->input->post('observacionesempresa');
            $tote = $this->input->post('totalempresa');
            $abono = $this->input->post('abono');
            $suc1 = $this->OrdenModel->sel();
            foreach ($suc1 as $com) {
                $suc = $com->idSucursal;
            }
            $soli = $this->OrdenModel->agregarSolicitante($noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $pares, $tels);
            $ord = $this->OrdenModel->agregarOrden($soli, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
                    , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono);
            $this->OrdenModel->agregarabono($ord, $abono, $fech, $suc);



            redirect('Show/listarOrden');
        } else {


            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrden';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        }
    }

    public function modificarOrden() {
        // $this->form_validation->set_rules('identificador','Identificador','trim|required|integer');
        // $this->form_validation->set_rules('identificador','Identificador','trim|required|integer');
        //  $this->form_validation->set_rules('nombresolicitante','Nombre del solicitante','trim|required');
        // $this->form_validation->set_rules('domiciliosolicitante','Domicilio del solicitante','trim|required');
        //  $this->form_validation->set_rules('ciudadadsolicitante','Ciudad del solicitante','trim|required');
        // $this->form_validation->set_rules('edadsolicitante','Edad del solicitante','trim|required|integer');
        // $this->form_validation->set_rules('apellidopasolicitante','Apellido Paterno del solicitante','trim|required');
        //  $this->form_validation->set_rules('coloniasolicitante','Colonia del solicitante','trim|required');
        //$this->form_validation->set_rules('estadocivs','Estado Civil del solicitante','trim|required');
        //$this->form_validation->set_rules('apellidomasolicitante','Apellido Materno del solicitante','trim|required');
        // if($this->form_validation->run()==true){

        $id = $this->input->post('ids');
        $idf = $this->input->post('identificador');
        $finadoo = $this->input->post('finado');
        $suc = $this->input->post('sucursal');
        $fec = $this->input->post('fecha');
        $fech = $this->input->post('fechabono');
        $nomf = $this->input->post('nombrefinado');
        $domfin = $this->input->post('domiciliofinado');
        $ciu = $this->input->post('ciudadadfinado');
        $fechf = $this->input->post('fechafinado');
        $edf = $this->input->post('edadfinado');
        $apf = $this->input->post('apellidopafinado');
        $nuf = $this->input->post('numerofinado');
        $colf = $this->input->post('coloniafinado');
        $ecf = $this->input->post('estadociv');
        $escf = $this->input->post('escolaridadfinado');
        $apmf = $this->input->post('apellidomafinado');
        $naf = $this->input->post('nacionalidadfinado');
        $ocf = $this->input->post('ocupacionfinado');
        $dhf = $this->input->post('derechofinado');
        $sef = $this->input->post('sexo');
        $noms = $this->input->post('nombresolicitante');
        $doms = $this->input->post('domiciliosolicitante');
        $cius = $this->input->post('ciudadadsolicitante');
        $eds = $this->input->post('edadsolicitante');
        $aps = $this->input->post('apellidopasolicitante');
        $nus = $this->input->post('numerosolicitante');
        $cols = $this->input->post('coloniasolicitante');
        $ecs = $this->input->post('estadocivs');
        $ams = $this->input->post('apellidomasolicitante');
        $pares = $this->input->post('parentesco');
        $tels = $this->input->post('telefonosolicitante');
        $pers = $this->input->post('personasolicitante');
        $lug = $this->input->post('lugardifuncion');
        $hord = $this->input->post('horadifuncion');
        $fecd = $this->input->post('fechadifuncion');
        $caud = $this->input->post('causasdifuncion');
        $lud = $this->input->post('lugarvelacion');
        $hov = $this->input->post('horavelacion');
        $fev = $this->input->post('fechavelacion');
        $igv = $this->input->post('iglesiavelacion');
        $horv = $this->input->post('horasepvelacion');
        $nev = $this->input->post('nombreexhumar');
        $panv = $this->input->post('panteonvelacion');
        $ubv = $this->input->post('ubicacionvelacion');
        $prpv = $this->input->post('perpetuidad');
        $tempv = $this->input->post('temporalvelacion');
        $apav = $this->input->post('apellidopaexhumar');
        $fede = $this->input->post('fechadifexhumar');
        $apmae = $this->input->post('apellidomaexhumar');
        $ate = $this->input->post('ataudempresa');
        $mode = $this->input->post('modeloempresa');
        $cae = $this->input->post('capillasempresa');
        $eme = $this->input->post('embalsamadaempresa');
        $adoe = $this->input->post('adomicilioempresa');
        $care = $this->input->post('carrozaempresa');
        $trase = $this->input->post('trasladoempresa');
        $ure = $this->input->post('urnaempresa');
        $modee = $this->input->post('modelouempresa');
        $creme = $this->input->post('cremacionempresa');
        $otre = $this->input->post('otrosgasempresa');
        $luge = $this->input->post('lugarcremaempresa');
        $sube = $this->input->post('subtotalempresa');
        $ime = $this->input->post('impuestosempresa');
        $cere = $this->input->post('certificadoempresa');
        $ote = $this->input->post('otrosempresa');
        $obe = $this->input->post('observacionesempresa');
        $tote = $this->input->post('totalempresa');
        $abono = $this->input->post('abono');
        $idpag = $this->input->post('idpagos');

        $soli = $this->OrdenModel->actualizarSolicitante($id, $noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $pares, $tels);
        $ord = $this->OrdenModel->modificarOrden($idf, $soli, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
                , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono);
        $this->OrdenModel->actualizarAbono($idpag, $ord, $abono, $fech, $suc);
        redirect('Show/listarOrden');
        // }
        //redirect('Show/listarUsuario');    
    }

    public function eliminarOrden() {
        $this->form_validation->set_rules('identificador', 'Identificador', 'trim|required|integer');
        if ($this->form_validation->run() == true) {
            $id = $this->input->post('identificador');
            $this->OrdenModel->eliminarSolicitante($id);
            $this->OrdenModel->eliminarOrden($id);
            $this->OrdenModel->eliminarAbono($id);
            redirect('Show/listarOrden');
        } else {
            redirect('Show/listarOrden');
        }
    }

    public function agregarOrdenComunidad() {
        $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        if ($this->form_validation->run() == true) {
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
//             solicitante
            $noms = $this->input->post('nombresolicitante');
            $doms = $this->input->post('domiciliosolicitante');
            $cius = $this->input->post('ciudadadsolicitante');
            $eds = $this->input->post('edadsolicitante');
            $aps = $this->input->post('apellidopasolicitante');
            $nus = $this->input->post('numerosolicitante');
            $cols = $this->input->post('coloniasolicitante');
            $ecs = $this->input->post('estadocivs');
            $ams = $this->input->post('apellidomasolicitante');
            $pares = $this->input->post('parentesco');
            $tels = $this->input->post('telefonosolicitante');
            $pers = $this->input->post('personasolicitante');
//               Nombres de beneficiarios
            $n1 = $this->input->post('nombreb1');
            $app1 = $this->input->post('apellidopab1');
            $apm1 = $this->input->post('apellidomab1');
            $n2 = $this->input->post('nombreb2');
            $app2 = $this->input->post('apellidopab2');
            $apm2 = $this->input->post('apellidomab2');
            $n3 = $this->input->post('nombreb3');
            $app3 = $this->input->post('apellidopab3');
            $apm3 = $this->input->post('apellidomab3');
            $n4 = $this->input->post('nombreb4');
            $app4 = $this->input->post('apellidopab4');
            $apm4 = $this->input->post('apellidomab4');
            $n5 = $this->input->post('nombreb5');
            $app5 = $this->input->post('apellidopab5');
            $apm5 = $this->input->post('apellidomab5');
            $n6 = $this->input->post('nombreb6');
            $app6 = $this->input->post('apellidopab6');
            $apm6 = $this->input->post('apellidomab6');
            $n7 = $this->input->post('nombreb7');
            $app7 = $this->input->post('apellidopab7');
            $apm7 = $this->input->post('apellidomab7');
            $n8 = $this->input->post('nombreb8');
            $app8 = $this->input->post('apellidopab8');
            $apm8 = $this->input->post('apellidomab8');
////              tipo
//                $tipo=$this->input->post('tipo');
////                tipo de beneficiario
//                $cony=$this->input->post('conyugue');
//                $ma=$this->input->post('madre');
//               $sueg=$this->input->post('suegro');
//                $pa=$this->input->post('padre');
//                 $suega=$this->input->post('suegra');
//                  $hi1=$this->input->post('hijo1');
//                  $hi2=$this->input->post('hijo2');
//                  $hi3=$this->input->post('hijo3');


            $suc1 = $this->OrdenModel->sel();
            foreach ($suc1 as $com) {
                $suc = $com->idSucursal;
            }
//               agregar solicitante
            $soli = $this->OrdenModel->agregarSolicitante($noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $pares, $tels);
//               agregar apoyo
            $ord = $this->OrdenModel->agregarOrdenComunidad($soli, $fec, $suc, $pers);
//          agregar tipo de beneficiario
//             $bene=$this->OrdenModel->agregarBeneficiarios($tipo);
//             agregar beneficiarios
            $this->OrdenModel->addbenef($ord, $n1, $app1, $apm1, $n2, $app2, $apm2, $n3, $app3, $apm3, $n4, $app4, $apm4, $n5, $app5, $apm5, $n6, $app6, $apm6, $n7, $app7, $apm7, $n8, $app8, $apm8);
//           


            redirect('Show/listarOrdenComunidad');
        } else {


            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrdenComunidad';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        }
    }
    public function modificarOrdenComunidad(){
          $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        if ($this->form_validation->run() == true) {
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
//             solicitante
            $id = $this->input->post('ids');
            $noms = $this->input->post('nombresolicitante');
            $doms = $this->input->post('domiciliosolicitante');
            $cius = $this->input->post('ciudadadsolicitante');
            $eds = $this->input->post('edadsolicitante');
            $aps = $this->input->post('apellidopasolicitante');
            $nus = $this->input->post('numerosolicitante');
            $cols = $this->input->post('coloniasolicitante');
            $ecs = $this->input->post('estadocivs');
            $ams = $this->input->post('apellidomasolicitante');
            $pares = $this->input->post('parentesco');
            $tels = $this->input->post('telefonosolicitante');
            $pers = $this->input->post('personasolicitante');
//               Nombres de beneficiarios
            $idbe = $this->input->post('idb');
            $n1 = $this->input->post('nombreb1');
            $app1 = $this->input->post('apellidopab1');
            $apm1 = $this->input->post('apellidomab1');
            $n2 = $this->input->post('nombreb2');
            $app2 = $this->input->post('apellidopab2');
            $apm2 = $this->input->post('apellidomab2');
            $n3 = $this->input->post('nombreb3');
            $app3 = $this->input->post('apellidopab3');
            $apm3 = $this->input->post('apellidomab3');
            $n4 = $this->input->post('nombreb4');
            $app4 = $this->input->post('apellidopab4');
            $apm4 = $this->input->post('apellidomab4');
            $n5 = $this->input->post('nombreb5');
            $app5 = $this->input->post('apellidopab5');
            $apm5 = $this->input->post('apellidomab5');
            $n6 = $this->input->post('nombreb6');
            $app6 = $this->input->post('apellidopab6');
            $apm6 = $this->input->post('apellidomab6');
            $n7 = $this->input->post('nombreb7');
            $app7 = $this->input->post('apellidopab7');
            $apm7 = $this->input->post('apellidomab7');
            $n8 = $this->input->post('nombreb8');
            $app8 = $this->input->post('apellidopab8');
            $apm8 = $this->input->post('apellidomab8');

           
            }
//            actualizar solicitante
             $soli = $this->OrdenModel->actualizarSolicitante($id, $noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $pares, $tels);
//             actualizar apoyo
             $ord=$this->OrdenModel->actualizarOrdenComunidad($fo,$suc,$fec,$id,$pers);
//             actualizar beneficiarios
               $this->OrdenModel->actualizarBeneficiarios($idbe,$fo, $n1, $app1, $apm1, $n2, $app2, $apm2, $n3, $app3, $apm3, $n4, $app4, $apm4, $n5, $app5, $apm5, $n6, $app6, $apm6, $n7, $app7, $apm7, $n8, $app8, $apm8);
         redirect('Show/listarOrdenComunidad');
    }

    public function agregarOrdenSol() {

        $this->form_validation->set_rules('nombresolicitante', 'Nombre del solicitante', 'trim|required');
        $this->form_validation->set_rules('domiciliosolicitante', 'Domicilio del solicitante', 'trim|required');
        $this->form_validation->set_rules('ciudadadsolicitante', 'Ciudad del solicitante', 'trim|required');
        $this->form_validation->set_rules('edadsolicitante', 'Edad del solicitante', 'trim|required|integer');
        $this->form_validation->set_rules('apellidopasolicitante', 'Apellido Paterno del solicitante', 'trim|required');
        $this->form_validation->set_rules('coloniasolicitante', 'Colonia del solicitante', 'trim|required');
        $this->form_validation->set_rules('estadocivs', 'Estado Civil del solicitante', 'trim|required');
        $this->form_validation->set_rules('apellidomasolicitante', 'Apellido Materno del solicitante', 'trim|required');
        //$this->form_validation->set_rules('personasolicitante','Persona que atendió','trim|required');
        //$this->form_validation->set_rules('subtotalempresa','Sub-Total ','trim|required|integer');
        //$this->form_validation->set_rules('stotalempresa','Total ','trim|required|integer');

        if ($this->form_validation->run() == true) {
            $ids = $this->input->post('ids');
            $finadoo = $this->input->post('finado');
            $fo = $this->input->post('folio');
            $suc = $this->input->post('sucursal');
            $fec = $this->input->post('fecha');
            $fech = $this->input->post('fechabono');
            $nomf = $this->input->post('nombrefinado');
            $domfin = $this->input->post('domiciliofinado');
            $ciu = $this->input->post('ciudadadfinado');
            $fechf = $this->input->post('fechafinado');
            $edf = $this->input->post('edadfinado');
            $apf = $this->input->post('apellidopafinado');
            $nuf = $this->input->post('numerofinado');
            $colf = $this->input->post('coloniafinado');
            $ecf = $this->input->post('estadociv');
            $escf = $this->input->post('escolaridadfinado');
            $apmf = $this->input->post('apellidomafinado');
            $naf = $this->input->post('nacionalidadfinado');
            $ocf = $this->input->post('ocupacionfinado');
            $dhf = $this->input->post('derechofinado');
            $sef = $this->input->post('sexo');
            $noms = $this->input->post('nombresolicitante');
            $doms = $this->input->post('domiciliosolicitante');
            $cius = $this->input->post('ciudadadsolicitante');
            $eds = $this->input->post('edadsolicitante');
            $aps = $this->input->post('apellidopasolicitante');
            $nus = $this->input->post('numerosolicitante');
            $cols = $this->input->post('coloniasolicitante');
            $ecs = $this->input->post('estadocivs');
            $ams = $this->input->post('apellidomasolicitante');
            $pares = $this->input->post('parentesco');
            $tels = $this->input->post('telefonosolicitante');
            $pers = $this->input->post('personasolicitante');
            $lug = $this->input->post('lugardifuncion');
            $hord = $this->input->post('horadifuncion');
            $fecd = $this->input->post('fechadifuncion');
            $caud = $this->input->post('causasdifuncion');
            $lud = $this->input->post('lugarvelacion');
            $hov = $this->input->post('horavelacion');
            $fev = $this->input->post('fechavelacion');
            $igv = $this->input->post('iglesiavelacion');
            $horv = $this->input->post('horasepvelacion');
            $nev = $this->input->post('nombreexhumar');
            $panv = $this->input->post('panteonvelacion');
            $ubv = $this->input->post('ubicacionvelacion');
            $prpv = $this->input->post('perpetuidad');
            $tempv = $this->input->post('temporalvelacion');
            $apav = $this->input->post('apellidopaexhumar');
            $fede = $this->input->post('fechadifexhumar');
            $apmae = $this->input->post('apellidomaexhumar');
            $ate = $this->input->post('ataudempresa');
            $mode = $this->input->post('modeloempresa');
            $cae = $this->input->post('capillasempresa');
            $eme = $this->input->post('embalsamadaempresa');
            $adoe = $this->input->post('adomicilioempresa');
            $care = $this->input->post('carrozaempresa');
            $trase = $this->input->post('trasladoempresa');
            $ure = $this->input->post('urnaempresa');
            $modee = $this->input->post('modelouempresa');
            $creme = $this->input->post('cremacionempresa');
            $otre = $this->input->post('otrosgasempresa');
            $luge = $this->input->post('lugarcremaempresa');
            $sube = $this->input->post('subtotalempresa');
            $ime = $this->input->post('impuestosempresa');
            $cere = $this->input->post('certificadoempresa');
            $ote = $this->input->post('otrosempresa');
            $obe = $this->input->post('observacionesempresa');
            $tote = $this->input->post('totalempresa');
            $abono = $this->input->post('abono');
            $suc1 = $this->OrdenModel->sel();
            foreach ($suc1 as $com) {
                $suc = $com->idSucursal;
            }
//               $soli= $this->OrdenModel->agregarSolicitante($noms,$doms,$cius,$eds,$aps,$nus,$cols,$ecs,$ams,$pares,$tels); 
            $ord = $this->OrdenModel->agregarOrden($ids, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
                    , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono);
            $this->OrdenModel->agregarabono($ord, $abono, $fech, $suc);



            redirect('Show/listarOrden');
        } else {


            $data['tit'] = 'Orden Nueva';
            $data['cont'] = 'newOrden';
            $data['nom'] = $this->session->userdata('nombre');
            $data['fol'] = $this->OrdenModel->folio();
            $data['su'] = $this->OrdenModel->sel();
            $this->load->view('show', $data);
        }
    }

}
