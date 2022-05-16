
<?php

class Hire_model extends CI_Model {

 function allhire()
	{ 
        $query = $this->db->get('work');
  		return $query->result_array();
	}

function gig()
    {
		$query = $this->db->get('portfolio');
        return $query->result_array();

    }
    function elec()
    {
        $this->db->where('skill', 'electrician');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function plumber()
    {
        $this->db->where('skill', 'plumber');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function painter()
    {
        $this->db->where('skill', 'Painter');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function gotv()
    {
        $this->db->where('skill', 'GOtv/DSTV installer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function content()
    {
        $this->db->where('skill', 'Content Writter');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function developer()
    {
        $this->db->where('skill', 'Developer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function python()
    {
        $this->db->where('skill', 'Python Programmer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function graphic()
    {
        $this->db->where('skill', 'Graphic Designer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function phone()
    {
        $this->db->where('skill', 'Phone Repairer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function assignment()
    {
        $this->db->where('skill', 'Assignment Helper');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function photo()
    {
        $this->db->where('skill', 'Photographer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function project()
    {
        $this->db->where('skill', 'Project Writter');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    function gen()
    {
        $this->db->where('skill', 'Generator Repairer');
		$query = $this->db->get('work');
  		return $query->result_array();

    }

    // all this belongs to work \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

    function checkwork($user)
    {
        $this->db->where('user_id', $user);
        $query = $this->db->get('work');
        if($query->num_rows() > 0){
            $this->session->set_userdata('work', TRUE);
          return $query->row();
        }

    }

    function checkhire($user)
    {
        $this->db->where('hire_e', $user);
		$query = $this->db->get('hire');
        return $query->result_array();

    }
    function hiretime($user)
    {
        $this->db->where('hire_e', $user);
		$query = $this->db->get('hire');
        return $query->num_rows();

    }
    function dadipay($user)
    {
        $this->db->where('hire_e', $user);
        $this->db->select_sum('amount');
        $query = $this->db->get('hire')->row();
        return $query;

    }
     // aADMIN SECTION  \\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\\

     function all()
     {
         $query = $this->db->get('work');
         return $query->result_array();
 
     }
      function signup()
     {
         $query = $this->db->get('signup');
         return $query->result_array();
 
     }
      function all_c()
    {
    $query = $this->db->get('work');
        return $query->num_rows();
    }
       function signup_c()
    {
    $query = $this->db->get('signup');
        return $query->num_rows();
    }
       function del_sign($id)
    {
      $this->db->where('id', $id);
      $this->db->delete('signup');
    }
     /*
     function dadipay2()
     {
        $this->db->select_sum('amount');
         $query = $this->db->get('hire');
         return $query->row();
 
     }
      function work()
     {
         $query = $this->db->get('hire');
         return $query->row();
 
     }
     */
}
?>
 