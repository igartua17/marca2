<?php

/* ::base.html.twig */
class __TwigTemplate_ed57bee59306bc19967de582c0c6ba43c4511017b96b2ee852cea557721db9e4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'cabecera' => array($this, 'block_cabecera'),
            'cuerpo' => array($this, 'block_cuerpo'),
            'pie' => array($this, 'block_pie'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
    </head>
    <body>
        
 <div id=\"titulo\">
      ";
        // line 15
        $this->displayBlock('cabecera', $context, $blocks);
        // line 18
        echo "  </div>
        
 <div id=\"cuerpo\">
      ";
        // line 21
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 24
        echo "  </div>
        
 <div id=\"pie\">
      ";
        // line 27
        $this->displayBlock('pie', $context, $blocks);
        // line 30
        echo "  </div>

       
        ";
        // line 33
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Marca";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "               <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/unimarca/css/marca.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 15
    public function block_cabecera($context, array $blocks = array())
    {
        // line 16
        echo "          
      ";
    }

    // line 21
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 22
        echo "    
      ";
    }

    // line 27
    public function block_pie($context, array $blocks = array())
    {
        // line 28
        echo "    By Haritz
      ";
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 33,  111 => 28,  108 => 27,  103 => 22,  100 => 21,  95 => 16,  92 => 15,  85 => 7,  82 => 6,  76 => 5,  70 => 34,  68 => 33,  61 => 27,  49 => 18,  37 => 9,  35 => 6,  25 => 1,  65 => 15,  62 => 14,  57 => 9,  54 => 21,  47 => 15,  45 => 14,  40 => 11,  38 => 8,  33 => 5,  30 => 4,  88 => 32,  81 => 27,  69 => 21,  63 => 30,  56 => 24,  52 => 13,  46 => 12,  43 => 11,  39 => 10,  31 => 5,  28 => 3,);
    }
}
