<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

public function __construct()
{
    parent::__construct();
    $this->load->database();
    $this->load->helper('text');
    $this->load->helper(array('form'));
    $this->load->library('session');
    $this->load->library('user_agent');
    $this->load->helper('url');
    $this->load->model('Main_model');
    //$this->load->library('image_lib');
    date_default_timezone_set('Africa/Lagos');
    $this->session->unset_userdata('key');
    //$this->session->sess_destroy();
    //$this->session->unset_userdata('key');
    /*if (!$this->session->userdata('LOGIN')) 
    {
        redirect('login');
    }*/
}
public function test() 
{
          $this->load->view('test');
} 


public function website() 

{
        $link = $this->input->post('link_web');
        $desc = $this->input->post('desc');
        $worker_id =  $this->session->userdata('id_work');
        $website_id = bin2hex(openssl_random_pseudo_bytes(5));
        $data = array(
            'website' => $link,
            'description' => $desc,
            'worker_id' => $worker_id,
            'website_id' => $website_id
        );
        $ins = $this->db->insert('websites', $data); 
}


public function reveal() 
{
    $id = $this->input->post('id');
    $this->db->where('worker_id', $id);
    $query = $this->db->get('gallery'); 
    foreach ($query->result() as $row)
    { ?>
      
    <div id="job_card" class="w3-col w3-round-large" style="position:relative; flex:;margin:5px 2% ;width:46%;">
       <img src="<?php echo base_url();?>asset/gallery/<?php echo $row->image;?>" onclick="document.getElementById('modal01<?php echo $row->id;?>').style.display='block'" class="w3-white w3-round-large" style="position: relative;top:0px; height:120px; width:auto;object-fit:cover;">
       <div class="w3-small w3-round-xlarge w3-text-white" onclick="document.getElementById('modal01<?php echo $row->id;?>').style.display='block'" style="position: absolute;bottom:0;right:0;width:auto;padding:5px 13px; font-weight:300;background-color: rgb(0 0 0 / 80%);"><i class="fa fa-arrows-alt"></i></div>
    </div>
    <div id="modal01<?php echo $row->id;?>" class="w3-modal" onclick="this.style.display='none'">
        <span class="w3-hover-red w3-xlarge w3-text-white w3-hover-text-red w3-display-topright">&times;</span>
        <div class="w3-modal-content w3-animate-zoom">
            <img src="<?php echo base_url();?>asset/gallery/<?php echo $row->image;?>" style="width:100%;">
        </div>
    </div>
    <?php }
}

public function link() 
{

$this->load->library('form_validation');
$this->form_validation->set_rules("link", "Url", "trim|required|valid_url|prep_url");
if ($this->form_validation->run() == TRUE)
{
    $link = $this->input->post('link');
    $worker_id =  $this->session->userdata('id_work');
    $data = array(
            'external_link' => $link
        );
        $this->db->where('work_id', $worker_id);
        $this->db->update('workforce', $data);
        echo $link;  
    }else{
        echo "url is not valid";
    }
}

public function port()
{
    if($_FILES["filez"]["name"] != ''){

                    $config['upload_path'] = './asset/gallery';
                    $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|xlsx|doc|svg|pptx';
                    $config['max_width'] = '20247';
                    $config['max_height'] = '206878';
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('filez')){
                        echo $this->upload->display_errors();
                    }else{
                        $data = $this->upload->data();
                            $filename = $_FILES['filez']['tmp_name'];
                            list($width, $height) = getimagesize($filename);
                            $num = 0.3;
                            $n_width = $width * $num;
                            $n_height = $height * $num;
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './asset/gallery/'.$data["file_name"];
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = FALSE;
                        $config['quality']         = '60%';
                        $config['width']         = $n_width;
                        $config['height']       = $n_height;
                        $config['new_image']       = './asset/gallery/'.$data["file_name"];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        $image_id = bin2hex(openssl_random_pseudo_bytes(5));
                        $image = $data['file_name'];
                        //INSERT
                        $this->Main_model->ins_port($image, $image_id);
                        echo $n_width;
                        ?>
                     <div id="job_card<?php echo $image_id;?>" class=" w3-col w3-round-large w3-border" style="border-color:#F5F8FA; position:relative; flex:;margin:5px 2% ;width:46%;display:block;">
                     <div class="w3-white w3-circle w3-tiny w3-center " style="position: absolute;z-index:5; top:-7px; right:-7px;width:35px; height:35px;"><i style="position: absolute;top:10px;right:12px;" id="show_delete<?php echo $image_id;?>" class="w3-text-red w3-large fa fa-trash-o"></i></div>
                        <img src="<?php echo base_url();?>asset/gallery/<?php echo $image;?>" class="w3-white w3-round-large" style="position: relative;top:0px; height:120px; width:100%;object-fit:cover;">
                        <div id="del<?php echo $image_id;?>" class="w3-btn w3-text-red w3-tiny" style="display: none;height:30px;">Delete</div>
                        <input id="im_id<?php echo $image_id;?>" type="text" name="del" value="<?php echo $image_id;?>" style="display: none;">
                      </div>
                        <script>
                           
                            $('#show_delete<?php echo $image_id;?>').click(function(){
                               
                                $('#del<?php echo $image_id;?>').show();
                            })

                            $('#del<?php echo $image_id;?>').click(function(){
                                var im = $('#im_id<?php echo $image_id;?>').val();
                                $.ajax({
                                    url:  '<?php echo base_url();?>Portfolio/delete_image',
                                    method: 'POST',
                                    data: {im:im},
                                    success: function(data)
                                    {
                                     alert('image deleted');
                                     $('#job_card<?php echo $image_id;?>').hide();
                                    }
                                })
                            })
                        </script>
                      <?php
                          
                    }
    }else{
        echo "no image";
    }
    
}

