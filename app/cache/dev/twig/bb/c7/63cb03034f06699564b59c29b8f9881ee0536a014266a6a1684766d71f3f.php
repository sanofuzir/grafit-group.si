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
                echo "\" >";
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
        return array (  113 => 33,  104 => 29,  77 => 17,  58 => 11,  65 => 19,  70 => 14,  263 => 79,  216 => 86,  205 => 79,  188 => 76,  167 => 67,  127 => 35,  110 => 43,  97 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 8,  252 => 93,  247 => 78,  241 => 77,  229 => 73,  220 => 91,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 80,  204 => 72,  179 => 74,  159 => 64,  143 => 58,  135 => 55,  119 => 35,  102 => 32,  71 => 20,  67 => 22,  63 => 20,  59 => 11,  38 => 6,  94 => 28,  89 => 24,  85 => 21,  75 => 17,  68 => 14,  56 => 12,  87 => 25,  21 => 1,  26 => 6,  93 => 28,  88 => 6,  78 => 20,  46 => 10,  27 => 4,  44 => 8,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 75,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 61,  142 => 41,  138 => 54,  136 => 39,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 12,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 8,  37 => 12,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 26,  98 => 31,  96 => 25,  83 => 22,  74 => 14,  66 => 16,  55 => 12,  52 => 13,  50 => 10,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 78,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  99 => 31,  95 => 28,  92 => 23,  86 => 23,  82 => 22,  80 => 21,  73 => 18,  64 => 13,  60 => 13,  57 => 11,  54 => 14,  51 => 9,  48 => 9,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}