<?php

class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('DropDown');
                $this->load->database(); 
        }

        public function index()
        {
                $this->load->helper('form');
                $data['groups'] = $this->DropDown->getAllCats();
                $this->load->view('upload_form',$data); 
        }

        public function do_upload()
        {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 100;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;
                $lstCat = $this->input->post('lstCat');
                $pdate = $this->input->post('pdate');
                $lstOp = $this->input->post('lstOp');
                $cnumber = $this->input->post('cnumber');
                $amount = $this->input->post('amount');
                $payee = $this->input->post('payee');
                $paddress = $this->input->post('paddress');
                $desc = $this->input->post('desc');
                $appby = $this->input->post('appby');
                $issby = $this->input->post('issby');


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
                        $this->DropDown->InsertRecord($lstCat,$pdate,$lstOp,$cnumber,$payee,$paddress,$amount,$desc,$appby,$issby,$Data);

                        $this->load->view('upload_success', $data);
                }
        }
}
?>
