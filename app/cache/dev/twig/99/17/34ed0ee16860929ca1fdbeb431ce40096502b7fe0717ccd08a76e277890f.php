<?php

/* StaticBundle:Default:contact.html.twig */
class __TwigTemplate_991734ed0ee16860929ca1fdbeb431ce40096502b7fe0717ccd08a76e277890f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("StaticBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StaticBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kontakt", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "\t<h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kontakt", array(), "messages");
        echo "</h1>

\t<div class=\"border\" style=\"width: 40%; padding: 30px;\">
\t\t<p><b>";
        // line 9
        echo $this->env->getExtension('translator')->getTranslator()->trans("Naslov", array(), "messages");
        echo ":</b><br />Stantetova ulica 7<br /> 3320 Velenje</p>
\t    <p><b>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Telefon", array(), "messages");
        echo ":</b>&nbsp;+386 70 66 57 18</p>
\t    <p class=\"email\"><b>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Elektronska pošta", array(), "messages");
        echo ":</b>&nbsp;<a href=\"mailto:info@grafit-group.com\">info@grafit-group.com</a></p>
\t</div>
\t<div class=\"map\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2753.436770860347!2d15.1219798!3d46.360721700000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476566d255dc6411%3A0xa367690178ac4541!2sStantetova+ulica+7!5e0!3m2!1sen!2s!4v1399295655669\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>
\t</div>
\t<div class=\"inquiry\">
\t    <h2>";
        // line 17
        echo $this->env->getExtension('translator')->getTranslator()->trans("Povpraševanje", array(), "messages");
        echo "</h2>
\t    <form class=\"order_form\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("_add_inquiry");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <!--div class=\"form-actions\"-->
            <br />
            <input type=\"submit\" name=\"naroči\" value=\"Pošlji\" class=\"btn btn-primary mysubmit\">
        <!--/div-->
\t\t</form>
\t</div>
\t<br />
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  53 => 11,  127 => 35,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 36,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 31,  102 => 32,  71 => 19,  67 => 22,  63 => 20,  59 => 11,  38 => 6,  94 => 28,  89 => 31,  85 => 21,  75 => 17,  68 => 14,  56 => 9,  87 => 25,  21 => 1,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  44 => 8,  31 => 5,  28 => 3,  201 => 87,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 39,  121 => 46,  117 => 44,  105 => 38,  91 => 27,  62 => 17,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 25,  47 => 9,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 26,  98 => 31,  96 => 24,  83 => 25,  74 => 14,  66 => 18,  55 => 15,  52 => 13,  50 => 10,  43 => 8,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 75,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 63,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  99 => 31,  95 => 28,  92 => 23,  86 => 28,  82 => 22,  80 => 25,  73 => 20,  64 => 17,  60 => 6,  57 => 11,  54 => 14,  51 => 14,  48 => 9,  45 => 9,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
