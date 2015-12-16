<?php

/* uniMarcaBundle::layout.html.twig */
class __TwigTemplate_dd5e26cb9786badd9685e48bc60f20b3b82a4cbfd5c7941598f0cc04d1ae4862 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'cuerpo' => array($this, 'block_cuerpo'),
            'menuSuperior' => array($this, 'block_menuSuperior'),
            'central' => array($this, 'block_central'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 5
        echo "    
    
 <div id=\"menuSuperior\">
      ";
        // line 8
        $this->displayBlock('menuSuperior', $context, $blocks);
        // line 11
        echo "  </div>
        
 <div id=\"central\">
      ";
        // line 14
        $this->displayBlock('central', $context, $blocks);
        // line 17
        echo "  </div>


";
    }

    // line 8
    public function block_menuSuperior($context, array $blocks = array())
    {
        // line 9
        echo "          
      ";
    }

    // line 14
    public function block_central($context, array $blocks = array())
    {
        // line 15
        echo "     central
      ";
    }

    public function getTemplateName()
    {
        return "uniMarcaBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 15,  62 => 14,  57 => 9,  54 => 8,  47 => 17,  45 => 14,  40 => 11,  38 => 8,  33 => 5,  30 => 4,  88 => 32,  81 => 27,  69 => 21,  63 => 18,  56 => 14,  52 => 13,  46 => 12,  43 => 11,  39 => 10,  31 => 4,  28 => 3,);
    }
}
