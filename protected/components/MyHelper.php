<?php
/**
 * Created by PhpStorm.
 * User: Francisco Quesada
 * Date: 19/12/13
 * Time: 07:42 PM
 */


class MyHelper extends CApplicationComponent
{

    //Se usa =>  Yii::app()->myhelper->toConsole("hola");

    public function saySomething($something)
    {
        echo $something;
    }


    //Se usa =>  Yii::app()->myhelper->enviarEmail(...);
    public function enviarEmail($para, $asunto, $msg)
    {
        // Solo el Sistema manda correos a sus afiliados...
        $de = array(Yii::app()->params['networkingDaysEmail'] => 'NetworkingDays');
        $message = new YiiMailMessage;
        $message->setFrom($de);
        $message->subject = $asunto;
        $message->setTo($para);
        $message->setBody($msg,'text/html');
        Yii::app()->mail->send($message);
    }


    //Mensaje enviado por NetworkingDays
    public function enviarMensajeSistema($idafiliado, $asunto, $msg)
    {
        $afiliado = Afiliado::model()->find(array('condition'=>"idnw_afiliado = $idafiliado"));
        if ($afiliado)
        {
            $message = new Mensaje;
            $message->de = -1;  // NetworkingDays
            $message->para = $afiliado->idnw_afiliado;
            $message->asunto = $asunto;
            $message->mensaje = $msg;
            $message->fecha = new CDbExpression('NOW()');
            $message->insert();

            // Revisamos las preferncias del Afiliado sobre recibir notificaciones por correo electrónico
            $preferencias = Preferencias::model()->find(array('condition'=>"idafiliado = $idafiliado"));
            // Si no existe entrada de preferencias...enviamos correo : TODO: modificar
            if (!$preferencias)
                $this->enviarEmail($afiliado->email,$asunto,$msg);
            else
                if ($preferencias->notificaciones_por_correo == 1)
                    $this->enviarEmail($afiliado->email,$asunto,$msg);
        }
    }




    public function enviarMensaje($id_de, $id_para, $asunto, $mensaje, $porEmail)
    {
        // porEmail...se toma de las preferencias del usuario..no por parametro...



        $message = new Mensaje;
        $message->de = 'admin@websensemble.com';
        $message->para = $para;
        $message->asunto = $asunto;
        $message->mensaje = $mensaje;
        $message->fecha = new CDbExpression('NOW()');
        $message->insert();

    }



    public function toConsole( $data ) {
        if ( is_array( $data ) )
            $output = "<script>console.log( 'Debug Objects: " . implode( ',', $data) . "' );</script>";
        else
            $output = "<script>console.log( 'Debug Objects: " . $data . "' );</script>";
        echo $output;
    }


    // Yii::app()->myhelper->myAvatarURL()
    public function myAvatarURL($model = null)
    {
        $path = Yii::app()->request->baseUrl . "/uploads/avatars/";
        if ($model == null)
        {
            if (isset(Yii::app()->user->avatar))
                $path .= Yii::app()->user->avatar;
            else
                $path .= "dummy.jpg";
        }
        else
        {
            if ($model['avatar'] == null or $model['avatar'] == "")
                $path .= "dummy.jpg";
            else
                $path .= $model['avatar'];
        }
        return $path;

    }

}




?>