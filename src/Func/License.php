<?php

namespace n0izestr3am\notifklien\Func;

use n0izestr3am\notifklien\Core\SerialConnector;

class License extends SerialConnector
{

    public function check()
    {
        $res = $this->checkSN();

        return $res;
    }

    public function get()
    {
        return (object)['active' => $this->res_active,'message' => $this->res_message];
    }

}
