<?php

class Main_model extends CI_Model
{
    public function home()
    {
        $data['link'] = 'index';
        return $data;
    }

    public function article()
    {
        $data['link'] = 'artikel';
        return $data;
    }

    public function contactus()
    {
        $data['link'] = 'contact';
        return $data;
    }
}
