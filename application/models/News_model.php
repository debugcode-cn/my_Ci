<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Created by PhpStorm.
 * User: wlz
 * Date: 2016/2/8
 * Time: 22:47
 */
class News_model extends CI_Model
{
    public function __construct(){
        parent::__construct();
        $this->load->database();
    }

    //参数默认获得表中全部记录，否则获得一条记录
    public function get_news($slug=FALSE){

        if($slug === FALSE){
            $query = $this->db->get('news');
            return $query->result_array();
        }
        $query = $this->db->get_where('news',array('id'=>$slug));
        return $query->row_array();
    }

    //添加记录
    public function add_news(){
        $data='';
        $this->load->helper('url');
        $slug=url_title($this->input->post('title'),'dash',true);
        $data=[
            'title' =>$this->input->post('title'),
            'slug'  =>$slug,
            'text'  =>$this->input->post('text')
        ];
        return $this->db->insert('news',$data);
    }
}