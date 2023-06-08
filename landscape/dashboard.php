<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="description" content="The design system sponsored by Cisco Brand">
    <meta name="image" content="http://cisco-ui.cisco.com/assets/img/uikit-1200x630%402x.png">
    <meta itemprop="name" content="Cisco UI Kit">
    <meta itemprop="description" content="The design system sponsored by Cisco Brand">
    <meta itemprop="image" content="http://cisco-ui.cisco.com">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:title" content="Cisco UI Kit">
    <meta name="twitter:description" content="The design system sponsored by Cisco Brand">
    <meta property="og:title" content="Cisco UI Kit">
    <meta property="og:description" content="The design system sponsored by Cisco Brand">
    <meta property="og:image" content="https://cisco-ui.cisco.com/assets/img/uikit-1200x630%402x.png">
    <meta property="og:url" content="http://cisco-ui.cisco.com">
    <meta property="og:site_name" content="Cisco UI Kit">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="196x196">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="96x96">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="32x32">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="16x16">
    <link rel="icon" type="image/png" href="img/favicon.png" sizes="128x128">
    <link rel="icon" href="img/favicon.png" type="image/x-icon">
    <meta name="application-name" content="Cisco UI Kit">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="img/mstile.png">
    <meta name="msapplication-square70x70logo" content="img/mstile.png">
    <meta name="msapplication-square150x150logo" content="img/mstile.png">
    <meta name="msapplication-wide310x150logo" content="img/mstile.png">
    <meta name="msapplication-square310x310logo" content="img/mstile.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>MISE &middot; Dashboard</title>

    <link rel="stylesheet" href="css/cui-standard.min.css">

    <script src="https://code.jquery.com/jquery-3.0.0.min.js"
        integrity="sha256-JmvOoLtYsmqlsWxa7mDSLMwa6dZ9rrIdtrrVYRnDRH0=" crossorigin="anonymous"></script>
    <script src="public/js/styleguide.js"></script>

</head>

