<?php
class ModelExampleOperations extends Model {
    public function getCurrencies() {
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "currency" );
        return $query->row;
    }
}
