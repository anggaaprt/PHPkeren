<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

    function __construct(){
        parent::__construct();
        //load libary pagination
        $this->load->library('pagination');

        //load the department_model
        $this->load->model('Data_model');
    }

    public function index() {
        $data['menu'] = 'Home';
        $data['title'] = '.:: DataBisnis ::.';
        // $data['css'] = 'template_2/inc/css';
        $data['tujuan'] = 'template_5/home';
        // $data['js'] = '';
        
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment1' order by id desc";
        $data['sql_menu1_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment2' order by id desc";
        $data['sql_menu1_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment3' order by id desc";
        $data['sql_menu1_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $q4 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment4' order by id desc";
        $data['sql_menu1_segment4'] = $this->Data_model->jalankanQuery($q4, 3);
        $q5 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment5' order by id desc";
        $data['sql_menu1_segment5'] = $this->Data_model->jalankanQuery($q5, 3);
        $q6 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment6' order by id asc";
        $data['sql_menu1_segment6'] = $this->Data_model->jalankanQuery($q6, 3);
        $q7 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment7' order by id asc";
        $data['sql_menu1_segment7'] = $this->Data_model->jalankanQuery($q7, 3);
        $q8 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment8' order by id asc";
        $data['sql_menu1_segment8'] = $this->Data_model->jalankanQuery($q8, 3);
        $q9 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment9' order by id asc";
        $data['sql_menu1_segment9'] = $this->Data_model->jalankanQuery($q9, 3);
        $q10 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment10' order by id asc";
        $data['sql_menu1_segment10'] = $this->Data_model->jalankanQuery($q10, 3);
        $q11 = "SELECT * FROM tbl_content WHERE form_name = 'menu1_segment11' order by id asc";
        $data['sql_menu1_segment11'] = $this->Data_model->jalankanQuery($q11, 3);
        $this->load->view('template_5/index',$data);
        
    }
    public function about() {
        $data['menu'] = 'home';
        $data['title'] = '.:: DataBisnis ::.';
        // $data['css'] = 'template_2/inc/css';
        $data['tujuan'] = 'template_5/about';
        // $data['js'] = '';
        
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment1' order by id desc";
        $data['sql_menu2_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $q2 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment2' order by id desc";
        $data['sql_menu2_segment2'] = $this->Data_model->jalankanQuery($q2, 3);
        $q3 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment3' order by id desc";
        $data['sql_menu2_segment3'] = $this->Data_model->jalankanQuery($q3, 3);
        $q4 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment4' order by id desc";
        $data['sql_menu2_segment4'] = $this->Data_model->jalankanQuery($q4, 3);
        $q5 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment5' order by id desc";
        $data['sql_menu2_segment5'] = $this->Data_model->jalankanQuery($q5, 3);
        $this->load->view('template_5/index',$data);
        
    }

    public function gallery() {
        $data['menu'] = 'home';
        $data['title'] = '.:: DataBisnis ::.';
        // $data['css'] = 'template_2/inc/css';
        $data['tujuan'] = 'template_5/about';
        // $data['js'] = '';
        
        $q1 = "SELECT * FROM tbl_content WHERE form_name = 'menu2_segment1' order by id desc";
        $data['sql_menu2_segment1'] = $this->Data_model->jalankanQuery($q1, 3);
        $this->load->view('template_5/index',$data);
        
    }
    
   


}
