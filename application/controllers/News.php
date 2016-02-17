<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2016/2/8
 * Time: 23:38
 */
class News extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('News_model');
        $this->load->helper('url');
    }
    public function index(){
        $data['news']=$this->News_model->get_news();
        $data['title']='News archive';

        $this->load->view('templates/header',$data);
        $this->load->view('news/index',$data);
        $this->load->view('templates/footer');

    }
    public function view($slug=NULL){

        $data['news_item']=$this->News_model->get_news($slug);
        if(empty($data['news_item'])){
            show_404();
        }
        $data['title']=$data['news_item']['title'];

        $this->load->view('templates/header',$data);
        $this->load->view('news/view',$data);
        $this->load->view('templates/footer',$data);
    }

    public function add(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title']='Create a news item';
        $this->form_validation->set_rules('title','Title','required');
        $this->form_validation->set_rules('text','Text','required');

        if(FALSE === $this->form_validation->run()){
            $this->load->view('templates/header',$data);
            $this->load->view('news/add');
            $this->load->view('templates/footer');
        }else{
            $this->News_model->add_news();
            $this->load->view('news/success');
        }
    }

}