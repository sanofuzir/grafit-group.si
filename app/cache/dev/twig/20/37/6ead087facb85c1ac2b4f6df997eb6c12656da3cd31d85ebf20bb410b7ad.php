<?php

/* AdminBundle:Shop:editArticle.html.twig */
class __TwigTemplate_20376ead087facb85c1ac2b4f6df997eb6c12656da3cd31d85ebf20bb410b7ad extends Twig_Template
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
        echo "Izdelki";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"admin-title\">Dodajanje in urejanje Artiklov</h2>
<form class=\"border artice_form\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id")) ? ($this->env->getExtension('routing')->getPath("_admin_edit_article", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id")))) : ($this->env->getExtension('routing')->getPath("_admin_add_article"))), "html", null, true);
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
        return "AdminBundle:Shop:editArticle.html.twig";
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
