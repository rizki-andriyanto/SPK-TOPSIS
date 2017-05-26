<?php
class model_operator extends CI_Model{
    
    
    
    function login($username,$password)
    {
        $chek=  $this->db->get_where('operator',array('username'=>$username,'password'=>  md5($password)));
        if($chek->num_rows()==1){
            return 1;
        }elseif ($chek->num_rows()==2) {
            return 2;
        }
        else{
            return 0;
        }
    }
    
    
    function tampildata()
    {
        return $this->db->get('operator');
    }
    
    function get_one($id)
    {
        $param  =   array('operator_id'=>$id);
        return $this->db->get_where('operator',$param);
    }
}