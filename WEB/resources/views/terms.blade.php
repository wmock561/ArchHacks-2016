<!DOCTYPE html>
<html>
<head>
    <title>StressLess</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.2/moment.js"></script>

    <!--jquery-->
    <script src="https://code.jquery.com/jquery-3.1.1.js" integrity="sha256-16cdPddA6VdVInumRGo6IbivbERE8p7CQR3HzTBuELA=" crossorigin="anonymous"></script>
    <script src="https://cdn.rawgit.com/vast-engineering/jquery-popup-overlay/1.7.13/jquery.popupoverlay.js"></script>

    <!--added from MDL-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <!-- Add to homescreen for Chrome on Android -->
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="icon" sizes="192x192" href="images/android-desktop.png">

    <!-- Add to homescreen for Safari on iOS -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    <link rel="apple-touch-icon-precomposed" href="images/ios-desktop.png">

    <!-- Tile icon for Win8 (144x144 + tile color) -->
    <meta name="msapplication-TileImage" content="images/touch/ms-touch-icon-144x144-precomposed.png">
    <meta name="msapplication-TileColor" content="#3372DF">

    <link rel="shortcut icon" href="images/favicon.png">

    <!-- SEO: If your mobile URL is different from the desktop URL, add a canonical link to the desktop page https://developers.google.com/webmasters/smartphone-sites/feature-phones -->
    <!--
    <link rel="canonical" href="http://www.example.com/">
    -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.blue-light_green.min.css">

    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" type="text/css" href="css/customStyle.css">

    <style>
        #view-source {
            position: fixed;
            display: block;
            right: 0;
            bottom: 0;
            margin-right: 40px;
            margin-bottom: 40px;
            z-index: 900;
        }
        #terms{
        	padding: 15px;
        }
    </style>
    <!--end added from MDl-->


    <!--intial chart script will need to do onclick of each a tag reference-->

