<?php

/* template.html */
class __TwigTemplate_c913701e375bca38a42eaaf64a05fb82a9a8f811f6b7108e2ae091283e862d6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
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
    <header>
        <div class=\"welcome\">
            <h1><span>";
        // line 13
        echo twig_escape_filter($this->env, ($context["header"] ?? null), "html", null, true);
        echo "</span></h1>
        </div>
        <nav>
            <div class=\"topnav\">
                <a href=\"main\">На главную</a>
            </div>
        </nav>
    </header>
    <main>
        <div class=\"content\">
            ";
        // line 23
        $this->displayBlock('content', $context, $blocks);
        // line 24
        echo "        </div>
    </main>
</body>
</html>";
    }

    // line 23
    public function block_content($context, array $blocks = [])
    {
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  52 => 24,  50 => 23,  37 => 13,  28 => 7,  20 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "template.html", "D:\\Server\\data\\htdocs\\templates\\template.html");
    }
}
