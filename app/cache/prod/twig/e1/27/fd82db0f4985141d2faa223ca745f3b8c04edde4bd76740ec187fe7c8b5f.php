<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_e127fd82db0f4985141d2faa223ca745f3b8c04edde4bd76740ec187fe7c8b5f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
";
    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "username"), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : null)), "FOSUserBundle");
        echo "
";
    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  20 => 1,  124 => 51,  81 => 24,  84 => 29,  165 => 35,  114 => 48,  90 => 29,  118 => 41,  34 => 6,  76 => 24,  65 => 21,  113 => 37,  83 => 24,  198 => 76,  191 => 74,  185 => 72,  175 => 69,  153 => 59,  148 => 58,  139 => 55,  134 => 54,  129 => 53,  104 => 29,  97 => 43,  74 => 27,  77 => 25,  58 => 18,  53 => 11,  127 => 52,  70 => 14,  281 => 91,  276 => 8,  270 => 105,  234 => 98,  226 => 92,  223 => 91,  206 => 88,  197 => 86,  184 => 78,  160 => 69,  152 => 66,  100 => 27,  96 => 31,  37 => 5,  52 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 80,  177 => 70,  169 => 60,  140 => 56,  132 => 51,  128 => 39,  111 => 37,  107 => 37,  61 => 19,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 103,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 90,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 54,  131 => 53,  119 => 31,  108 => 36,  102 => 44,  71 => 22,  67 => 20,  63 => 21,  59 => 22,  47 => 8,  38 => 8,  94 => 27,  89 => 28,  85 => 22,  79 => 27,  75 => 23,  68 => 22,  56 => 18,  50 => 10,  29 => 5,  87 => 25,  72 => 21,  55 => 18,  21 => 1,  26 => 12,  98 => 35,  93 => 29,  88 => 6,  78 => 21,  46 => 14,  27 => 4,  40 => 11,  44 => 9,  35 => 5,  31 => 6,  43 => 7,  41 => 9,  28 => 5,  201 => 87,  196 => 90,  183 => 82,  171 => 37,  166 => 62,  163 => 63,  158 => 61,  156 => 66,  151 => 63,  142 => 41,  138 => 54,  136 => 60,  123 => 43,  121 => 50,  117 => 44,  115 => 43,  105 => 38,  101 => 33,  91 => 27,  69 => 23,  66 => 22,  62 => 19,  49 => 11,  24 => 7,  32 => 4,  25 => 3,  22 => 2,  19 => 2,  209 => 82,  203 => 77,  199 => 67,  193 => 73,  189 => 73,  187 => 84,  182 => 71,  176 => 75,  173 => 67,  168 => 72,  164 => 59,  162 => 59,  154 => 60,  149 => 51,  147 => 57,  144 => 63,  141 => 56,  133 => 47,  130 => 41,  125 => 44,  122 => 37,  116 => 49,  112 => 30,  109 => 36,  106 => 30,  103 => 28,  99 => 34,  95 => 33,  92 => 23,  86 => 25,  82 => 27,  80 => 25,  73 => 24,  64 => 20,  60 => 22,  57 => 19,  54 => 16,  51 => 14,  48 => 12,  45 => 11,  42 => 9,  39 => 7,  36 => 7,  33 => 4,  30 => 2,);
    }
}
