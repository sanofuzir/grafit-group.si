<?php

/* StaticBundle:Default:index.html.twig */
class __TwigTemplate_900dcb59f188aa4096a755e901f3116b2d6116143b58cb47a3743720bac187c0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("StaticBundle::layout.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "StaticBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("Domov", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div class=\"center\">
\t<h1 style=\"text-align: center;\">Naslovnica</h1>
\t<div class=\"index-item\">Novice</div>
\t<div class=\"index-item\" style=\"float: right;\">Aktualno</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  29 => 3,);
    }
}
