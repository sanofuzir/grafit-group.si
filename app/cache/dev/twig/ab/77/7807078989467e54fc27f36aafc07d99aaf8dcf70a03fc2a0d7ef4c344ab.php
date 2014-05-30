<?php

/* AdminBundle:Image:images.html.twig */
class __TwigTemplate_ab777807078989467e54fc27f36aafc07d99aaf8dcf70a03fc2a0d7ef4c344ab extends Twig_Template
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
        echo "Slike";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"admin-title\">Slike</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_admin_add_image");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Slike</a>
<table class=\"table table-condensed table-hover border mytable\">
  <thead>
    <tr>
      <th>Id</th>
      <th>opis</th>
      <th>Datum vnosa</th>
      <th>Slika</th>
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
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 21
            echo "    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 22
            echo "    <tr>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "description"))), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("galery/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "html", null, true);
            echo "\" data-lightbox=\"galery-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
            <img style=\"width: 50px;\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("galery/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "path"), "html", null, true);
            echo "\" alt=\"slika\" width=\"50\"/>
          </a>
      </td>
      <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_image", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\" title=\"Uredi sliko\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_image", array("id" => $this->getAttribute((isset($context["image"]) ? $context["image"] : $this->getContext($context, "image")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani sliko\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "  </tbody>
</table>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Image:images.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 37,  101 => 33,  96 => 31,  89 => 28,  82 => 27,  77 => 25,  73 => 24,  69 => 23,  66 => 22,  63 => 21,  58 => 20,  56 => 19,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
