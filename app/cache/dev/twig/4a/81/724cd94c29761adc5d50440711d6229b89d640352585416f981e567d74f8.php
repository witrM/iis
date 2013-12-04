<?php

/* TwigBundle:Exception:trace.txt.twig */
class __TwigTemplate_4a81724cd94c29761adc5d50440711d6229b89d640352585416f981e567d74f8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")) {
            // line 2
            echo "    at ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "class") . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "type")) . $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "function")), "html", null, true);
            echo "(";
            echo twig_escape_filter($this->env, $this->env->getExtension('code')->formatArgsAsText($this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "args")), "html", null, true);
            echo ")
";
        } else {
            // line 4
            echo "    at n/a
";
        }
        // line 6
        if (($this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "file", array(), "any", true, true) && $this->getAttribute((isset($context["trace"]) ? $context["trace"] : null), "line", array(), "any", true, true))) {
            // line 7
            echo "        in ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "file"), "html", null, true);
            echo " line ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trace"]) ? $context["trace"] : $this->getContext($context, "trace")), "line"), "html", null, true);
            echo "
";
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:trace.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  38 => 13,  26 => 5,  31 => 5,  25 => 3,  21 => 2,  92 => 21,  85 => 19,  79 => 18,  75 => 17,  72 => 16,  68 => 14,  64 => 12,  56 => 9,  50 => 8,  41 => 9,  24 => 4,  201 => 92,  199 => 91,  196 => 90,  187 => 84,  183 => 82,  173 => 74,  171 => 73,  168 => 72,  166 => 71,  163 => 70,  158 => 67,  156 => 66,  142 => 59,  138 => 57,  136 => 56,  133 => 55,  121 => 46,  117 => 44,  115 => 43,  112 => 42,  105 => 40,  91 => 31,  86 => 28,  69 => 25,  51 => 15,  49 => 19,  39 => 6,  19 => 1,  98 => 40,  93 => 9,  88 => 6,  78 => 40,  46 => 11,  36 => 7,  32 => 12,  27 => 4,  22 => 2,  54 => 21,  43 => 8,  40 => 8,  33 => 6,  30 => 3,  185 => 55,  180 => 50,  177 => 49,  172 => 45,  167 => 42,  159 => 37,  151 => 63,  143 => 29,  139 => 28,  135 => 27,  131 => 26,  127 => 25,  123 => 47,  120 => 22,  114 => 13,  110 => 11,  107 => 10,  101 => 24,  96 => 56,  94 => 22,  89 => 20,  87 => 20,  82 => 46,  80 => 19,  76 => 43,  74 => 42,  66 => 15,  62 => 23,  57 => 16,  55 => 13,  44 => 10,  42 => 14,  35 => 7,  28 => 1,);
    }
}
