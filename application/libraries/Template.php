<?php

    // Templating
    Class Template 
    {
        var $template_data = array();

        function set($name, $value)
        {
            $this->template_data[$name] = $value;
        }

        function load($template = '',  $view = '', $view_data = array(), $return = FALSE)
        {
            // kenapa harus pake get_instance??
            // intinya biar dia bisa panggil seperti diModel,View,Controllers
            $this->CI =& get_instance();
            // get_instance diInisialisaikan dulu
            $this->set('contents', $this->CI->load->view($view, $view_data, TRUE));
            return $this->CI->load->view($template, $this->template_data, $return);
        }
    }