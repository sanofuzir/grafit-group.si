<?php

/* AdminBundle:Text:editText.html.twig */
class __TwigTemplate_b53b31a93aab23967b6714fe6631c1023dbc268efd74dbb020464f83c8bd0314 extends Twig_Template
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
        echo "Texti";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"admin-title\">Dodajanje in urejanje textov na naslovni strani</h2>
<form class=\"border text_form\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "id")) ? ($this->env->getExtension('routing')->getPath("_admin_edit_text", array("id" => $this->getAttribute((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")), "id")))) : ($this->env->getExtension('routing')->getPath("_admin_add_text"))), "html", null, true);
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
        return "AdminBundle:Text:editText.html.twig";
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
