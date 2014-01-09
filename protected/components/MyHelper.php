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


    //Se usa =>  Yii::app()->myhelper->sendEmail(...);
    public function sendEmail($de, $para, $asunto, $msg, $view = null, $model = null) {

        $message = new YiiMailMessage;

        //$message->getHeaders()->addMailboxHeader('From');
        //$message->SetFrom("admin@websensemble.com", 'NetworkingDays');
        $message->setFrom(array('admin@websensemble.com' => 'NetworkingDays'));

        $message->subject = $asunto;
        //$message->from = 'admin@websensemble.com';



        $message->setTo($para);

        if ($view != null) {
            $message->view = $view;
            $message->setBody('','text/html');
            //$message->setBody(array('model'=>$model,'text/html')); // no sirve el HTML
            //$msessage = $this->renderPartial('email_template', array('model' => $model), true);
        }
        else{
            $message->setBody($msg,'text/html');
        }




        // you may want to use a template instead of specific mail body sending
        // to do so, use this: $message->view = $path_to_your_specific_template;
        // path to templates that you configured above

        Yii::app()->mail->send($message);
    }


    public function enviarMensaje($de, $para, $asunto, $mensaje, $porEmail, $view = null, $model = null)
    {
        if ($porEmail)
        {
           $this->sendEmail($de, $para, $asunto,$mensaje, $view, $model);
        }

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