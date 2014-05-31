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

<div class=\"oglasi\" style=\"width: 99.6%;\">
\t";
        // line 12
        if ((!twig_test_empty((isset($context["texti"]) ? $context["texti"] : $this->getContext($context, "texti"))))) {
            // line 13
            echo "\t<div>
\t\t<a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["texti"]) ? $context["texti"] : $this->getContext($context, "texti")), 0), "link"), "html", null, true);
            echo "\">
\t\t\t<p class=\"main-menu-title main-menu-title-labels\" style=\"color: white;\">";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["texti"]) ? $context["texti"] : $this->getContext($context, "texti")), 0), "name"), "html", null, true);
            echo "</p>
\t\t</a>
\t</div>
\t<div style=\"background-color: #6FC851;\">
\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["texti"]) ? $context["texti"] : $this->getContext($context, "texti")), 1), "link"), "html", null, true);
            echo "\">
\t\t\t<p class=\"main-menu-title main-menu-title-labels\" style=\"color: white;\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["texti"]) ? $context["texti"] : $this->getContext($context, "texti")), 1), "name"), "html", null, true);
            echo "</p>
\t\t</a>
\t</div>
\t<div style=\"background-color: #93D67C;\">
\t\t<a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["texti"]) ? $context["texti"] : $this->getContext($context, "texti")), 2), "link"), "html", null, true);
            echo "\">
\t\t\t<p class=\"main-menu-title main-menu-title-labels\" style=\"color: white;\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["texti"]) ? $context["texti"] : $this->getContext($context, "texti")), 2), "name"), "html", null, true);
            echo "</p>
\t\t</a>
\t</div>
\t";
        }
        // line 29
        echo "</div>
<table style=\"margin-top: 120px;\" id=\"index-table\">
\t<tr>
\t\t<td style=\"vertical-align: text-top; width: 60%; text-align: justify; padding-right: 80px;\">
\t\t";
        // line 33
        if ((!twig_test_empty((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews"))))) {
            // line 34
            echo "\t\t\t<h2 style=\"color: #5DC13B;\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "name"), "html", null, true);
            echo "</h2>
\t\t\t";
            // line 35
            if ((!twig_test_empty($this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "path")))) {
                // line 36
                echo "\t\t\t\t<img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "path"), "html", null, true);
                echo "\" alt=\"slika\" style=\"width: 200px; max-height: 250px; padding: 10px 10px 10px 0px;\" align=\"left\"/>
\t\t\t";
            }
            // line 38
            echo "\t\t\t<p>";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text")) > 800)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text"), 0, 800) . "...")) : ($this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "text"))), "html", null, true);
            echo "</p>
\t\t\t<a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["actualNews"]) ? $context["actualNews"] : $this->getContext($context, "actualNews")), "id"))), "html", null, true);
            echo "\" style=\"color: #5DC13B; margin-top: 10px;\" >";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
            echo "...&raquo;</a>
\t\t";
        }
        // line 41
        echo "\t\t</td>
\t\t<td style=\"border-left: 1px solid #A7A9AB; text-align: justify; padding-left: 40px;\">
\t\t\t";
        // line 43
        if ((!twig_test_empty((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))))) {
            // line 44
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 45
                echo "\t\t\t\t<h2 style=\"color: #5DC13B;\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
\t\t\t\t";
                // line 46
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 47
                    echo "\t\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" style=\"width: 150px; height: 150px; padding: 10px 10px 10px 0px;\" align=\"left\"/>
\t\t\t\t";
                }
                // line 49
                echo "\t\t\t\t<p>";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 250)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 250) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "</p>
\t\t\t\t<a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\" style=\"color: #5DC13B;\">";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
                echo "...&raquo;</a>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t\t";
        }
        // line 53
        echo "\t\t</td>
\t</tr>
</table>

<hr>
<div class=\"index-storitve\">
\t";
        // line 59
        if ((!twig_test_empty((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services"))))) {
            // line 60
            echo "\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 61
                echo "\t\t<div style=\"padding: 0 10px;\">
\t\t\t<h2 style=\"color: #5DC13B;\">";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
\t\t\t";
                // line 63
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 64
                    echo "\t\t\t\t<img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" style=\"width: 150px; max-height: 150px; padding: 10px 10px 10px 0px;\" align=\"left\"/>
\t\t\t";
                }
                // line 66
                echo "\t\t\t<p style=\"text-align: justify; font-size: .8em;\">";
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "</p>
\t\t\t<a href=\"";
                // line 67
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
            // line 70
            echo "\t";
        }
        // line 71
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
        return array (  214 => 71,  211 => 70,  200 => 67,  195 => 66,  188 => 64,  186 => 63,  182 => 62,  179 => 61,  174 => 60,  172 => 59,  164 => 53,  161 => 52,  151 => 50,  146 => 49,  139 => 47,  137 => 46,  132 => 45,  127 => 44,  125 => 43,  121 => 41,  114 => 39,  109 => 38,  102 => 36,  100 => 35,  95 => 34,  93 => 33,  87 => 29,  80 => 25,  76 => 24,  69 => 20,  65 => 19,  58 => 15,  54 => 14,  51 => 13,  49 => 12,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
