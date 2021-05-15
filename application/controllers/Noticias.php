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
            $content = file_get_contents($url->url);
            $xmlElement = new SimpleXmlElement($content);
            foreach($xmlElement->channel->item as $entry) {
                //Este fragmento es para incluir todas las categorias en caso de tener mas de una.
                $categories = $entry->category;
                if(count($entry->category)>1){
                    $categories = '';
                    foreach($entry->category as $category){
                        $categories = $categories . $category.', ';
                    }
                    $categories = trim($categories, ', ');
                }
                if(!$this->existeLaNoticia($entry->link)){
                    $this->noticias_model->guardarNoticia(date('Y-m-d H:i:s', strtotime($entry->pubDate)), $entry->title, $entry->link, $entry->description, $categories);
                }
            }
        }
        $this->index();
    }

    private function existeLaNoticia($urlNoticia){
        $this->load->model('noticias_model');
        $lista_noticias = $this->noticias_model->getNoticias();
        foreach($lista_noticias->result() as $noticia){
            if($noticia->url == $urlNoticia){
                return true;
            }
        }
        return false;
    }
}
