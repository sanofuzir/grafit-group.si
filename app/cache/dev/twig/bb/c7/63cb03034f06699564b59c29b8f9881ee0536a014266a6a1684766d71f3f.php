<?php

/* StaticBundle:Default:news.html.twig */
class __TwigTemplate_bbc763cb03034f06699564b59c29b8f9881ee0536a014266a6a1684766d71f3f extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Novice", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Novice", array(), "messages");
        echo "</h1>
";
        // line 7
        if ((!twig_test_empty((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))))) {
            echo "    
    ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <table class=\"table\">
            <tr>
                <td style=\"width: 80%; padding-left: 45px;\">
                    <h2>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
                    ";
                // line 13
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "
                    <br />
                    <p class=\"link\">
                        <a href=\"";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_single_news", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
                echo "\" style=\"color: #5DC13B;\" >";
                echo $this->env->getExtension('translator')->getTranslator()->trans("Več", array(), "messages");
                echo "...&raquo;</a>
                    </p>
                    <p><strong>";
                // line 18
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y"), "html", null, true);
                echo "</strong></p>
                </td>
                ";
                // line 20
                $context["counter"] = 0;
                // line 21
                echo "                ";
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 22
                    echo "                ";
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                    // line 23
                    echo "                <td>
                    <a class=\"table-image\" href=\"";
                    // line 24
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" data-lightbox=\"Novice-";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 25
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" width=150/>
                    </a>
                </td>
                ";
                }
                // line 29
                echo "            </tr>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 33
            echo "    <p style=\"padding: 30px 0px 0px 100px; margin-bottom: 400px;\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("V izdelavi", array(), "messages");
            echo "</p>
";
        }
        // line 35
        echo "    
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 35,  113 => 33,  104 => 29,  96 => 25,  89 => 24,  86 => 23,  83 => 22,  80 => 21,  78 => 20,  73 => 18,  66 => 16,  60 => 13,  56 => 12,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