<body class="cui">
    <nav class="header" id="styleguideheader" role="navigation">
        <div class="container-fluid">
            <div class="header-panels">
                <div class="header-panel hidden-md-down">
                    <a class="header__logo" href="https://www.cisco.com" target="_blank">
                        <span class="icon-cisco"></span>
                    </a>
                    <h1 class="header__title">
                        <span>MISE Portal</span>
                    </h1>
                </div>
                <div class="header-panel header-panel--center base-margin-left base-margin-right hidden-lg-up">
                    <a class="header__logo" href="http://www.cisco.com" target="_blank">
                        <span class="icon-cisco"></span>
                    </a>
                </div>
                <div class="header-panel header-panel--right hidden-md-down">
                    <a href="index.html" class="header-item" title="MISE Home"><span class="icon-home"></span></a>
                    <div id="themeSwitcher" class="dropdown dropdown--left dropdown--offset-qtr header-item">
                        <a class="header-toolbar__link">Theme</a>
                        <div class="dropdown__menu">
                            <a id="theme-default" class="selected">Default</a>
                            <a id="theme-dark">Dark</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="content content--alt">
        <div class="container-fluid">
            <div class="row">

                <!-- Sidebar -->
                <nav class="col-lg-3 col-xl-2 sidebar hidden-md-down dbl-margin-top" role="navigation">
                    <div class="base-margin">

                        <div class="text-bold"></div>
                        <div></div>

                    </div>
                    <ul id="rootSidebar">
                        <li class="sidebar__item selected">
                            <a tabindex="0" title="Dashboard" href="dashboard.php">
                                <span class="icon-home"></span>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar__drawer">
                            <a tabindex="0" title="ISE Cubes">
                                <span class="icon-configurations"></span>
                                <span>ISE Cubes</span>
                            </a>
                            <ul>
                                <li class="sidebar__item"><a href="provision.php">Add New</a></li>
                                <li class="sidebar__item"><a href="deployments.php">View Existing</a></li>
                            </ul>
                        </li>
                        <li class="sidebar__drawer">
                            <a tabindex="0" title="Policy Elements">
                                <span class="icon-features"></span>
                                <span>Policy Elements</span>
                            </a>
                            <ul>
                                <li class="sidebar__item"><a href="ap.php">Allowed Protocols</a></li>
                                <li class="sidebar__item"><a href="authz.php">Authorization Profiles</a></li>
                                <li class="sidebar__item"><a href="dacl.php">Downloadbale ACL</a></li>
                                <li class="sidebar__item"><a href="nsd.php">NAD Groups</a></li>
                                <li class="sidebar__item"><a href="sgt.php">Security Group TAG (SGT)</a></li>
                            </ul>
                        </li>
                        <li class="sidebar__drawer">
                            <a tabindex="0" title="Policies">
                                <span class="icon-contact-card"></span>
                                <span>Policies</span>
                            </a>
                            <ul>
                                <li class="sidebar__item"><a href="policyset.php">Policy Sets</a></li>
                                <li class="sidebar__item"><a href="authentication.php">Authentication Rules</a></li>
                                <li class="sidebar__item"><a href="authorization.php">Authorization Rules</a></li>
                            </ul>
                        </li>
                        <li class="sidebar__drawer">
                            <a tabindex="0" title="Deployments">
                                <span class="icon-sign-in"></span>
                                <span>Deployments</span>
                            </a>
                            <ul>
                                <li class="sidebar__item"><a href="checkout.php">Deploy</a></li>
                                <li class="sidebar__item"><a href="deploy-history.php">Deployment History</a></li>
                            </ul>
                        </li>
                        <li class="sidebar__drawer">
                            <a tabindex="0" title="Troubleshoot and Logging">
                                <span class="icon-analysis"></span>
                                <span>TShoot and Logs</span>
                            </a>
                            <ul>
                                <li class="sidebar__item"><a href="ap-log.php">Allow Protocols</a></li>
                                <li class="sidebar__item"><a href="dacl-log.php">DACL</a></li>
                                <li class="sidebar__item"><a href="authz-log.php">Authorization</a></li>
                                <li class="sidebar__item"><a href="sgt-log.php">SGT</a></li>
                                <li class="sidebar__item"><a href="nad-log.php">NAD</a></li>
                                <li class="sidebar__item"><a href="policyset-log.php">Policy</a></li>
                                <li class="sidebar__item"><a href="apache2.php">Apache Error</a></li>
                                <li class="sidebar__item"><a href="apache.php">Apache Access</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>

                <div class="col-12 col-lg-9 col-xl-10">
                    <div class="section">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="panel panel--loose panel--raised base-margin-bottom">
                                    <h2 class="subtitle">Top ISE Cube logs</h2>
                                    <hr>
                                    <div class="section">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="gauge-container">
                                                    <div class="gauge gauge--primary gauge--large" data-percentage="12">
                                                        <div class="gauge__circle">
                                                            <div class="mask full">
                                                                <div class="fill"></div>
                                                            </div>
                                                            <div class="mask half">
                                                                <div class="fill"></div>
                                                                <div class="fill fix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="gauge__inset">
                                                            <div class="gauge__percentage">12<sup
                                                                    class="text-size-20">%</sup></div>
                                                        </div>
                                                    </div>
                                                    <div class="gauge__label">% increase in gross margins</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="gauge-container">
                                                    <div class="gauge gauge--primary gauge--large" data-percentage="42">
                                                        <div class="gauge__circle">
                                                            <div class="mask full">
                                                                <div class="fill"></div>
                                                            </div>
                                                            <div class="mask half">
                                                                <div class="fill"></div>
                                                                <div class="fill fix"></div>
                                                            </div>
                                                        </div>
                                                        <div class="gauge__inset">
                                                            <div class="gauge__percentage">42<sup
                                                                    class="text-size-20">%</sup></div>
                                                        </div>
                                                    </div>
                                                    <div class="gauge__label">% sales decrease past 30 days</div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="base-margin-bottom">
                                                    <div class="subheader no-margin">Capital Expenditures</div>
                                                    <div class="display-3">$429k</div>
                                                    <div class="text-small">total ytd</div>
                                                </div>
                                                <div class="progressbar progressbar--warning dbl-padding-bottom"
                                                    data-percentage="48">
                                                    <div class="progressbar__fill"></div>
                                                    <div class="progressbar__label">
                                                        <b>$75k</b>
                                                        <span class="text-right">monthly sales goal</span>
                                                    </div>
                                                </div>
                                                <div class="progressbar progressbar--warning" data-percentage="23">
                                                    <div class="progressbar__fill"></div>
                                                    <div class="progressbar__label">
                                                        <b>100</b>
                                                        <span class="text-right">monthly subscriber goal</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="panel panel--loose panel--raised">
                                    <h2 class="subtitle">Policy Element Count</h2>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="panel panel--bordered hover-emboss--large base-margin-bottom">
                                                <div class="half-margin-top">
                                                    <div class="text-size-16">Allowed Protocols</div>
                                                    <div class="progressbar progressbar--success" data-percentage="88">
                                                        <div class="progressbar__fill"></div>
                                                        <div class="progressbar__label">
                                                            <span class="text-right">AP no</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel--bordered hover-emboss--large base-margin-bottom">
                                                <div class="half-margin-top">
                                                    <div class="text-size-16">DACLs</div>
                                                    <div class="progressbar progressbar--warning" data-percentage="43">
                                                        <div class="progressbar__fill"></div>
                                                        <div class="progressbar__label">
                                                            <span class="text-right">DACL no</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel--bordered hover-emboss--large base-margin-bottom">
                                                <div class="half-margin-top">
                                                    <div class="text-size-16">Authorization Profiles</div>
                                                    <div class="progressbar progressbar--danger" data-percentage="11">
                                                        <div class="progressbar__fill"></div>
                                                        <div class="progressbar__label">
                                                            <span class="text-right">authz no</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel--bordered hover-emboss--large base-margin-bottom">
                                                <div class="half-margin-top">
                                                    <div class="text-size-16">SGT</div>
                                                    <div class="progressbar progressbar--success" data-percentage="76">
                                                        <div class="progressbar__fill"></div>
                                                        <div class="progressbar__label">
                                                            <span class="text-right">sgt no</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel--bordered hover-emboss--large base-margin-bottom">
                                                <div class="flex-fluid half-margin-top">
                                                    <div class="text-size-16">NAD Groups</div>
                                                    <div class="progressbar progressbar--danger" data-percentage="3">
                                                        <div class="progressbar__fill"></div>
                                                        <div class="progressbar__label">
                                                            <span class="text-right">nad no</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel--bordered hover-emboss--large base-margin-bottom">
                                                <div class="half-margin-top">
                                                    <div class="text-size-16">Policy Sets</div>
                                                    <div class="progressbar progressbar--success" data-percentage="100">
                                                        <div class="progressbar__fill"></div>
                                                        <div class="progressbar__label">
                                                            <span class="text-right">policy no</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel--bordered hover-emboss--large base-margin-bottom">
                                                <div class="half-margin-top">
                                                    <div class="text-size-16">Authentication Rules</div>
                                                    <div class="progressbar progressbar--success" data-percentage="100">
                                                        <div class="progressbar__fill"></div>
                                                        <div class="progressbar__label">
                                                            <span class="text-right">authC no</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="panel panel--bordered hover-emboss--large base-margin-bottom">
                                                <div class="half-margin-top">
                                                    <div class="text-size-16">Authorization Rules</div>
                                                    <div class="progressbar progressbar--success" data-percentage="100">
                                                        <div class="progressbar__fill"></div>
                                                        <div class="progressbar__label">
                                                            <span class="text-right">authZ no</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="panel panel--loose panel--raised">
                                    <h2 class="subtitle">Your Daily Feed</h2>
                                    <hr>
                                    <div class="timeline">
                                        <div class="timeline__item">
                                            <div class="timeline__icon">
                                            </div>
                                            <div class="timeline__content">
                                                <div class="flex-center-vertical">
                                                    <div class="text-bold flex-fluid">Monica Smith</div>
                                                    <div class="text-small text-right">12m ago</div>
                                                </div>
                                                <div>Posted a new blog about next month's CSP conference in Boston.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="timeline__item">
                                            <div class="timeline__icon">
                                            </div>
                                            <div class="timeline__content">
                                                <div class="flex-center-vertical">
                                                    <div class="text-bold flex-fluid">Alicia Johnson</div>
                                                    <div class="text-small text-right">2h ago</div>
                                                </div>
                                                <div>Sent you a message.</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                    pulvinar accumsan leo, quis egestas quam luctus non. Aenean
                                                    vulputate ullamcorper velit eu hendrerit.</p>
                                            </div>
                                        </div>
                                        <div class="timeline__item">
                                            <div class="timeline__icon">
                                            </div>
                                            <div class="timeline__content">
                                                <div class="flex-center-vertical">
                                                    <div class="text-bold flex-fluid">You</div>
                                                    <div class="text-small text-right">8h ago</div>
                                                </div>
                                                <div>Sent a message to <a href="javascript:;">Alicia Johnson</a>.</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                    pulvinar accumsan leo, quis egestas quam luctus non. Aenean
                                                    vulputate ullamcorper velit eu hendrerit.</p>
                                            </div>
                                        </div>
                                        <div class="timeline__item">
                                            <div class="timeline__icon">
                                            </div>
                                            <div class="timeline__content">
                                                <div class="flex-center-vertical">
                                                    <div class="text-bold flex-fluid">You</div>
                                                    <div class="text-small text-right">2d ago</div>
                                                </div>
                                                <div>Sent a message to <a href="javascript:;">Monica Smith</a>.</div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse
                                                    pulvinar accumsan leo, quis egestas quam luctus non. Aenean
                                                    vulputate ullamcorper velit eu hendrerit.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="footer__links">
                    <ul class="list list--inline">
                        <li><a href="http://www.cisco.com/cisco/web/siteassets/contacts/index.html"
                                target="_blank">Contacts</a></li>
                        <li><a href="https://secure.opinionlab.com/ccc01/o.asp?id=jBjOhqOJ" target="_blank">Feedback</a>
                        </li>
                        <li><a href="https://www.cisco.com/c/en/us/about/help.html" target="_blank">Help</a></li>
                        <li><a href="http://www.cisco.com/c/en/us/about/sitemap.html" target="_blank">Site Map</a></li>
                        <li><a href="https://www.cisco.com/c/en/us/about/legal/terms-conditions.html"
                                target="_blank">Terms & Conditions</a></li>
                        </li>
                        <li><a href="https://www.cisco.com/c/en/us/about/legal/privacy-full.html"
                                target="_blank">Privacy Statement</a></li>
                        <li><a href="https://www.cisco.com/c/en/us/about/legal/privacy-full.html#cookies"
                                target="_blank">Cookie Policy</a></li>
                        <li><a href="https://www.cisco.com/c/en/us/about/legal/trademarks.html"
                                target="_blank">Trademarks</a></li>
                    </ul>
                </div>
            </footer>
        </div>
    </div>
</body>

</html>