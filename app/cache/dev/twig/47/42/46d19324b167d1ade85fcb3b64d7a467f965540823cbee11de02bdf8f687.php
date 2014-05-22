<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_474246d19324b167d1ade85fcb3b64d7a467f965540823cbee11de02bdf8f687 extends Twig_Template
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
        echo "Admin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"title\">Urejanje, spreminjanje spletne strani</h2>

<section>
    <div class=\"border admin-panel\">
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_admin_news");
        echo "\">Urejanje Novic</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_admin_shop");
        echo "\">Urejanje Trgovine in izdelkov</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_admin_images");
        echo "\">Urejanje Galerije slik</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("_admin_storitve");
        echo "\">Urejanje Storitev</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("_admin_text");
        echo "\">Urejanje Naslovnice</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_admin_inquiry");
        echo "\">Urejanje Povpraševanj</a>
        </div>
    </div>
</section>
<br />
<section>
    <h3>
        <span>Števec obiskov:</span>
    </h3>
    
</section>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 6,  76 => 19,  65 => 15,  113 => 33,  104 => 29,  211 => 79,  192 => 74,  185 => 72,  110 => 46,  77 => 17,  58 => 16,  53 => 11,  127 => 35,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 75,  184 => 78,  160 => 60,  152 => 66,  100 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 67,  140 => 55,  132 => 51,  128 => 52,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 78,  204 => 72,  179 => 70,  159 => 61,  143 => 56,  135 => 54,  119 => 31,  102 => 32,  71 => 19,  67 => 20,  63 => 20,  59 => 14,  38 => 6,  94 => 28,  89 => 24,  85 => 22,  75 => 26,  68 => 28,  56 => 12,  87 => 25,  21 => 1,  26 => 6,  93 => 26,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 87,  196 => 90,  183 => 71,  171 => 68,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 39,  121 => 50,  117 => 48,  105 => 45,  91 => 24,  62 => 12,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 19,  69 => 23,  47 => 8,  40 => 9,  37 => 7,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 26,  98 => 43,  96 => 24,  83 => 20,  74 => 24,  66 => 13,  55 => 15,  52 => 13,  50 => 11,  43 => 7,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 57,  144 => 63,  141 => 48,  133 => 53,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  99 => 31,  95 => 28,  92 => 23,  86 => 23,  82 => 22,  80 => 21,  73 => 18,  64 => 13,  60 => 13,  57 => 17,  54 => 12,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
