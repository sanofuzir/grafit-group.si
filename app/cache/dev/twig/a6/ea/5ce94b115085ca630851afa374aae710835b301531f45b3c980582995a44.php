<?php

/* StaticBundle:Email:email.html.twig */
class __TwigTemplate_a6ea5ce94b115085ca630851afa374aae710835b301531f45b3c980582995a44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<h2>Prejeli ste povpraševanje od osebe ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</h2>

<p><b>Ime:</b>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</p>
<p><b>Priimek:</b>";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "surname"), "html", null, true);
        echo "</p>
";
        // line 5
        if ((!twig_test_empty($this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "company")))) {
            // line 6
            echo "    <p><b>Podjetje:</b>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "company"), "html", null, true);
            echo "</p>
";
        }
        // line 8
        echo "<p><b>Telefon:</b>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "telephone"), "html", null, true);
        echo "</p>
<p><b>Email:</b>";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "</p>
<p><b>Vsebina:</b></p>
<p>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "name"), "html", null, true);
        echo "</p>

<p><b>Odgovori:</b>&nbsp;
    <a href=\"mailto:";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["data"]) ? $context["data"] : $this->getContext($context, "data")), "email"), "html", null, true);
        echo "</a>
</p>";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Email:email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 40,  110 => 30,  100 => 28,  76 => 18,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  167 => 63,  124 => 51,  81 => 34,  65 => 15,  127 => 35,  70 => 17,  289 => 96,  284 => 8,  242 => 103,  234 => 97,  231 => 96,  225 => 95,  205 => 91,  192 => 83,  184 => 80,  160 => 71,  152 => 68,  113 => 31,  104 => 28,  97 => 25,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 80,  177 => 70,  169 => 60,  140 => 56,  132 => 51,  128 => 36,  107 => 29,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 42,  135 => 55,  119 => 35,  102 => 27,  71 => 15,  67 => 17,  63 => 13,  59 => 14,  38 => 6,  94 => 28,  89 => 24,  85 => 22,  75 => 20,  68 => 23,  56 => 12,  87 => 37,  21 => 1,  26 => 6,  93 => 26,  88 => 30,  78 => 21,  46 => 9,  27 => 4,  44 => 8,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 57,  138 => 54,  136 => 39,  121 => 46,  117 => 49,  105 => 46,  91 => 24,  62 => 17,  49 => 10,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 18,  47 => 8,  40 => 8,  37 => 12,  22 => 2,  246 => 108,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 32,  115 => 43,  111 => 37,  108 => 41,  101 => 26,  98 => 44,  96 => 25,  83 => 20,  74 => 14,  66 => 16,  55 => 15,  52 => 14,  50 => 11,  43 => 7,  41 => 8,  35 => 6,  32 => 4,  29 => 4,  209 => 92,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 77,  173 => 65,  168 => 74,  164 => 62,  162 => 57,  154 => 60,  149 => 59,  147 => 58,  144 => 65,  141 => 48,  133 => 55,  130 => 54,  125 => 49,  122 => 43,  116 => 41,  112 => 48,  109 => 29,  106 => 30,  103 => 45,  99 => 31,  95 => 28,  92 => 23,  86 => 22,  82 => 22,  80 => 19,  73 => 18,  64 => 21,  60 => 12,  57 => 14,  54 => 12,  51 => 11,  48 => 9,  45 => 9,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
