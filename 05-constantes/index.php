<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Clases</title>
</head>
<body>
    
</body>
</html>
<div class="container">
    <h1>CLASES ESTÁTICAS</h1>
    <hr/>
<?php
    class Usuario{
        public const URL_COMPLETA = "http://localhost";
        public $mail;
        public $password;

        /**
         * Get the value of mail
         *
         * @return  mixed
         */
        public function getMail()
        {
            return $this->mail;
        }

        /**
         * Set the value of mail
         *
         * @param   mixed  $mail  
         *
         * @return  self
         */
        public function setMail($mail)
        {
            $this->mail = $mail;

            return $this;
        }

        /**
         * Get the value of password
         *
         * @return  mixed
         */
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * Set the value of password
         *
         * @param   mixed  $password  
         *
         * @return  self
         */
        public function setPassword($password)
        {
            $this->password = $password;

            return $this;
        }

    }

    echo Usuario::URL_COMPLETA . "<br>";
    $usuario = new Usuario();
    echo $usuario::URL_COMPLETA;
    var_dump($usuario);

?>

</div>