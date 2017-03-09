<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class OrdenModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function listarSucursal() {
        $this->db->select('*');
        $this->db->from('sucursal');
        $sql = $this->db->get();
        return $sql->result();
    }

    public function agregarSucursal($nom) {
        $datos = array(
            'Nombre' => $nom,
        );
        return $this->db->insert('sucursal', $datos);
    }

    /**
     * 
     * @param type $id integer
     * @param type $n
     */
    public function actualizarSucursal($id, $n) {
        $data = array(
            'Nombre' => $n);

        $this->db->where('idSucursal', $id);
        $this->db->update('sucursal', $data);
    }

    public function eliminarSucursal($id) {
        $this->db->where('idSucursal', $id);
        $this->db->delete('sucursal');
    }

    public function selecSucursal($id) {
        $data = array(
            'Seleccionada' => "");
        $this->db->update('sucursal', $data);



        $data = array(
            'Seleccionada' => "x");

        $this->db->where('idSucursal', $id);
        $this->db->update('sucursal', $data);
    }

    public function sel() {
        $this->db->select('*');
        $this->db->from('sucursal');
        $this->db->where('Seleccionada', "x");
        $sql = $this->db->get();
        return $sql->result();
    }

    public function folio() {
        $this->db->select('Folio');
        $this->db->from('orden');
        $this->db->order_by('Folio', 'desc');
        $this->db->limit(1);
        $sql = $this->db->get();
        return $sql->result();
    }

    public function folioApoyo() {
        $this->db->select('idApoyo');
        $this->db->from('apoyo');
        $this->db->order_by('idApoyo', 'desc');
        $this->db->limit(1);
        $sql = $this->db->get();
        return $sql->result();
    }

//    agregar un solicitante para una orden 

    public function agregarSolicitante($noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $pares, $tels) {
        $datos = array(
            'NombreSolicitante' => $noms,
            'ApellidoSolPa' => $aps,
            'ApellidoSolMa' => $ams,
            'DomicilioSolicitante' => $doms,
            'NumeroSolicitante' => $nus,
            'Parentesco' => $pares,
            'CiudadSolicitante' => $cius,
            'ColoniaSolicitante' => $cols,
            'Telefono' => $tels,
            'EstadoCivilSolicitante' => $ecs,
            'Edad' => $eds
        );

        $this->db->insert('solicitantes', $datos);

        return $this->db->insert_id();
    }

//    agregar orden con el id de solicitante
    public function agregarOrden($soli, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
    , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono) {

        $datos = array(
            'Solicitantes_idSolicitantes' => $soli,
            'FechaOrden' => date('Y-m-d'),
            'Sucursal_idSucursal' => $suc,
            'PersonaAtendio' => $pers,
            'LugarDifuncion' => $lug,
            'Fecha' => $fecd,
            'Hora' => $hord,
            'Causa' => $caud,
            'LugarVelacion' => $lud,
            'Panteon' => $panv,
            'HoraMisa' => $hov,
            'Ubicacion' => $ubv,
            'FechaMisa' => $fev,
            'Iglesia' => $igv,
            'Perpetuidad' => $prpv,
            'Temporal' => $tempv,
            'HoraSepelio' => $horv,
            'Ataud' => $ate,
            'ModeloAtaud' => $mode,
            'Urna' => $ure,
            'ModeloUrna' => $modee,
            'Capillas' => $cae,
            'Cremacion' => $creme,
            'Embalsamado' => $eme,
            'OtrosGastos' => $otre,
            'Adomicilio' => $adoe,
            'LugarCremacion' => $luge,
            'Carroza' => $care,
            'Traslado' => $trase,
            'SubTotal' => $sube,
            'Impuestos' => $ime,
            'CertificadoMedico' => $cere,
            'Otros' => $ote,
            'Observaciones' => $obe,
            'Total' => $tote,
            'NombreFinado' => $nomf,
            'DomicilioFinado' => $domfin,
            'CiudadFinado' => $ciu,
            'FechaNacimiento' => $fechf,
            'Edad' => $edf,
            'ApellidoFinPa' => $apf,
            'NumeroFinado' => $nuf,
            'ColoniaFinado' => $colf,
            'EstadoCivil' => $ecf,
            'Escolaridad' => $escf,
            'ApellidoFinMa' => $apmf,
            'Nacionalidad' => $naf,
            'Ocupacion' => $ocf,
            'DerechoHabiente' => $dhf,
            'Sexo' => $sef,
            'NombreFinExhumar' => $nev,
            'ApellidoPaterno' => $apav,
            'ApellidoMaterno' => $apmae,
            'FechaDifuncionExhumar' => $fede,
            'Restante' => $abono
        );
        $this->db->insert('orden', $datos);
        return $this->db->insert_id();
    }

    public function agregarabono($ord, $abono, $fech, $suc) {
        $datos = array(
            'OrdenServicio_Folio' => $ord,
            'Cantidad' => $abono,
            'Fecha' => $fech,
            'OrdenServicio_Sucursal_idSucursal' => $suc
        );

        $this->db->insert('pagos', $datos);

        return $this->db->insert_id();
    }

    public function actualizarAbono($ord, $abono, $fech, $suc) {
        $datos = array(
            'OrdenServicio_Folio' => $ord,
            'Cantidad' => $abono,
            'Fecha' => $fech,
            'OrdenServicio_Sucursal_idSucursal' => $suc
        );

        $this->db->where('OrdenServicio_Folio', $ord);
        $this->db->update('pagos', $datos);
    }

