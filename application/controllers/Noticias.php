<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
class Noticias extends CI_Controller{
    function __contruct(){
        parent:: __contruct();
    }

    function index(){
        $this->load->model('noticias_model');
        $data['noticias'] = $this->noticias_model->getNoticias();
        $this->load->view('noticias', $data); 
    }

    function verNoticia(){
        $this->load->model('noticias_model');
        $id = $this->input->post('id');
        $detallesNoticia = $this->noticias_model->getDatosNoticia($id);
        $data['noticia'] = $detallesNoticia->row();
        $this->load->view('noticia', $data); 
    }

    function agregarFeed(){
        $this->load->model('noticias_model');
        $url = $this->input->post('url');
        $this->noticias_model->agregarFeed($url);
        echo '<script>alert("URL Guardada con éxito!");</script>';
        $this->index();
    }

    public function actualizar(){
        $this->load->model('noticias_model');
        $urls = $this->noticias_model->getURLS();
        foreach($urls->result() as $url){
            //No sé qué se hace con cada url
            
        }
        $this->index();
    }
}
?>