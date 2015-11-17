<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


class Items extends MY_Model
{
    const DB_TABLE = 'items';
    const DB_TABLE_PK = 'itemId';

    //variable - int
    //Unique Identifier
    public $itemId;

    //var - string
    public $itemName;

    //var - int
    public $itemPrice;

    //var - string
    public $primaryImage;

    public function getItems(){
        $query = $this->db->get('items');
        return $query->result_array();


    }
}