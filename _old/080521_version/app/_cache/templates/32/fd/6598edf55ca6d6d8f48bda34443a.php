<?php

/* partials/sitemap/sitemap-url.xml */
class __TwigTemplate_32fd6598edf55ca6d6d8f48bda34443a extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        return false;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<url>
    <loc>http://";
        // line 2
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "base_url");
        echo "/";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "permalink");
        echo "</loc>
    <lastmod>";
        // line 3
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "updated");
        echo "</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
</url>";
    }

    public function getTemplateName()
    {
        return "partials/sitemap/sitemap-url.xml";
    }

    public function isTraitable()
    {
        return false;
    }
}
