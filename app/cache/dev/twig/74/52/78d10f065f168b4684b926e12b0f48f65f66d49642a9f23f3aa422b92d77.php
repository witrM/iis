<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_745278d10f065f168b4684b926e12b0f48f65f66d49642a9f23f3aa422b92d77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  83 => 30,  79 => 29,  75 => 28,  70 => 26,  50 => 15,  46 => 14,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  304 => 91,  299 => 86,  296 => 85,  291 => 49,  286 => 46,  278 => 41,  270 => 40,  264 => 34,  258 => 32,  253 => 30,  249 => 29,  245 => 28,  241 => 27,  237 => 26,  233 => 25,  229 => 23,  226 => 22,  220 => 13,  216 => 11,  213 => 10,  207 => 6,  202 => 92,  200 => 91,  195 => 88,  193 => 85,  188 => 82,  182 => 79,  178 => 78,  174 => 77,  170 => 76,  166 => 75,  162 => 74,  159 => 73,  153 => 70,  149 => 69,  146 => 68,  140 => 65,  136 => 64,  132 => 63,  128 => 62,  124 => 61,  120 => 60,  116 => 59,  112 => 58,  108 => 57,  104 => 56,  100 => 55,  96 => 54,  92 => 53,  88 => 52,  82 => 50,  80 => 49,  76 => 47,  74 => 46,  66 => 25,  62 => 24,  57 => 37,  55 => 22,  42 => 12,  28 => 1,  43 => 9,  36 => 6,  32 => 6,  48 => 11,  44 => 15,  38 => 6,  35 => 6,  29 => 4,);
    }
}
