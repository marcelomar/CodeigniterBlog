<?php /**
 *
 */
class Auth_model extends CI_Model
{

  function __construct()
  {
    parent::__construct();
  }
  public function get_User($user,$pw)
  {
    $query = $this->db->get_where('register',array('email'=>$user,'password'=>$pw));
    return $query->num_rows();
  }
}
 ?>
