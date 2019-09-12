<?php
/*
 * DB Class
 * This class is used for database related (connect, insert, update, and delete) operations
 * @author    Boniface Kaghusa
  */
//require_once '../phpqrcode/qrlib.php';
class DB{
    private $dbHost     = "localhost";
    private $dbUsername = "root";
    private $dbPassword = "";
    private $dbName     = "private_car";

    public function __construct(){
        if(!isset($this->db)){
            // Connect to the database
            $conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);
            if($conn->connect_error){
                die("Failed to connect with MySQL: " . $conn->connect_error);
            }else{
                $this->db = $conn;
            }
        }
    }

     /*
     * variable to handle the main page
     */
   public  $url="admin/";

    /*
     * Returns rows from the database based on the conditions
     * @param string name of the table
     * @param array select, where, order_by, limit and return_type conditions
     */
    public function getRows($table,$conditions = array()){
        $sql = 'SELECT ';
        $sql .= array_key_exists("select",$conditions)?$conditions['select']:'*';
        $sql .= ' FROM '.$table;
        if(array_key_exists("where",$conditions)){
            $sql .= ' WHERE ';
            $i = 0;
            foreach($conditions['where'] as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $sql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }

        if(array_key_exists("order_by",$conditions)){
            $sql .= ' ORDER BY '.$conditions['order_by'];
        }

        if(array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['start'].','.$conditions['limit'];
        }elseif(!array_key_exists("start",$conditions) && array_key_exists("limit",$conditions)){
            $sql .= ' LIMIT '.$conditions['limit'];
        }

        $result = $this->db->query($sql);

        if(array_key_exists("return_type",$conditions) && $conditions['return_type'] != 'all'){
            switch($conditions['return_type']){
                case 'count':
                    $data = $result->num_rows;
                    break;
                case 'single':
                    $data = $result->fetch_assoc();
                    break;
                default:
                    $data = '';
            }
        }else{
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
            }
        }
        return !empty($data)?$data:false;
    }

    /*
     * Insert data into the database
     * @param string name of the table
     * @param array the data for inserting into the table
     */
    public function insert($table,$data){
        if(!empty($data) && is_array($data)){
            $columns = '';
            $values  = '';
            $i = 0;

            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $columns .= $pre.$key;
                $values  .= $pre."'".$val."'";
                $i++;
            }
            $query = "INSERT INTO ".$table." (".$columns.") VALUES (".$values.")";
            $insert = $this->db->query($query);
            return $insert?$this->db->insert_id:false;
        }else{
            return false;
        }
    }

    /*
     * Update data into the database
     * @param string name of the table
     * @param array the data for updating into the table
     * @param array where condition on updating data
     */
    public function update($table,$data,$conditions){
        if(!empty($data) && is_array($data)){
            $colvalSet = '';
            $whereSql = '';
            $i = 0;

            foreach($data as $key=>$val){
                $pre = ($i > 0)?', ':'';
                $colvalSet .= $pre.$key."='".$val."'";
                $i++;
            }
            if(!empty($conditions)&& is_array($conditions)){
                $whereSql .= ' WHERE ';
                $i = 0;
                foreach($conditions as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $whereSql .= $pre.$key." = '".$value."'";
                    $i++;
                }
            }
            $query = "UPDATE ".$table." SET ".$colvalSet.$whereSql;
            $update = $this->db->query($query);
            return $update?$this->db->affected_rows:false;
        }else{
            return false;
        }
    }

    /*
     * Delete data from the database
     * @param string name of the table
     * @param array where condition on deleting data
     */
    public function delete($table,$conditions){
        $whereSql = '';
        if(!empty($conditions)&& is_array($conditions)){
            $whereSql .= ' WHERE ';
            $i = 0;
            foreach($conditions as $key => $value){
                $pre = ($i > 0)?' AND ':'';
                $whereSql .= $pre.$key." = '".$value."'";
                $i++;
            }
        }
        $query = "DELETE FROM ".$table.$whereSql;
        $delete = $this->db->query($query);
        return $delete?true:false;
    }


 public function login ($table,$conditions){
       $whereSql = '';
       $data;
            if(!empty($conditions) && is_array($conditions)){
                $whereSql .= ' WHERE ';
                $i = 0;
                foreach($conditions as $key => $value){
                    $pre = ($i > 0)?' AND ':'';
                    $whereSql .= $pre.$key." = '".$value."'";
                    $i++;
                }

            $query = "SELECT  *  FROM ".$table.$whereSql;
            $result = $this->db->query($query);

                 if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
            }

            return !empty($data)?$data:false;
        }
        else
        {
            return false;
        }
    }

    public function parseJson($jsonFile)
    {
        $jsonData=file_get_contents($jsonFile);
        $json=json_decode($jsonData,true);
        //return the decoded to php array from json
        return $json;
    }

    // public function world_countries($jsonFile){
    //     $jsonData=file_get_contents($jsonFile);
    //     $json=json_decode($jsonData,true);
    //     //return the decoded to php array from json
    //     return $json;
    // }

    public function allCountries()
    {
      $jsonData='../../public/countries.php';
      $json=json_decode($jsonData,true);
    }

    public function createTableResearch($table)
    {
        $query="CREATE TABLE ".$table." ( `ID` INT NOT NULL AUTO_INCREMENT , `book_name` VARCHAR(256) NOT NULL , `author_name` VARCHAR(256) NOT NULL , `author_continent` VARCHAR(256) NOT NULL , `author_country` VARCHAR(256) NOT NULL  , `registered_by` INT NOT NULL , `attachment` VARCHAR(2000) NOT NULL , `total_download` INT NOT NULL , `c_date` DATETIME NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
        $validate=$this->db->query($query);
        return $validate?true:false;
    }

    public function createTableData($table)
    {
        $query="CREATE TABLE ".$table." ( `ID` INT NOT NULL AUTO_INCREMENT , `data_name` VARCHAR(256) NOT NULL , `data_source` VARCHAR(256) NOT NULL , `registered_by` INT NOT NULL , `attachment` VARCHAR(2000) NOT NULL , `total_download` INT NOT NULL , `c_date` DATETIME NOT NULL , PRIMARY KEY (`ID`)) ENGINE = InnoDB;";
        $validate=$this->db->query($query);
        return $validate?true:false;
    }

    public function deleteTable($subCat)
    {
        $query="DROP TABLE ".$subCat."";
        $validate=$this->db->query($query);
        return $validate?true:false;
    }

    public function renameTable($subCat)
    {
        $query="RENAME TABLE ".$oldName." TO `".$newName.";";
        $validate=$this->db->query($query);
        return $validate?true:false;
    }



    public function showDate($code)
    {
            $gett = getdate();
            $annee=$gett['year'];
            $mois=$gett['mon'];
            $jour=$gett['mday'];
            $heure=$gett['hours'];
            $minutes=$gett['minutes'];
            $second=$gett['seconds'];
        if($code=='datetime') $currentDate=$annee.'-'.$mois.'-'.$jour.' '.$heure.':'.$minutes.':'.$second;
        else if($code=='date') $currentDate=$annee.'-'.$mois.'-'.$jour;

      return $currentDate;
    }

    //....Code for the logs
    public function registerLogIn($userID,$logs_type)
    {
        $query="INSERT INTO log(start_time, userID, logs_type) VALUES(NOW(),'$userID','$logs_type')";
        $validate=$this->db->query($query);
        return $validate?true:false;
    }

    public function registerLogOut($userID,$logs_type)
    {
        //Track
        $condition=array('Order by' => 'logsID  desc', 'where'=>array('userID'=>$userID, 'logs_type'=>$logs_type));
        $ck=$this->getRows('log',$condition);
        if(!empty($ck)):
            foreach($ck as $gt):
                $logsID=$gt['logsID'];
                $query="UPDATE  log SET end_time=NOW() WHERE logsID='$logsID'";
                $validate=$this->db->query($query);
            endforeach;
        endif;
        return $validate?true:false;
    }

     public function getAllCotisation(){
        $sql ="SELECT * from  visitors_c1   order by ID DESC";
        $result = $this->db->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }

        }
        return !empty($data)?$data:false;
    }

    public function getCotisation($membre){
        $sql ="SELECT * from  cotisation inner join membre on membre.membreID=cotisation.membreID where cotisation.membreID='$membre'  order by cotisation.cotisationID DESC";
        $result = $this->db->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
        }
        return !empty($data)?$data:false;
    }

    public function totalItems($table){
        $sql ="SELECT * from  ".$table;
        $result = $this->db->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
        }
        return !empty($data)?$result->num_rows:0;
    }


    public function getPret($membre){
        $sql ="SELECT * from  pret inner join membre on membre.membreID=pret.membreID  where pret.membreID='$membre' order by pret.pretID DESC";
        $result = $this->db->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }

        }
        return !empty($data)?$data:false;
    }

    public function getAllRemboursement(){
        $sql ="SELECT * from  remboursement inner join membre on membre.membreID=remboursement.membreID  order by remboursement.remboursementID DESC";
        $result = $this->db->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }

        }
        return !empty($data)?$data:false;
    }

    public function getRemboursement($membre){
        $sql ="SELECT * from  remboursement inner join membre on membre.membreID=remboursement.membreID  where remboursement.membreID='$membre' order by remboursement.remboursementID DESC";
        $result = $this->db->query($sql);

            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }

        }
        return !empty($data)?$data:false;
    }

  public function getAdmin(){
    $sql ="SELECT  * from admin ";
    $result = $this->db->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }
        }
        return !empty($data)?$data:false;
    }

    public function getMembres($table){
      $sql ="SELECT  * from ".$table;
      $result = $this->db->query($sql);
              if($result->num_rows > 0){
                  while($row = $result->fetch_assoc()){
                      $data[] = $row;
                  }
          }
          return !empty($data)?$data:false;
      }

    public function getTotalSubProduct($subcat){
        $sql ="SELECT  * from subcategory inner join category on subcategory.categoryID=category.categoryID WHERE subcategory.subCategoryID='$subcat'";
        $result = $this->db->query($sql);
            if($result->num_rows > 0){
                $gtbl = $result->fetch_assoc();
                $table_product=$gtbl['table_product'];

            $sql ="SELECT  COUNT(*) AS totSub from  ".$table_product." where subCategoryID='$subcat'";
            $result = $this->db->query($sql);
                if($result->num_rows > 0){
                    $row = $result->fetch_assoc();
                        $data = $row['totSub'];
            }
        }
        return !empty($data)?$data:0;
    }

    public function getLastID($tbl,$ID){
        $sql ="SELECT  ".$ID." AS ID from ".$tbl." order by ".$ID." desc limit 1";
        $result = $this->db->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                    $data = $row['ID'];
        }
        return !empty($data)?$data:false;
    }

    public function getTable($tbl,$ID){
        $sql ="SELECT  ".$ID." AS ID from ".$tbl." order by ".$ID." desc limit 1";
        $result = $this->db->query($sql);
            if($result->num_rows > 0){
                $row = $result->fetch_assoc();
                    $data = $row['ID'];
        }
        return !empty($data)?$data:false;
    }

    public function getCro($element){
        $sql ="SELECT  * from  rwagri_crop
        where rwagri_crop.Name  LIKE '%".$element."%' ";

        $result = $this->db->query($sql);


            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $data[] = $row;
                }

        }
        return !empty($data)?$data:false;
    }

}
