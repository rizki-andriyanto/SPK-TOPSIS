<?php
class Investasi extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->model('model_investasi');
        chek_session();
    }
    
    function index(){
        $this->load->library('pagination');
        $config['base_url']  = base_url().'index.php/Investasi/index/';
        $config['total_rows']  = $this->model_investasi->tampilkan_data()->num_rows();
        $config['per_page']  = 3; 
        $this->pagination->initialize($config); 
        $data['paging']      =$this->pagination->create_links();
        $halaman             =$this->uri->segment(3);
        $halaman             =$halaman ==''?0:$halaman;
        $data['record']      = $this->model_investasi->tampilkan_data_paging($halaman,$config['per_page']);
        $this->template->load('template','investasi/lihat_data',$data);
    }
    
    

    function post()
    {
        if(isset($_POST['submit'])){
            // proses data
          
                $a1c1 =  $this->input->post('a1c1',true);
                 $a1c2 =  $this->input->post('a1c2',true);
                 $a1c3 =  $this->input->post('a1c3',true);
                 $a1c4 =  $this->input->post('a1c4',true);
                 $a1c5 =  $this->input->post('a1c5',true);

                 $a2c1 =  $this->input->post('a2c1',true);
                 $a2c2 =  $this->input->post('a2c2',true);
                 $a2c3 =  $this->input->post('a2c3',true);
                 $a2c4 =  $this->input->post('a2c4',true);
                 $a2c5 =  $this->input->post('a2c5',true);

                 $a3c1 =  $this->input->post('a3c1',true);
                 $a3c2 =  $this->input->post('a3c2',true);
                 $a3c3 =  $this->input->post('a3c3',true);
                 $a3c4 =  $this->input->post('a3c4',true);
                 $a3c5 =  $this->input->post('a3c5',true);

                 $a4c1 =  $this->input->post('a4c1',true);
                 $a4c2 =  $this->input->post('a4c2',true);
                 $a4c3 =  $this->input->post('a4c3',true);
                 $a4c4 =  $this->input->post('a4c4',true);
                 $a4c5 =  $this->input->post('a4c5',true);

                 $w1 =  $this->input->post('w1',true);
                 $w2 =  $this->input->post('w2',true);
                 $w3 =  $this->input->post('w3',true);
                 $w4 =  $this->input->post('w4',true);
                 $w5 =  $this->input->post('w5',true);

                 $typec1 =  $this->input->post('typec1',true);
                 $typec2 =  $this->input->post('typec2',true);
                 $typec3 =  $this->input->post('typec3',true);
                 $typec4 =  $this->input->post('typec4',true);
                 $typec5 =  $this->input->post('typec5',true);


            
                $data =  array( 'a1c1' =>$a1c1,
                                  'a1c2' =>$a1c2,
                                  'a1c3' =>$a1c3,
                                  'a1c4' =>$a1c4,
                                  'a1c5' =>$a1c5,

                                  'a2c1' =>$a2c1,
                                  'a2c2' =>$a2c2,
                                  'a2c3' =>$a2c3,
                                  'a2c4' =>$a2c4,
                                  'a2c5' =>$a2c5,

                                  'a3c1' =>$a3c1,
                                  'a3c2' =>$a3c2,
                                  'a3c3' =>$a3c3,
                                  'a3c4' =>$a3c4,
                                  'a3c5' =>$a3c5,

                                  'a4c1' =>$a4c1,
                                  'a4c2' =>$a4c2,
                                  'a4c3' =>$a4c3,
                                  'a4c4' =>$a4c4,
                                  'a4c5' =>$a4c5,

                                  'w1' =>$w1,
                                  'w2' =>$w2,
                                  'w3' =>$w3,
                                  'w4' =>$w4,
                                  'w5' =>$w5,

                                  'typec1' =>$typec1,
                                  'typec2' =>$typec2,
                                  'typec3' =>$typec3,
                                  'typec4' =>$typec4,
                                  'typec5' =>$typec5
                                  );
            $this->model_investasi->post($data);
            redirect('investasi');
            
        }
        else{
            //$this->load->view('operator/form_input');
            $this->template->load('template','investasi/form_input');
        }
    }


    
          function hasil()
          {
              if(isset($_POST['submit'])){
                  // proses investasi
                  $this->model_investasi->edit();
                  redirect('investasi');
              }
              else{
              $id =  $this->uri->segment(3);
              $data['record'] =  $this->model_investasi->get_one($id)->row_array();
              $record = $data['record'];
            
            
            //start rumus cari R
              $data['jumlahPangkatC1'] = sqrt(($record['a1c1'] * $record['a1c1']) + ($record['a2c1'] * $record['a2c1']) + ($record['a3c1'] * $record['a3c1'])+ ($record['a4c1'] * $record['a4c1']));

              $data['jumlahPangkatC2'] = sqrt(($record['a1c2'] * $record['a1c2']) + ($record['a2c2'] * $record['a2c2']) + ($record['a3c2'] * $record['a3c2'])+ ($record['a4c2'] * $record['a4c2']));

              $data['jumlahPangkatC3'] = sqrt(($record['a1c3'] * $record['a1c3']) + ($record['a2c3'] * $record['a2c3']) + ($record['a3c3'] * $record['a3c3'])+ ($record['a4c3'] * $record['a4c3']));

              $data['jumlahPangkatC4'] = sqrt(($record['a1c4'] * $record['a1c4']) + ($record['a2c4'] * $record['a2c4']) + ($record['a3c4'] * $record['a3c4'])+ ($record['a4c4'] * $record['a4c4']));

              $data['jumlahPangkatC5'] = sqrt(($record['a1c5'] * $record['a1c5']) + ($record['a2c5'] * $record['a2c5']) + ($record['a3c5'] * $record['a3c5'])+ ($record['a4c5'] * $record['a4c5']));
              //end   rumus cari R
              
                  //start fungsi Y min max
              $jumlahPangkatC1 =      $data['jumlahPangkatC1'];
              $jumlahPangkatC2 =     $data['jumlahPangkatC2'];
              $jumlahPangkatC3  =   $data['jumlahPangkatC3'];
              $jumlahPangkatC4  =   $data['jumlahPangkatC4'];
              $jumlahPangkatC5   =     $data['jumlahPangkatC5'];

              $data['y1a'] = $record['a1c1'] / $jumlahPangkatC1 * $record['w1'];
              $data['y1b'] = $record['a2c1'] / $jumlahPangkatC1 * $record['w1'];
              $data['y1c'] = $record['a3c1'] / $jumlahPangkatC1 * $record['w1'];
              $data['y1d'] = $record['a4c1'] / $jumlahPangkatC1 * $record['w1'];
              $data['y2a'] = $record['a1c2'] / $jumlahPangkatC2 * $record['w2'];
              $data['y2b'] = $record['a2c2'] / $jumlahPangkatC2 * $record['w2'];
              $data['y2c'] = $record['a3c2'] / $jumlahPangkatC2 * $record['w2'];
              $data['y2d'] = $record['a4c2'] / $jumlahPangkatC2 * $record['w2'];
              $data['y3a'] = $record['a1c3'] / $jumlahPangkatC3 * $record['w3'];
              $data['y3b'] = $record['a2c3'] / $jumlahPangkatC3 * $record['w3'];
              $data['y3c'] = $record['a3c3'] / $jumlahPangkatC3 * $record['w3'];
              $data['y3d'] = $record['a4c3'] / $jumlahPangkatC3 * $record['w3'];
              $data['y4a'] = $record['a1c4'] / $jumlahPangkatC4 * $record['w4'];
              $data['y4b'] = $record['a2c4'] / $jumlahPangkatC4 * $record['w4'];
              $data['y4c'] = $record['a3c4'] / $jumlahPangkatC4 * $record['w4'];
              $data['y4d'] = $record['a4c4'] / $jumlahPangkatC4 * $record['w4'];
              $data['y5a'] = $record['a1c5'] / $jumlahPangkatC5 * $record['w5'];
              $data['y5b'] = $record['a2c5'] / $jumlahPangkatC5 * $record['w5'];
              $data['y5c'] = $record['a3c5'] / $jumlahPangkatC5 * $record['w5'];
              $data['y5d'] = $record['a4c5'] / $jumlahPangkatC5 * $record['w5'];

              $y1a = $data['y1a'] ;
              $y1b =$data['y1b'] ;
              $y1c =$data['y1c'] ;
              $y1d =$data['y1d'] ;

              $y2a =$data['y2a'] ;
              $y2b =$data['y2b'] ;
              $y2c =$data['y2c'] ;
              $y2d =$data['y2d'] ;

              $y3a =$data['y3a'] ;
              $y3b =$data['y3b'] ;
              $y3c =$data['y3c'] ;
              $y3d =$data['y3d'] ;

              $y4a =$data['y4a'] ;
              $y4b =$data['y4b'] ;
              $y4c =$data['y4c'] ;
              $y4d =$data['y4d'] ;

              $y5a =$data['y5a'] ;
              $y5b =$data['y5b'] ;
              $y5c =$data['y5c'] ;
              $y5d =$data['y5d'] ;

              //variabel type
              $type1=$record['typec1'];
              $type2=$record['typec2'];
              $type3=$record['typec3'];
              $type4=$record['typec4'];
              $type5=$record['typec5'];

              //kriteria 1
              if ($type1=="cost"){

                  $data['statusy1']="min";
                  $data['status2y1']="max";
                  

                  
                   //y1
                  $data['y1'] = min($y1a, $y1b, $y1c, $y1d);
                  
                  //y1m
                  $data['y1m'] = max($y1a, $y1b, $y1c, $y1d);
                  
                  

                  
                  
              } else if ($type1=="benefit"){
                 $data['statusy1']="max";
                  $data['status2y1']="min";
                 
                  //y1
                  $data['y1'] = max($y1a, $y1b, $y1c, $y1d);
                  
                  //y1m
                  $data['y1m'] = min($y1a, $y1b, $y1c, $y1d);
    
              }

              if ($type2=="cost"){
                  $data['statusy2']="min";
                  $data['status2y2']="max";
                  $data['y2'] = min($y2a, $y2b, $y2c, $y2d);    
                  $data['y2m'] = max($y2a, $y2b, $y2c, $y2d);    
                  
              } else if ($type2=="benefit"){
                  $data['statusy2']="max";
                  $data['status2y2']="min";
                  
                  $data['y2'] = max($y2a, $y2b, $y2c, $y2d);    
                  $data['y2m'] = min($y2a, $y2b, $y2c, $y2d);    
                 
              }

              if ($type3=="cost"){
                  $data['statusy3']="min";
                  $data['status2y3']="max";
                  $data['y3'] = min($y3a, $y3b, $y3c, $y3d);    
                  $data['y3m'] = max($y3a, $y3b, $y3c, $y3d);    

                 
              } else if ($type3=="benefit"){
                   $data['statusy3']="max";
                  $data['status2y3']="min";
                  $data['y3'] = max($y3a, $y3b, $y3c, $y3d);    
                  $data['y3m'] = min($y3a, $y3b, $y3c, $y3d); 

              }

              if ($type4=="cost"){
                  $data['statusy4']="min";
                  $data['status2y4']="max";
                  
                  $data['y4'] = min($y4a, $y4b, $y4c, $y4d);    
                  $data['y4m'] = max($y4a, $y4b, $y4c, $y4d);    
                  
              } else if ($type4=="benefit"){
                   $data['statusy4']="max";
                  $data['status2y4']="min";
                  $data['y4'] = max($y4a, $y4b, $y4c, $y4d);    
                  $data['y4m'] = min($y4a, $y4b, $y4c, $y4d);    
              }

              if ($type5=="cost"){
                  $data['statusy5']="min";
                  $data['status2y5']="max";
                 
                  $data['y5'] = min($y5a, $y5b, $y5c, $y5d);    
                  $data['y5m'] = max($y5a, $y5b, $y5c, $y5d);    

                  

              } else if ($type5=="benefit"){
                  $data['statusy5']="max";
                  $data['status2y5']="min";
                  $data['y5'] = max($y5a, $y5b, $y5c, $y5d);    
                  $data['y5m'] = min($y5a, $y5b, $y5c, $y5d);
              }
              //end   fungsi Y min max

                      //start fungsi D
              $data['d1'] = sqrt((($data['y1'] - $y1a) * ($data['y1'] - $y1a)) + (($data['y2'] - $y2a) * ($data['y2'] - $y2a)) + (($data['y3'] - $y3a) * ($data['y3'] - $y3a)) + (($data['y4'] - $y4a) * ($data['y4'] - $y4a)) + (($data['y5'] - $y5a) * ($data['y5'] - $y5a)));

              $data['d2'] = sqrt((($data['y1'] - $y1b) * ($data['y1'] - $y1b)) + (($data['y2'] - $y2b) * ($data['y2'] - $y2b)) + (($data['y3'] - $y3b) * ($data['y3'] - $y3b)) + (($data['y4'] - $y4b) * ($data['y4'] - $y4b)) + (($data['y5'] - $y5b) * ($data['y5'] - $y5b)));

              $data['d3'] = sqrt((($data['y1'] - $y1c) * ($data['y1'] - $y1c)) + (($data['y2'] - $y2c) * ($data['y2'] - $y2c)) + (($data['y3'] - $y3c) * ($data['y3'] - $y3c)) + (($data['y4'] - $y4c) * ($data['y4'] - $y4c)) + (($data['y5'] - $y5c) * ($data['y5'] - $y5c)));

              $data['d4'] = sqrt((($data['y1'] - $y1d) * ($data['y1'] - $y1d)) + (($data['y2'] - $y2d) * ($data['y2'] - $y2d)) + (($data['y3'] - $y3d) * ($data['y3'] - $y3d)) + (($data['y4'] - $y4d) * ($data['y4'] - $y4d)) + (($data['y5'] - $y5d) * ($data['y5'] - $y5d)));

              $data['d1m'] = sqrt((($data['y1m'] - $y1a) * ($data['y1m'] - $y1a)) + (($data['y2m'] - $y2a) * ($data['y2m'] - $y2a)) + (($data['y3m'] - $y3a) * ($data['y3m'] - $y3a)) + (($data['y4m'] - $y4a) * ($data['y4m'] - $y4a)) + (($data['y5m'] - $y5a) * ($data['y5m'] - $y5a)));

              $data['d2m'] = sqrt((($data['y1m'] - $y1b) * ($data['y1m'] - $y1b)) + (($data['y2m'] - $y2b) * ($data['y2m'] - $y2b)) + (($data['y3m'] - $y3b) * ($data['y3m'] - $y3b)) + (($data['y4m'] - $y4b) * ($data['y4m'] - $y4b)) + (($data['y5m'] - $y5b) * ($data['y5m'] - $y5b)));

              $data['d3m'] = sqrt((($data['y1m'] - $y1c) * ($data['y1m'] - $y1c)) + (($data['y2m'] - $y2c) * ($data['y2m'] - $y2c)) + (($data['y3m'] - $y3c) * ($data['y3m'] - $y3c)) + (($data['y4m'] - $y4c) * ($data['y4m'] - $y4c)) + (($data['y5m'] - $y5c) * ($data['y5m'] - $y5c)));

              $data['d4m'] = sqrt((($data['y1m'] - $y1d) * ($data['y1m'] - $y1d)) + (($data['y2m'] - $y2d) * ($data['y2m'] - $y2d)) + (($data['y3m'] - $y3d) * ($data['y3m'] - $y3d)) + (($data['y4m'] - $y4d) * ($data['y4m'] - $y4d)) + (($data['y5m'] - $y5d) * ($data['y5m'] - $y5d)));
              //end   fungsi D

                      //start fungsi hasil
              $data['v1'] = $data['d1m'] / ($data['d1'] + $data['d1m']);
              $data['v2'] = $data['d2m'] / ($data['d2'] + $data['d2m']);
              $data['v3'] = $data['d3m'] / ($data['d3'] + $data['d3m']);
              $data['v4'] = $data['d4m'] / ($data['d4'] + $data['d4m']);
              if ($data['v1'] > $data['v2'] && $data['v1'] > $data['v3'] && $data['v1'] > $data['v4']) {
                  $data['hasil'] = $data['v1'];
                  $data['alternatif'] = "PERTAMA (V1) dengan kata lain Membeli mobil box(pick up) untuk pengambilan barang di supplier";
              } else if ($data['v2'] > $data['v1'] && $data['v2'] > $data['v3'] && $data['v2'] > $data['v4'])  {
                  $data['hasil'] = $data['v2'];
                  $data['alternatif'] = "KEDUA (V2) dengan kata lain Membeli gerobak untuk membantu proses penjualan";
              } else if ($data['v3'] > $data['v1'] && $data['v3'] > $data['v2'] && $data['v3'] > $data['v4']) {
                  $data['hasil'] = $data['v3'];
                  $data['alternatif'] = "KETIGA (V3) dengan kata lain Pembuatan dan penerapan sarana teknologi informasi";
              }else if ($data['v4'] > $data['v1'] && $data['v4'] > $data['v2'] && $data['v4'] > $data['v3']) {
                  $data['hasil'] = $data['v3'];
                  $data['alternatif'] = "KEEMPAT (V4) dengan kata lain Pengembangan (Inovasi) produk baru";}

                  //end   fungsi hasil
                          $this->template->load('template','investasi/show_data_hasil',$data);
                      }
                  }


              function delete()
              {
                  $id =  $this->uri->segment(3);
                  $this->model_investasi->delete($id);
                  redirect('investasi');
              }
          }