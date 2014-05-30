<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_11619f05f32dd1bf29946392ae62d7d77a6e774e175674ec41456434ef5c3965 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
    </head>
    <body>
        <div>
            ";
        // line 8
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user"), "username")), "FOSUserBundle"), "html", null, true);
            echo " |
                <a href=\"";
            // line 10
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                    ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                </a>
            ";
        } else {
            // line 14
            echo "                <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
            ";
        }
        // line 16
        echo "        </div>

        ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 19
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 20
                echo "                <div class=\"flash-";
                echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
                echo "\">
                    ";
                // line 21
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
        <div>
            ";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "        </div>
    </body>
</html>
";
    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 28
        echo "            ";
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
        return array (  20 => 1,  178 => 69,  155 => 61,  148 => 58,  84 => 29,  165 => 35,  114 => 34,  90 => 29,  118 => 39,  153 => 59,  126 => 51,  77 => 28,  195 => 84,  58 => 18,  34 => 6,  137 => 40,  110 => 30,  100 => 27,  76 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  167 => 63,  124 => 51,  81 => 24,  65 => 21,  127 => 35,  70 => 24,  289 => 96,  284 => 8,  242 => 103,  234 => 97,  231 => 96,  225 => 95,  205 => 91,  192 => 83,  184 => 78,  160 => 69,  152 => 66,  113 => 37,  104 => 28,  97 => 32,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 70,  169 => 60,  140 => 43,  132 => 54,  128 => 53,  107 => 29,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 62,  143 => 42,  135 => 41,  119 => 35,  102 => 34,  71 => 22,  67 => 20,  63 => 21,  59 => 21,  38 => 6,  94 => 27,  89 => 28,  85 => 22,  75 => 23,  68 => 22,  56 => 18,  87 => 25,  21 => 1,  26 => 6,  93 => 29,  88 => 30,  78 => 26,  46 => 14,  27 => 4,  44 => 9,  31 => 9,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 37,  166 => 71,  163 => 63,  158 => 47,  156 => 66,  151 => 63,  142 => 55,  138 => 54,  136 => 55,  121 => 41,  117 => 50,  105 => 38,  91 => 27,  62 => 19,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 21,  69 => 23,  47 => 8,  40 => 11,  37 => 5,  22 => 2,  246 => 108,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 50,  120 => 49,  115 => 49,  111 => 37,  108 => 41,  101 => 33,  98 => 35,  96 => 31,  83 => 28,  74 => 25,  66 => 22,  55 => 18,  52 => 14,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 8,  209 => 92,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 65,  164 => 62,  162 => 57,  154 => 60,  149 => 58,  147 => 58,  144 => 63,  141 => 57,  133 => 55,  130 => 52,  125 => 52,  122 => 51,  116 => 35,  112 => 38,  109 => 36,  106 => 35,  103 => 28,  99 => 29,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 20,  54 => 16,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 10,  33 => 5,  30 => 8,);
    }
}
