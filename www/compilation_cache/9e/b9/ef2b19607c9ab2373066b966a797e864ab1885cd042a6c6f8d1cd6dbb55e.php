<?php

/* field.html */
class __TwigTemplate_9eb9ef2b19607c9ab2373066b966a797e864ab1885cd042a6c6f8d1cd6dbb55e extends Twig_Template
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
