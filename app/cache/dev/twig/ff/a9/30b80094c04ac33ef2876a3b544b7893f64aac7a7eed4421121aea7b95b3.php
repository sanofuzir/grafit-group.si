<?php

/* AdminBundle:News:news.html.twig */
class __TwigTemplate_ffa930b80094c04ac33ef2876a3b544b7893f64aac7a7eed4421121aea7b95b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AdminBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            '__internal_cf89285db399f1eac091b793bdce1f5e948b1eb8dc26bb38a8f524c714f0849d' => array($this, 'block___internal_cf89285db399f1eac091b793bdce1f5e948b1eb8dc26bb38a8f524c714f0849d'),
            '__internal_f3f8d3b3d18f50dd66ebb8bdb67778452fee9c5450a34d2b7631c9d52dfe2896' => array($this, 'block___internal_f3f8d3b3d18f50dd66ebb8bdb67778452fee9c5450a34d2b7631c9d52dfe2896'),
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
        echo "Novice";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"admin-title\">Novice</h2>
<a class=\"btn btn-small pull-right\" href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("_admin_add_news");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Novico</a>
<table class=\"table table-condensed table-hover border mytable\">
  <thead>
    <tr>
      <th>Id</th>
      <th style=\"text-align: center;\">Naslov</th>
      <th style=\"text-align: center;\">Text</th>
      <th style=\"text-align: center;\">Slika</th>
      <th style=\"text-align: center;\">Aktualna</th>
      <th style=\"text-align: center;\">Datum vnosa</th>
      <th>&nbsp;</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 21
        $context["counter"] = 0;
        // line 22
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "    ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 24
            echo "    <tr>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 50) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
            echo "</td>
      <td>
          <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" data-lightbox=\"Novice-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
            <img src=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("news/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" alt=\"slika\" style=\"width: 50px; height: 50px;\"/>
          </a>
      </td>
      <td style=\"text-align: center;\">
        ";
            // line 34
            if (($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actual") == "yes")) {
                // line 35
                echo "          <span style=\"color: red;\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_cf89285db399f1eac091b793bdce1f5e948b1eb8dc26bb38a8f524c714f0849d", $context, $blocks)), "html", null, true);
                echo "</span>
        ";
            } else {
                // line 37
                echo "          <span style=\"color: blue;\">";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_f3f8d3b3d18f50dd66ebb8bdb67778452fee9c5450a34d2b7631c9d52dfe2896", $context, $blocks)), "html", null, true);
                echo "</span>
        ";
            }
            // line 39
            echo "      </td>
      <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
      <td><a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_news", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"Uredi novico\">
              <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
              <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_news", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani novico\" data-confirmation=\"Ali si prepričan?\">
                  <i class=\"icon-trash\">Izbriši</i></a></td>
    </tr>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "  </tbody>
</table>

";
    }

    // line 35
    public function block___internal_cf89285db399f1eac091b793bdce1f5e948b1eb8dc26bb38a8f524c714f0849d($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actual"), "html", null, true);
    }

    // line 37
    public function block___internal_f3f8d3b3d18f50dd66ebb8bdb67778452fee9c5450a34d2b7631c9d52dfe2896($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "actual"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "AdminBundle:News:news.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 37,  165 => 35,  158 => 47,  140 => 43,  135 => 41,  131 => 40,  128 => 39,  122 => 37,  116 => 35,  114 => 34,  106 => 30,  99 => 29,  94 => 27,  90 => 26,  86 => 25,  83 => 24,  80 => 23,  62 => 22,  60 => 21,  43 => 7,  40 => 6,  37 => 5,  31 => 3,);
    }
}
