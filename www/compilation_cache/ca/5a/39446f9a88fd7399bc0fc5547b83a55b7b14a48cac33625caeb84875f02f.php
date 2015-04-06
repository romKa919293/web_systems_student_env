<?php

/* form.html */
class __TwigTemplate_ca5a39446f9a88fd7399bc0fc5547b83a55b7b14a48cac33625caeb84875f02f extends Twig_Template
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
        // line 9
        echo "
";
    }

    // line 1
    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "<br><f1>";
        if (isset($context["handle"])) { $_handle_ = $context["handle"]; } else { $_handle_ = null; }
        echo twig_escape_filter($this->env, $_handle_, "html", null, true);
        echo "</f1><br>
<form method = \"";
        // line 3
        if (isset($context["method"])) { $_method_ = $context["method"]; } else { $_method_ = null; }
        echo twig_escape_filter($this->env, $_method_, "html", null, true);
        echo "\" action=\"";
        if (isset($context["action"])) { $_action_ = $context["action"]; } else { $_action_ = null; }
        echo twig_escape_filter($this->env, $_action_, "html", null, true);
        echo "\">
    ";
        // line 4
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fields_);
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 5
            echo "        <br><font ";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if ($this->getAttribute($_field_, "error", array())) {
                echo "color=\"red\"";
            }
            echo ">";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label", array()), "html", null, true);
            echo "</font><br><input type = \"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type", array()), "html", null, true);
            echo "\" name=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "name", array()), "html", null, true);
            echo "\" value=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "value", array()), "html", null, true);
            echo "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "</form>
";
    }

    public function getTemplateName()
    {
        return "form.html";
    }

    public function getDebugInfo()
    {
        return array (  73 => 7,  49 => 5,  44 => 4,  36 => 3,  30 => 2,  27 => 1,  22 => 9,  20 => 1,);
    }
}
