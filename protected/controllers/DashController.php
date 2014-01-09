<?php
/**
 * Created by PhpStorm.
 * User: Matthias Malek
 * Date: 22/11/13
 * Time: 08:29 AM
 */

class DashController extends Controller
{


    public function accessRules()
    {
        return array(
            array('allow',  // allow all users to perform 'index' and 'view' actions
                'actions'=>array('index','referir','admin'),
                'users'=>array('*'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }









    public function actionIndex()
    {
        if (Yii::app()->user->isGuest) {
            $this->redirect(Yii::app()->request->baseUrl . "/site");
        }
        else {
            $this->titulo = "Mi Dashboard";
            $this->render("index");
        }
    }


    public function actionAdmin()
    {
        $model=new Afiliado('search');
        $model->unsetAttributes();  // clear any default values
        if(isset($_GET['Afiliado']))
            $model->attributes=$_GET['Afiliado'];

        $this->render('admin',array(
            'model'=>$model,
        ));
    }



    public function actionMensajes($id)
    {
        $this->titulo = "Mensajes";

    }




    public function actionReferir($id)
    {
        $this->titulo = "Referir";

        //GRID Afiliados (para referir a uno)
        $model=new Afiliado('search');
        $model->unsetAttributes();  // clear any default values




        if(isset($_POST['Afiliado']))
            $model->attributes=$_POST['Afiliado'];
        else {
            // Por default, seleccionar circulo del referidor (usuario actual)
            $model->circulo = Circulo::getNombre(Yii::app()->user->circulo);
        }


        $referencia = new Referencia;
        if (isset($_POST['Referencia']))
        {
            $referencia->attributes=$_POST['Referencia'];
            $referencia['idreferidor'] = Yii::app()->user->id;
            $referencia['fecha'] = new CDbExpression('NOW()');
            if ($referencia->validate())
            {
                $referencia->save();
                // Enviar Correos
                $this->notificarReferencia($referencia);
                Yii::app()->user->setFlash('exito', "Referencia realizada con éxito!");
            }
        }

        $this->render("referir",array("model"=>$model,"referencia"=>$referencia));

    }

    private function notificarReferencia($referencia)
    {
        $afiliado = Afiliado::model()->find(array('condition'=>"idnw_afiliado = $referencia->idreferido "));


        // Notificar al referidor
        Yii::app()->myhelper->enviarMensaje("admin@networkingdays.com",$referencia->referido->email,
            "NetworkingDays - Has recibido una referencia",
            $this->renderPartial('/afiliado/mails/_referencia-enviada',
                array('nombre'=>$referencia->referidor['nombre'],
                    'referido'=>$referencia->referido['nombre'] . " " . $referencia->referidor['apellido'] ,
                    'interesado'=>$referencia->nombre_completo,
                    'categoria'=>$afiliado->categoria['nombre'],
                    'especialidad'=>$afiliado->especialidad['nombre'],
                ),
                true),
            true
        );



        /*
        Yii::app()->myhelper->enviarMensaje("admin@networkingdays.com", Yii::app()->user->email,
            "Has realizado una referencia","Has referido a " . $referencia->referido->nombre, true);

        */
        //Notificar al referido
        Yii::app()->myhelper->enviarMensaje("admin@networkingdays.com",$referencia->referido->email,
            "NetworkingDays - Has recibido una referencia",
            $this->renderPartial('/afiliado/mails/_fuiste-referido',
                array('nombre'=>$referencia->referido['nombre'],
                     'referidor'=>$referencia->referidor['nombre'] . " " . $referencia->referidor['apellido'] ,
                     'interesado'=>$referencia->nombre_completo,
                     'categoria'=>$afiliado->categoria['nombre'],
                     'especialidad'=>$afiliado->especialidad['nombre'],
                     'telefono'=>$referencia->telefono,
                     'email'=>$referencia->email,




                ),
                true),
            true
        );

        /*

        Yii::app()->myhelper->enviarMensaje("admin@networkingdays.com", $referencia->referido->email,
            "Felicidades! Has recibido una referencia","Has sido referido por " . $referencia->referidor->nombre, true);


        // Notificar al interesado
        Yii::app()->myhelper->enviarMensaje("admin@networkingdays.com", $referencia->email,
            "Tu interés ha sido comunicado","Has sido referido a " . $referencia->referido->nombre . " por " . $referencia->referidor->nombre, true);
        */
    }






































}

