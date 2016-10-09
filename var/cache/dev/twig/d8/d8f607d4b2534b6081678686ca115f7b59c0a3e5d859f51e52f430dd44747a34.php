<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_9b4a59ff71b83e8636cfdbe27ad607c228f7cf4512e88e74e40292b78c75bc60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c9057b7ad1a41e063d6998eb8b0492002faa5710a6fe26983af465e332d6bda = $this->env->getExtension("native_profiler");
        $__internal_4c9057b7ad1a41e063d6998eb8b0492002faa5710a6fe26983af465e332d6bda->enter($__internal_4c9057b7ad1a41e063d6998eb8b0492002faa5710a6fe26983af465e332d6bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c9057b7ad1a41e063d6998eb8b0492002faa5710a6fe26983af465e332d6bda->leave($__internal_4c9057b7ad1a41e063d6998eb8b0492002faa5710a6fe26983af465e332d6bda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5bcedaf29ad017725acb16462dc92c5edeb6628186123a117b3eb7d2abc8eaa0 = $this->env->getExtension("native_profiler");
        $__internal_5bcedaf29ad017725acb16462dc92c5edeb6628186123a117b3eb7d2abc8eaa0->enter($__internal_5bcedaf29ad017725acb16462dc92c5edeb6628186123a117b3eb7d2abc8eaa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5bcedaf29ad017725acb16462dc92c5edeb6628186123a117b3eb7d2abc8eaa0->leave($__internal_5bcedaf29ad017725acb16462dc92c5edeb6628186123a117b3eb7d2abc8eaa0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_aefa2ef599bf238f494fc3900a7ee8736197b6d31cf6ed3d4df7dd732e2abd55 = $this->env->getExtension("native_profiler");
        $__internal_aefa2ef599bf238f494fc3900a7ee8736197b6d31cf6ed3d4df7dd732e2abd55->enter($__internal_aefa2ef599bf238f494fc3900a7ee8736197b6d31cf6ed3d4df7dd732e2abd55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_aefa2ef599bf238f494fc3900a7ee8736197b6d31cf6ed3d4df7dd732e2abd55->leave($__internal_aefa2ef599bf238f494fc3900a7ee8736197b6d31cf6ed3d4df7dd732e2abd55_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_46108b1974d26c8afa91da4a1d1b8cc2c4087f529697cbcfe482613425e42477 = $this->env->getExtension("native_profiler");
        $__internal_46108b1974d26c8afa91da4a1d1b8cc2c4087f529697cbcfe482613425e42477->enter($__internal_46108b1974d26c8afa91da4a1d1b8cc2c4087f529697cbcfe482613425e42477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_46108b1974d26c8afa91da4a1d1b8cc2c4087f529697cbcfe482613425e42477->leave($__internal_46108b1974d26c8afa91da4a1d1b8cc2c4087f529697cbcfe482613425e42477_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
