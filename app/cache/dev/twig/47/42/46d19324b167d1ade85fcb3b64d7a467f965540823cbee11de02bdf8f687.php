<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_474246d19324b167d1ade85fcb3b64d7a467f965540823cbee11de02bdf8f687 extends Twig_Template
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
        echo "Admin";
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<h2 class=\"title\" style=\"margin-top: 150px;\">Urejanje, spreminjanje spletne strani</h2>

<section>
    <div class=\"border admin-panel\">
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("_admin_news");
        echo "\">Urejanje Novic</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_admin_shop");
        echo "\">Urejanje Trgovine in izdelkov</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("_admin_images");
        echo "\">Urejanje Galerije slik</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("_admin_storitve");
        echo "\">Urejanje Storitev</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("_admin_text");
        echo "\">Urejanje Naslovnice</a>
        </div>
        <div class=\"admin-panel-category\">
            <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("_admin_inquiry");
        echo "\">Urejanje Povpraševanj</a>
        </div>
    </div>
</section>
<br />
<section style=\"padding-bottom: 50px;\">
    <h3>
        <span>Števec obiskov:</span>
    </h3>
    
</section>
";
    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 26,  69 => 23,  63 => 20,  57 => 17,  51 => 14,  45 => 11,  38 => 6,  35 => 5,  29 => 3,);
    }
}
