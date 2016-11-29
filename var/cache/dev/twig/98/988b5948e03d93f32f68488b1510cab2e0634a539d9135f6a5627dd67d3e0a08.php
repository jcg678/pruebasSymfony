<?php

/* AppBundle:pruebas:index.html.twig */
class __TwigTemplate_cfb0c29a5fca23d34beb000ccc942072111429e661556c5b76d05286e4a03153 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "AppBundle:pruebas:index.html.twig", 1);
        $this->blocks = array(
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9442fc02bf0a492684f09f7cef03e0ab8a997d60106047dd9683dd9497492a8b = $this->env->getExtension("native_profiler");
        $__internal_9442fc02bf0a492684f09f7cef03e0ab8a997d60106047dd9683dd9497492a8b->enter($__internal_9442fc02bf0a492684f09f7cef03e0ab8a997d60106047dd9683dd9497492a8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:pruebas:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9442fc02bf0a492684f09f7cef03e0ab8a997d60106047dd9683dd9497492a8b->leave($__internal_9442fc02bf0a492684f09f7cef03e0ab8a997d60106047dd9683dd9497492a8b_prof);

    }

    // line 2
    public function block_container($context, array $blocks = array())
    {
        $__internal_d7ccba3a8f6bc1700ec2051b6da58c709e811dababdc05acdb7ada0496676925 = $this->env->getExtension("native_profiler");
        $__internal_d7ccba3a8f6bc1700ec2051b6da58c709e811dababdc05acdb7ada0496676925->enter($__internal_d7ccba3a8f6bc1700ec2051b6da58c709e811dababdc05acdb7ada0496676925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 3
        echo "    ";
        $this->displayParentBlock("container", $context, $blocks);
        echo "
    ";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["texto"]) ? $context["texto"] : $this->getContext($context, "texto")), "html", null, true);
        echo "
";
        
        $__internal_d7ccba3a8f6bc1700ec2051b6da58c709e811dababdc05acdb7ada0496676925->leave($__internal_d7ccba3a8f6bc1700ec2051b6da58c709e811dababdc05acdb7ada0496676925_prof);

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
        return array (  45 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "::layout.html.twig" %}*/
/* {% block container %}*/
/*     {{parent()}}*/
/*     {{texto}}*/
/* {% endblock %}*/
