<?php

/* StaticBundle:Default:index.html.twig */
class __TwigTemplate_900dcb59f188aa4096a755e901f3116b2d6116143b58cb47a3743720bac187c0 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Domov", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"center index-style\">
\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/index.jpg"), "html", null, true);
        echo "\"/>
</div>

<div class=\"texti-index\">
\t";
        // line 12
        if ((!twig_test_empty((isset($context["text"]) ? $context["text"] : null)))) {
            // line 13
            echo "\t<p class=\"main-menu-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : null), "text"), "html", null, true);
            echo "</p>
\t<div class=\"circles\">
\t\t<svg height=\"30\" width=\"30\">
\t\t  <circle cx=\"15\" cy=\"15\" r=\"10\" stroke=\"#5DC13B\" stroke-width=\"3\" fill=\"#5DC13B\" />
\t\t</svg>
\t\t<svg height=\"30\" width=\"30\">
\t\t  <circle cx=\"15\" cy=\"15\" r=\"10\" stroke=\"black\" stroke-width=\"3\" fill=\"black\" />
\t\t</svg>
\t\t<svg height=\"30\" width=\"30\">
\t\t  <circle cx=\"15\" cy=\"15\" r=\"10\" stroke=\"black\" stroke-width=\"3\" fill=\"black\" />
\t\t</svg>
\t</div>
\t";
        }
        // line 26
        echo "</div>

<div class=\"oglasi\">
\t<div>
\t\t<p class=\"main-menu-title\" style=\"color: white;\">";
        // line 30
        echo $this->env->getExtension('translator')->getTranslator()->trans("Potrebujete novo reklamno tablo?", array(), "messages");
        echo "</p>
\t</div>
\t<div style=\"background-color: #6FC851;\">
\t\t<p class=\"main-menu-title\" style=\"color: white;\">";
        // line 33
        echo $this->env->getExtension('translator')->getTranslator()->trans("Želite, da je vaš jekleni konjiček nekaj posebnega?", array(), "messages");
        echo "</p>
\t</div>
\t<div style=\"background-color: #93D67C;\">
\t\t<p class=\"main-menu-title\" style=\"color: white;\">";
        // line 36
        echo $this->env->getExtension('translator')->getTranslator()->trans("Potrebujete novo grafično podobo?", array(), "messages");
        echo "</p>
\t</div>
</div>
<table style=\"margin-top: 120px;\" id=\"index-table\">
\t<tr>
\t\t<td style=\"vertical-align: text-top; width: 60%;\">
\t\t";
        // line 42
        if ((!twig_test_empty((isset($context["actualNews"]) ? $context["actualNews"] : null)))) {
            // line 43
            echo "\t\t\t<h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : null), "name"), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 44
            if ((!twig_test_empty($this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : null), "path")))) {
                // line 45
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : null), "path"), "html", null, true);
                echo "\" alt=\"slika\" style=\"width: 150px; height: 150px; padding: 10px;\" align=\"left\"/>
\t\t\t";
            }
            // line 47
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : null), "text")) > 800)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : null), "text"), 0, 800) . "...")) : ($this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : null), "text"))), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : null), "id"))), "html", null, true);
            echo "\" >";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
            echo "...&raquo;</a>
\t\t";
        }
        // line 50
        echo "\t\t</td>
\t\t<td style=\"border-left: 1px solid #FCFCFC;\">
\t\t\t";
        // line 52
        if ((!twig_test_empty((isset($context["news"]) ? $context["news"] : null)))) {
            // line 53
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 54
                echo "\t\t\t\t<h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
                echo "</h2>
\t\t\t\t";
                // line 55
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path")))) {
                    // line 56
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path"), "html", null, true);
                    echo "\" alt=\"slika\" style=\"width: 150px; height: 150px; padding: 10px;\" align=\"left\"/>
\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t<p>";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text")) > 250)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), 0, 250) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"))), "html", null, true);
                echo "</p>
\t\t\t\t<a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"))), "html", null, true);
                echo "\" >";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
                echo "...&raquo;</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "\t\t";
        }
        // line 62
        echo "\t\t</td>
\t</tr>
</table>



<div class=\"index-storitve\">
\t";
        // line 69
        if ((!twig_test_empty((isset($context["services"]) ? $context["services"] : null)))) {
            // line 70
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "\t\t<div>
\t\t\t<h2>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
                echo "</h2>
\t\t\t";
                // line 73
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path")))) {
                    // line 74
                    echo "\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path"), "html", null, true);
                    echo "\" alt=\"slika\" style=\"width: 150px; height: 150px; padding: 10px;\" align=\"left\"/>
\t\t\t";
                }
                // line 76
                echo "\t\t\t<p>";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"))), "html", null, true);
                echo "</p>
\t\t\t<a href=\"";
                // line 77
                echo $this->env->getExtension('routing')->getPath("_services");
                echo "\" >";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
                echo "...&raquo;</a>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "\t";
        }
        // line 81
        echo "</div>

";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 76,  191 => 74,  185 => 72,  175 => 69,  153 => 59,  148 => 58,  139 => 55,  134 => 54,  129 => 53,  104 => 45,  97 => 43,  74 => 30,  77 => 17,  58 => 11,  53 => 11,  127 => 52,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 36,  96 => 24,  37 => 12,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 80,  177 => 70,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 47,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 31,  108 => 36,  102 => 44,  71 => 19,  67 => 22,  63 => 20,  59 => 11,  47 => 9,  38 => 6,  94 => 28,  89 => 31,  85 => 21,  79 => 18,  75 => 17,  68 => 26,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 19,  55 => 15,  21 => 1,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  40 => 8,  44 => 8,  35 => 5,  31 => 5,  43 => 8,  41 => 18,  28 => 3,  201 => 87,  196 => 90,  183 => 82,  171 => 61,  166 => 62,  163 => 61,  158 => 67,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 39,  123 => 50,  121 => 46,  117 => 44,  115 => 43,  105 => 38,  101 => 26,  91 => 27,  69 => 25,  66 => 18,  62 => 17,  49 => 12,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 63,  141 => 56,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 48,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  99 => 31,  95 => 42,  92 => 23,  86 => 36,  82 => 22,  80 => 33,  73 => 20,  64 => 13,  60 => 13,  57 => 11,  54 => 14,  51 => 13,  48 => 9,  45 => 9,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
