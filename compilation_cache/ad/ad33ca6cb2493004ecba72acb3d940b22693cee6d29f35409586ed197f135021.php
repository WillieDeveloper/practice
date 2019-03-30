<?php

/* templateMsg.html */
class __TwigTemplate_51e72b4ded54fd9ccdbb790e042a8b162ac10576350b5369346e82c1bc3edf1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 7
        echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        echo "</title>
    <link rel=\"stylesheet\" href=\"../css/main.css\">
</head>
<body class=\"wrapper\">
    <main>
        <div class=\"message\">
            <p class=\"msg_text\">";
        // line 13
        echo twig_escape_filter($this->env, ($context["data"] ?? null), "html", null, true);
        echo "</p>
        </div>
    </main>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "templateMsg.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 13,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "templateMsg.html", "D:\\Server\\data\\htdocs\\templates\\templateMsg.html");
    }
}
