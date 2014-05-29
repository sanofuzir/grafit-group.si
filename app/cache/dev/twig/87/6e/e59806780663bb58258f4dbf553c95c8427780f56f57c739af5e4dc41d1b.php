<?php

/* AdminBundle:Storitve:editStoritve.html.twig */
class __TwigTemplate_876ee59806780663bb58258f4dbf553c95c8427780f56f57c739af5e4dc41d1b extends Twig_Template
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
        echo "<h2 style=\"margin-top: 50px;\" class=\"title\">Dodajanje in urejanje storitev</h2>
<form class=\"border storitve_form\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "id")) ? ($this->env->getExtension('routing')->getPath("_admin_edit_storitve", array("id" => $this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "id")))) : ($this->env->getExtension('routing')->getPath("_admin_add_storitve"))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
    ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    <!--div class=\"form-actions\"-->
        <br />
        <input type=\"submit\" name=\"save\" value=\"Shrani\" class=\"btn btn-primary\">
    <!--/div-->
</form>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Storitve:editStoritve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
