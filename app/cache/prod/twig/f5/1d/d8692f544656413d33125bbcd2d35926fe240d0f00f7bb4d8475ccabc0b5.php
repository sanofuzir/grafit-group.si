<?php

/* StaticBundle:Default:galery.html.twig */
class __TwigTemplate_f51dd8692f544656413d33125bbcd2d35926fe240d0f00f7bb4d8475ccabc0b5 extends Twig_Template
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
        echo "</h1>
<div class=\"galery\">
    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 9
            echo "        <div class=\"galery-item\">
            <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("galery/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path"), "html", null, true);
            echo "\" data-lightbox=\"galery\" data-title=\"";
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description")) > 30)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), 0, 30) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"))), "html", null, true);
            echo "\">
              <img src=\"";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("galery/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path"), "html", null, true);
            echo "\" alt=\"slika\"/>
            </a><br />
            <span><strong>";
            // line 13
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "description"))), "html", null, true);
            echo "</strong></span><br />
            <span>";
            // line 14
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "created"), "d.m.Y"), "html", null, true);
            echo "</span>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:galery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 17,  58 => 11,  53 => 11,  127 => 35,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 36,  96 => 24,  37 => 12,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  131 => 52,  119 => 31,  108 => 36,  102 => 32,  71 => 19,  67 => 22,  63 => 20,  59 => 11,  47 => 9,  38 => 6,  94 => 28,  89 => 31,  85 => 21,  79 => 18,  75 => 17,  68 => 14,  56 => 9,  50 => 10,  29 => 3,  87 => 25,  72 => 19,  55 => 15,  21 => 1,  26 => 6,  98 => 31,  93 => 28,  88 => 6,  78 => 21,  46 => 10,  27 => 4,  40 => 8,  44 => 8,  35 => 5,  31 => 5,  43 => 8,  41 => 18,  28 => 3,  201 => 87,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 39,  123 => 47,  121 => 46,  117 => 44,  115 => 43,  105 => 38,  101 => 26,  91 => 27,  69 => 25,  66 => 18,  62 => 17,  49 => 10,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 75,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 63,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 30,  109 => 29,  106 => 28,  103 => 27,  99 => 31,  95 => 28,  92 => 23,  86 => 28,  82 => 22,  80 => 25,  73 => 20,  64 => 13,  60 => 13,  57 => 11,  54 => 14,  51 => 10,  48 => 9,  45 => 9,  42 => 7,  39 => 9,  36 => 5,  33 => 4,  30 => 8,);
    }
}
