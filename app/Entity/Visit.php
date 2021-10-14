<?php

namespace App\Entity;

use App\DataBase;
use App\ValueObject\Visitor;

class Visit
{

    /**
     * @var DataBase
     */
    private $connect;

    public function __construct()
    {
        $this->connect = DataBase::getInstance();
    }

    /**
     * @param Visitor $obStatistic
     */
    public function write(Visitor $obStatistic)
    {
        $sUserAgent = $this->connect->real_escape_string(
            $obStatistic->getUserAgent()
        );
        $sQuery =
            'INSERT INTO 
                visit (
                    ip_address,
                    user_agent,
                    view_date,
                    page_url,
                    views_count
                )
                VALUES (
                    "' . $obStatistic->getIpAddress() . '",
                    "' . $sUserAgent . '", 
                    now(),                                 
                    "' . $obStatistic->getPageUrl() . '",
                    "1"                                     
                )
                ON DUPLICATE 
                KEY UPDATE 
                    views_count = views_count + 1, 
                    view_date   = now();';
        $this->connect->queryExecute($sQuery);
    }
}