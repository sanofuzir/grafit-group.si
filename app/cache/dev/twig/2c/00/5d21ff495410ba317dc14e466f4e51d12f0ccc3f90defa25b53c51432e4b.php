<?php

/* AdminBundle:News:editNews.html.twig */
class __TwigTemplate_2c005d21ff495410ba317dc14e466f4e51d12f0ccc3f90defa25b53c51432e4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Novice";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 style=\"margin-top: 50px;\" class=\"title\">Dodajanje in urejanje novic</h2>
<form class=\"border news_form\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id")) ? ($this->env->getExtension('routing')->getPath("_admin_edit_news", array("id" => $this->getAttribute((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")), "id")))) : ($this->env->getExtension('routing')->getPath("_admin_add_news"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <!--div class=\"form-actions\"-->
        <br />
        <input type=\"submit\" name=\"save\" value=\"Shrani\" class=\"btn btn-primary\">
    <!--/div-->
</form>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:News:editNews.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  34 => 6,  76 => 19,  65 => 24,  113 => 37,  104 => 29,  211 => 79,  192 => 74,  185 => 72,  110 => 46,  77 => 28,  58 => 20,  53 => 11,  127 => 35,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 67,  140 => 55,  132 => 51,  128 => 43,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 78,  204 => 72,  179 => 70,  159 => 61,  143 => 56,  135 => 54,  119 => 31,  102 => 32,  71 => 26,  67 => 20,  63 => 21,  59 => 22,  38 => 6,  94 => 28,  89 => 28,  85 => 22,  75 => 26,  68 => 25,  56 => 19,  87 => 31,  21 => 1,  26 => 6,  93 => 26,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 87,  196 => 90,  183 => 71,  171 => 68,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 60,  121 => 50,  117 => 44,  105 => 38,  91 => 32,  62 => 23,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 19,  69 => 23,  47 => 8,  40 => 9,  37 => 12,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 33,  98 => 43,  96 => 31,  83 => 30,  74 => 27,  66 => 22,  55 => 21,  52 => 13,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 75,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 57,  144 => 63,  141 => 48,  133 => 53,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 30,  109 => 36,  106 => 28,  103 => 35,  99 => 34,  95 => 33,  92 => 23,  86 => 23,  82 => 27,  80 => 29,  73 => 24,  64 => 13,  60 => 13,  57 => 17,  54 => 12,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
