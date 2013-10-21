class User_m extends CI_Model {
   function __construct () {
 	parent::__construct();
   }	
   function get_all() {
	return $this->db->get(‘tabel_user’)->result();
   }
}
