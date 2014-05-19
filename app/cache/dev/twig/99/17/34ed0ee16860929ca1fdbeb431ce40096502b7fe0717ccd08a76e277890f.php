<?php

/* StaticBundle:Default:contact.html.twig */
class __TwigTemplate_991734ed0ee16860929ca1fdbeb431ce40096502b7fe0717ccd08a76e277890f extends Twig_Template
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
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kontakt", array(), "messages");
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"center\">
\t<h1 style=\"text-align: center;\">";
        // line 7
        echo $this->env->getExtension('translator')->getTranslator()->trans("Kontakt", array(), "messages");
        echo "</h1>

\t<div class=\"border\" style=\"width: 40%; padding: 30px;\">
\t\t<p><b>";
        // line 10
        echo $this->env->getExtension('translator')->getTranslator()->trans("Naslov", array(), "messages");
        echo ":</b><br />Stantetova ulica 7<br /> 3320 Velenje</p>
\t    <p><b>";
        // line 11
        echo $this->env->getExtension('translator')->getTranslator()->trans("Telefon", array(), "messages");
        echo ":</b>&nbsp;+386 70 66 57 18</p>
\t    <p class=\"email\"><b>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("Elektronska pošta", array(), "messages");
        echo ":</b>&nbsp;<a href=\"mailto:info@grafit-group.com\">info@grafit-group.com</a></p>
\t</div>
\t<div class=\"map\">
\t\t<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2753.436770860347!2d15.1219798!3d46.360721700000006!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476566d255dc6411%3A0xa367690178ac4541!2sStantetova+ulica+7!5e0!3m2!1sen!2s!4v1399295655669\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\"></iframe>
\t</div>
\t<div class=\"inquiry\">
\t    <h2>Povpraševanje</h2>
\t    <form class=\"order_form\" action=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("_add_inquiry");
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " novalidate>
        ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <!--div class=\"form-actions\"-->
            <br /><br />
            <input type=\"submit\" name=\"naroči\" value=\"Pošlji\" class=\"btn btn-primary mysubmit\">
        <!--/div-->
\t\t</form>
\t</div>
</div>

";
    }

    public function getTemplateName()
    {
        return "StaticBundle:Default:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  65 => 19,  55 => 12,  51 => 11,  47 => 10,  41 => 7,  38 => 6,  35 => 5,  29 => 3,);
    }
}
