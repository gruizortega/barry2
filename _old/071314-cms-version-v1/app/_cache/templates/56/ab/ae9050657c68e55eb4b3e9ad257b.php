<?php

/* questions.html */
class __TwigTemplate_56abae9050657c68e55eb4b3e9ad257b extends Twig_Template
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
        echo "
\t";
        // line 8
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question1_question")) {
            echo "<a href='#1'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question1_question"));
            echo "</a><br />";
        }
        // line 9
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question2_question")) {
            echo "<a href='#2'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question2_question"));
            echo "</a><br />";
        }
        // line 10
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question3_question")) {
            echo "<a href='#3'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question3_question"));
            echo "</a><br />";
        }
        // line 11
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question4_question")) {
            echo "<a href='#4'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question4_question"));
            echo "</a><br />";
        }
        // line 12
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question5_question")) {
            echo "<a href='#5'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question5_question"));
            echo "</a><br />";
        }
        // line 13
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question6_question")) {
            echo "<a href='#6'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question6_question"));
            echo "</a><br />";
        }
        // line 14
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question7_question")) {
            echo "<a href='#7'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question7_question"));
            echo "</a><br />";
        }
        // line 15
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question8_question")) {
            echo "<a href='#8'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question8_question"));
            echo "</a><br />";
        }
        // line 16
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question9_question")) {
            echo "<a href='#9'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question9_question"));
            echo "</a><br />";
        }
        // line 17
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question10_question")) {
            echo "<a href='#10'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question10_question"));
            echo "</a><br />";
        }
        // line 18
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question11_question")) {
            echo "<a href='#11'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question11_question"));
            echo "</a><br />";
        }
        // line 19
        echo "\t";
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question12_question")) {
            echo "<a href='#12'>";
            echo strip_tags($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question12_question"));
            echo "</a><br />";
        }
        // line 20
        echo "
\t<a name='1'></a>

\t<hr />

\t";
        // line 25
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question1_question")) {
            // line 26
            echo "\t\t<strong>";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question1_question");
            echo "</strong>
\t\t";
            // line 27
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question1_answer");
            echo "
\t";
        }
        // line 29
        echo "
\t";
        // line 30
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question2_question")) {
            // line 31
            echo "\t\t<a name='2'></a>
\t\t<hr />
\t\t<strong>";
            // line 33
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question2_question");
            echo "</strong>
\t\t";
            // line 34
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question2_answer");
            echo "
\t";
        }
        // line 36
        echo "
\t";
        // line 37
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question3_question")) {
            // line 38
            echo "\t\t<a name='3'></a>
\t\t<hr />
\t\t<strong>";
            // line 40
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question3_question");
            echo "</strong>
\t\t";
            // line 41
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question3_answer");
            echo "
\t";
        }
        // line 43
        echo "
\t";
        // line 44
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question4_question")) {
            // line 45
            echo "\t\t<a name='4'></a>
\t\t<hr />
\t\t<strong>";
            // line 47
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question4_question");
            echo "</strong>
\t\t";
            // line 48
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question4_answer");
            echo "
\t";
        }
        // line 50
        echo "
\t";
        // line 51
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question5_question")) {
            // line 52
            echo "\t\t<a name='5'></a>
\t\t<hr />
\t\t<strong>";
            // line 54
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question5_question");
            echo "</strong>
\t\t";
            // line 55
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question5_answer");
            echo "
\t";
        }
        // line 57
        echo "
\t";
        // line 58
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question6_question")) {
            // line 59
            echo "\t\t<a name='6'></a>
\t\t<hr />
\t\t<strong>";
            // line 61
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question6_question");
            echo "</strong>
\t\t";
            // line 62
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question6_answer");
            echo "
\t";
        }
        // line 64
        echo "
\t";
        // line 65
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question7_question")) {
            // line 66
            echo "\t\t<a name='7'></a>
\t\t<hr />
\t\t<strong>";
            // line 68
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question7_question");
            echo "</strong>
\t\t";
            // line 69
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question7_answer");
            echo "
\t";
        }
        // line 71
        echo "
\t";
        // line 72
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question8_question")) {
            // line 73
            echo "\t\t<a name='8'></a>
\t\t<hr />
\t\t<strong>";
            // line 75
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question8_question");
            echo "</strong>
\t\t";
            // line 76
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question8_answer");
            echo "
\t";
        }
        // line 78
        echo "
\t";
        // line 79
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question9_question")) {
            // line 80
            echo "\t\t<a name='9'></a>
\t\t<hr />
\t\t<strong>";
            // line 82
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question9_question");
            echo "</strong>
\t\t";
            // line 83
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question9_answer");
            echo "
\t";
        }
        // line 85
        echo "
\t";
        // line 86
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question10_question")) {
            // line 87
            echo "\t\t<a name='10'></a>
\t\t<hr />
\t\t<strong>";
            // line 89
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question10_question");
            echo "</strong>
\t\t";
            // line 90
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question10_answer");
            echo "
\t";
        }
        // line 92
        echo "
\t";
        // line 93
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question11_question")) {
            // line 94
            echo "\t\t<a name='11'></a>
\t\t<hr />
\t\t<strong>";
            // line 96
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question11_question");
            echo "</strong>
\t\t";
            // line 97
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question11_answer");
            echo "
\t";
        }
        // line 99
        echo "
\t";
        // line 100
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question12_question")) {
            // line 101
            echo "\t\t<a name='12'></a>
\t\t<hr />
\t\t<strong>";
            // line 103
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question12_question");
            echo "</strong>
\t\t";
            // line 104
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "question12_answer");
            echo "
\t";
        }
        // line 106
        echo "
    ";
        // line 107
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content");
        echo "
";
    }

    public function getTemplateName()
    {
        return "questions.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
