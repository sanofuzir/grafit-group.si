<?php

/* StaticBundle:Default:categoryArticle.html.twig */
class __TwigTemplate_42cb1954be32d11f079877599e6dfdaabe9bb2354b8b167774722e237184155b extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Trgovina", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Trgovina", array(), "messages");
        echo "</h1>
<ul class=\"my-category-menu\">
";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "    <li><a style=\"text-decoration: none; color: black;\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_category_article", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</a></li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</ul>
";
        // line 12
        if ((!twig_test_empty((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))))) {
            echo "    
    ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 14
                echo "        <table class=\"shop-table\">
            <tr>
                <td style=\"width: 80%; padding-left: 45px;\">
                    <h2>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
                    ";
                // line 18
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "
                    <br />
                    <p class=\"link\">
                        <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_article", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\" >";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
                echo "...&raquo;</a>
                    </p>
                    <p>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status"), "html", null, true);
                echo "</p>
                    <p><strong>";
                // line 24
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y"), "html", null, true);
                echo "</strong></p>
                </td>
                ";
                // line 26
                $context["counter"] = 0;
                // line 27
                echo "                ";
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 28
                    echo "                ";
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                    // line 29
                    echo "                <td>
                    <a class=\"table-image\" href=\"";
                    // line 30
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("article/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" data-lightbox=\"Novice-";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("article/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" width=150/>
                    </a>
                </td>
                ";
                }
                // line 35
                echo "            </tr>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 39
            echo "    <div style=\"padding-left: 350px;\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("Za to kategorijo ni izdelkov!", array(), "messages");
            echo "</div>
";
        }
        // line 41
        echo "    
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:categoryArticle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 41,  136 => 39,  127 => 35,  119 => 31,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  101 => 26,  96 => 24,  92 => 23,  85 => 21,  79 => 18,  75 => 17,  70 => 14,  66 => 13,  62 => 12,  59 => 11,  48 => 9,  44 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
