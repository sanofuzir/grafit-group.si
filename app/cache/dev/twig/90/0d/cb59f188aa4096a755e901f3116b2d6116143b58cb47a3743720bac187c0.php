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
        if ((!twig_test_empty((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))))) {
            // line 13
            echo "\t<p class=\"main-menu-title\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text")), "text"), "html", null, true);
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
        if ((!twig_test_empty((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews"))))) {
            // line 43
            echo "\t\t\t<h2>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "name"), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 44
            if ((!twig_test_empty($this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "path")))) {
                // line 45
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "path"), "html", null, true);
                echo "\" alt=\"slika\" style=\"width: 150px; height: 150px; padding: 10px;\" align=\"left\"/>
\t\t\t";
            }
            // line 47
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text")) > 800)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text"), 0, 800) . "...")) : ($this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text"))), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "id"))), "html", null, true);
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
        if ((!twig_test_empty((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))))) {
            // line 53
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 54
                echo "\t\t\t\t<h2>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
\t\t\t\t";
                // line 55
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 56
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" style=\"width: 150px; height: 150px; padding: 10px;\" align=\"left\"/>
\t\t\t\t";
                }
                // line 58
                echo "\t\t\t\t<p>";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 250)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 250) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "</p>
\t\t\t\t<a href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
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
        if ((!twig_test_empty((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services"))))) {
            // line 70
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 71
                echo "\t\t<div>
\t\t\t<h2>";
                // line 72
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
\t\t\t";
                // line 73
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 74
                    echo "\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" style=\"width: 150px; height: 150px; padding: 10px;\" align=\"left\"/>
\t\t\t";
                }
                // line 76
                echo "\t\t\t<p>";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
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
        return array (  217 => 81,  214 => 80,  203 => 77,  198 => 76,  191 => 74,  189 => 73,  185 => 72,  182 => 71,  177 => 70,  175 => 69,  166 => 62,  163 => 61,  153 => 59,  148 => 58,  141 => 56,  139 => 55,  134 => 54,  129 => 53,  127 => 52,  123 => 50,  116 => 48,  111 => 47,  104 => 45,  102 => 44,  97 => 43,  95 => 42,  86 => 36,  80 => 33,  74 => 30,  68 => 26,  51 => 13,  49 => 12,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
