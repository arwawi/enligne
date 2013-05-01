<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_b8b50f85681c8d071c116b10f3ac4fa1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title> ";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "  </head>

  <body>
       
        <div>
           
            ";
        // line 18
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 19
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_security_logout"), "html", null, true);
            echo "\">
                    ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 24
            echo "             ";
            // line 25
            echo "            ";
        }
        // line 26
        echo "             
        </div>

        ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 30
            echo "        <div class=\"";
            echo twig_escape_filter($this->env, (isset($context["key"]) ? $context["key"] : $this->getContext($context, "key")), "html", null, true);
            echo "\">
            ";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), array(), "FOSUserBundle"), "html", null, true);
            echo "
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "
        <div>
            ";
        // line 36
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 38
        echo "        </div>
    ";
        // line 39
        $this->displayBlock('javascripts', $context, $blocks);
        // line 47
        echo "
  </body>
</html>
";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        echo "ESPRIT";
    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 8
        echo "    ";
        // line 10
        echo "      
    ";
    }

    // line 36
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 37
        echo "            ";
    }

    // line 39
    public function block_javascripts($context, array $blocks = array())
    {
        // line 40
        echo "    ";
        // line 42
        echo "   ";
        // line 46
        echo "  ";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 40,  126 => 37,  118 => 10,  107 => 6,  100 => 47,  95 => 38,  89 => 34,  75 => 30,  66 => 26,  46 => 19,  23 => 1,  55 => 21,  44 => 18,  39 => 7,  31 => 4,  28 => 3,  196 => 86,  193 => 85,  191 => 84,  189 => 83,  187 => 82,  184 => 81,  181 => 80,  174 => 73,  164 => 69,  161 => 68,  155 => 65,  150 => 64,  148 => 63,  145 => 62,  138 => 57,  134 => 55,  132 => 54,  124 => 48,  117 => 44,  113 => 7,  90 => 36,  86 => 35,  72 => 23,  65 => 19,  61 => 24,  52 => 14,  32 => 9,  22 => 2,  19 => 1,  175 => 81,  171 => 72,  168 => 79,  166 => 77,  163 => 76,  149 => 64,  146 => 63,  140 => 57,  137 => 46,  130 => 39,  125 => 7,  122 => 6,  116 => 8,  110 => 83,  108 => 41,  105 => 75,  103 => 63,  98 => 39,  96 => 56,  82 => 45,  78 => 44,  56 => 16,  51 => 20,  47 => 12,  34 => 7,  24 => 1,  111 => 34,  104 => 39,  99 => 28,  93 => 36,  91 => 26,  88 => 25,  79 => 21,  73 => 19,  71 => 29,  67 => 17,  59 => 86,  54 => 12,  50 => 12,  43 => 6,  40 => 5,  33 => 5,  158 => 79,  139 => 63,  135 => 42,  131 => 61,  127 => 60,  123 => 36,  106 => 45,  101 => 38,  97 => 41,  85 => 32,  80 => 31,  76 => 28,  74 => 43,  63 => 25,  58 => 17,  48 => 9,  45 => 8,  42 => 7,  36 => 12,  30 => 6,);
    }
}