//  listar ordenes
    public function listarOrden() {
        $sql = $this->db->query('SELECT pagos.idPagos,pagos.OrdenServicio_Folio, orden.Folio, orden.FechaOrden,orden.NombreFinado,orden.ApellidoFinPa,orden.ApellidoFinMa, solicitantes.idSolicitantes,solicitantes.NombreSolicitante,solicitantes.ApellidoSolPa,solicitantes.ApellidoSolMa,orden.Total From orden, solicitantes,pagos WHERE  orden.Solicitantes_idSolicitantes = solicitantes.idSolicitantes and pagos.OrdenServicio_Folio=orden.Folio');

        return $sql->result();
    }

//   actualizar solicitante
    public function actualizarSolicitante($id, $noms, $doms, $cius, $eds, $aps, $nus, $cols, $ecs, $ams, $pares, $tels) {
        $datos = array(
            'NombreSolicitante' => $noms,
            'ApellidoSolPa' => $aps,
            'ApellidoSolMa' => $ams,
            'DomicilioSolicitante' => $doms,
            'NumeroSolicitante' => $nus,
            'Parentesco' => $pares,
            'CiudadSolicitante' => $cius,
            'ColoniaSolicitante' => $cols,
            'Telefono' => $tels,
            'EstadoCivilSolicitante' => $ecs,
            'Edad' => $eds
        );

        $this->db->where('idSolicitantes', $id);
        $this->db->update('solicitantes', $datos);
    }

//seleccionar orden a eliminar o modificar
    public function seleccionarOrden($id) {


        $sql = $this->db->query('SELECT * FROM orden,solicitantes,sucursal,usuarios,pagos WHERE usuarios.idUsuarios = orden.PersonaAtendio and  orden.Folio= ' . $id . ' and orden.Sucursal_idSucursal = sucursal.idSucursal and solicitantes.idSolicitantes = orden.Solicitantes_idSolicitantes and pagos.OrdenServicio_Folio = orden.Folio');
        return $sql->row();
    }

//    seleccionar tipo de beneficiarios
//    public function seltipo() {
//        $sql = $this->db->query('SELECT * FROM tipo');
//        return $sql->result();
//    }

