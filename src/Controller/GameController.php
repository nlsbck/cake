<?php

namespace App\Controller;

class GameController extends AppController
{
    public function games()
    {
        $resultset = $this->fetchTable('Games')->find()->all();
        $this->set('games', $resultset);
    }
}
