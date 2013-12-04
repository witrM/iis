<?php

/* DistribuceTiskuBundle:Page:login.html.twig */
class __TwigTemplate_2d94dd5c34098fd3b86e6c72b03b055f47ba2001567c8e8523297f54a8fa6c00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("DistribuceTiskuBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DistribuceTiskuBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Log in";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    
    <header>
        <h1>Log in account</h1>
    </header>
    
    <p>Fill your username and password to login</p>
    
    <form action=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_login_check");
        echo "\" method=\"post\">
        <label for=\"username\">Username:</label>
        <input type=\"text\" id=\"username\" name=\"_username\" />
        <br />
        <label for=\"password\">Password:</label>
        <input type=\"password\" id=\"password\" name=\"_password\" />
        <br />
        <button type=\"submit\">login</button>
    </form>
    
    
    

";
    }

    public function getTemplateName()
    {
        return "DistribuceTiskuBundle:Page:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 15,  38 => 8,  35 => 7,  29 => 5,);
    }
}
