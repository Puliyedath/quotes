<?php
    class Quote extends CI_Model {

        public function __construct()
        {
            parent::__construct();
        }

        public function all()
        {
            return $this->db->query("select * from quotes")->result_array();
        }
        public function add($post)
        {
            $query = "insert into quotes(author,quote) values(?,?)";
            $this->db->query($query, array($post['author'], $post['quote']));
        }
        
    }
?>
