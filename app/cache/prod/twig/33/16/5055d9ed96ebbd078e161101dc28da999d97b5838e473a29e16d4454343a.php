<?php

/* ::base.html.twig */
class __TwigTemplate_33165055d9ed96ebbd078e161101dc28da999d97b5838e473a29e16d4454343a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 106,  232 => 104,  222 => 100,  212 => 95,  194 => 85,  180 => 79,  23 => 1,  20 => 1,  124 => 51,  81 => 24,  84 => 29,  165 => 35,  114 => 48,  90 => 29,  118 => 41,  34 => 7,  76 => 5,  65 => 22,  113 => 37,  83 => 24,  198 => 76,  191 => 84,  185 => 81,  175 => 76,  153 => 59,  148 => 58,  139 => 55,  134 => 54,  129 => 53,  104 => 29,  97 => 57,  74 => 27,  77 => 25,  58 => 18,  53 => 5,  127 => 64,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 74,  152 => 66,  100 => 58,  96 => 31,  37 => 7,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 80,  177 => 70,  169 => 60,  140 => 56,  132 => 67,  128 => 39,  111 => 37,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 107,  238 => 103,  235 => 105,  230 => 103,  227 => 102,  224 => 101,  221 => 77,  219 => 99,  217 => 98,  208 => 68,  204 => 92,  179 => 69,  159 => 61,  143 => 56,  135 => 54,  131 => 53,  119 => 31,  108 => 61,  102 => 44,  71 => 27,  67 => 20,  63 => 21,  59 => 6,  47 => 12,  38 => 8,  94 => 27,  89 => 28,  85 => 22,  79 => 27,  75 => 23,  68 => 22,  56 => 18,  50 => 10,  29 => 5,  87 => 21,  72 => 21,  55 => 18,  21 => 1,  26 => 12,  98 => 35,  93 => 29,  88 => 6,  78 => 21,  46 => 14,  27 => 5,  40 => 8,  44 => 11,  35 => 7,  31 => 4,  43 => 12,  41 => 8,  28 => 4,  201 => 87,  196 => 86,  183 => 82,  171 => 37,  166 => 62,  163 => 63,  158 => 61,  156 => 73,  151 => 70,  142 => 41,  138 => 54,  136 => 68,  123 => 43,  121 => 50,  117 => 44,  115 => 43,  105 => 38,  101 => 33,  91 => 53,  69 => 11,  66 => 22,  62 => 19,  49 => 14,  24 => 7,  32 => 4,  25 => 3,  22 => 3,  19 => 2,  209 => 82,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 80,  176 => 75,  173 => 67,  168 => 72,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 57,  144 => 63,  141 => 56,  133 => 47,  130 => 41,  125 => 44,  122 => 37,  116 => 49,  112 => 62,  109 => 36,  106 => 30,  103 => 59,  99 => 34,  95 => 25,  92 => 24,  86 => 25,  82 => 9,  80 => 25,  73 => 24,  64 => 10,  60 => 22,  57 => 19,  54 => 15,  51 => 15,  48 => 12,  45 => 9,  42 => 10,  39 => 7,  36 => 7,  33 => 6,  30 => 2,);
    }
}
