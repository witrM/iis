<?php

/* DistribuceTiskuBundle:Page:seznamTiskovin.html.twig */
class __TwigTemplate_932d092eeb664c3d32813e369e7c46f7e4cbc336839e5ca42300ca5524eeb2b9 extends Twig_Template
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

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "Seznam tiskovin";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    <header>
        <h1>Seznam Tiskovin</h1>
    </header>

    ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tiskoviny"]) ? $context["tiskoviny"] : $this->getContext($context, "tiskoviny")));
        foreach ($context['_seq'] as $context["_key"] => $context["tiskovina"]) {
            // line 12
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tiskovina"]) ? $context["tiskovina"] : $this->getContext($context, "tiskovina")), "titul"), "html", null, true);
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tiskovina'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "DistribuceTiskuBundle:Page:seznamTiskovin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 12,  44 => 11,  38 => 7,  35 => 6,  29 => 4,);
    }
}
