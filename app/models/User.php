<?php

class User
{

    public function getData()
    {
        return TableUser::findFirst();
    }

}