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
        return array (  76 => 19,  65 => 15,  113 => 33,  104 => 29,  211 => 79,  192 => 74,  185 => 72,  110 => 46,  77 => 17,  58 => 11,  53 => 11,  127 => 35,  70 => 17,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 75,  184 => 78,  160 => 60,  152 => 66,  100 => 28,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 67,  140 => 55,  132 => 51,  128 => 52,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 78,  204 => 72,  179 => 70,  159 => 61,  143 => 56,  135 => 54,  119 => 35,  102 => 32,  71 => 19,  67 => 16,  63 => 20,  59 => 11,  38 => 6,  94 => 28,  89 => 24,  85 => 21,  75 => 17,  68 => 28,  56 => 12,  87 => 25,  21 => 1,  26 => 6,  93 => 28,  88 => 6,  78 => 20,  46 => 10,  27 => 4,  44 => 8,  31 => 5,  28 => 3,  201 => 87,  196 => 90,  183 => 71,  171 => 68,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 56,  138 => 54,  136 => 39,  121 => 50,  117 => 48,  105 => 45,  91 => 24,  62 => 17,  49 => 12,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 19,  69 => 25,  47 => 8,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 59,  145 => 46,  139 => 45,  131 => 52,  123 => 51,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 26,  98 => 43,  96 => 25,  83 => 20,  74 => 31,  66 => 16,  55 => 15,  52 => 13,  50 => 10,  43 => 7,  41 => 18,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 69,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 57,  144 => 63,  141 => 48,  133 => 53,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 30,  109 => 29,  106 => 30,  103 => 27,  99 => 31,  95 => 28,  92 => 23,  86 => 23,  82 => 22,  80 => 21,  73 => 18,  64 => 13,  60 => 13,  57 => 11,  54 => 14,  51 => 9,  48 => 9,  45 => 9,  42 => 8,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
