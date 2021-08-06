<?php

/* contact.html */
class __TwigTemplate_3520607fa5a133394932aab2dcbca468 extends Twig_Template
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
        return "default.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_extrahead($context, array $blocks = array())
    {
        // line 4
        echo "\t<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script> 
\t
\t<script>
\t\tfunction initializemap() {
\t\tvar theStyle = [
\t\t\t{
\t\t\t featureType: \"all\",
\t\t\telementType: \"all\",
\t\t\tstylers: [
\t\t\t\t{ saturation: -25 },
\t\t\t\t{ lightness: 9 },
\t\t\t\t{ hue: \"#323E49\" }
\t\t\t]
\t\t\t},{
\t\t\tfeatureType: \"road\",
\t\t\telementType: \"all\",
\t\t\tstylers: [
\t\t\t\t{ hue: \"#A05D1A\" }
\t\t\t]
\t\t\t}
\t\t];
\t\t
\t\tvar myLatlng = new google.maps.LatLng(34.039734,-118.438733);
\t\tvar myOptions = {
\t\tzoom: 15,
\t\tcenter: myLatlng,
\t\tpanControl: false,
\t\tzoomControl: true,
\t\tmapTypeControl: false,
\t\tscaleControl: false,
\t\tstreetViewControl: false,
\t\toverviewMapControl: false,
\t\tscrollwheel: false,
\t\t\tmapTypeControlOptions: {
\t\t\t\t mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'barry']
\t\t\t}
\t\t}
\t\tvar map = new google.maps.Map(document.getElementById(\"map_canvas\"), myOptions);
\t\t
\t\tvar marker = new google.maps.Marker({
\t\t\tposition: myLatlng, 
\t\t\tmap: map,
\t\t\ttitle:\"Law Office of Barry M. Wolf\"
\t\t});
\t\t
\t\t
\t\tvar styledMapOptions = {
\t\t\tname: \"Barry\"
\t\t}
\t\t
\t\tvar barryMapType = new google.maps.StyledMapType(
\t\t\ttheStyle, styledMapOptions);
\t\t
\t\tmap.mapTypes.set('barry', barryMapType);
\t\tmap.setMapTypeId('barry');
\t\t
\t\t}

\t\twindow.onload = function(){
\t\t\tinitializemap();
\t\t};
\t
\t</script>
";
    }

    // line 70
    public function block_content($context, array $blocks = array())
    {
        // line 71
        echo "\t\t<div id='map_canvas' class='map-canvas'>
\t\t</div>
\t
\t\t<div class='map-info'>  
\t\t\t<h3>Contact Information</h3>
\t\t\t
\t\t\t<div class='map-float'>
\t\t\t\t<p>Barry M. Wolf<br/>
\t\t\t\tLaw Office of Barry M. Wolf<br />
\t\t\t\t11150 Olympic Boulevard, Suite 1050<br />
\t\t\t\tLos Angeles, CA 90064<br /><br /></p>
\t\t\t</div>
\t\t\t<div class='map-float'>
\t\t\t\t<p>
\t\t\t\t\t<em>Phone:</em> ";
        // line 85
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "phone");
        echo "<br />
\t\t\t\t\t<em>Fax:</em> ";
        // line 86
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "fax");
        echo "<br />
\t\t\t\t\t<em>Email:</em> <a href=\"mailto:";
        // line 87
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "email");
        echo "\">";
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "email");
        echo "</a>
\t\t\t\t</p>
\t\t\t</div>
\t\t</div>
\t\t
\t\t<span class='clearfix'></span>
";
    }

    public function getTemplateName()
    {
        return "contact.html";
    }

    public function isTraitable()
    {
        return false;
    }
}
