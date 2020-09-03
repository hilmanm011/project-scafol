<?php
class Document_model extends CI_Model
{

    //ambil data dari database
    function get_document_list($limit, $start)
    {
        $query = $this->db->get('document', $limit, $start);
        return $query;
    }
}
