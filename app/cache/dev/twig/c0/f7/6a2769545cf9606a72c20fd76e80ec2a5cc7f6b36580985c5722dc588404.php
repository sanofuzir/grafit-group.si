<?php

/* AdminBundle:Shop:Categorys.html.twig */
class __TwigTemplate_c0f76a2769545cf9606a72c20fd76e80ec2a5cc7f6b36580985c5722dc588404 extends Twig_Template
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
        echo "Kategorije";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"admin-title\">Izdelki</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_admin_add_article");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Kategorijo</a>
<table class=\"table table-condensed table-hover border mytable\">
  <thead>
    <tr>
      <th>Id</th>
      <th style=\"text-align: center;\">Kategorija</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 17
        $context["counter"] = 0;
        // line 18
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 19
            echo "    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 20
            echo "    <tr>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_category", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"Uredi kategorijo\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_category", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani Kategorijo\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a>
          </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Shop:Categorys.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 29,  165 => 35,  114 => 34,  90 => 26,  118 => 39,  153 => 59,  126 => 51,  77 => 28,  195 => 84,  58 => 21,  34 => 6,  137 => 40,  110 => 30,  100 => 36,  76 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  167 => 63,  124 => 51,  81 => 26,  65 => 23,  127 => 35,  70 => 17,  289 => 96,  284 => 8,  242 => 103,  234 => 97,  231 => 96,  225 => 95,  205 => 91,  192 => 83,  184 => 78,  160 => 69,  152 => 66,  113 => 37,  104 => 28,  97 => 25,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 70,  169 => 60,  140 => 43,  132 => 51,  128 => 39,  107 => 29,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 42,  135 => 41,  119 => 35,  102 => 34,  71 => 22,  67 => 21,  63 => 21,  59 => 22,  38 => 6,  94 => 27,  89 => 28,  85 => 22,  75 => 23,  68 => 24,  56 => 18,  87 => 31,  21 => 1,  26 => 6,  93 => 26,  88 => 30,  78 => 21,  46 => 11,  27 => 4,  44 => 9,  31 => 3,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 37,  166 => 71,  163 => 62,  158 => 47,  156 => 66,  151 => 63,  142 => 55,  138 => 54,  136 => 60,  121 => 41,  117 => 44,  105 => 38,  91 => 30,  62 => 22,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 27,  72 => 23,  69 => 23,  47 => 8,  40 => 6,  37 => 5,  22 => 2,  246 => 108,  157 => 56,  145 => 46,  139 => 45,  131 => 40,  123 => 50,  120 => 49,  115 => 48,  111 => 37,  108 => 41,  101 => 33,  98 => 33,  96 => 31,  83 => 24,  74 => 27,  66 => 22,  55 => 21,  52 => 14,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 92,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 65,  164 => 62,  162 => 57,  154 => 60,  149 => 58,  147 => 58,  144 => 63,  141 => 48,  133 => 55,  130 => 52,  125 => 49,  122 => 37,  116 => 35,  112 => 48,  109 => 36,  106 => 35,  103 => 35,  99 => 29,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 19,  54 => 17,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
