<?php

/* StaticBundle:Default:shop.html.twig */
class __TwigTemplate_da42c6cd2c581b37f0fd49de1ba1effb0fec659ed962c328a1284a64c84debfa extends Twig_Template
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
<hr>
<ul class=\"my-category-menu\">
";
        // line 9
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
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
        // line 12
        echo "</ul>
";
        // line 13
        if ((!twig_test_empty((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))))) {
            echo "    
    ";
            // line 14
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 15
                echo "        <table class=\"shop-table\">
            <tr>
                <td style=\"width: 80%; padding-left: 45px;\">
                    <h2>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
                    ";
                // line 19
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "
                    <br />
                    <p class=\"link\">
                        <a href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_article", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\" style=\"color: #5DC13B;\" >";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
                echo "...&raquo;</a>
                    </p>
                    <p>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status"), "html", null, true);
                echo "</p>
                    <p><strong>";
                // line 25
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y"), "html", null, true);
                echo "</strong></p>
                </td>
                ";
                // line 27
                $context["counter"] = 0;
                // line 28
                echo "                ";
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 29
                    echo "                ";
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                    // line 30
                    echo "                <td>
                    <a class=\"table-image\" href=\"";
                    // line 31
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("article/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" data-lightbox=\"Novice-";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("article/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" width=150/>
                    </a>
                </td>
                ";
                }
                // line 36
                echo "            </tr>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 40
            echo "    <p style=\"padding: 30px 0px 0px 100px; margin-bottom: 400px;\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("V izdelavi", array(), "messages");
            echo "</p>
";
        }
        // line 42
        echo "    
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 42,  137 => 40,  128 => 36,  120 => 32,  113 => 31,  110 => 30,  107 => 29,  104 => 28,  102 => 27,  97 => 25,  93 => 24,  86 => 22,  80 => 19,  76 => 18,  71 => 15,  67 => 14,  63 => 13,  60 => 12,  49 => 10,  45 => 9,  38 => 6,  35 => 5,  29 => 3,);
    }
}
