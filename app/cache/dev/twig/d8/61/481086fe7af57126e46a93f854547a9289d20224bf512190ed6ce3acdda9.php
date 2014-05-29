<?php

/* AdminBundle:Storitve:storitve.html.twig */
class __TwigTemplate_d861481086fe7af57126e46a93f854547a9289d20224bf512190ed6ce3acdda9 extends Twig_Template
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
        echo "<br>
<h2>Storitve</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 8
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
        // line 20
        $context["counter"] = 0;
        // line 21
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 22
            echo "    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 23
            echo "    <tr>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 250)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 250) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" data-lightbox=\"storitve-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
            <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("storitve/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" alt=\"slika\" style=\"width: 50px; height: 50px;\"/>
          </a>
      </td>
      <td><a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_storitve", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"Uredi storitve\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_storitve", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani storitve\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Storitve:storitve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  102 => 34,  97 => 32,  90 => 29,  83 => 28,  78 => 26,  74 => 25,  70 => 24,  67 => 23,  64 => 22,  59 => 21,  57 => 20,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
