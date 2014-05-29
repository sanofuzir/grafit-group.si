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
<div class=\"center index-style\" style=\"border: 1px solid #F2F2F2; width: 99.5%;\">
\t<img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/static/images/index.jpg"), "html", null, true);
        echo "\"/>
</div>

<!--
<div class=\"texti-index\">
\t";
        // line 13
        if ((!twig_test_empty((isset($context["text"]) ? $context["text"] : $this->getContext($context, "text"))))) {
            // line 14
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
        // line 27
        echo "</div>
!-->
<div class=\"oglasi\" style=\"width: 99.6%;\">
\t<div>
\t\t<p class=\"main-menu-title main-menu-title-labels\" style=\"color: white;\">";
        // line 31
        echo $this->env->getExtension('translator')->getTranslator()->trans("Potrebujete novo <br> reklamno tablo?", array(), "messages");
        echo "</p>
\t</div>
\t<div style=\"background-color: #6FC851;\">
\t\t<p class=\"main-menu-title main-menu-title-labels\" style=\"color: white;\">";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("Želite, da je vaš jekleni <br> konjiček nekaj posebnega?", array(), "messages");
        echo "</p>
\t</div>
\t<div style=\"background-color: #93D67C;\">
\t\t<p class=\"main-menu-title main-menu-title-labels\" style=\"color: white;\">";
        // line 37
        echo $this->env->getExtension('translator')->getTranslator()->trans("Potrebujete novo <br> grafično podobo?", array(), "messages");
        echo "</p>
\t</div>
</div>
<table style=\"margin-top: 120px;\" id=\"index-table\">
\t<tr>
\t\t<td style=\"vertical-align: text-top; width: 60%; text-align: justify; padding-right: 80px;\">
\t\t";
        // line 43
        if ((!twig_test_empty((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews"))))) {
            // line 44
            echo "\t\t\t<h2 style=\"color: #5DC13B;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "name"), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 45
            if ((!twig_test_empty($this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "path")))) {
                // line 46
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "path"), "html", null, true);
                echo "\" alt=\"slika\" style=\"width: 200px; max-height: 250px; padding: 10px 10px 10px 0px;\" align=\"left\"/>
\t\t\t";
            }
            // line 48
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text")) > 800)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text"), 0, 800) . "...")) : ($this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text"))), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "id"))), "html", null, true);
            echo "\" style=\"color: #5DC13B; margin-top: 10px;\" >";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
            echo "...&raquo;</a>
\t\t";
        }
        // line 51
        echo "\t\t</td>
\t\t<td style=\"border-left: 1px solid #A7A9AB; text-align: justify; padding-left: 40px;\">
\t\t\t";
        // line 53
        if ((!twig_test_empty((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))))) {
            // line 54
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 55
                echo "\t\t\t\t<h2 style=\"color: #5DC13B;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
\t\t\t\t";
                // line 56
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 57
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" style=\"width: 150px; height: 150px; padding: 10px 10px 10px 0px;\" align=\"left\"/>
\t\t\t\t";
                }
                // line 59
                echo "\t\t\t\t<p>";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 250)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 250) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "</p>
\t\t\t\t<a href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\" style=\"color: #5DC13B;\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
                echo "...&raquo;</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "\t\t";
        }
        // line 63
        echo "\t\t</td>
\t</tr>
</table>

<hr>
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
                echo "\t\t<div style=\"padding: 0 10px;\">
\t\t\t<h2 style=\"color: #5DC13B;\">";
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
                    echo "\" alt=\"slika\" style=\"width: 150px; max-height: 150px; padding: 10px 10px 10px 0px;\" align=\"left\"/>
\t\t\t";
                }
                // line 76
                echo "\t\t\t<p style=\"text-align: justify; font-size: .8em;\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "</p>
\t\t\t<a href=\"";
                // line 77
                echo $this->env->getExtension('routing')->getPath("_services");
                echo "\" style=\"color: #5DC13B;\">";
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
<p style=\"margin-top: 380px; float: none; position: relative;\">&nbsp;</p>
<hr>
<br>
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
        return array (  217 => 81,  214 => 80,  203 => 77,  198 => 76,  191 => 74,  189 => 73,  185 => 72,  182 => 71,  177 => 70,  175 => 69,  167 => 63,  164 => 62,  154 => 60,  149 => 59,  142 => 57,  140 => 56,  135 => 55,  130 => 54,  128 => 53,  124 => 51,  117 => 49,  112 => 48,  105 => 46,  103 => 45,  98 => 44,  96 => 43,  87 => 37,  81 => 34,  75 => 31,  69 => 27,  52 => 14,  50 => 13,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
