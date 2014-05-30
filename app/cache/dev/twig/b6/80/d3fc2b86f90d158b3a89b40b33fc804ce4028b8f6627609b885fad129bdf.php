<?php

/* AdminBundle:Shop:Shop.html.twig */
class __TwigTemplate_b680d3fc2b86f90d158b3a89b40b33fc804ce4028b8f6627609b885fad129bdf extends Twig_Template
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
        echo "Trgovina";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"shop\" style=\"width: 25%;\">
  <h2 class=\"admin-title\">Kategorije</h2>
  <a class=\"btn btn-small pull-right\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_admin_add_category");
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
        // line 18
        $context["counter"] = 0;
        // line 19
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categorys"]) ? $context["categorys"] : $this->getContext($context, "categorys")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "      ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 21
            echo "      <tr>
        <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_category", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"Uredi kategorijo\">
                <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
                <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_category", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani kategorijo\" data-confirmation=\"Ali si prepričan?\">
                    <i class=\"icon-trash\">Izbriši</i></a></td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    </tbody>
  </table>
</div>
<div class=\"shop\">
  <h2>Izdelki</h2>
  <a class=\"btn btn-small pull-right\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("_admin_add_article");
        echo "\"><i class=\"icon-plus\"></i> Dodaj izdelek</a>
  <table class=\"table table-condensed table-hover border mytable\">
    <thead>
      <tr>
        <th>Id</th>
        <th style=\"text-align: center;\">Naslov</th>
        <th style=\"text-align: center;\">Text</th>
        <th style=\"text-align: center;\">Slika</th>
        <th style=\"text-align: center;\">Status</th>
        <th style=\"text-align: center;\">Kategorija</th>
        <th style=\"text-align: center;\">Datum vnosa</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 50
        $context["counter"] = 0;
        // line 51
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 52
            echo "      ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 53
            echo "      <tr>
        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
        <td>";
            // line 56
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"), 0, 50) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "text"))), "html", null, true);
            echo "</td>
        <td>
            <a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("article/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" data-lightbox=\"Novice-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
              <img src=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("article/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" alt=\"slika\" style=\"width: 50px; height: 50px;\"/>
            </a>
        </td>
        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "status"), "html", null, true);
            echo "</td>
        ";
            // line 63
            if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "category")))) {
                // line 64
                echo "          ";
                $context["category"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "category");
                // line 65
                echo "          <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name"), "html", null, true);
                echo "</td>
        ";
            }
            // line 67
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_article", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"Uredi novico\">
                <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
                <a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_article", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani novico\" data-confirmation=\"Ali si prepričan?\">
                    <i class=\"icon-trash\">Izbriši</i></a></td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "    </tbody>
  </table>
</div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Shop:Shop.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 74,  181 => 70,  176 => 68,  171 => 67,  165 => 65,  162 => 64,  160 => 63,  156 => 62,  149 => 59,  142 => 58,  137 => 56,  133 => 55,  129 => 54,  126 => 53,  123 => 52,  118 => 51,  116 => 50,  98 => 35,  91 => 30,  81 => 26,  76 => 24,  72 => 23,  68 => 22,  65 => 21,  62 => 20,  57 => 19,  55 => 18,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
