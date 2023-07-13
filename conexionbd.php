<?php
class conexionbd{

    //Atributos de clase datos del servidor,user y password de la BD
    private $servidor="localhost";   
    private $basedatos="album";
    private $usuario="root";
    private $password="root";
    private $coneccion;


    //metodo constructor que nos va a generar la conexion con la bd
    public function __construct(){

        try{
            $this->coneccion=new PDO("mysql:host=$this->servidor;dbname=$this->basedatos",$this->usuario,$this->password);
            $this->coneccion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $error){
            return "Fallo en la conexion".$error;
        }
    }

    //metodo que nos permitira ejecutar una sentencia(Query) SQL
    public function ejecutaConsulta($sql){
        $this->coneccion->exec($sql);
        return $this->coneccion->lastInsertId();
    }
    
        
    



}

?>