//modificar orden con el solicitante
    public function modificarOrden($idf, $soli, $fec, $suc, $pers, $lug, $fecd, $hord, $caud, $lud, $panv, $hov, $ubv, $fev, $igv, $prpv, $tempv, $horv, $ate, $mode, $ure, $modee, $cae, $creme, $eme, $otre, $adoe, $luge, $care, $trase, $sube, $ime, $cere, $ote, $obe, $tote
    , $nomf, $domfin, $ciu, $fechf, $edf, $apf, $nuf, $colf, $ecf, $escf, $apmf, $naf, $ocf, $dhf, $sef, $nev, $apav, $apmae, $fede, $abono) {
        $datos = array(
            'FechaOrden' => $fec,
            'Solicitantes_idSolicitantes' => $soli,
            'Sucursal_idSucursal' => $suc,
            'PersonaAtendio' => $pers,
            'LugarDifuncion' => $lug,
            'Fecha' => $fecd,
            'Hora' => $hord,
            'Causa' => $caud,
            'LugarVelacion' => $lud,
            'Panteon' => $panv,
            'HoraMisa' => $hov,
            'Ubicacion' => $ubv,
            'FechaMisa' => $fev,
            'Iglesia' => $igv,
            'Perpetuidad' => $prpv,
            'Temporal' => $tempv,
            'HoraSepelio' => $horv,
            'Ataud' => $ate,
            'ModeloAtaud' => $mode,
            'Urna' => $ure,
            'ModeloUrna' => $modee,
            'Capillas' => $cae,
            'Cremacion' => $creme,
            'Embalsamado' => $eme,
            'OtrosGastos' => $otre,
            'Adomicilio' => $adoe,
            'LugarCremacion' => $luge,
            'Carroza' => $care,
            'Traslado' => $trase,
            'SubTotal' => $sube,
            'Impuestos' => $ime,
            'CertificadoMedico' => $cere,
            'Otros' => $ote,
            'Observaciones' => $obe,
            'Total' => $tote,
            'NombreFinado' => $nomf,
            'ApellidoFinPa' => $apf,
            'ApellidoFinMa' => $apmf,
            'DomicilioFinado' => $domfin,
            'NumeroFinado' => $nuf,
            'Nacionalidad' => $naf,
            'CiudadFinado' => $ciu,
            'ColoniaFinado' => $colf,
            'Ocupacion' => $ocf,
            'FechaNacimiento' => $fechf,
            'EstadoCivil' => $ecf,
            'DerechoHabiente' => $dhf,
            'Edad' => $edf,
            'Escolaridad' => $escf,
            'Sexo' => $sef,
            'NombreFinExhumar' => $nev,
            'ApellidoPaterno' => $apav,
            'ApellidoMaterno' => $apmae,
            'FechaDifuncionExhumar' => $fede,
            'Restante' => $abono
        );

        $this->db->where('Folio', $idf);
        $this->db->update('orden', $datos);
    }

//eliminar orden
    public function eliminarOrden($id) {
        $this->db->where('Folio', $id);
        $this->db->delete('orden');
    }

