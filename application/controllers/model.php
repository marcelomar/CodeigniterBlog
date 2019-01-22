<?php
public function insert_cat($file)
{
    // $this->db->insert('product_table',$file);
    if($this->db->insert('product_category', $file))
    {
        return TRUE;
    }else
    {
        return FALSE;
    }
}


 ?>
