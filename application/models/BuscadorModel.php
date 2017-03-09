<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class BuscadorModel extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function buscar($busca, $tabl) {

        switch ($tabl) {
            case 'finado':
                $result = $this->db->query('SELECT * From orden, solicitantes WHERE NombreFinado like "%' . $busca . '%" and solicitantes.idSolicitantes=orden.Solicitantes_idSolicitantes ');


                return $result->result();
                break;
            case 'folio':
                $result = $this->db->query('SELECT * From orden, solicitantes WHERE Folio like "%' . $busca . '%" and solicitantes.idSolicitantes=orden.Solicitantes_idSolicitantes ');
                return $result->result();
                break;
            case 'solicitante';
                //$result= $this->db->query('SELECTi solicitantes.idSolicitantes  FROM orden.Folio, orden.NombreFinado,orden.Fecha,orden.Total,pagos.Cantidad  WHERE solicitantes.NombreSolicitante='.$buscar.' join orden on orden.Solicitantes_idSolicitantes=solicitantes.idSolicitantes jonn pagos on pagos.OrdenServicio_Folio=orden.Folio');
                $result = $this->db->query('SELECT * From orden, solicitantes WHERE NombreSolicitante like "%' . $busca . '%" and solicitantes.idSolicitantes=orden.Solicitantes_idSolicitantes ');

                return $result->result();
                break;
            default:
                $result = null;
                break;
        }
    }

    public function seleccionar($id) {
        $sql = $this->db->query('SELECT * FROM orden,solicitantes,sucursal,usuarios WHERE orden.Folio= ' . $id . ' and usuarios.idUsuarios = orden.PersonaAtendio and orden.Sucursal_idSucursal = sucursal.idSucursal and solicitantes.idSolicitantes = orden.Solicitantes_idSolicitantes ');
        return $sql->result();
    }

    public function buscarSolicitante($busca) {


        //$result= $this->db->query('SELECTi solicitantes.idSolicitantes  FROM orden.Folio, orden.NombreFinado,orden.Fecha,orden.Total,pagos.Cantidad  WHERE solicitantes.NombreSolicitante='.$buscar.' join orden on orden.Solicitantes_idSolicitantes=solicitantes.idSolicitantes jonn pagos on pagos.OrdenServicio_Folio=orden.Folio');
        $result = $this->db->query('SELECT * From  solicitantes WHERE NombreSolicitante like "%' . $busca . '%" ');

        return $result->result();
    }

}
