<?php

class SettingModel {

    public function getSetting()
    {
        $link_logo = 'https://coinreviews.io/wp-content/uploads/2017/10/tierion-logo-700x300.jpg';

        return ['logo' => $link_logo];
    }

    public function getStyle()
    {
        return ['header_h' => 60, 'header_w' => 0, 'bg_color' => '#191F29', 'bg_footer' => '#191F29', 'txt_color' => '#fff'];
    }
}