public function delete_image()
{
    $this->db->where('image_id', $this->input->post('im'));
    $this->db->delete('gallery');
}



public function profile()
{
    if($_FILES["profile"]["name"] != ''){


          $test = explode(".", $_FILES["profile"]["name"]);
          $extension = end($test);
          $name = rand(100, 999) . '.' . $extension;
          $location = './asset/profile/'.$name;
          move_uploaded_file($_FILES["profile"]["tmp_name"], $location);
          echo $name;

                    /*
                    $config['upload_path'] = './asset/profile';
                    $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|xlsx|doc|svg|pptx';
                    $config['max_width'] = '20247';
                    $config['max_height'] = '206878';
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('profile')){
                        echo $this->upload->display_errors();
                    }else{
                        
                        $data = $this->upload->data();
                        $filename = $_FILES['profile']['tmp_name'];
                        $filext = pathinfo($_FILES['profile']['name'], PATHINFO_EXTENSION);
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './asset/profile/'.$data["file_name"];
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = FALSE;
                        $config['quality']         = '60%';
                        list($width, $height) = getimagesize($filename);
                            $n_width = $width/2;
                            $n_height = $height/2;
                                $config['width'] = $n_width;
                                $config['height'] = $n_height;
                            $config['master_dim'] = 'auto';
                        $config['new_image']       = './asset/profile/'.$data["file_name"];
                        if($filext == 'jpg'){
                        $imgdata=exif_read_data($this->upload->upload_path.$this->upload->file_name, 'IFD0');
                        }else{

                        }
                        $this->load->library('image_lib', $config);
                                if (!$this->image_lib->resize()){  
                                    echo "error";
                                }else{
                                    if($filext =='jpg'){
                                      $this->image_lib->clear();
                                        $config=array();

                                        $config['image_library'] = 'gd2';
                                        $config['source_image'] = './asset/profile/'.$data["file_name"];


                                        switch($imgdata['Orientation']) {
                                            case 3:
                                                $config['rotation_angle']='180';
                                                break;
                                            case 6:
                                                $config['rotation_angle']='270';
                                                break;
                                            case 8:
                                                $config['rotation_angle']='90';
                                                break;
                                        }

                                        $this->image_lib->initialize($config); 
                                        $this->image_lib->rotate();
                                        echo  $data["file_name"];
                                    }else{
                                       echo $data["file_name"];
                                    }
                                }

                       

                                $profile = $data['file_name'];
                                $worker_id =  $this->session->userdata('id_work');
                                $data = array(
                                        'profile' => $profile
                                    );
                                    $this->db->where('work_id', $worker_id);
                                    $this->db->update('workforce', $data);

                        /*
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './asset/profile/'.$data["file_name"];
                        $config['new_image'] = './asset/profile/'.$data["file_name"];

                        $exif = exif_read_data($config['source_image']);
                        if ($exif && isset($exif['Orientation'])) 
                        {
                           $oris = array();
        
                        switch($exif['Orientation'])
                        {
                                case 1: // no need to perform any changes
                                break;
                        
                                case 2: // horizontal flip
                                $oris[] = 'hor';
                                break;
                                                        
                                case 3: // 180 rotate left
                                    $oris[] = '180';
                                break;
                                            
                                case 4: // vertical flip
                                    $oris[] = 'ver';
                                break;
                                        
                                case 5: // vertical flip + 90 rotate right
                                    $oris[] = 'ver';
                                $oris[] = '270';
                                break;
                                        
                                case 6: // 90 rotate right
                                    $oris[] = '270';
                                break;
                                        
                                case 7: // horizontal flip + 90 rotate right
                                    $oris[] = 'hor';
                                $oris[] = '270';
                                break;
                                        
                                case 8: // 90 rotate left
                                    $oris[] = '90';
                                break;
                                
                            default: break;
                        }
        
                            foreach ($oris as $ori) {
                                $config['rotation_angle'] = $ori;
                                $this->image_lib->initialize($config); 
                                $this->image_lib->rotate();
                            }

                        }
                    



                        
                    }*/
    }else{
        echo "no image";
    }
    
}


