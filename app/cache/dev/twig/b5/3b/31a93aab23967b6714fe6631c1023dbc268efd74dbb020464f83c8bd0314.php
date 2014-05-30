<?php

/* AdminBundle:Text:editText.html.twig */
class __TwigTemplate_b53b31a93aab23967b6714fe6631c1023dbc268efd74dbb020464f83c8bd0314 extends Twig_Template
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
        echo "Texti";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 style=\"margin-top: 50px;\" class=\"admin-title\">Dodajanje in urejanje textov na naslovni strani</h2>
<form class=\"border text_form\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "id")) ? ($this->env->getExtension('routing')->getPath("_admin_edit_text", array("id" => $this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "id")))) : ($this->env->getExtension('routing')->getPath("_admin_add_text"))), "html", null, true);
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
        return "AdminBundle:Text:editText.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 69,  155 => 61,  148 => 58,  84 => 29,  165 => 35,  114 => 34,  90 => 29,  118 => 39,  153 => 59,  126 => 51,  77 => 28,  195 => 84,  58 => 21,  34 => 6,  137 => 40,  110 => 30,  100 => 36,  76 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  167 => 63,  124 => 51,  81 => 26,  65 => 21,  127 => 35,  70 => 24,  289 => 96,  284 => 8,  242 => 103,  234 => 97,  231 => 96,  225 => 95,  205 => 91,  192 => 83,  184 => 78,  160 => 69,  152 => 66,  113 => 37,  104 => 28,  97 => 32,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 70,  169 => 60,  140 => 43,  132 => 54,  128 => 53,  107 => 29,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 62,  143 => 42,  135 => 41,  119 => 35,  102 => 34,  71 => 22,  67 => 23,  63 => 21,  59 => 21,  38 => 6,  94 => 27,  89 => 28,  85 => 22,  75 => 23,  68 => 22,  56 => 18,  87 => 31,  21 => 1,  26 => 6,  93 => 26,  88 => 30,  78 => 26,  46 => 11,  27 => 4,  44 => 9,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 37,  166 => 71,  163 => 63,  158 => 47,  156 => 66,  151 => 63,  142 => 55,  138 => 54,  136 => 55,  121 => 41,  117 => 50,  105 => 38,  91 => 30,  62 => 20,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 23,  69 => 23,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 108,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 50,  120 => 49,  115 => 49,  111 => 37,  108 => 41,  101 => 33,  98 => 35,  96 => 31,  83 => 28,  74 => 25,  66 => 22,  55 => 18,  52 => 14,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 92,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 65,  164 => 62,  162 => 57,  154 => 60,  149 => 58,  147 => 58,  144 => 63,  141 => 57,  133 => 55,  130 => 52,  125 => 52,  122 => 51,  116 => 35,  112 => 38,  109 => 36,  106 => 35,  103 => 35,  99 => 29,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 22,  60 => 22,  57 => 20,  54 => 17,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
