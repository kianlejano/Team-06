
<?php

class Pages extends CI_Controller
{
    public function view()
    {
        $question = $this->Question->getQuestion(8);
        print_r($question);
    }
}
