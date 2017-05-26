<?php
class Model_investasi extends CI_Model{
    
    
    
    function tampilkan_data(){
        
        return $this->db->get('data');
    }
    
  function tampilkan_data_paging($halaman,$batas)
  {
      return $this->db->query("SELECT * FROM data");
  }

  
   function post($data)
    {
        $this->db->insert('data',$data);
    }
 
    // function edit()
    // {
    //     $data=array(
    //        'id_data'=>  $this->input->post('id_data')
    //                 );
    //     $this->db->where('id_data',$this->input->post('id'));
    //     $this->db->update('id_data',$data);
    // }
    
    function get_one($id)
    {
        $param  =   array('id_data'=>$id);
        return $this->db->get_where('data',$param);
    }
    
    
    function delete($id)
    {
        $this->db->where('id_data',$id);
        $this->db->delete('data');
    }
}