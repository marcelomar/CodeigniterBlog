<?php
function do_upload()
{
    $config['upload_path'] = './assets/';
    $config['allowed_types'] = 'gif|jpg|png';
    $config['max_size'] = '2000';
    $config['max_width'] = '2000';
    $config['max_height'] = '2000';
    $config['new_image'] = './assets/';

    $config['overwrite'] = TRUE;
    $this->load->library('upload', $config);
    $this->form_validation->set_rules('name', 'Category Name', 'required');
    if (!$this->upload->do_upload() || !$this->form_validation->run()) {
        $error = array('error' => $this->upload->display_errors());
        $this->session->set_flashdata("message2","Product not added");
        redirect('add_products','refresh');
    } else {

        $data = $this->upload->data();
        $this->thumb($data);


        $file = array(
            'img_name' => $data['raw_name'],
            'thumb_name' => $data['raw_name'] . '_thumb',
            'ext' => $data['file_ext'],
            'category' =>$this->input->post('name')


            );
        $data = array('upload_data' => $this->upload->data());

        if($this->User->insert_cat($file) === TRUE)
        {
            $this->session->set_flashdata("message","You Have Successfully Added a new Category!");
            redirect('add_category','refresh');
        }else
        {
            $this->session->set_flashdata("message2","Category not added");
            redirect('add_category','refresh');
        }
    }
}
 ?>
