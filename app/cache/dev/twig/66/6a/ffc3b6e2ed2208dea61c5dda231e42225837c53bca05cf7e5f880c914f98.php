<?php

/* StaticBundle:Default:services.html.twig */
class __TwigTemplate_666affc3b6e2ed2208dea61c5dda231e42225837c53bca05cf7e5f880c914f98 extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Storitve", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h1 class=\"title title-color\">";
        echo $this->env->getExtension('translator')->getTranslator()->trans("Storitve", array(), "messages");
        echo "</h1>
";
        // line 7
        if ((!twig_test_empty((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services"))))) {
            echo "    
    ";
            // line 8
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["services"]) ? $context["services"] : $this->getContext($context, "services")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 9
                echo "        <table class=\"table\">
        <tr>
            <td>
                <h2>";
                // line 12
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
                echo "</h2>
                ";
                // line 13
                echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 450)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 450) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
                echo "
            </td>
                ";
                // line 15
                $context["counter"] = 0;
                // line 16
                echo "                ";
                if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path")))) {
                    // line 17
                    echo "                ";
                    $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
                    // line 18
                    echo "                <td>
                    <a class=\"table-image\" href=\"";
                    // line 19
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" data-lightbox=\"Storitve-";
                    echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
                    echo "\">
                        <img src=\"";
                    // line 20
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
                    echo "\" alt=\"slika\" width=150/>
                    </a>
                </td>
                ";
                }
                // line 24
                echo "            </tr>
        </table>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 28
            echo "    <p style=\"padding: 30px 0px 0px 100px; margin-bottom: 400px;\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("V izdelavi", array(), "messages");
            echo "</p>
";
        }
        // line 30
        echo "    
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 30,  100 => 28,  91 => 24,  83 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  65 => 15,  60 => 13,  56 => 12,  51 => 9,  47 => 8,  43 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
