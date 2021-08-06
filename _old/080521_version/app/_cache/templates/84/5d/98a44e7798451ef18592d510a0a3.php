<?php

/* default.html */
class __TwigTemplate_845d98a44e7798451ef18592d510a0a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'extrahead' => array($this, 'block_extrahead'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html> 

<!--[if lt IE 7]>
<html lang='en' class='ie_6 ie_lte8'></html><![endif]-->
<!--[if IE 7]>
<html lang='en' class='ie_7 ie_lte8'></html><![endif]-->
<!--[if IE 8]>
<html lang='en' class='ie_8 ie_lte8'></html><![endif]-->
<!-- [if gt IE 8] <!-->
<html lang='en'><!-- <![endif]-->


<head>

\t<meta charset='utf-8' />
\t<meta http-equiv='X-UA-Compatible' content='IE=edge' />
\t<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />

\t<meta name='description' content='Barry Wolf represents clients in civil appellate litigation. He has been practicing appellate law for over 20 years, and is certified as an appellate specialist by the California State Bar.' /> 
\t<meta name='keywords' content= 'barry, wolf, barry wolf, law, office, appellate, appeal, attorney, lawyer, california, la, los angeles' /> 
\t<meta name='google-site-verification' content='lQOasSeSdlpgSYN17l8B4R5dV0n_SdnJ1fHpIrHtvJM' />

\t<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Merriweather:400,700italic,400italic,700' rel='stylesheet' type='text/css'>
\t<link rel='stylesheet' href='";
        // line 24
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/css/screen.css' type='text/css' media='screen'>
\t<link rel='shortcut icon' href='";
        // line 25
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/images/favicon.png'></link>

\t<title>";
        // line 27
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "name");
        if ($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title")) {
            echo " &rsaquo; ";
            echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "title");
        }
        echo "</title>

\t";
        // line 29
        $this->displayBlock('extrahead', $context, $blocks);
        // line 31
        echo "
</head>




<body class='page-";
        // line 37
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "page_class");
        echo "'>

\t
\t<span class='topspacer'></span>

\t<a class='logo' href='";
        // line 42
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "'>
\t\t<img src='";
        // line 43
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/images/header-new.png' alt='Law Office of Barry M. Wolf'/>
\t</a>

\t<div class='menu js-menu'>
\t\t<div class='membrane'>
\t\t\t<a class='menu-home menuitem' href='";
        // line 48
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "'>Home</a>
\t\t\t";
        // line 49
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 50
            echo "\t\t\t\t<a class='menu-";
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "page_class");
            echo " menuitem ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                echo "last";
            }
            echo "' href='";
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
            echo "'>";
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
            echo "</a>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 52
        echo "\t\t</div>
\t</div>

\t<div class='menu fixie js-fixie-menu' style='display: none'>
\t\t<div class='membrane'>
\t\t\t<a class='menu-home menuitem' href='";
        // line 57
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "'>Home</a>
\t\t\t";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 59
            echo "\t\t\t\t<a class='menu-";
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "page_class");
            echo " menuitem ";
            if ($this->getAttribute((isset($context["loop"]) ? $context["loop"] : null), "last")) {
                echo "last";
            }
            echo "' href='";
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "url");
            echo "'>";
            echo $this->getAttribute((isset($context["child"]) ? $context["child"] : null), "title");
            echo "</a>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 61
        echo "\t\t</div>
\t</div>
\t
\t<div class='content'>
\t\t";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 68
        echo "\t</div>


\t<div class='footer'>
\t</div>


\t<script type='text/javascript' src='";
        // line 75
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/jquery-1.11.1.min.js'></script>
\t<script type='text/javascript' src='";
        // line 76
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "root_path");
        echo "/public/docs/js/fixieheader.js'></script>

\t
\t<script>
\t\tvar _gaq = _gaq || [];
\t\t_gaq.push(['_setAccount', 'UA-18771663-1']); _gaq.push(['_trackPageview']);
\t
\t\t(function() {
\t\t\tvar ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
\t\t\tga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
\t\t\tvar s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
\t\t})();
\t</script>
\t
</body>
\t
</html>";
    }

    // line 29
    public function block_extrahead($context, array $blocks = array())
    {
        // line 30
        echo "\t";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "\t\t\t<!-- content loaded in here -->
\t\t";
    }

    public function getTemplateName()
    {
        return "default.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
