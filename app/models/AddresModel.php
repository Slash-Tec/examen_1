<?php

class AddressModel
{
    private $db;

    public function __construct()
    {
        $this->db = MySQLdb::getInstance()->getDatabase();
    }

    public function addAddress($user_id, $address, $city, $state, $postcode, $country)
    {
        $sql = 'INSERT INTO addresses (user_id, address, city, state, postcode, country) VALUES (:user_id, :address, :city, :state, :postcode, :country)';
        $query = $this->db->prepare($sql);
        $params = [
            ':user_id' => $user_id,
            ':address' => $address,
            ':city' => $city,
            ':state' => $state,
            ':postcode' => $postcode,
            ':country' => $country,
        ];
        $query->execute($params);

        return $query->rowCount();
    }
}
