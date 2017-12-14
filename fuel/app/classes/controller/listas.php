<?php 

use Firebase\JWT\JWT;

class Controller_Listas extends Controller_Rest
{

    public function post_create()
    {   
            if ( ! isset($_POST['titulo']) || !isset($_POST['id_users']) ) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro se llame name'
                ));

                return $json;
            }

            $input = $_POST;
            $user = new Model_Users();
            $user->titulo = $input['titulo'];
              $user->id_users = $input['id_users'];
            $user->save();

            $json = $this->response(array(
                'code' => 200,
                'message' => 'Titulo creado',
                'titulo' => $input['titulo'],
                'id_users' => $input['id_users']
            ));

            return $json;



        

        
    }


    public function get_listas()
    {
        $lists = Model_Listas::find('all');

        return $this->response(Arr::reindex($lists));
    }

 public function post_mod()
     if ( ! isset($_POST['titulo']) || !isset($_POST['id_users']) ) 
            {
                $json = $this->response(array(
                    'code' => 400,
                    'message' => 'parametro incorrecto, se necesita que el parametro se llame name'
                ));

                return $json;
            }

            $input = $_POST;
            $user = new Model_Users();
            $user->titulo = $input['titulo'];
              $user->id_users = $input['id_users'];
            $user->save();

            $json = $this->response(array(
                'code' => 200,
                'message' => 'Titulo creado',
                'titulo' => $input['titulo'],
                'id_users' => $input['id_users']
            ));

            return $json;
            


        //$time = time();
        //$key = 'my_secret_key';

//        $token = array(
  //      'iat' => $time, // Tiempo que inició el token
    //    'exp' => $time + (60*60), // Tiempo que expirará el token (+1 hora)
      //  'data' => [ // información del usuario
        //    'username' => $_GET["su_nombre"],
          //  'pasword' => $_GET["su_contraseña"]
        //]
//);

$jwt = JWT::encode($token, $kuy);
    }
    public function post_delete()
    {
        $user = Model_Listas::find($_POST['id']);
        $userList = $lists->listas;
        $user->delete();

        $json = $this->response(array(
            'code' => 200,
            'message' => 'usuario borrado',
            'nombre' => $userName
        ));

        return $json;
    }
}