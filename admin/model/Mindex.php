<?php 
class login {
    public function __construct()
    {
        global $db;
        $this->db = $db;
    }
    public function selectuser($user){
        $data = $this->db->query("SELECT * FROM adminuser WHERE username='$user' or email='$user'");
        $res = $data->fetch(PDO::FETCH_ASSOC);
        return $res;
    }
}