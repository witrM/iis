<?php

/* DistribuceTiskuBundle:Security:logout.html.twig */
class __TwigTemplate_90a055cd6ca9e58aca3e7835fa4c737dffa90871612f5e00e9b996b5de5467c6 extends Twig_Template
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
        echo "Log out";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "    <header>
        <h1>Log out</h1>
    </header>
    
    <p>You were logged out.</p>
";
    }

    public function getTemplateName()
    {
        return "DistribuceTiskuBundle:Security:logout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 8,  35 => 7,  29 => 5,);
    }
}
