<?php

/* AcmeDemoBundle:Demo:index.html.twig */
class __TwigTemplate_3dfcec46b53d86363c26ad8e85d0d600701ffbf1cb6d7d3bdb941568646573c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
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
        echo "Symfony - Demos";
    }

    // line 5
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 7
    public function block_content($context, array $blocks = array())
    {
        // line 8
        echo "    <h1 class=\"title\">Available demos</h1>
    <ul id=\"demo-list\">
        <li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("_demo_hello", array("name" => "World"));
        echo "\">Hello World</a></li>
        <li><a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_demo_secured_hello", array("name" => "World"));
        echo "\">Access the secured area</a> <a href=\"";
        echo $this->env->getExtension('routing')->getPath("_demo_login");
        echo "\">Go to the login page</a></li>
        ";
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Demo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 28,  110 => 22,  53 => 11,  84 => 29,  65 => 19,  90 => 32,  304 => 91,  299 => 86,  296 => 85,  291 => 49,  286 => 46,  270 => 40,  253 => 30,  249 => 29,  245 => 28,  237 => 26,  233 => 25,  226 => 22,  216 => 11,  213 => 10,  207 => 6,  202 => 92,  200 => 91,  195 => 88,  188 => 82,  178 => 78,  174 => 77,  170 => 76,  153 => 70,  146 => 68,  124 => 61,  104 => 56,  100 => 55,  76 => 17,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 41,  268 => 85,  264 => 34,  258 => 32,  252 => 80,  247 => 78,  241 => 27,  229 => 23,  220 => 13,  214 => 69,  177 => 65,  169 => 60,  140 => 65,  132 => 63,  128 => 62,  107 => 29,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 73,  143 => 56,  135 => 53,  119 => 42,  102 => 17,  71 => 20,  67 => 15,  63 => 17,  59 => 13,  38 => 6,  94 => 34,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 11,  87 => 25,  21 => 2,  26 => 9,  93 => 27,  88 => 31,  78 => 26,  46 => 7,  27 => 4,  44 => 10,  31 => 3,  28 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 75,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 64,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 40,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 18,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 20,  115 => 43,  111 => 37,  108 => 19,  101 => 32,  98 => 26,  96 => 54,  83 => 25,  74 => 20,  66 => 41,  55 => 22,  52 => 10,  50 => 10,  43 => 7,  41 => 5,  35 => 5,  32 => 5,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 85,  189 => 71,  187 => 84,  182 => 79,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 74,  154 => 58,  149 => 69,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 59,  112 => 58,  109 => 34,  106 => 36,  103 => 32,  99 => 27,  95 => 26,  92 => 53,  86 => 23,  82 => 28,  80 => 23,  73 => 16,  64 => 13,  60 => 16,  57 => 12,  54 => 10,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 9,  36 => 5,  33 => 3,  30 => 3,);
    }
}
