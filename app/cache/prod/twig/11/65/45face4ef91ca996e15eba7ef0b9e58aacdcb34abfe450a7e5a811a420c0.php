<?php

/* AdminBundle:Storitve:Storitve.html.twig */
class __TwigTemplate_116545face4ef91ca996e15eba7ef0b9e58aacdcb34abfe450a7e5a811a420c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Storitve";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2>Storitve</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_admin_add_storitve");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Storitev</a>
<table class=\"table table-condensed table-hover border mytable\">
  <thead>
    <tr>
      <th>Id</th>
      <th style=\"text-align: center;\">Ime</th>
      <th style=\"text-align: center;\">Text</th>
      <th style=\"text-align: center;\">Slika</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 19
        $context["counter"] = 0;
        // line 20
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : null) + 1);
            // line 22
            echo "    <tr>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "name"), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text")) > 250)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"), 0, 250) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "text"))), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path"), "html", null, true);
            echo "\" data-lightbox=\"storitve-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : null), "html", null, true);
            echo "\">
            <img src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "path"), "html", null, true);
            echo "\" alt=\"slika\" style=\"width: 50px; height: 50px;\"/>
          </a>
      </td>
      <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_storitve", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"))), "html", null, true);
            echo "\" title=\"Uredi storitve\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_storitve", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani storitve\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Storitve:Storitve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 51,  81 => 26,  84 => 29,  165 => 35,  114 => 48,  90 => 26,  118 => 41,  34 => 6,  76 => 24,  65 => 21,  113 => 37,  83 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  153 => 59,  148 => 58,  139 => 55,  134 => 54,  129 => 53,  104 => 29,  97 => 43,  74 => 27,  77 => 25,  58 => 20,  53 => 11,  127 => 52,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 36,  96 => 31,  37 => 5,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 80,  177 => 70,  169 => 60,  140 => 56,  132 => 51,  128 => 39,  111 => 37,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 54,  131 => 53,  119 => 31,  108 => 36,  102 => 44,  71 => 22,  67 => 21,  63 => 21,  59 => 22,  47 => 8,  38 => 6,  94 => 27,  89 => 28,  85 => 22,  79 => 27,  75 => 23,  68 => 22,  56 => 19,  50 => 11,  29 => 3,  87 => 31,  72 => 23,  55 => 18,  21 => 1,  26 => 6,  98 => 35,  93 => 26,  88 => 6,  78 => 21,  46 => 11,  27 => 4,  40 => 6,  44 => 9,  35 => 5,  31 => 3,  43 => 7,  41 => 7,  28 => 3,  201 => 87,  196 => 90,  183 => 82,  171 => 37,  166 => 62,  163 => 63,  158 => 61,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 60,  123 => 43,  121 => 50,  117 => 44,  115 => 43,  105 => 38,  101 => 33,  91 => 30,  69 => 23,  66 => 22,  62 => 20,  49 => 11,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 67,  168 => 72,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 57,  144 => 63,  141 => 56,  133 => 47,  130 => 41,  125 => 44,  122 => 37,  116 => 49,  112 => 30,  109 => 36,  106 => 30,  103 => 35,  99 => 34,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 19,  54 => 17,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
