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

    //metodo que nos permitira ejecutar una sentencia(Query) SQL agregar, borrar y actualizar
    public function ejecutaConsulta($sql){
        $this->coneccion->exec($sql);
        return $this->coneccion->lastInsertId();
    }

    //metodo metodo que nos va a servir para mostrar todos los registros de la bd
    public function consulta($sql){
        $consulta=$this->coneccion->prepare($sql);//preparamos la consulta
        $consulta->execute();//ejecutamos la consulta
        return $consulta->fetchAll();//regresamos todos los elementos que estan en la bd
    }

    public function consultaUsuarios($sql){
        $consulta=$this->coneccion->prepare($sql);
        $consulta->execute();//ejecutamos la consulta
        return $consulta;
    }
    
        
    



}

?>