<?php

/* AdminBundle:Inquiry:Inquiry.html.twig */
class __TwigTemplate_bfd38a59bd890880056168e82f9cc7a384eafedff9b398d3d4300df4e830605e extends Twig_Template
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
        echo "Povpraševanja";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"admin-title\">Povpraševanja</h2>
<table class=\"table table-condensed table-hover border mytable\">
  <thead>
    <tr>
      <th>Id</th>
      <th>Ime</th>
      <th>Priimek</th>
      <th>Podjetje</th>
      <th>Besedilo</th>
      <th>Status</th>
      <th>Datum vnosa</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["inquirys"]) ? $context["inquirys"] : $this->getContext($context, "inquirys")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "    ";
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status") == "Received")) {
                // line 23
                echo "      ";
                $context["color"] = "red";
                // line 24
                echo "    ";
            } elseif (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status") == "In_progress")) {
                // line 25
                echo "      ";
                $context["color"] = "blue";
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "      ";
                $context["color"] = "green";
                // line 28
                echo "    ";
            }
            // line 29
            echo "    <tr>
      <td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "surname"), "html", null, true);
            echo "</td>
      <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "company"), "html", null, true);
            echo "</td>
      <td>";
            // line 34
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 50) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
            echo "</td>
      <td style=\"color: ";
            // line 35
            echo twig_escape_filter($this->env, (isset($context["color"]) ? $context["color"] : $this->getContext($context, "color")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status"), "html", null, true);
            echo "</td>
      <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_inquiry", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"Uredi povpraševanje\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_inquiry", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani povpraševanje\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Inquiry:Inquiry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 39,  153 => 59,  126 => 51,  77 => 28,  195 => 84,  58 => 20,  34 => 6,  137 => 40,  110 => 30,  100 => 36,  76 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  167 => 63,  124 => 51,  81 => 26,  65 => 24,  127 => 35,  70 => 17,  289 => 96,  284 => 8,  242 => 103,  234 => 97,  231 => 96,  225 => 95,  205 => 91,  192 => 83,  184 => 78,  160 => 69,  152 => 66,  113 => 37,  104 => 28,  97 => 25,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 110,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 93,  177 => 70,  169 => 60,  140 => 56,  132 => 51,  128 => 43,  107 => 29,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 81,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 42,  135 => 54,  119 => 35,  102 => 27,  71 => 26,  67 => 20,  63 => 21,  59 => 22,  38 => 6,  94 => 28,  89 => 28,  85 => 22,  75 => 26,  68 => 25,  56 => 19,  87 => 31,  21 => 1,  26 => 6,  93 => 26,  88 => 30,  78 => 21,  46 => 11,  27 => 4,  44 => 9,  31 => 4,  28 => 3,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 61,  156 => 66,  151 => 63,  142 => 55,  138 => 54,  136 => 60,  121 => 46,  117 => 44,  105 => 38,  91 => 32,  62 => 23,  49 => 11,  24 => 4,  25 => 3,  19 => 1,  79 => 26,  72 => 23,  69 => 23,  47 => 8,  40 => 9,  37 => 12,  22 => 2,  246 => 108,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 50,  120 => 49,  115 => 48,  111 => 37,  108 => 41,  101 => 33,  98 => 35,  96 => 31,  83 => 30,  74 => 27,  66 => 22,  55 => 21,  52 => 14,  50 => 11,  43 => 7,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 92,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 65,  168 => 65,  164 => 62,  162 => 57,  154 => 60,  149 => 58,  147 => 58,  144 => 63,  141 => 48,  133 => 55,  130 => 52,  125 => 49,  122 => 43,  116 => 41,  112 => 48,  109 => 36,  106 => 30,  103 => 35,  99 => 34,  95 => 33,  92 => 23,  86 => 22,  82 => 27,  80 => 29,  73 => 24,  64 => 21,  60 => 12,  57 => 19,  54 => 12,  51 => 14,  48 => 9,  45 => 11,  42 => 8,  39 => 9,  36 => 5,  33 => 5,  30 => 8,);
    }
}
