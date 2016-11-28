<?php

/* base.html.twig */
class __TwigTemplate_4c4c46fc0dfb56686e72c71256773d7543a5a5f83ed4587d0f05ef9bdc8030e8 extends Twig_Template
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
        $__internal_20686bcfa3a396c35a4574e6bb84ac216cd8633675aee8bca70011b92c228985 = $this->env->getExtension("native_profiler");
        $__internal_20686bcfa3a396c35a4574e6bb84ac216cd8633675aee8bca70011b92c228985->enter($__internal_20686bcfa3a396c35a4574e6bb84ac216cd8633675aee8bca70011b92c228985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_20686bcfa3a396c35a4574e6bb84ac216cd8633675aee8bca70011b92c228985->leave($__internal_20686bcfa3a396c35a4574e6bb84ac216cd8633675aee8bca70011b92c228985_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4f0cd3f5413fa2c4b902eb14b604328af58d5b917d2a023a5be846e65b5674f9 = $this->env->getExtension("native_profiler");
        $__internal_4f0cd3f5413fa2c4b902eb14b604328af58d5b917d2a023a5be846e65b5674f9->enter($__internal_4f0cd3f5413fa2c4b902eb14b604328af58d5b917d2a023a5be846e65b5674f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_4f0cd3f5413fa2c4b902eb14b604328af58d5b917d2a023a5be846e65b5674f9->leave($__internal_4f0cd3f5413fa2c4b902eb14b604328af58d5b917d2a023a5be846e65b5674f9_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e630bf4211716eb93f42762eed54338f0c3761d36737c83e7b0d86b26509e4fb = $this->env->getExtension("native_profiler");
        $__internal_e630bf4211716eb93f42762eed54338f0c3761d36737c83e7b0d86b26509e4fb->enter($__internal_e630bf4211716eb93f42762eed54338f0c3761d36737c83e7b0d86b26509e4fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e630bf4211716eb93f42762eed54338f0c3761d36737c83e7b0d86b26509e4fb->leave($__internal_e630bf4211716eb93f42762eed54338f0c3761d36737c83e7b0d86b26509e4fb_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8e107c44352a8e2371f2e6648fbfdc6b142dd2cb4d45153158961fb02c6fa16d = $this->env->getExtension("native_profiler");
        $__internal_8e107c44352a8e2371f2e6648fbfdc6b142dd2cb4d45153158961fb02c6fa16d->enter($__internal_8e107c44352a8e2371f2e6648fbfdc6b142dd2cb4d45153158961fb02c6fa16d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_8e107c44352a8e2371f2e6648fbfdc6b142dd2cb4d45153158961fb02c6fa16d->leave($__internal_8e107c44352a8e2371f2e6648fbfdc6b142dd2cb4d45153158961fb02c6fa16d_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cd4b4d02a1cd7a16617ad55c69f9a1703ea7833bf1724b816bf6430f166746a4 = $this->env->getExtension("native_profiler");
        $__internal_cd4b4d02a1cd7a16617ad55c69f9a1703ea7833bf1724b816bf6430f166746a4->enter($__internal_cd4b4d02a1cd7a16617ad55c69f9a1703ea7833bf1724b816bf6430f166746a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_cd4b4d02a1cd7a16617ad55c69f9a1703ea7833bf1724b816bf6430f166746a4->leave($__internal_cd4b4d02a1cd7a16617ad55c69f9a1703ea7833bf1724b816bf6430f166746a4_prof);

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
