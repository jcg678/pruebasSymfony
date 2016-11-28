<?php

/* base.html.twig */
class __TwigTemplate_a2a8833150a7187bf6256fa3573a44629dc9010e6bca664dff61b6564766dc93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2367517cdf17aa358988b18aaf366ef5fdd24669bc570624c7a9f20d9d38cf4a = $this->env->getExtension("native_profiler");
        $__internal_2367517cdf17aa358988b18aaf366ef5fdd24669bc570624c7a9f20d9d38cf4a->enter($__internal_2367517cdf17aa358988b18aaf366ef5fdd24669bc570624c7a9f20d9d38cf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_2367517cdf17aa358988b18aaf366ef5fdd24669bc570624c7a9f20d9d38cf4a->leave($__internal_2367517cdf17aa358988b18aaf366ef5fdd24669bc570624c7a9f20d9d38cf4a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_17fad8e141e29f91aba240fa3e3b5a49bd57765e46b570cf0e2bc6e5f8cfd420 = $this->env->getExtension("native_profiler");
        $__internal_17fad8e141e29f91aba240fa3e3b5a49bd57765e46b570cf0e2bc6e5f8cfd420->enter($__internal_17fad8e141e29f91aba240fa3e3b5a49bd57765e46b570cf0e2bc6e5f8cfd420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_17fad8e141e29f91aba240fa3e3b5a49bd57765e46b570cf0e2bc6e5f8cfd420->leave($__internal_17fad8e141e29f91aba240fa3e3b5a49bd57765e46b570cf0e2bc6e5f8cfd420_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d1843b0ab9dba1a6dfab4504228df9f3a1428635994c8ea327b1b5c6b432eb24 = $this->env->getExtension("native_profiler");
        $__internal_d1843b0ab9dba1a6dfab4504228df9f3a1428635994c8ea327b1b5c6b432eb24->enter($__internal_d1843b0ab9dba1a6dfab4504228df9f3a1428635994c8ea327b1b5c6b432eb24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d1843b0ab9dba1a6dfab4504228df9f3a1428635994c8ea327b1b5c6b432eb24->leave($__internal_d1843b0ab9dba1a6dfab4504228df9f3a1428635994c8ea327b1b5c6b432eb24_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_10de006b585fa0c78b5b9b41758b2179657d725d4e5a1b5f565c68fecdedd618 = $this->env->getExtension("native_profiler");
        $__internal_10de006b585fa0c78b5b9b41758b2179657d725d4e5a1b5f565c68fecdedd618->enter($__internal_10de006b585fa0c78b5b9b41758b2179657d725d4e5a1b5f565c68fecdedd618_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_10de006b585fa0c78b5b9b41758b2179657d725d4e5a1b5f565c68fecdedd618->leave($__internal_10de006b585fa0c78b5b9b41758b2179657d725d4e5a1b5f565c68fecdedd618_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f9ca459cfd8775a0812676aa12cbe7459dd11352e6f84e41152841e6d4a84140 = $this->env->getExtension("native_profiler");
        $__internal_f9ca459cfd8775a0812676aa12cbe7459dd11352e6f84e41152841e6d4a84140->enter($__internal_f9ca459cfd8775a0812676aa12cbe7459dd11352e6f84e41152841e6d4a84140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f9ca459cfd8775a0812676aa12cbe7459dd11352e6f84e41152841e6d4a84140->leave($__internal_f9ca459cfd8775a0812676aa12cbe7459dd11352e6f84e41152841e6d4a84140_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
