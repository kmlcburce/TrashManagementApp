<?php
	class donor_model extends CI_Model
	{
         public function donorInput($check, $quantity)
         {
               //has to be looped in order to put that in
               //Sample may be removed 
            $data = array(
                'il_name' => $this->input->post('check[]'),
                 'i_total_quantity' => $this->input->post('checkQuant[]')
            );
            $check =  $this->input->post('check[]');
            $quantity = $this->input->post('checkQuant[]');
                   
            $this->db->set('il_name', $check);
            $this->db->set('i_total_quantity', $quantity);
            $this->db->insert('item_list'); 
         }
    }
?>
