<?php

/* form.html */
class __TwigTemplate_b34ef3fd90ef5675b023499290f13873bfdee663e8cbaebf632278905e28c514 extends Twig_Template
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
        // line 13
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
    <table>
    ";
        // line 5
        if (isset($context["fields"])) { $_fields_ = $context["fields"]; } else { $_fields_ = null; }
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($_fields_);
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 6
            echo "        <tr>
           <td><font ";
            // line 7
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            if ($this->getAttribute($_field_, "error", array())) {
                echo "color=\"gold\"";
            }
            echo ">";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "label", array()), "html", null, true);
            echo "</font></td><td><input type = \"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "type", array()), "html", null, true);
            echo "\" name=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "name", array()), "html", null, true);
            echo "\" value=\"";
            if (isset($context["field"])) { $_field_ = $context["field"]; } else { $_field_ = null; }
            echo twig_escape_filter($this->env, $this->getAttribute($_field_, "value", array()), "html", null, true);
            echo "\"/></td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "    </table>
</form>
";
    }

    public function getTemplateName()
    {
        return "form.html";
    }

    public function getDebugInfo()
    {
        return array (  77 => 10,  53 => 7,  50 => 6,  45 => 5,  36 => 3,  30 => 2,  27 => 1,  22 => 13,  20 => 1,);
    }
}
