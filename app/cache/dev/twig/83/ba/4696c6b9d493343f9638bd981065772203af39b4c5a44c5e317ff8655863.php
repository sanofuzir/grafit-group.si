<?php

/* AdminBundle:Inquiry:inquiry.html.twig */
class __TwigTemplate_83ba4696c6b9d493343f9638bd981065772203af39b4c5a44c5e317ff8655863 extends Twig_Template
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
        return "AdminBundle:Inquiry:inquiry.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 43,  118 => 39,  113 => 37,  109 => 36,  103 => 35,  99 => 34,  95 => 33,  91 => 32,  87 => 31,  83 => 30,  80 => 29,  77 => 28,  74 => 27,  71 => 26,  68 => 25,  65 => 24,  62 => 23,  59 => 22,  55 => 21,  38 => 6,  35 => 5,  29 => 3,);
    }
}
