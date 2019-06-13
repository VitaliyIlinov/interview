<?php

namespace app\Http\Controllers;

class TestController
{

    function gen_one_to_three() {
        for ($i = 1; $i <= 3; $i++) {
            // Обратите внимание, что $i сохраняет свое значение между вызовами.
            yield $i;
        }
    }

    public function index()
    {

        throw new \Exception('sdf');
        http://site.com/test/index

        if (empty($_SESSION['user_id'])) {
            echo 'Pleas auth';
            die;
        }


        $content = file_get_contents('/var/www/images/test.png');
        header('Content-Type: image/jpg');
        echo $content;



//        $generator = $this->gen_one_to_three();
//        foreach ($generator as $value) {
//            echo "$value\n";
//        }
    }
}