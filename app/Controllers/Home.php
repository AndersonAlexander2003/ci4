<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    

    public function prueba ()
    {
        echo 'hola esto es una prueba';
    }

    public function api()
    {
        $DeporteNoticias = array(
            array(
                "Encabezado de la noticia" => "Muere Luis Suárez Miramontes, leyenda del fútbol y primer Balón de Oro español ",
                "Detalles relevantes" => "Luis Suárez, leyenda del fútbol español, falleció a los 88 años en Milán. Ganó el Balón de Oro en 1960 y jugó en el Inter de Milán. Su talento inspiró a generaciones..",
                "Fecha de referencia" => "2023-07-09",
                "Fuente de información" => "Infobae",
                "Enlace de referencia" => "https://www.infobae.com/espana/2023/07/09/muere-luis-suarez-miramontes-leyenda-del-futbol-espanol-al-que-dio-su-unico-balon-de-oro/"
            ),
            array(
                "Encabezado de la noticia" => "El vestuario del PSG se harta de Mbappé, según RMC",
                "Detalles relevantes" => " Según este medio francés, seis jugadores de la plantilla han enviado una carta quejándose de las declaraciones del delantero francés.",
                "Fecha de referencia" => "2023-07-08",
                "Fuente de información" => "Marca",
                "Enlace de referencia" => "https://www.marca.com/futbol/real-madrid/2023/07/08/64a95bd222601d2f7a8b456c.html"
            ),
            array(
                "Encabezado de la noticia" => "El crudo análisis de Ronaldo sobre el fútbol brasileño y el ejemplo de Vinícius Jr: “No lo prepararon de la forma correcta” ",
                "Detalles relevantes" => "El ex goleador del Real Madrid y actual presidente de Cruzeiro aseguró que durante muchos años en su país no se formaron a los juveniles de manera correcta .",
                "Fecha de referencia" => "2023-07-07",
                "Fuente de información" => "Infobae",
                "Enlace de referencia" => "https://www.infobae.com/deportes/2023/07/07/el-crudo-analisis-de-ronaldo-sobre-el-futbol-brasileno-y-el-ejemplo-de-vinicius-jr-no-lo-prepararon-de-la-forma-correcta/"
            )
        );
    
        return $this->response->setJSON($DeporteNoticias);
    }
    

    public function login(){

return view('login');
    
    }


    public function testbd($cedula)
    {

        $this->db=\Config\Database::connect();
        $query=$this->db->query("SELECT idpersonal, cedula, apellido1, apellido2, nombres, genero 
        FROM esq_datos_personales.personal where cedula='$cedula'  ");
        $result=$query->getResult();
        return $this->response->setJSON($result);


        // echo "hola";
    
    }
}
