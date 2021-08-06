<?php

/* page.html */
class __TwigTemplate_bcc80b882cb60bce731e01e1c9334e91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title")) {
            // line 5
            echo "\t\t<h1>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_title");
            echo "</h1>
\t";
        }
        // line 7
        echo "\t
    ";
        // line 8
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "page.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
