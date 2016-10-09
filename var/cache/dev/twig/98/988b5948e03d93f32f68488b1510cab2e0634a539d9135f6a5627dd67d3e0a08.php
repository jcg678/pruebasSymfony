<?php

/* AppBundle:pruebas:index.html.twig */
class __TwigTemplate_cfb0c29a5fca23d34beb000ccc942072111429e661556c5b76d05286e4a03153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e618a4153e155cc5501de30f800f0482285b9da8d1e52038a6fba5121c5a58ca = $this->env->getExtension("native_profiler");
        $__internal_e618a4153e155cc5501de30f800f0482285b9da8d1e52038a6fba5121c5a58ca->enter($__internal_e618a4153e155cc5501de30f800f0482285b9da8d1e52038a6fba5121c5a58ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pruebas:index.html.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        
        $__internal_e618a4153e155cc5501de30f800f0482285b9da8d1e52038a6fba5121c5a58ca->leave($__internal_e618a4153e155cc5501de30f800f0482285b9da8d1e52038a6fba5121c5a58ca_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:pruebas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{texto}}*/