//eliminar solicitante
    public function eliminarSolicitante($id) {
        $this->db->where('idSolicitantes', $id);
        $this->db->delete('solicitantes');
    }

    public function eliminarAbono($id) {
        $this->db->where('idPagos', $id);
        $this->db->delete('pagos');
    }

    public function agregarOrdenComunidad($soli, $fec, $suc, $pers) {

        $datos = array(
            'Solicitantes_idSolicitantes' => $soli,
            'Fecha' => date('Y-m-d'),
            'Sucursal_idSucursal' => $suc,
            'PersonaAtendio' => $pers);
        $this->db->insert('apoyo', $datos);
        return $this->db->insert_id();
    }
    public function actualizarOrdenComunidad($fo,$suc,$fec,$id,$pers){
        $datos = array(
            'Solicitantes_idSolicitantes' => $id,
            'Fecha' => $fec,
            'Sucursal_idSucursal' => $suc,
            'PersonaAtendio' => $pers);
         $this->db->where('idApoyo', $fo);
        $this->db->update('apoyo', $datos);
    }

    
    public function addbenef($fo, $n1, $app1, $apm1, $n2, $app2, $apm2, $n3, $app3, $apm3, $n4, $app4, $apm4, $n5, $app5, $apm5, $n6, $app6, $apm6, $n7, $app7, $apm7, $n8, $app8, $apm8) {
        $datos = array(
            'NombreConyugue' => $n1, 'ApellidoPaCon' => $app1,
            'ApellidoMaCon' => $apm1, 'NombrePadre' => $n2, 'ApellidoPaPa' => $app2,
            'ApellidoMaPa' => $apm2, 'NombreMadre' => $n3, 'ApellidoPaMa' => $app3,
            'ApellidoMaMa' => $apm3, 'NombreSuegro' => $n4, 'ApellidoPaSu' => $app4,
            'ApellidoMaSu' => $apm4, 'NombreSuegra' => $n5, 'ApellidoPaSuegra' => $app5,
            'ApellidoMaSuegra' => $apm5, 'NombreHijo1' => $n6, 'ApellidoPaH1' => $app6, 'ApellidoMaH1' => $apm6,
            'NombreHijo2' => $n7, '	ApellidoPaH2' => $app7, 'ApellidoMaH2' => $apm7,
            'NombreHijo3' => $n8, 'ApellidoPaH3' => $app8, 'ApellidoMaH3' => $apm8,
            'Apoyo_idApoyo' => $fo
        );
        $this->db->insert('beneficiarios', $datos);

        return $this->db->insert_id();
    }
    public function actualizarBeneficiarios($idbe,$ord, $n1, $app1, $apm1, $n2, $app2, $apm2, $n3, $app3, $apm3, $n4, $app4, $apm4, $n5, $app5, $apm5, $n6, $app6, $apm6, $n7, $app7, $apm7, $n8, $app8, $apm8){
        $datos = array(
            'NombreConyugue' => $n1, 'ApellidoPaCon' => $app1,
            'ApellidoMaCon' => $apm1, 'NombrePadre' => $n2, 'ApellidoPaPa' => $app2,
            'ApellidoMaPa' => $apm2, 'NombreMadre' => $n3, 'ApellidoPaMa' => $app3,
            'ApellidoMaMa' => $apm3, 'NombreSuegro' => $n4, 'ApellidoPaSu' => $app4,
            'ApellidoMaSu' => $apm4, 'NombreSuegra' => $n5, 'ApellidoPaSuegra' => $app5,
            'ApellidoMaSuegra' => $apm5, 'NombreHijo1' => $n6, 'ApellidoPaH1' => $app6, 'ApellidoMaH1' => $apm6,
            'NombreHijo2' => $n7, '	ApellidoPaH2' => $app7, 'ApellidoMaH2' => $apm7,
            'NombreHijo3' => $n8, 'ApellidoPaH3' => $app8, 'ApellidoMaH3' => $apm8,
            'Apoyo_idApoyo' => $ord
        );
        $this->db->where('idBeneficiarios', $idbe);
        $this->db->update('beneficiarios', $datos);
    }

//    public function agregarBeneficiarios($tipo){
//      $datos=array(
//        'TipoBeneficiario'=>$tipo);
//         $this->db->insert('tipo', $datos);
// 
//        return $this->db->insert_id();
//
//    }



    public function listarOrdenComunidad() {
        $sql = $this->db->query('SELECT * From apoyo, solicitantes,beneficiarios WHERE  apoyo.Solicitantes_idSolicitantes = solicitantes.idSolicitantes and apoyo.idApoyo=beneficiarios.Apoyo_idApoyo');

        return $sql->result();
    }

    public function seleccionarOrdenCom($idor) {


        $sql = $this->db->query('SELECT * FROM apoyo,solicitantes,sucursal,usuarios,beneficiarios WHERE usuarios.idUsuarios = apoyo.PersonaAtendio and  apoyo.idApoyo= ' . $idor . ' and apoyo.Sucursal_idSucursal = sucursal.idSucursal and solicitantes.idSolicitantes = apoyo.Solicitantes_idSolicitantes and beneficiarios.	Apoyo_idApoyo=apoyo.idApoyo');
        return $sql->row();
    }

    public function seleccionar($ido) {
        $sql = $this->db->query('SELECT * FROM solicitantes WHERE  idSolicitantes=' . $ido . '');
        return $sql->row();
    }

}