</head>
<body class="mdl-demo mdl-color--grey-100 mdl-color-text--grey-700 mdl-base">
	 <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
	 	<header class="mdl-layout__header mdl-layout__header--scroll mdl-color--primary">

            <div class="mdl-layout--large-screen-only mdl-layout__header-row headerSize"></div>

            <div class="mdl-layout--large-screen-only mdl-layout__header-row">
                <div class="mdl-cell mdl-cell--6-col">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="img/Asset_5.png" alt="LOGO" id="logo" class="logo">
                    </a>
                </div>

                <div class="mdl-cell mdl-cell--5-col"></div>

                <div class="mdl-cell mdl-cell--1-col logout">
                    
                    <img class="logoutIcon" src="img/logout.png" alt="logout" />

                    <a href="{{ url('/logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout
                    </a>

                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>

            </div>

            <div class="mdl-layout--large-screen-only mdl-layout__header-row headerSize"></div>
            </header>
		<main class="mdl-layout__content">
			<section class="section--center mdl-grid mdl-grid--no-spacing" id="terms">
			<h1>DATA USE AGREEMENT</h1>
		<p>This Data Use Agreement (“Agreement”), effective as of November 5, 2016, is entered into by and between the device User and creators of StressLess. The purpose of this Agreement is to provide User with access to view and track personal data regarding another individual's experiences with panic and anxiety related attacks for use in medical tracking in accord with the HIPAA Regulations.</p>

		<p>1) Definitions: Unless otherwise specified in this Agreement, all capitalized terms used in this Agreement not otherwise defined have the meaning established for purposes of the “HIPAA Regulations” codified at Title 45 parts 160 through 164 of the United States Code of Federal Regulations, as amended from time to time.</p>

		<p>2) Preparation of the data: Covered Entity shall prepare and furnish to Recipient their provided data in accord with the HIPAA Regulations or Covered Entity shall retain Recipient as a Business Associate (pursuant to an appropriate Business Associate Agreement) and direct recipient, as its Business Associate, to prepare such data.
		NOTICE: This agreement is valid only if the Data do not include any of the following “Prohibited Identifiers”: Names; postal address information other than town, cities, states and zip codes; telephone and fax numbers; email addresses, URLs and IP addresses; social security numbers; certificate and license numbers; vehicle identification numbers; device identifiers and serial numbers; biometric identifiers (such as voice and fingerprints); and full face photographs or comparable images. UNLESS WHERE OTHERWISE SPECIFIED TO OPERATE THE APPLICATION.</p>

		<p>3) Minimum necessary data fields: In preparing the data, Covered Entity or its Business Associate shall include the data fields specified by the parties from time to time, which are the minimum necessary to accomplish the purposes set forth in Section 5 of this Agreement.</p>

		<p>4) Responsibilities of user & intended recipients: a. Use or disclose the data only as permitted by this Agreement or as required by law;
		b. Use appropriate safeguards to prevent use or disclosure of the data other than as permitted by this Agreement or required by law;
		c. Report to Covered Entity any use or disclosure of the data of which it becomes aware that is not permitted by this Agreement or required by law, including the presence of prohibited identifiers in the data;
		d. Require any of its subcontractors or agents that receive or have access to the data to agree to the same restrictions and conditions on the use and/or disclosure of the data that apply to Recipient under this Agreement; and
		e. Not use the information in the data, alone or in combination to identify or contact the individuals who are data subjects.</p>

		<p>5) Permitted Uses and Disclosures of the data: Recipient may use and/or disclose the data only for the Research described in this Agreement or as required by law and for tracking purposes as determined by a certified medical professional.</p>

		<p>6) Term and Termination: 
		a. Term. The term of this Agreement shall commence as of the Effective Date and terminate 5 years from Effective Date. Should the Recipient desire to keep the data for a longer period, a justification in writing should be made to the Covered Entity.
		b. Termination by Recipient. Recipient may terminate this agreement at any time by notifying the Covered Entity and returning or destroying the data.
		c. Termination by Covered Entity. Covered Entity may terminate this agreement at any time by providing thirty (30) days prior written notice to Recipient.
		d. For Breach. Covered Entity shall provide written notice to Recipient within ten (10) days of any determination that Recipient has breached a material term of this Agreement. Covered Entity shall afford Recipient an opportunity to cure said alleged material breach upon mutually agreeable terms. Failure to agree on mutually agreeable terms for cure within thirty (30) days shall be grounds for the immediate termination of this Agreement by Covered Entity.
		e. Effect of Termination. Sections 1, 4, 5, 6(e) and 7 of this Agreement shall survive any termination of this Agreement under subsections c or d.</p>

		<p>7) Miscellaneous: 
		a. Change in Law. The parties agree to negotiate in good faith to amend this Agreement to comport with changes in federal law that materially alter either or both parties’ obligations under this Agreement. Provided however, that if the parties are unable to agree to mutually acceptable amendment(s) by the compliance date of the change in applicable law or regulations, either Party may terminate this Agreement as provided in section 6.
		b. Construction of Terms. The terms of this Agreement shall be construed to give effect to applicable federal interpretative guidance regarding the HIPAA Regulations.
		c. No Third Party Beneficiaries. Nothing in this Agreement shall confer upon any person other than the parties and their respective successors or assigns, any rights, remedies, obligations, or liabilities whatsoever.
		d. Counterparts. This Agreement may be executed in one or more counterparts, each of which shall be deemed an original, but all of which together shall constitute one and the same instrument.</p>

		<p>AGREE / DISAGREE to the above terms and conditions</p>

		<p>Citation: This material is the work the Harvard Catalyst Data Protection subcommittee. The Data Protection subcommittee is a subcommittee of the Regulatory Knowledge & Support Program and affiliated with Harvard Catalyst | The Harvard Clinical and Translational Science Center. This work was conducted with support from Harvard Catalyst | The Harvard Clinical and Translational Science Center (National Center for Research Resources and the National Center for Advancing Translational Sciences, National Institutes of Health Award 8UL1TR000170-05 and financial contributions from Harvard University and its affiliated academic health care centers). The content is solely the responsibility of the authors and does not necessarily represent the official views of Harvard Catalyst, Harvard University and its affiliated academic health care centers, or the National Institutes of Health.</p>
		</section>
		</main>
		@include('footer')
	 </div>

</body>
</html>