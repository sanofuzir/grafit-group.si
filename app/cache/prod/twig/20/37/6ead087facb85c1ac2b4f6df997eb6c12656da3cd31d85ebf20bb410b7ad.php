<?php

/* AdminBundle:Shop:editArticle.html.twig */
class __TwigTemplate_20376ead087facb85c1ac2b4f6df997eb6c12656da3cd31d85ebf20bb410b7ad extends Twig_Template
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
        echo "<h2 style=\"margin-top: 50px;\" class=\"title\">Dodajanje in urejanje Artiklov</h2>
<form class=\"border artice_form\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id")) ? ($this->env->getExtension('routing')->getPath("_admin_edit_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : null), "id")))) : ($this->env->getExtension('routing')->getPath("_admin_add_article"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " novalidate>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'widget');
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
        return "AdminBundle:Shop:editArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  165 => 35,  114 => 40,  90 => 26,  118 => 41,  34 => 6,  76 => 19,  65 => 23,  113 => 37,  83 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  153 => 59,  148 => 58,  139 => 55,  134 => 54,  129 => 53,  104 => 29,  97 => 43,  74 => 27,  77 => 28,  58 => 21,  53 => 11,  127 => 35,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 36,  96 => 31,  37 => 5,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 80,  177 => 70,  169 => 60,  140 => 43,  132 => 51,  128 => 39,  111 => 39,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 41,  131 => 40,  119 => 31,  108 => 36,  102 => 44,  71 => 22,  67 => 21,  63 => 21,  59 => 22,  47 => 8,  38 => 6,  94 => 27,  89 => 28,  85 => 22,  79 => 27,  75 => 23,  68 => 24,  56 => 18,  50 => 11,  29 => 3,  87 => 31,  72 => 19,  55 => 21,  21 => 1,  26 => 6,  98 => 31,  93 => 26,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  40 => 6,  44 => 9,  35 => 5,  31 => 3,  43 => 7,  41 => 7,  28 => 3,  201 => 87,  196 => 90,  183 => 82,  171 => 37,  166 => 62,  163 => 61,  158 => 47,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 60,  123 => 43,  121 => 46,  117 => 44,  115 => 43,  105 => 38,  101 => 35,  91 => 30,  69 => 23,  66 => 22,  62 => 22,  49 => 11,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 63,  141 => 56,  133 => 47,  130 => 41,  125 => 44,  122 => 37,  116 => 35,  112 => 30,  109 => 36,  106 => 30,  103 => 35,  99 => 34,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 17,  54 => 17,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
