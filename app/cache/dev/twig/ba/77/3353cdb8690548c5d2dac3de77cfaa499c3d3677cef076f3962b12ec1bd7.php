<?php

/* FOSUserBundle:Group:list_content.html.twig */
class __TwigTemplate_ba773353cdb8690548c5d2dac3de77cfaa499c3d3677cef076f3962b12ec1bd7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  23 => 3,  20 => 1,  124 => 51,  81 => 24,  84 => 29,  165 => 35,  114 => 48,  90 => 29,  118 => 41,  172 => 72,  34 => 6,  100 => 27,  76 => 24,  113 => 37,  104 => 29,  77 => 25,  58 => 18,  65 => 21,  70 => 14,  263 => 81,  216 => 88,  205 => 81,  188 => 78,  167 => 67,  127 => 52,  110 => 43,  97 => 39,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 8,  252 => 95,  247 => 78,  241 => 77,  229 => 73,  220 => 93,  214 => 69,  177 => 65,  169 => 60,  140 => 56,  132 => 51,  128 => 39,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 82,  204 => 72,  179 => 76,  159 => 64,  143 => 58,  135 => 54,  119 => 49,  102 => 32,  71 => 22,  67 => 20,  63 => 21,  59 => 22,  38 => 6,  94 => 27,  89 => 28,  85 => 22,  75 => 23,  68 => 22,  56 => 18,  87 => 25,  21 => 1,  26 => 6,  93 => 29,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 77,  171 => 37,  166 => 71,  163 => 63,  158 => 61,  156 => 66,  151 => 61,  142 => 41,  138 => 54,  136 => 39,  121 => 50,  117 => 44,  105 => 40,  91 => 27,  62 => 19,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 21,  69 => 23,  47 => 8,  40 => 11,  37 => 5,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 53,  123 => 43,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 33,  98 => 35,  96 => 31,  83 => 24,  74 => 27,  66 => 22,  55 => 18,  52 => 13,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 8,  209 => 82,  203 => 78,  199 => 80,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 67,  168 => 72,  164 => 59,  162 => 57,  154 => 60,  149 => 51,  147 => 57,  144 => 49,  141 => 48,  133 => 47,  130 => 41,  125 => 44,  122 => 37,  116 => 49,  112 => 30,  109 => 36,  106 => 30,  103 => 28,  99 => 34,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 19,  54 => 16,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 10,  33 => 6,  30 => 8,);
    }
}