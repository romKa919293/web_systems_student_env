<?php

/* field.html */
class __TwigTemplate_ee234f7d9bf0fdee9bb2b0b78d53fc758221748040082230e1baefbc1e02965e extends Twig_Template
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
        echo "<br><font ";
        if (isset($context["error"])) { $_error_ = $context["error"]; } else { $_error_ = null; }
        if ($_error_) {
            echo "color=\"red\"";
        }
        echo ">";
        if (isset($context["label"])) { $_label_ = $context["label"]; } else { $_label_ = null; }
        echo twig_escape_filter($this->env, $_label_, "html", null, true);
        echo "</font><br><input type = \"";
        if (isset($context["type"])) { $_type_ = $context["type"]; } else { $_type_ = null; }
        echo twig_escape_filter($this->env, $_type_, "html", null, true);
        echo "\" name=\"";
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
