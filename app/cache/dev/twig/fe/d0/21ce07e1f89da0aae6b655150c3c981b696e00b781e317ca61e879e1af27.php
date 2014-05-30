<?php

/* AdminBundle:Image:gallery.html.twig */
class __TwigTemplate_fed021ce07e1f89da0aae6b655150c3c981b696e00b781e317ca61e879e1af27 extends Twig_Template
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
        echo "Galerija";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"shop\" style=\"width: 40%;\">
  <h2 class=\"admin-title\">Albumi</h2>
  <a class=\"btn btn-small pull-right\" href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_admin_add_album");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Album</a>
  <table class=\"table table-condensed table-hover border mytable\">
    <thead>
      <tr>
        <th>Id</th>
        <th style=\"text-align: center;\">Ime</th>
        <th style=\"text-align: center;\">Slika</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 19
        $context["counter"] = 0;
        // line 20
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["albums"]) ? $context["albums"] : $this->getContext($context, "albums")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 21
            echo "      ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 22
            echo "      <tr>
        <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "name"), "html", null, true);
            echo "</td>
        <td>
            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("album/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" data-lightbox=\"album-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
              <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("album/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" alt=\"slika\" style=\"width: 50px; height: 50px;\"/>
            </a>
        </td>
        <td><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_album", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"Uredi album\">
                <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
                <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_album", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani album\" data-confirmation=\"Ali si prepričan?\">
                    <i class=\"icon-trash\">Izbriši</i></a></td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
  </table>
</div>
<div class=\"shop\">
  <h2>Slike</h2>
  <a class=\"btn btn-small pull-right\" href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("_admin_add_image");
        echo "\"><i class=\"icon-plus\"></i> Dodaj Sliko</a>
  <table class=\"table table-condensed table-hover border mytable\">
    <thead>
      <tr>
        <th>Id</th>
        <th style=\"text-align: center;\">Opis</th>
        <th style=\"text-align: center;\">Slika</th>
        <th style=\"text-align: center;\">Album</th>
        <th style=\"text-align: center;\">Datum vnosa</th>
        <th>&nbsp;</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 54
        $context["counter"] = 0;
        // line 55
        echo "      ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 56
            echo "      ";
            $context["counter"] = ((isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")) + 1);
            // line 57
            echo "      <tr>
        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"), "html", null, true);
            echo "</td>
        <td>";
            // line 59
            echo twig_escape_filter($this->env, (((twig_length_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description")) > 50)) ? ((twig_slice($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"), 0, 50) . "...")) : ($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "description"))), "html", null, true);
            echo "</td>
        <td>
            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("galery/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" data-lightbox=\"Novice-";
            echo twig_escape_filter($this->env, (isset($context["counter"]) ? $context["counter"] : $this->getContext($context, "counter")), "html", null, true);
            echo "\">
              <img src=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("galery/"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "path"), "html", null, true);
            echo "\" alt=\"slika\" style=\"width: 50px; height: 50px;\"/>
            </a>
        </td>
        ";
            // line 65
            if ((!twig_test_empty($this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "album")))) {
                // line 66
                echo "          ";
                $context["album"] = $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "album");
                // line 67
                echo "          <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["album"]) ? $context["album"] : $this->getContext($context, "album")), "name"), "html", null, true);
                echo "</td>
        ";
            }
            // line 69
            echo "        <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "created"), "d.m.Y H:i:s"), "html", null, true);
            echo "</td>
        <td><a href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_edit_image", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" title=\"Uredi sliko\">
                <i class=\"icon-edit\"></i>Uredi</a>&nbsp;
                <a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_admin_delete_image", array("id" => $this->getAttribute((isset($context["item"]) ? $context["item"] : $this->getContext($context, "item")), "id"))), "html", null, true);
            echo "\" class=\"confirmation\" title=\"Odstrani sliko\" data-confirmation=\"Ali si prepričan?\">
                    <i class=\"icon-trash\">Izbriši</i></a></td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 76
        echo "    </tbody>
  </table>
</div>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Image:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 76,  187 => 72,  182 => 70,  177 => 69,  171 => 67,  168 => 66,  166 => 65,  159 => 62,  152 => 61,  147 => 59,  143 => 58,  140 => 57,  137 => 56,  132 => 55,  130 => 54,  114 => 41,  107 => 36,  97 => 32,  92 => 30,  85 => 27,  78 => 26,  73 => 24,  69 => 23,  66 => 22,  63 => 21,  58 => 20,  56 => 19,  42 => 8,  38 => 6,  35 => 5,  29 => 3,);
    }
}
