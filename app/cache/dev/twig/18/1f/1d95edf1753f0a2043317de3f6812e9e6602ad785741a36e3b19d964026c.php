<?php

/* AcmeDemoBundle:Demo:contact.html.twig */
class __TwigTemplate_181f1d95edf1753f0a2043317de3f6812e9e6602ad785741a36e3b19d964026c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony - Contact form";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "    <form action=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_contact");
        echo "\" method=\"POST\" id=\"contact_form\">
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'errors');
        echo "

        ";
        // line 9
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "email"), 'row');
        echo "
        ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getContext($context, "form"), "message"), 'row');
        echo "

        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getContext($context, "form"), 'rest');
        echo "
        <input type=\"submit\" value=\"Send\" class=\"symfony-button-grey\" />
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 24,  65 => 19,  90 => 24,  304 => 91,  299 => 86,  296 => 85,  291 => 49,  286 => 46,  270 => 40,  253 => 30,  249 => 29,  245 => 28,  237 => 26,  233 => 25,  226 => 22,  216 => 11,  213 => 10,  207 => 6,  202 => 92,  200 => 91,  195 => 88,  188 => 82,  178 => 78,  174 => 77,  170 => 76,  153 => 70,  146 => 68,  124 => 61,  104 => 56,  100 => 55,  76 => 22,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 41,  268 => 85,  264 => 34,  258 => 32,  252 => 80,  247 => 78,  241 => 27,  229 => 23,  220 => 13,  214 => 69,  177 => 65,  169 => 60,  140 => 65,  132 => 63,  128 => 62,  107 => 29,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 73,  143 => 56,  135 => 53,  119 => 42,  102 => 27,  71 => 20,  67 => 15,  63 => 17,  59 => 14,  38 => 6,  94 => 25,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 27,  88 => 25,  78 => 21,  46 => 7,  27 => 4,  44 => 10,  31 => 5,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 64,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 40,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 18,  47 => 15,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 60,  115 => 43,  111 => 37,  108 => 57,  101 => 32,  98 => 26,  96 => 54,  83 => 25,  74 => 20,  66 => 41,  55 => 22,  52 => 10,  50 => 10,  43 => 7,  41 => 7,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 85,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 74,  154 => 58,  149 => 69,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 59,  112 => 58,  109 => 34,  106 => 36,  103 => 32,  99 => 27,  95 => 26,  92 => 53,  86 => 23,  82 => 22,  80 => 23,  73 => 19,  64 => 17,  60 => 16,  57 => 12,  54 => 10,  51 => 13,  48 => 9,  45 => 17,  42 => 10,  39 => 9,  36 => 6,  33 => 4,  30 => 7,);
    }
}
