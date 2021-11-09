<?php
require_once('modelo.php');

class respuestas extends modeloCredencialesBD{
    protected $id;
    protected $preguntas;
   
    public function __construct(){
        parent::__construct();
    }

    public function consultar_resp($pregunta){
        $instruccion = "CALL sp_listar_respuestas('".$pregunta."')";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las respuestas";
        }
        else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
}

class preguntas extends modeloCredencialesBD{
    protected $id;
    protected $preguntas;
   
    public function __construct(){
        parent::__construct();
    }

    public function consultar_preguntas(){
        $instruccion = "CALL sp_listar_preguntas()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
        if(!$resultado){
            echo "Fallo al consultar la pregunta";
        }
        else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
}

class encuesta extends modeloCredencialesBD{
    protected $id;
    protected $preguntas;
   
    public function __construct(){
        parent::__construct();
    }

    public function consultar_encuesta($usuario){
        $instruccion = "CALL sp_listar_encuesta('".$usuario."')";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar la encuesta";
        }
        else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
}

class usuario extends modeloCredencialesBD{
    protected $id;
    protected $preguntas;
   
    public function __construct(){
        parent::__construct();
    }

    public function contar_usuario(){
        $instruccion = "CALL sp_contar_usuario()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar la encuesta";
        }
        else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
}

class encuestas extends modeloCredencialesBD{
    protected $sexo;
    protected $edad;
    protected $salario;
    protected $provincia;
    protected $pregunta;
    protected $respuesta;
    protected $usuario;

    public function __construct(){
        parent::__construct();
    }

    public function consultar_encuesta(){
        $instruccion = "CALL sp_listar_encuestas()";

        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar las encuestas";
        }
        else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }

    }
     public function consultar_encuesta_filtro($campo,$valor){
        $instruccion = "CALL sp_listar_encuesta_filtro('".$campo."','".$valor."')";

        $consulta=$this->_db->query($instruccion);
        $resultado=$consulta->fetch_all(MYSQLI_ASSOC);

        if($resultado){
            return $resultado;
            $resultado->close();
            $this-> _db->close();
        }

    }
}

class datos extends modeloCredencialesBD{
    protected $id;
   
   
    public function __construct(){
        parent::__construct();
    }

    public function consultar_registros(){
        $instruccion = "CALL sp_listar_registros()";
        $consulta = $this->_db->query($instruccion);
        $resultado = $consulta->fetch_all(MYSQLI_ASSOC);

        if(!$resultado){
            echo "Fallo al consultar la pregunta";
        }
        else{
            return $resultado;
            $resultado->close();
            $this->_db->close();
        }
    }
}
?>