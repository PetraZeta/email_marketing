<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require ROOT . 'app/assets/PHPMailer/src/Exception.php';
require ROOT . 'app/assets/PHPMailer/src/PHPMailer.php';
require ROOT . 'app/assets/PHPMailer/src/SMTP.php';
class Campan extends Controller{
    public function __construct()
    {
        parent::__construct();
    }
    public function index(){
        $this-> load_view("header");
        $this->load_view("menu");
        $this->load_view("campan");
        $this->load_view("footer");
    }
     public function enviar()
    {
        $destinos_m = $this->load_model("Destinos_m");
        $datos['dest'] = $destinos_m->pintarTodos();
        $campa_m = $this->load_model("Campan_m");
        $datos['camp'] = $campa_m->pintarTodos();
        $this->load_view("header");
        $this->load_view("menu");
        $this->load_view("enviar",$datos);
  
        $this->load_view("footer");
    }  
 
    public function insertarCampa()
    {
        // Este metodo recibe los datos del formulario de mantenimiento de clientes en $_POST
        // Instanciar modelo
       // print_r($_POST);
        $campa_m = $this->load_model("Campan_m");
        // Enviar al modelo los datos para insertarlos
        $f = $campa_m->insertar('$nombre', '$desc', '$fecha', '$titulo', '$cuerpo');

        header("location:" . $_SERVER['HTTP_REFERER']);
    }
    public function enviarCamp()
    {
        print_r($_POST);
        //traer datos de la campaña seleccionada a traves del id
        $campa_m = $this->load_model("Campan_m");
        // Enviar al modelo los datos para insertarlos
        $datos['camp'] = $campa_m->pintarUno($_POST['campan']);
        // echo ($datos['camp'][0]['nombre']); //como lo traigo??
        
        //traer datos del destino seleccionado a traves del id
        $destino_m = $this->load_model("Destinos_m");
        // Enviar al modelo los datos para insertarlos
        $datos['dest'] = $destino_m->pintarUno($_POST['destino']);
        echo ($datos['dest'][0]['email']);
        //Creamos una instancia del PHPMailer; pasando `true` habilitamos las excepciones
        $mail = new PHPMailer(true);
        try {
            // Poner en Español
            $mail->setLanguage("es");
            //Server settings
            $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = PHPMAILER_HOST;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = PHPMAILER_USER;                     //SMTP username
            $mail->Password   = PHPMAILER_PASS;                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = PHPMAILER_PORT;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom(PHPMAILER_USER,
            $datos['camp'][0]['nombre'] );
           // $mail->addAddress($_POST['email'], $_POST['usuario']);     //Add a recipient
            $mail->addAddress(
                $datos['dest'][0]['email']
            );     //Add a recipient
            
                  //Indicamos el fichero a adjuntar si el usuario seleccionó uno en el formulario
         /*    if ($achivo != "none") {
                $mail->AddAttachment($archivo, $archivo_name);
            } */

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $datos['camp'][0]['titulo'];
            $mail->Body    = $datos['camp'][0]['descripcion'];
            $mail->AltBody = $datos['camp'][0]['cuerpo'];
            $mail->send();

            $k = $campa_m->insertarEnviado('$id_cam ', '$id_des');
            print_r($k);
            return false;   //Retornamos falso. No hay error
        } catch (Exception $e) {
            return "{$mail->ErrorInfo}"; // Hay error.
        }
       
        header("location:" . $_SERVER['HTTP_REFERER']);
    }
}