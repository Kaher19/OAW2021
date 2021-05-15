<?php
class Noticias_model extends CI_model{
    public function __construct(){
        $this->load->database();
    }

    public function getNoticias(){
        $this->db->from('noticias');
        $this->db->order_by("fecha asc");
        $query = $this->db->get(); 
        return $query;
    }

    public function getURLS(){
        $this->db->from('feeds');
        $query = $this->db->get(); 
        return $query;
    }

    public function getDatosNoticia($id){
        $query = $this->db->get_where('noticias', array('id' => $id));
        return $query;
    }

    public function agregarFeed($url){
        $data = array( 
            'url' => $url
        );
        $this->db->insert('feeds', $data);
    }

    public function guardarNoticia($fecha, $titulo, $url, $descripcion, $categorias){
        $data = array( 
            'fecha' => $fecha,
            'titulo' => $titulo,
            'url' => $url,
            'descripcion' => $descripcion,
            'categorias' => $categorias
        );
        $this->db->insert('noticias', $data);
    }
}