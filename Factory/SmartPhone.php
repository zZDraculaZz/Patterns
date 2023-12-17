<?php
class SmartPhone implements Phone
{
    public function call()
    {
        echo "Привет, я звоню из своего смартфона!";
    }
}