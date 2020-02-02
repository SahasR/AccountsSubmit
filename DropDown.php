<?php

class DropDown extends CI_Model
{
    public function __construct() 
    {
        /* Call the Model constructor */
        parent::__construct();
    }
    function getAllCats()
    {
        $query = $this->db->query('SELECT categories FROM categories');

        return $query->result_array();
    }

    function InsertRecord($plstCat,$ppdate,$plstOp,$pcnumber,$ppayee,$ppaddress,$pamount,$pdesc,$pappby,$pissby,$Data) {
        //TransactionID will be generated using Avis Code
        $TCode = "XXX";
        //tUserID will be fetched using a SESSION ID
        $UID = "XXX555XXX";
        //What is the category Image supposed to hold?
        $Image = "Hello!";

        $dater = date("d/m/Y");

        $dataarray = $Data['upload_data'];   

        $width = $dataarray['image_width'];
        $height = $dataarray['image_height'];
        $imaget = $dataarray['image_type']; 
        // What do we store in Category Image?
        $this->db->query("INSERT INTO tblTransactions (TransactionID, PaymentDate, tUserID, Image, ApprovalStatus, ImageType, Width, Height, Category, PaymentMethod, ChequeNum, Payee, PayeeAddress, Purpose, Amount, ApprovedBy, IssuedBy, PostDate)
            VALUES ('$TCode','$ppdate','$UID','$Image','pending','$imaget','$width','$height','$plstCat','$plstOp','$pcnumber','$ppayee','$ppaddress','$pdesc','$pamount','$pappby','$pissby','$dater')");
         
       
    }
}

?>