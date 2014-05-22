<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7606b54c916b6c87e436e15ad4663da65c00b5c16b55fa2f3f0e40da2bd8cc8a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("FOSUserBundle::layout.html.twig");

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username")), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((!twig_test_empty($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session")))) {
            // line 8
            echo "        ";
            $context["targetUrl"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "get", array(0 => (("_security." . $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security"), "token"), "providerKey")) . ".target_path")), "method");
            // line 9
            echo "        ";
            if ((!twig_test_empty((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))))) {
                echo "<p><a href=\"";
                echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
                echo "</a></p>";
            }
            // line 10
            echo "    ";
        }
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  20 => 1,  124 => 51,  81 => 24,  84 => 29,  165 => 35,  114 => 48,  90 => 29,  118 => 41,  34 => 6,  76 => 24,  65 => 21,  113 => 37,  104 => 29,  211 => 79,  192 => 74,  185 => 72,  110 => 46,  77 => 25,  58 => 18,  53 => 11,  127 => 52,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 27,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 67,  140 => 56,  132 => 51,  128 => 39,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 78,  204 => 72,  179 => 70,  159 => 61,  143 => 56,  135 => 54,  119 => 31,  102 => 32,  71 => 22,  67 => 20,  63 => 21,  59 => 22,  38 => 8,  94 => 27,  89 => 28,  85 => 22,  75 => 23,  68 => 22,  56 => 18,  87 => 25,  21 => 1,  26 => 6,  93 => 29,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 9,  31 => 6,  28 => 5,  201 => 87,  196 => 90,  183 => 71,  171 => 37,  166 => 71,  163 => 63,  158 => 61,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 60,  121 => 50,  117 => 44,  105 => 38,  91 => 27,  62 => 19,  49 => 11,  24 => 4,  25 => 3,  19 => 2,  79 => 27,  72 => 21,  69 => 23,  47 => 8,  40 => 11,  37 => 5,  22 => 3,  246 => 90,  157 => 59,  145 => 46,  139 => 45,  131 => 53,  123 => 43,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 33,  98 => 35,  96 => 31,  83 => 24,  74 => 27,  66 => 22,  55 => 18,  52 => 13,  50 => 10,  43 => 7,  41 => 9,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 75,  173 => 67,  168 => 72,  164 => 59,  162 => 57,  154 => 60,  149 => 51,  147 => 57,  144 => 63,  141 => 48,  133 => 47,  130 => 41,  125 => 44,  122 => 37,  116 => 49,  112 => 30,  109 => 36,  106 => 30,  103 => 28,  99 => 34,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 19,  54 => 16,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 7,  33 => 6,  30 => 8,);
    }
}
