<?php 
    class Categories extends CI_Controller {
       
        public function index(){
            $data['title'] = 'Categories'; 

            $data['categories'] = $this->category_model->get_categories();
            $this->load->view('templates/headers');
            $this->load->view('categories/index',$data);
            $this->load->view('templates/footers');
        }

        public function create(){
            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }

            $data['title'] = 'Create Category';

            $this->form_validation->set_rules('name','Name','required');
            
            if($this->form_validation->run() === FALSE){
                $this->load->view('templates/headers');
                $this->load->view('categories/create',$data);
                $this->load->view('templates/footers');
            }

            else {
                $this->category_model->create_category();
                $this->session->set_flashdata('category_created','your category has been created');
                redirect('categories');
            } 
        }

        public function posts($id){
            //this will only get name
            $data['title'] = $this->category_model->get_category($id)->name;
             
            $data['posts']  = $this->post_model->get_posts_by_category($id);

            $this->load->view('templates/headers');
            $this->load->view('posts/index',$data);
            $this->load->view('templates/footers');
        }

        //delete category
        public function delete_category($id){
            if(!$this->session->userdata('logged_in')){
                redirect('users/login');
            }

            $this->category_model->delete_category($id);
            $this->session->set_flashdata('category_deleted','your category has been deleted');
            redirect('categories/index');

        }

       
        
    }