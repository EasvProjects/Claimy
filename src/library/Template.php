<?php

class Template
{
    // This is a general template for webpages.

    // Path to template.
    protected $template;
    // An array to store all variables called to this template
    protected $variables = array();


    public function __construct($template)
    {
        $this->template = $template;
    }

    public function __get($key)
    {
        return $this->variables[$key];
    }

    public function __set($key, $value)
    {
        $this->variables[$key] = $value;
    }

    // This function allows us to call $name instead of $template->name
    public function __toString()
    {
        extract($this->variables);
        chdir(dirname($this->template));
        ob_start();
        include basename($this->template);
        return ob_get_clean();
    }

}