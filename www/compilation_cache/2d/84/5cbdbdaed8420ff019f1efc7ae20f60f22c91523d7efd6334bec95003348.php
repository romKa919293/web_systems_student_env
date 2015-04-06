<?php

/* field.html */
class __TwigTemplate_2d845cbdbdaed8420ff019f1efc7ae20f60f22c91523d7efd6334bec95003348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
        // line 4
        echo "
";
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<br>";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo twig_escape_filter($this->env, $_label_, "html", null, true);
        echo "<br><input type = \"text\" name=\"";
        if (isset($context["name"])) { $_name_ = $context["name"]; } else { $_name_ = null; }
        echo twig_escape_filter($this->env, $_name_, "html", null, true);
        echo "\" value=\"";
        if (isset($context["value"])) { $_value_ = $context["value"]; } else { $_value_ = null; }
        echo twig_escape_filter($this->env, $_value_, "html", null, true);
        echo "\"/>
";
    }

    public function getTemplateName()
    {
        return "field.html";
    }

    public function getDebugInfo()
    {
        return array (  30 => 2,  27 => 1,  22 => 4,  20 => 1,);
    }
}
