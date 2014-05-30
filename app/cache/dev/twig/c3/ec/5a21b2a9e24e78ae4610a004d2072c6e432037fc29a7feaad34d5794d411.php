<?php

/* AdminBundle:Inquiry:editInquiry.html.twig */
class __TwigTemplate_c3ec5a21b2a9e24e78ae4610a004d2072c6e432037fc29a7feaad34d5794d411 extends Twig_Template
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
        echo "Povpraševanja";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 style=\"margin-top: 50px;\" class=\"admin-title\">Dodajanje in urejanje povpraševanj</h2>
<form class=\"border news_form\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["inquriy"]) ? $context["inquriy"] : $this->getContext($context, "inquriy")), "id")) ? ($this->env->getExtension('routing')->getPath("_admin_edit_inquiry", array("id" => $this->getAttribute((isset($context["inquriy"]) ? $context["inquriy"] : $this->getContext($context, "inquriy")), "id")))) : ($this->env->getExtension('routing')->getPath("_admin_add_inquiry"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <!--div class=\"form-actions\"-->
        <input type=\"submit\" name=\"save\" value=\"Shrani\" class=\"btn btn-primary\">
    <!--/div-->
</form>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Inquiry:editInquiry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 59,  126 => 51,  77 => 25,  195 => 84,  58 => 20,  34 => 6,  137 => 40,  110 => 30,  100 => 36,  76 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  167 => 63,  124 => 51,  81 => 26,  65 => 21,  127 => 35,  70 => 17,  289 => 96,  284 => 8,  242 => 103,  234 => 97,  231 => 96,  225 => 95,  205 => 91,  192 => 83,  184 => 78,  160 => 69,  152 => 66,  113 => 47,  104 => 28,  97 => 25,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 70,  169 => 60,  140 => 56,  132 => 51,  128 => 36,  107 => 29,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 42,  135 => 54,  119 => 35,  102 => 27,  71 => 15,  67 => 20,  63 => 21,  59 => 14,  38 => 6,  94 => 28,  89 => 28,  85 => 22,  75 => 26,  68 => 22,  56 => 19,  87 => 37,  21 => 1,  26 => 6,  93 => 26,  88 => 30,  78 => 21,  46 => 11,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 61,  156 => 66,  151 => 63,  142 => 55,  138 => 54,  136 => 60,  121 => 46,  117 => 44,  105 => 38,  91 => 30,  62 => 20,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 23,  69 => 23,  47 => 8,  40 => 9,  37 => 12,  22 => 2,  246 => 108,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 50,  120 => 49,  115 => 48,  111 => 37,  108 => 41,  101 => 33,  98 => 35,  96 => 31,  83 => 20,  74 => 24,  66 => 22,  55 => 18,  52 => 14,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 92,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 65,  164 => 62,  162 => 57,  154 => 60,  149 => 58,  147 => 58,  144 => 63,  141 => 48,  133 => 55,  130 => 52,  125 => 49,  122 => 43,  116 => 41,  112 => 48,  109 => 39,  106 => 30,  103 => 45,  99 => 31,  95 => 28,  92 => 23,  86 => 22,  82 => 27,  80 => 25,  73 => 24,  64 => 21,  60 => 12,  57 => 19,  54 => 12,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
