<?php

/* DistribuceTiskuBundle::base.html.twig */
class __TwigTemplate_154b8d5fc6d9c2c3e558a637ffe0348606eafc4a94c6ce1d886720f203840ed6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo " - symblog</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>

        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 22
        $this->displayBlock('navigation', $context, $blocks);
        // line 37
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 40
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 41
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 46
        $this->displayBlock('body', $context, $blocks);
        // line 47
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 49
        $this->displayBlock('sidebar', $context, $blocks);
        // line 50
        echo "                ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "type"), "method") == "0")) {
            echo "  
                <ul>
                    <li><a href=\"";
            // line 52
            echo $this->env->getExtension('routing')->getPath("_customeradd");
            echo "\">Přidat zákazníka</a></li>
                    <li><a href=\"";
            // line 53
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Editovat zákazníka </a></li>
                    <li><a href=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Odebrat zákazníka </a></li>
                    <li><a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("_bookadd");
            echo "\">Přidat tiskoviny</a></li>
                    <li><a href=\"";
            // line 56
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Editovat tiskovyny</a></li>
                    <li><a href=\"";
            // line 57
            echo $this->env->getExtension('routing')->getPath("_supplieradd");
            echo "\">Přidat doručovatele</a></li>
                    <li><a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Editovat doručovatele</a></li>
                    <li><a href=\"";
            // line 59
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Odebrat doručovatele</a></li>
                    <li><a href=\"";
            // line 60
            echo $this->env->getExtension('routing')->getPath("_subscriptionadd");
            echo "\">Zadat odběr</a></li>
                    <li><a href=\"";
            // line 61
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Upravit odběr</a></li>
                    <li><a href=\"";
            // line 62
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Odebrat odběr</a></li>
                    <li><a href=\"";
            // line 63
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Prohlížet odběr</a></li>
                    <li><a href=\"";
            // line 64
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Přerušení odběru</a></li>
                    <li><a href=\"";
            // line 65
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Upravit profil</a></li>
                </ul>
                ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "type"), "method") == "1")) {
            // line 68
            echo "                <ul>
                    <li><a href=\"";
            // line 69
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Zobrazit zakázky</a></li>
                    <li><a href=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Upravit profil</a></li>
                </ul>
                ";
        } elseif (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "type"), "method") == "2")) {
            // line 73
            echo "                <ul>
                    <li><a href=\"";
            // line 74
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Zadat odběr</a></li>
                    <li><a href=\"";
            // line 75
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Upravit odběr</a></li>
                    <li><a href=\"";
            // line 76
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Odebrat odběr</a></li>
                    <li><a href=\"";
            // line 77
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Prohlížet odběr</a></li>
                    <li><a href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Přerušení odběru</a></li>
                    <li><a href=\"";
            // line 79
            echo $this->env->getExtension('routing')->getPath("_about");
            echo "\">Upravit profil</a></li>
                </ul>
                ";
        }
        // line 82
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 85
        $this->displayBlock('footer', $context, $blocks);
        // line 88
        echo "            </div>
        </section>

        ";
        // line 91
        $this->displayBlock('javascripts', $context, $blocks);
        // line 92
        echo "    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "symblog";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 22
    public function block_navigation($context, array $blocks = array())
    {
        // line 23
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">Home</a></li>
                                <li><a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("_contact");
        echo "\">Contact</a></li>
                                <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_seznamTiskovin");
        echo "\">Tiskoviny</a></li>
                                ";
        // line 29
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => "user"), "method") != "")) {
            echo "  
                                <li><a href=\"";
            // line 30
            echo $this->env->getExtension('routing')->getPath("_logout");
            echo "\">Log out</a></li>
                                ";
        } else {
            // line 32
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("_login");
            echo "\">Log in</a></li>
                                ";
        }
        // line 34
        echo "                            </ul>
                        </nav>
                    ";
    }

    // line 40
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">symblog</a>";
    }

    // line 41
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("_homepage");
        echo "\">creating a blog in Symfony2</a>";
    }

    // line 46
    public function block_body($context, array $blocks = array())
    {
    }

    // line 49
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 85
    public function block_footer($context, array $blocks = array())
    {
        // line 86
        echo "                    Symfony2 blog tutorial - created by <a href=\"https://github.com/dsyph3r\">dsyph3r</a>
                ";
    }

    // line 91
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "DistribuceTiskuBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 91,  299 => 86,  296 => 85,  291 => 49,  286 => 46,  278 => 41,  270 => 40,  264 => 34,  258 => 32,  253 => 30,  249 => 29,  245 => 28,  241 => 27,  237 => 26,  233 => 25,  229 => 23,  226 => 22,  220 => 13,  216 => 11,  213 => 10,  207 => 6,  202 => 92,  200 => 91,  195 => 88,  193 => 85,  188 => 82,  182 => 79,  178 => 78,  174 => 77,  170 => 76,  166 => 75,  162 => 74,  159 => 73,  153 => 70,  149 => 69,  146 => 68,  140 => 65,  136 => 64,  132 => 63,  128 => 62,  124 => 61,  120 => 60,  116 => 59,  112 => 58,  108 => 57,  104 => 56,  100 => 55,  96 => 54,  92 => 53,  88 => 52,  82 => 50,  80 => 49,  76 => 47,  74 => 46,  66 => 41,  62 => 40,  57 => 37,  55 => 22,  44 => 15,  42 => 10,  35 => 6,  28 => 1,);
    }
}
