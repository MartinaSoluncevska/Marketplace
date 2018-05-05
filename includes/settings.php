<?php
 class Settings {
     //////// ovde pisete gi vasite
  private $ServerIP="127.0.0.1";
  private  $serverName="localhost";
  private $userName="root";
  private $password="sudo";
  private $dbName="pazari";
  /////// getter-i za privatnite atributi
  public function getServerName()
  {
      return $this->serverName;
 }
    
  public function getDbName()
  {
      return $this->dbName;
 }
   
  public function getUserName()
  {
      return $this->userName;
 }
   
  public function getPassword()
  {
      return $this->password;
 }

    }  
       
    
    class connection
   { 
        /*
         * promenliva za konstruktor na klasata settings
         */
       private $sett;
       /*
        * konstruktor na klasata settings
        */
       public function __construct(Settings $set) {
           $this->sett =  $set;
       }
       /*
        * promenliva za konekcija
        */
      private $conn;
      /*
       * pomosna promenliva koja se koristi za izvrsuvanje na kveri od PDO
       */
      private $zemi;
      /*
       * bulova promenliva koja se koristi dali treba da se koristi select ili drugite vidovi na kverinja
       */
      private $isSelect=false;
       /*
        * funkcija za zatvaranje na konekcijata
        */
              function CloseDbConnection()
    {
      $this->conn =null;
    }
    /*
     * funkcija koja se koristi za izvrsuvanje na kveri, avtomatski se otvora konekcija
     */
    function execQuery($kveri,Settings $sett,$isSelect)
    {
        try
        {
            /*
             * kreiranje na konekcija
             */
      $this->conn=new PDO('mysql:host$sett->getServerName();dbname=$sett->getDbName()', $sett->getUserName(),$sett->getPassword());
     $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   /*
    * priprema na kveri
    */
     $zemi= $this->conn->prepare($kveri);
     /*
      * izvrsuvanje na kveri
      */
     $zemi->execute();
     if($isSelect==true)
     {
         /*
          * dokolku ovoj atribut e 'True' togas ovoj kod se koristi za 
          * povlekuvanje na podatocite od select Stored procedurite
          * 
          * se setira tipot na povlekuvanje na podatoci
          */
     $zemi->setFetchMode(PDO::FETCH_ASSOC);
     /*
      * se smestuvaat vo promenlivata $result
      */
    $result=$zemi->fetchAll();
    /*
     * pecatenje na rezultatite, Vnimanie : se koristi samo za testiranje
     * ke ima tabeli za prikazuvanje
     */
  print_r($result);
     }
        }
        /*
         * dokolku nema konekcija ke se prikazi greska
         */
        catch  (PDOException $e)
        {
            print "Error!: " . $e->getMessage() . "<br/>";
        }
     }
     }
?>

