<?php

/* StaticBundle:Gallery:gallery.html.twig */
class __TwigTemplate_d93e406a461b3f0ddae8c48bb2b4a76d8c692a4858cd9773640b509580d0eb34 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Galerija", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Galerija slik", array(), "messages");
        echo " -> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name"), "html", null, true);
        echo "</h1>
<hr>
<div class=\"galery\">
\t<div class=\"images\">
\t\t";
        // line 10
        $context["counter"] = 0;
        // line 11
        echo "\t\t<table style=\"margin-bottom: 50px;\">
\t\t\t<tr>
\t\t";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 14
            echo "\t\t\t<td style=\"width: 25%; padding: 0 10px;\">
\t\t\t\t";
            // line 15
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 16
            echo "\t            <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("galery/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" data-lightbox=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name"), "html", null, true);
            echo "\" data-title=\"";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"))), "html", null, true);
            echo "\">
\t\t        \t<div class=\"images-item\">
\t\t\t          \t<img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("galery/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" alt=\"slika\"/>
\t\t\t          \t<p>
\t\t\t          \t\t<strong>";
            // line 20
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"))), "html", null, true);
            echo "</strong>
\t\t\t          \t\t<br>
\t\t\t          \t\t<span>";
            // line 22
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y"), "html", null, true);
            echo "</span>
\t\t\t          \t</p>
\t\t          \t</div>
\t            </a>
\t        </td>
            ";
            // line 27
            if ((((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) % 4) == 0)) {
                // line 28
                echo "            \t</tr><tr>
            ";
            }
            // line 30
            echo "\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "\t    \t</tr>
\t    </table
\t</div>
\t<div class=\"albumi\">
\t\t<h2>";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("Ostali albumi", array(), "messages");
        echo "</h2>
\t\t<hr>
\t\t";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) ? $context["albums"] : $this->getContext($context, "albums")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 38
            echo "\t\t<div>
            <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_album_gallery", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\">
            \t<div class=\"album-small\">
\t            \t<img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("album/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" alt=\"slika\" />
\t            \t<p>
\t            \t\t<strong>";
            // line 43
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), 0, 50) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"))), "html", null, true);
            echo "</strong>
\t            \t</p>
\t            \t<span>";
            // line 45
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y"), "html", null, true);
            echo "</span>
            \t</div>
            </a>
        </div>
\t    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Gallery:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 50,  139 => 45,  134 => 43,  128 => 41,  123 => 39,  120 => 38,  116 => 37,  111 => 35,  105 => 31,  99 => 30,  95 => 28,  93 => 27,  85 => 22,  80 => 20,  74 => 18,  63 => 16,  61 => 15,  58 => 14,  54 => 13,  50 => 11,  48 => 10,  38 => 6,  35 => 5,  29 => 3,);
    }
}
