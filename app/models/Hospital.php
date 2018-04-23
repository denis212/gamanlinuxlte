<?php
namespace Vokuro\Models;

use Phalcon\Mvc\Model;
use Phalcon\Mvc\Model\Behavior\Timestampable;
use Phalcon\Db\RawValue;

class Hospital extends Model
{


    public $id;
    public $kode_rs;
    public $nama_rs;
    public $alamat_rs;
    public $telp_rs;
    public $email_rs;
    public $status_rs;
    public $pic_rs;
    public $lat_rs;
    public $lon_rs;
    public $created;
    public $updated;

    public function initialize()
    {
        $this->setSchema("dokter");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'hospital';
    }

    public function afterCreate()
    {
        // Only send the confirmation email if emails are turned on in the config
        // $this->getDI()
        //     ->getMail()
        //     ->send(["admin@gamanads.com" => "Admin GamanAds"],"New Adspace", 'newadspace',
        //         [ 'emailBody'=> "New Adspace : <b>$this->ad_url</b> from Client Id : <b>$this->client_id</b> Client Name: <b>$this->client_name</b>"]);
    }

    public function afterUpdate()
    {
        // Only send the confirmation email if emails are turned on in the config
        // $this->getDI()
        //     ->getMail()
        //     ->send(["admin@gamanads.com" => "Admin GamanAds"],"Update Adspace", 'updateadspace',
        //         [ 'emailBody'=> "Update Adspace : <b>$this->ad_url</b> from Client Id : <b>$this->client_id</b> Client Name: <b>$this->client_name</b>"]);
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Adspace[]|Adspace
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Adspace
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    public function beforeCreate()
    {
        $this->created =  new RawValue('now()');
        $this->updated =  new RawValue('now()');
    }

    public function beforeUpdate()
    {
        $this->updated =  new RawValue('now()');
    }

}