public function cover()
{
    if($_FILES["cover"]["name"] != ''){
                    $config['upload_path'] = './asset/cover';
                    $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|xlsx|doc|svg|pptx';
                    $config['max_width'] = '20247';
                    $config['max_height'] = '206878';
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('cover')){
                        echo $this->upload->display_errors();
                    }else{
                        $data = $this->upload->data();
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './asset/cover/'.$data["file_name"];
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = FALSE;
                        $config['quality']         = '60%';
                        $config['width']         = 200;
                        $config['height']       = 200;
                        $config['new_image']       = './asset/cover/'.$data["file_name"];
                        $this->load->library('image_lib', $config);
                        $this->image_lib->resize();
                        echo 
                        '
                     <div id="job_card" class="w3-card w3-col w3-round-large" style="position:relative; flex:;margin:5px 2% ;width:46%;">
                     <div class="w3-white w3-circle w3-tiny w3-center " style="position: absolute; top:-7px; right:-7px;width:35px; height:35px;"><i style="position: absolute;top:5px;right:12px;" class="w3-text-red fa fa-trash-o"></i></div>
                        <img src="'.base_url().'asset/gallery/'.$data['file_name'].'" class="w3-white w3-round-large" style="position: relative;top:0px; height:120px; width:100%;object-fit:cover;">
                      </div>
                        ';
                                $cover = $data['file_name'];
                                $worker_id =  $this->session->userdata('id_work');
                                $data = array(
                                        'cover' => $cover
                                    );
                                    $this->db->where('work_id', $worker_id);
                                    $this->db->update('workforce', $data);
                    }
    }else{
        echo "no image";
    }
    
}

//end everything             
}
?>
/*    
    if($_FILES["profile"]["name"] != ''){
        
        
 $test = explode(".", $_FILES["profile"]["name"]);
          $extension = end($test);
          $name = rand(100, 999) . '.' . $extension;
          $location = './asset/profile/'.$name;
          move_uploaded_file($_FILES["profile"]["tmp_name"], $location);
          echo $name;
    
            
                $profile = $name;
                $worker_id =  $this->session->userdata('id_work');
                $data = array(
                        'profile' => $profile
                    );
            $this->db->where('work_id', $worker_id);
            $this->db->update('workforce', $data);
        
                    /*$config['upload_path'] = './asset/profile';
                    $config['allowed_types'] = 'gif|jpg|png|docx|pdf|txt|xlsx|doc|svg|pptx';
                    $config['max_width'] = '20000247';
                    $config['max_height'] = '20006878';
                    $this->load->library('upload', $config);
                    if(!$this->upload->do_upload('profile')){
                        echo $this->upload->display_errors();
                    }else{
                        //$imgdata=exif_read_data($this->upload->upload_path.$this->upload->file_name, 'IFD0');
                        $data = $this->upload->data();
                       
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = './asset/profile/'.$data["file_name"];
                        $config['create_thumb'] = FALSE;
                        $config['maintain_ratio'] = FALSE;
                        $config['width']         = 800;
                        $config['height']       = 1100;
                        $config['quality']         = '50%';
                        $config['new_image']       = './asset/profile/'.$data["file_name"];
                        //$imgdata = exif_read_data($config['source_image'], 'IFD0');
                        $this->load->library('image_lib', $config);
                        if (!$this->image_lib->resize()){  
                                    echo "error";
                                }else{
                                    
                                    echo  $data["file_name"];
                                    
                                        $profile = $data['file_name'];
                                        $worker_id =  $this->session->userdata('id_work');
                                        $data = array(
                                                'profile' => $profile
                                            );
                                    $this->db->where('work_id', $worker_id);
                                    $this->db->update('workforce', $data);
                                }

                               
                    }*/