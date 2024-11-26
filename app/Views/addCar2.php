<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>R&R Auto World | Administration</title>

    <meta name="author" content="themesflat.com">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>">

    <!-- Favicon and Touch Icons  -->
    <link rel="shortcut icon" href="<?= base_url('assets/images/logo/favicon.png') ?>">
    <link rel="apple-touch-icon-precomposed" href="<?= base_url('assets/images/logo/logo.png') ?>">

    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/map.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/nice-select.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css.map') ?>">


</head>

<body class="body counter-scroll">

<!-- preload -->


<div class="preload preload-container">
    <div class="middle">
    </div>
</div>

<div class="preload-new preload-container-new" id="divLoader">
    <div class="middle-new" id="divLoaderMiddle">
    </div>
    <div style="text-align: center;margin: 55vh 0 0 5vh;">
        <h5>Adding car, please wait...</h5>
    </div>

</div>


<!-- /preload -->

<!-- /#page -->
<div id="wrapper">
    <div id="page" class="clearfix">

        <!-- Main Header -->
        <?php include 'components/dashboard-sidebar.php' ?>
        <!-- End Main Header -->
        <div class="overlay-dashboard">
        </div>

        <div class="has-dashboard">
            <!-- Main Header -->
            <header id="header2" class="main-header">
                <!-- Header Lower -->
                <div class="header-lower">
                    <div class="themesflat-container full">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="flex justify-space align-center">
                                    <!-- Logo Box -->
                                    <div class="logo-box flex">
                                        <div class="logo">
                                            <a href="<?= base_url('admin/dashboard'); ?>">
                                                <!--<svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" id="Group_756"
                                                    data-name="Group 756" width="100" height="100"
                                                    viewBox="0 0 491.165 365.426">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_761" data-name="Rectangle 761"
                                                                width="491.165" height="365.426" fill="none" />
                                                        </clipPath>
                                                    </defs>
                                                    <rect id="Rectangle_759" data-name="Rectangle 759"
                                                        width="18.081" height="42.396"
                                                        transform="translate(255.584 42.189)" fill="#fff" />
                                                    <rect id="Rectangle_760" data-name="Rectangle 760" width="53.65"
                                                        height="201.32" transform="translate(219.767 105.759)"
                                                        fill="#c00" />
                                                    <g id="Group_755" data-name="Group 755">
                                                        <g id="Group_754" data-name="Group 754"
                                                            clip-path="url(#clip-path)">
                                                            <path id="Path_29" data-name="Path 29"
                                                                d="M419.715,184.312c46.875-13.2,65.078-54.155,65.078-92.383C484.793,42.779,455.213,0,386.038,0H0V53.7H176.938c25.155,0,38.456,13.495,41.875,30.966H273.63A100.9,100.9,0,0,0,266.954,53.7h120.9c29.581,0,42.779,18.657,42.779,40.5s-12.288,42.778-42.779,42.778H326.848v51.425h34.615l70.085,118.779h59.617Z"
                                                                fill="#fff" />
                                                            <path id="Path_30" data-name="Path 30"
                                                                d="M219.767,217.893l-.027-.046-19.5-33.535.068-.02-27.483-47.457h-.333c-1.335.088-2.7.148-4.108.148H48.695c-33.677,0-48.24,14.108-48.24,48.695V307.187h53.7V196.145c0-5.461,2.731-7.737,7.737-7.737h80.1l70.085,118.779h7.694Z"
                                                                fill="#c00" />
                                                            <path id="Path_31" data-name="Path 31"
                                                                d="M172.786,136.836l-30.8,51.572,70.085,118.779h61.558Z"
                                                                fill="#fff" />
                                                            <path id="Path_32" data-name="Path 32"
                                                                d="M22.239,365.024,12.7,348.655H6.387v16.369H1.16V324.993H14.083a17.173,17.173,0,0,1,7.668,1.55,10.807,10.807,0,0,1,4.681,4.193,12.422,12.422,0,0,1-.833,13.325,11.655,11.655,0,0,1-7.151,4.192L28.5,365.024ZM6.387,344.463h7.7q4.25,0,6.376-2.1a7.511,7.511,0,0,0,2.124-5.6,7.163,7.163,0,0,0-2.1-5.513q-2.1-1.951-6.4-1.953h-7.7Z"
                                                                fill="#fff" />
                                                            <path id="Path_33" data-name="Path 33"
                                                                d="M67.554,365.024H62.327l-21.02-31.876v31.876H36.08V324.935h5.227l21.02,31.818V324.935h5.227Z"
                                                                fill="#fff" />
                                                            <path id="Path_34" data-name="Path 34"
                                                                d="M97.534,365.024,88,348.655H81.682v16.369H76.455V324.993H89.378a17.173,17.173,0,0,1,7.668,1.55,10.807,10.807,0,0,1,4.681,4.193,11.6,11.6,0,0,1-7.984,17.517l10.051,16.771ZM81.682,344.463h7.7q4.25,0,6.376-2.1a7.511,7.511,0,0,0,2.124-5.6,7.163,7.163,0,0,0-2.1-5.513q-2.1-1.951-6.4-1.953h-7.7Z"
                                                                fill="#fff" />
                                                            <path id="Path_35" data-name="Path 35"
                                                                d="M150.372,356.122h-17.46l-3.216,8.9h-5.514l14.473-39.8h6.031l14.416,39.8h-5.514Zm-1.493-4.25-7.237-20.217L134.4,351.872Z"
                                                                fill="#fff" />
                                                            <path id="Path_36" data-name="Path 36"
                                                                d="M170.531,324.993v25.328q0,5.341,2.613,7.926a11.423,11.423,0,0,0,14.474,0q2.611-2.585,2.613-7.926V324.993h5.227v25.271a16.353,16.353,0,0,1-2.01,8.414,12.625,12.625,0,0,1-5.428,5.083,18.487,18.487,0,0,1-15.335,0,12.44,12.44,0,0,1-5.4-5.083,16.521,16.521,0,0,1-1.982-8.414V324.993Z"
                                                                fill="#fff" />
                                                            <path id="Path_37" data-name="Path 37"
                                                                d="M228.827,324.993v4.25H217.915v35.781h-5.227V329.243h-10.97v-4.25Z"
                                                                fill="#fff" />
                                                            <path id="Path_38" data-name="Path 38"
                                                                d="M243.242,362.812a19.108,19.108,0,0,1-7.265-7.294,22.127,22.127,0,0,1,0-21.078,19.122,19.122,0,0,1,7.265-7.294,21.188,21.188,0,0,1,20.39,0,18.982,18.982,0,0,1,7.236,7.266,22.455,22.455,0,0,1,0,21.135,18.973,18.973,0,0,1-7.236,7.265,21.188,21.188,0,0,1-20.39,0m17.719-3.876a13.744,13.744,0,0,0,5.284-5.572,19.294,19.294,0,0,0,0-16.8,13.87,13.87,0,0,0-5.256-5.544,15.7,15.7,0,0,0-15.162,0,13.855,13.855,0,0,0-5.255,5.544,19.285,19.285,0,0,0,0,16.8,13.735,13.735,0,0,0,5.283,5.572,15.582,15.582,0,0,0,15.106,0"
                                                                fill="#fff" />
                                                            <path id="Path_39" data-name="Path 39"
                                                                d="M346.049,324.993l-11.6,40.031h-5.859l-9.3-32.22-9.649,32.22-5.8.058-11.2-40.089h5.571l8.73,33.944,9.649-33.944h5.859l9.189,33.829,8.787-33.829Z"
                                                                fill="#fff" />
                                                            <path id="Path_40" data-name="Path 40"
                                                                d="M359.774,362.812a19.108,19.108,0,0,1-7.265-7.294,22.128,22.128,0,0,1,0-21.078,19.122,19.122,0,0,1,7.265-7.294,21.188,21.188,0,0,1,20.39,0,18.982,18.982,0,0,1,7.236,7.266,22.455,22.455,0,0,1,0,21.135,18.972,18.972,0,0,1-7.236,7.265,21.188,21.188,0,0,1-20.39,0m17.719-3.876a13.735,13.735,0,0,0,5.283-5.572,19.285,19.285,0,0,0,0-16.8,13.861,13.861,0,0,0-5.255-5.544,15.7,15.7,0,0,0-15.162,0,13.854,13.854,0,0,0-5.255,5.544,19.285,19.285,0,0,0,0,16.8,13.735,13.735,0,0,0,5.283,5.572,15.582,15.582,0,0,0,15.106,0"
                                                                fill="#fff" />
                                                            <path id="Path_41" data-name="Path 41"
                                                                d="M418.013,365.024l-9.534-16.369h-6.318v16.369h-5.227V324.993h12.923a17.173,17.173,0,0,1,7.668,1.55,10.813,10.813,0,0,1,4.681,4.193,11.605,11.605,0,0,1-7.984,17.517l10.051,16.771Zm-15.852-20.561h7.7q4.25,0,6.375-2.1a7.511,7.511,0,0,0,2.125-5.6,7.163,7.163,0,0,0-2.1-5.513q-2.1-1.951-6.4-1.953h-7.7Z"
                                                                fill="#fff" />
                                                            <path id="Path_42" data-name="Path 42"
                                                                d="M437.08,360.774h14.014v4.25H431.853V324.992h5.227Z"
                                                                fill="#fff" />
                                                            <path id="Path_43" data-name="Path 43"
                                                                d="M480.471,327.433a17.166,17.166,0,0,1,7.351,6.979,23.543,23.543,0,0,1,0,21.337,16.855,16.855,0,0,1-7.351,6.892,25.217,25.217,0,0,1-11.343,2.383H456.664V324.993h12.464a24.721,24.721,0,0,1,11.343,2.44m.488,29.177q4.077-4.105,4.078-11.515,0-7.465-4.106-11.66t-11.8-4.192h-7.237v31.473h7.237q7.754,0,11.831-4.106"
                                                                fill="#fff" />
                                                        </g>
                                                    </g>
                                                </svg>-->
                                                <svg id="Group_133" data-name="Group 133" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="250" height="auto" viewBox="0 0 742.172 248.684">
                                                    <defs>
                                                        <clipPath id="clip-path">
                                                            <rect id="Rectangle_171" data-name="Rectangle 171" width="742.172" height="248.684" fill="none" />
                                                        </clipPath>
                                                    </defs>
                                                    <g id="Group_132" data-name="Group 132" clip-path="url(#clip-path)">
                                                        <path id="Path_430" data-name="Path 430" d="M248.684,124.342A124.342,124.342,0,1,1,124.342,0,124.342,124.342,0,0,1,248.684,124.342" fill="#54080b" />
                                                        <path id="Path_431" data-name="Path 431" d="M85.859,66.105c4.62-5.953,10.033-11.173,17.347-13.482a70.772,70.772,0,0,1,14.9-2.79,151.532,151.532,0,0,1,34.061,1.037c11.955,1.63,23.211,5.672,34.235,10.352,14.841,6.3,17.133,25.47,4.324,35.23a61.485,61.485,0,0,1-17.606,8.989c-6.314,2.166-12.627,4.338-18.895,6.633-1.985.728-2.082,1.565-.694,3.127q6.675,7.512,13.389,14.987c10.968,12.2,22.15,24.222,32.867,36.642,10.285,11.918,15.96,25.757,16.449,41.271A124.3,124.3,0,1,0,7.559,167.133q39.129-50.53,78.3-101.028" fill="#d7001c" />
                                                        <path id="Path_432" data-name="Path 432" d="M193.906,215.356c1.058-14.56-4.147-26.705-13.741-37.288q-19.368-21.363-38.709-42.749a104.735,104.735,0,0,1-8.1-9.71c-8.054-11.466-5.524-23.5,6.292-31.04,6.053-3.861,12.857-5.869,19.583-8.1,3.864-1.279,7.7-2.661,11.5-4.11a1.7,1.7,0,0,0,.162-.089c1.585-1.859-1.057-3.567-1.057-3.567l0,0a98.752,98.752,0,0,0-34.206-6.88c-.435-.01-.87-.035-1.3-.058v0l-7.94.146c-3.47.162-6.943.3-10.41.493a13.575,13.575,0,0,0-10.306,5.067Q97,88.291,88.5,99.242q-31.6,40.71-63.145,81.464-3.439,4.442-6.871,8.889a124.367,124.367,0,0,0,174.578,38.379q.393-6.311.841-12.618" fill="#d7001c" />
                                                        <path id="Path_433" data-name="Path 433" d="M167.06,115.46q-6.717-7.473-13.389-14.986c-1.388-1.563-1.291-2.4.694-3.127,6.268-2.3,12.581-4.468,18.895-6.634a61.484,61.484,0,0,0,17.606-8.989c12.809-9.76,10.517-28.93-4.324-35.23-11.024-4.68-22.28-8.722-34.235-10.351A151.532,151.532,0,0,0,118.246,35.1a70.772,70.772,0,0,0-14.9,2.79C96.028,40.205,90.615,45.424,86,51.377Q45.109,104.064,4.289,156.8a123.571,123.571,0,0,0,9.443,24.391q5.883-7.606,11.761-15.217,31.542-40.755,63.145-81.463,8.5-10.95,17.171-21.767a13.581,13.581,0,0,1,10.306-5.067c3.467-.195,6.94-.33,10.41-.493l7.94-.145v0c.435.023.87.048,1.305.058a98.761,98.761,0,0,1,34.207,6.879l0,0s2.642,1.707,1.057,3.566a1.514,1.514,0,0,1-.162.09c-3.8,1.448-7.636,2.83-11.5,4.109-6.726,2.227-13.53,4.235-19.583,8.1-11.816,7.536-14.346,19.574-6.292,31.04a104.59,104.59,0,0,0,8.1,9.709Q160.9,142.009,180.3,163.34c9.6,10.583,14.8,22.728,13.741,37.288-.674,9.277-1.216,18.564-1.745,27.852a124.95,124.95,0,0,0,23.643-20.057c.189-3.593.35-7.186.455-10.781.505-17.257-5.247-32.538-16.467-45.54-10.717-12.419-21.9-24.438-32.867-36.642" fill="#fff" />
                                                        <path id="Path_434" data-name="Path 434" d="M351.26,47.808q28.5,0,40.47,7.028t11.968,25.5a25.024,25.024,0,0,1-6.929,17.683q-7.716,8.208-21.731,9.63,13.542,0,20.157,5.512t6.613,15.589v23.621H368.9V132.055q0-6.768-5.669-9.369t-16.849-2.6H305.437v32.281H273.628V47.808Zm-4.881,49.761q13.541,0,18.66-2.613t5.118-10.693q0-7.444-2.992-9.822-4.41-3.485-18.9-3.484H305.437V97.569Z" fill="#fff" />
                                                        <path id="Path_435" data-name="Path 435" d="M555.182,126.544l23.149,13.07-16.377,13.07-18.74-10.393q-6.93,6.613-20.628,9.133-9.607,1.731-25.668,1.732H479.282q-23.148,0-35.116-5.2Q425.9,139.929,425.9,118.67q0-11.965,5.354-17.794,6.141-6.613,21.889-8.661a41.187,41.187,0,0,1-7.244-7.4,19.12,19.12,0,0,1-3.149-10.866q0-15.43,14.172-21.1Q467.628,48.6,493.139,48.6q27.241,0,37.636,4.409,13.7,5.827,13.7,22.991v6.771H515.5q0-11.179-2.678-13.543-3.467-3.147-18.581-3.149-11.183,0-14.33.787-6.459,1.577-6.456,7.244,0,5.042,2.2,7.559,1.731,1.889,8.818,5.826l45.509,25.353a16.058,16.058,0,0,0,1.26-6.3,13.632,13.632,0,0,0-1.26-6.142h27.4q.787,4.412,1.024,7.244t.236,4.567a28.72,28.72,0,0,1-1.417,9.133q-.473,1.417-2.048,5.2m-58.578,8.5a101.838,101.838,0,0,0,14.645-.787,24.388,24.388,0,0,0,9.92-4.094L472.2,103.4q-10.08,1.575-12.834,4.172t-2.756,9.685q0,11.811,7.716,15.589,4.566,2.208,17.165,2.205Z" fill="#fff" />
                                                        <path id="Path_436" data-name="Path 436" d="M671.867,47.808q28.5,0,40.47,7.028t11.967,25.5a25.023,25.023,0,0,1-6.928,17.683q-7.717,8.208-21.731,9.63,13.542,0,20.156,5.512t6.614,15.589v23.621H689.5V132.055q0-6.768-5.669-9.369t-16.85-2.6H626.043v32.281H594.234V47.808Zm-4.882,49.761q13.541,0,18.66-2.613t5.118-10.693q0-7.444-2.992-9.822-4.41-3.485-18.9-3.484H626.043V97.569Z" fill="#fff" />
                                                        <path id="Path_437" data-name="Path 437" d="M303.64,168.488l16.654,32.145H310.079l-3.1-5.954H286.745l-2.953,5.954H273.286l16.363-32.145Zm-13.8,19.268h14.088l-7.117-13.41Z" fill="#d7001b" />
                                                        <path id="Path_438" data-name="Path 438" d="M365.364,168.585v21.2a8.891,8.891,0,0,1-4.962,8.448q-4.964,2.64-15.08,2.639-10.893,0-15.347-2.131-5.471-2.614-5.47-9.73v-20.43h10.021v20.43q0,3.05,2.082,4.018,1.742.823,6.68.823h3.2a28.6,28.6,0,0,0,6.584-.436q2.274-.726,2.275-3.631v-21.2Z" fill="#d7001b" />
                                                        <path id="Path_439" data-name="Path 439" d="M407.868,168.488v7.165H393.684v24.98H383.565v-24.98H369.623v-7.165Z" fill="#d7001b" />
                                                        <path id="Path_440" data-name="Path 440" d="M453.036,178.185V190.6q0,4.945-4.938,7.757a19.872,19.872,0,0,1-9.924,2.376H434.2q-5.375,0-7.044-.016t-2.929-.081a16.073,16.073,0,0,1-9.295-2.614,8.6,8.6,0,0,1-4.163-7.455V178.17q0-4.21,4.357-7.116a15.19,15.19,0,0,1,8.569-2.566h14.91a18.971,18.971,0,0,1,9.876,2.424q4.55,2.717,4.551,7.273m-10.167,9.394v-5.844a6.977,6.977,0,0,0-1.694-5.07q-1.889-1.98-5.954-1.98h-8.037a6.087,6.087,0,0,0-4.817,1.787,7.349,7.349,0,0,0-1.573,5.022v6.085a7.076,7.076,0,0,0,1.549,4.877,6.166,6.166,0,0,0,4.841,1.739h8.037q4.114,0,5.881-1.642a6.472,6.472,0,0,0,1.767-4.974" fill="#d7001b" />
                                                        <path id="Path_441" data-name="Path 441" d="M532.091,168.488H542.4l-13.362,32.145h-11.86L507.5,177.978l-7.5,22.656H488.327l-12.973-32.145h10.214l8.617,23.431,7.939-23.431H513.4l9.828,23.431Z" fill="#d7001b" />
                                                        <path id="Path_442" data-name="Path 442" d="M586.7,178.185V190.6q0,4.945-4.938,7.757a19.872,19.872,0,0,1-9.924,2.376h-3.97q-5.375,0-7.044-.016t-2.929-.081a16.073,16.073,0,0,1-9.295-2.614,8.6,8.6,0,0,1-4.163-7.455V178.17q0-4.21,4.357-7.116a15.19,15.19,0,0,1,8.569-2.566h14.91a18.971,18.971,0,0,1,9.876,2.424q4.55,2.717,4.551,7.273m-10.167,9.394v-5.844a6.977,6.977,0,0,0-1.694-5.07q-1.889-1.98-5.954-1.98h-8.037a6.087,6.087,0,0,0-4.817,1.787,7.349,7.349,0,0,0-1.573,5.022v6.085a7.076,7.076,0,0,0,1.549,4.877,6.166,6.166,0,0,0,4.841,1.739h8.037q4.115,0,5.881-1.642a6.472,6.472,0,0,0,1.767-4.974" fill="#d7001b" />
                                                        <path id="Path_443" data-name="Path 443" d="M616.907,168.488q8.762,0,12.441,2.16t3.68,7.839a7.7,7.7,0,0,1-2.13,5.437,10.222,10.222,0,0,1-6.681,2.961q4.163,0,6.2,1.694a5.893,5.893,0,0,1,2.033,4.792v7.262H622.329v-6.245a2.9,2.9,0,0,0-1.743-2.88,12.949,12.949,0,0,0-5.18-.8H602.819v9.924H593.04V168.488Zm-1.5,15.3q4.163,0,5.737-.8t1.574-3.288q0-2.288-.92-3.019-1.357-1.071-5.81-1.071H602.819v8.181Z" fill="#d7001b" />
                                                        <path id="Path_444" data-name="Path 444" d="M672.772,193.469v7.165H640.385V168.489H650.5v24.98Z" fill="#d7001b" />
                                                        <path id="Path_445" data-name="Path 445" d="M720.313,180.415l.1,5.382q0,7.128-2.9,10.424-3.873,4.412-14.232,4.412H677.566V168.488h24.108q9.681,0,14.16,2.813t4.479,9.114m-20.091,13.828q6.293,0,8.375-2.33,1.5-1.7,1.5-6.164v-4.8a4.452,4.452,0,0,0-1.743-3.932q-2.131-1.5-7.552-1.5H687.538v18.735Z" fill="#d7001b" />
                                                        <path id="Path_446" data-name="Path 446" d="M730.878,38.486v1.021h-2.62V48.1H727V39.507h-2.634V38.486Z" fill="#fff" />
                                                        <path id="Path_447" data-name="Path 447" d="M742.172,38.555V48.1h-1.255V40.982L737.745,48.1h-.883l-3.185-7.129V48.1h-1.255V38.555h1.352l3.53,7.888,3.53-7.888Z" fill="#fff" />
                                                    </g>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="nav-outer flex align-center">
                                        <!-- Main Menu -->

                                        <!-- Main Menu End-->
                                    </div>
                                    <div class="header-account flex align-center">

                                    </div>
                                    <div class="mobile-nav-toggler mobile-button" id="btnShowSidebar">
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Header Lower -->

                <!-- Mobile Menu  -->
                <div class="close-btn"><span class="icon flaticon-cancel-1"></span></div>

                <!-- End Mobile Menu -->

            </header>
            <div class="page-dashboard-wrap px-5 py-5">
                <div class="tf-widget-add-cart pt-0">
                    <div class="themesflat-container">
                        <div class="tf-add-cart">

                            <form action="/add_car_2" method="post" id="submit-add-form"
                                  class="form-add-cart needs-validation" enctype="multipart/form-data">

                                <fieldset id="information" class="mb-60">
                                    <div class="inner-title mb-30">
                                        <span class="sub-title">Add Vehicle</span>
                                        <h3 class="title" id="add-vehicle-title">Add Car</h3>
                                    </div>

                                    <!-- vehicle type-->
                                    <input type="hidden" name="main_vehicle_type" id="main_vehicle_type">

                                    <!--Main Vehicle Type - Commercial - Dropdown-->
                                    <div class="form-group mb-30 w-50" id="commercial-type-group" style="display: none;">
                                        <label>Sub Vehicle Type</label>
                                        <div class="group-select">
                                            <select name="sub_vehicle_type" id="commercial-main-category-group"
                                                    class="form-control nice-select">
                                                <option value="" disabled selected>Select a Sub Vehicle Type</option>
                                                <option value="Light Commercial Vehicles">Light Commercial Vehicles</option>
                                                <option value="Heavy Commercial Vehicles">Heavy Commercial Vehicles</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Main Vehicle Type - Machinery - Dropdown-->
                                    <div class="form-group mb-30 w-50" id="machinery-type-group" style="display: none;">
                                        <label>Machinery Type</label>
                                        <div class="group-select">
                                            <select name="sub_vehicle_type" id="machinery-main-category-group"
                                                    class="form-control nice-select">
                                                <option value="" disabled selected>Select a Machinery Type</option>
                                                <option value="Roadwork Machinery">Roadwork Machinery</option>
                                                <option value="Industrial Machinery">Industrial Machinery</option>
                                                <option value="Agricultural Machinery">Agricultural Machinery</option>
                                                <option value="Construction Machinery">Construction Machinery</option>
                                            </select>
                                        </div>
                                    </div>

                                    <script>

                                        // get vehicle type from url
                                        function getMainVehicleType() {
                                            const urlParams = new URLSearchParams(window.location.search);
                                            return urlParams.get('main_vehicle_type');
                                        }

                                        document.addEventListener("DOMContentLoaded", function () {
                                            const mainVehicleType = getMainVehicleType();
                                            const passengerTypeGroup = document.getElementById("passenger-type-group");
                                            const lightCommercialTypeGroup = document.getElementById("light-commercial-type-group");
                                            const heavyCommercialTypeGroup = document.getElementById("heavy-commercial-type-group");
                                            const publicTransportTypeGroup = document.getElementById("public-transport-type-group");
                                            const constructionTypeGroup = document.getElementById("construction-machinery-type-group");
                                            const agriculturalTypeGroup = document.getElementById("agricultural-machinery-type-group");
                                            const industrialTypeGroup = document.getElementById("industrial-machinery-type-group");
                                            const roadworkTypeGroup = document.getElementById("roadwork-machinery-type-group");
                                            const specialPurposesTypeGroup = document.getElementById("special-purposes-type-group");
                                            const motorcycleTypeGroup = document.getElementById("motorcycle-type-group");
                                            const doorGroup = document.getElementById("doors-group");
                                            const seatsGroup = document.getElementById("seats-group");
                                            const vehicleTypeInput = document.getElementById("main_vehicle_type")
                                            const commercialTypeGroup = document.getElementById("commercial-type-group");
                                            const machineryTypeGroup = document.getElementById("machinery-type-group");
                                            const commercialMainCategoryGroup = document.getElementById("commercial-main-category-group");
                                            const machineryMainCategoryGroup = document.getElementById("machinery-main-category-group");

                                            console.log(mainVehicleType);

                                            if (vehicleTypeInput) {
                                                vehicleTypeInput.value = mainVehicleType
                                            }

                                            // door and seats hide for bikes
                                            if (mainVehicleType === 'Motorcycle') {
                                                doorGroup.style.display = 'none';
                                                seatsGroup.style.display = 'none';
                                            }

                                            // display sub vehicle type field - only for commercial vehicle
                                            if (mainVehicleType === 'Commercial') {
                                                commercialTypeGroup.style.display = 'block';
                                            }

                                            // display sub vehicle type field - only for machinery
                                            if (mainVehicleType === 'Machinery') {
                                                machineryTypeGroup.style.display = 'block';
                                            }

                                            // change the title
                                            const titleElement = document.getElementById("add-vehicle-title");
                                            if (titleElement && mainVehicleType) {
                                                if (mainVehicleType === 'Machinery' || mainVehicleType === 'Motorcycle') {
                                                    titleElement.textContent = `Add ${mainVehicleType}`
                                                } else {
                                                    titleElement.textContent = `Add ${mainVehicleType} Vehicle`
                                                }
                                            }

                                            // display/ hide passenger's type field
                                            if (mainVehicleType === 'Passenger') {
                                                passengerTypeGroup.style.display = 'block';
                                            } else {
                                                passengerTypeGroup.style.display = 'none';
                                            }

                                            // display/ hide commercial's type field
                                            // Add event listener for the commercial vehicle dropdown
                                            if (commercialMainCategoryGroup) {
                                                commercialMainCategoryGroup.addEventListener("change", function () {
                                                    // Hide both type groups initially
                                                    lightCommercialTypeGroup.style.display = 'none';
                                                    heavyCommercialTypeGroup.style.display = 'none';

                                                    // Show the corresponding type group based on selection
                                                    if (commercialMainCategoryGroup.value === 'Light Commercial Vehicles') {
                                                        lightCommercialTypeGroup.style.display = 'block';
                                                    } else if (commercialMainCategoryGroup.value === 'Heavy Commercial Vehicles') {
                                                        heavyCommercialTypeGroup.style.display = 'block';
                                                    } else {
                                                        commercialMainCategoryGroup.style.display = 'none';
                                                    }
                                                });
                                            }

                                            // display/ hide public transport's type field
                                            if (mainVehicleType === "Public Transport") {
                                                publicTransportTypeGroup.style.display = 'block';
                                            } else {
                                                publicTransportTypeGroup.style.display = 'none';
                                            }

                                            // display/ hide machinery's type field
                                            if (machineryMainCategoryGroup) {

                                                constructionTypeGroup.style.display = 'none';
                                                agriculturalTypeGroup.style.display = 'none';
                                                industrialTypeGroup.style.display = 'none';
                                                roadworkTypeGroup.style.display = 'none';

                                                machineryMainCategoryGroup.addEventListener("change", function () {
                                                    constructionTypeGroup.style.display = 'none';
                                                    agriculturalTypeGroup.style.display = 'none';
                                                    industrialTypeGroup.style.display = 'none';
                                                    roadworkTypeGroup.style.display = 'none';

                                                    if (machineryMainCategoryGroup.value === 'Construction Machinery') {
                                                        constructionTypeGroup.style.display = 'block';
                                                    } else if (machineryMainCategoryGroup.value === 'Agricultural Machinery') {
                                                        agriculturalTypeGroup.style.display = 'block';
                                                    } else if (machineryMainCategoryGroup.value === 'Industrial Machinery') {
                                                        industrialTypeGroup.style.display = 'block';
                                                    } else if (machineryMainCategoryGroup.value === 'Roadwork Machinery') {
                                                        roadworkTypeGroup.style.display = 'block';
                                                    }
                                                })
                                            }

                                            // display/ hide special purposes's type field
                                            if (mainVehicleType === "Special Purposes") {
                                                specialPurposesTypeGroup.style.display = 'block';
                                            } else {
                                                specialPurposesTypeGroup.style.display = 'none';
                                            }

                                            // display/ hide motorcycle's type field
                                            if (mainVehicleType === "Motorcycle") {
                                                motorcycleTypeGroup.style.display = 'block';
                                            } else {
                                                motorcycleTypeGroup.style.display = 'none';
                                            }

                                        })
                                    </script>

                                    <div class="listing-fields-grid mb-30">
                                        <!--Passenger Vehicle Types-->
                                        <div id="passenger-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Sedan">Sedan</option>
                                                    <option value="Hatchback">Hatchback</option>
                                                    <option value="Coupe">Coupe</option>
                                                    <option value="Convertible">Convertible</option>
                                                    <option value="SUV">SUV</option>
                                                    <option value="Crossover">Crossover</option>
                                                    <option value="Station Wagon">Station Wagon</option>
                                                    <option value="Limousine">Limousine</option>
                                                    <option value="Luxury Sedan">Luxury Sedan</option>
                                                    <option value="Premium SUV">Premium SUV</option>
                                                    <option value="Supercar">Supercar</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Light Commercial Vehicle Types-->
                                        <div id="light-commercial-type-group" class="form-group " style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Van">Van</option>
                                                    <option value="Pickup Truck">Pickup Truck</option>
                                                    <option value="Mini Bus">Mini Bus</option>
                                                    <option value="Utility Vehicle">Utility Vehicle</option>
                                                    <option value="Cargo Van">Cargo Van</option>
                                                    <option value="Delivery Truck">Delivery Truck</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Heavy Commercial Vehicle Types-->
                                        <div id="heavy-commercial-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Rigid Truck">Rigid Truck</option>
                                                    <option value="Articulated Truck">Articulated Truck</option>
                                                    <option value="Semi-Trailers">Semi-Trailer</option>
                                                    <option value="Lorries">Lorry</option>
                                                    <option value="Dump Truck">Dump Truck</option>
                                                    <option value="Tipper">Tipper</option>
                                                    <option value="Crane Truck">Crane Truck</option>
                                                    <option value="Freezer Truck">Freezer Truck</option>
                                                    <option value="Trailer">Trailer</option>
                                                    <option value="Tanker Truck">Tanker Truck</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Public Transport Vehicle Types-->
                                        <div id="public-transport-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Bus">Bus</option>
                                                    <option value="Coach">Coach</option>
                                                    <option value="Shuttle">Shuttle</option>
                                                    <option value="Tram">Tram</option>
                                                    <option value="Trolley">Trolley</option>
                                                    <option value="Double-Decker Bus">Double-Decker Bus</option>
                                                    <option value="Airport Shuttle Bus">Airport Shuttle Bus</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Construction Machinery Vehicle Types-->
                                        <div id="construction-machinery-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Excavator">Excavator</option>
                                                    <option value="Bulldozer">Bulldozer</option>
                                                    <option value="Crane">Crane</option>
                                                    <option value="Backhoe">Backhoe</option>
                                                    <option value="Loader">Loader</option>
                                                    <option value="Grader">Grader</option>
                                                    <option value="Skid Steer">Skid Steer</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Agricultural Machinery Vehicle Types-->
                                        <div id="agricultural-machinery-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Tractor">Tractor</option>
                                                    <option value="Combine Harvester">Combine Harvester</option>
                                                    <option value="Plough">Plough</option>
                                                    <option value="Seed Drill">Seed Drill</option>
                                                    <option value="Sprayer">Sprayer</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Industrial Machinery Vehicle Types-->
                                        <div id="industrial-machinery-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Forklift">Forklift</option>
                                                    <option value="Warehousing Truck">Warehousing Truck</option>
                                                    <option value="Heavy Lifter">Heavy Lifter</option>
                                                    <option value="Compactor">Compactor</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Roadwork Machinery Vehicle Types-->
                                        <div id="roadwork-machinery-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Paver">Paver</option>
                                                    <option value="Asphalt Roller">Asphalt Roller</option>
                                                    <option value="Concrete Mixer">Concrete Mixer</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Special Purposes Vehicle Types-->
                                        <div id="special-purposes-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Ambulance">Ambulance</option>
                                                    <option value="Fire Truck">Fire Truck</option>
                                                    <option value="Tow Truck">Tow Truck</option>
                                                    <option value="Police Vehicle">Police Vehicle</option>
                                                    <option value="Garbage Truck">Garbage Truck</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!--Motorcycle Types-->
                                        <div id="motorcycle-type-group" class="form-group" style="display: none">
                                            <label>Type (*)</label>
                                            <div class="group-select">
                                                <select name="type" id="type" class="form-control nice-select relevant-select"
                                                >
                                                    <option value="" disabled selected>Select a Type</option>
                                                    <option value="Standard Motorcycle">Standard Motorcycle</option>
                                                    <option value="Cruisers">Cruiser</option>
                                                    <option value="Sport Bike">Sport Bike</option>
                                                    <option value="Touring Bike">Touring Bike</option>
                                                    <option value="Dirt Bike">Dirt Bike</option>
                                                    <option value="Scooter">Scooter</option>
                                                </select>
                                            </div>
                                        </div>

                                        <!-- vehicle type-->
                                        <input type="hidden" name="type" id="body_type">

                                        <script>
                                            document.addEventListener("DOMContentLoaded", function () {
                                                const bodyTypeInput = document.getElementById("body_type");

                                                // Function to update the body type input
                                                function updateBodyType(event) {
                                                    bodyTypeInput.value = event.target.value; // Set the selected value to the input field
                                                }

                                                // Get only the relevant select elements by targeting the 'relevant-select' class
                                                const relevantDropdowns = document.querySelectorAll('.relevant-select');

                                                // Add change event listeners to each relevant dropdown
                                                relevantDropdowns.forEach(dropdown => {
                                                    dropdown.addEventListener('change', updateBodyType);
                                                });
                                            });

                                        </script>
                                    </div>



                                    <div class="tfad-listing-title mb-30">
                                        <div class="form-group">
                                            <label>Listing Title (*)</label>
                                            <input type="text" id="title" class="form-control" name="title"
                                                   placeholder="Enter title here" value="" required maxlength="100">
                                        </div>

                                    </div>
                                    <div class="listing-fields-grid mb-30">
                                        <div class="form-group">
                                            <label>Make</label>
                                            <div class="group-select">
                                                <select name="main-category" id="main-category"
                                                        class="form-control nice-select" required>
                                                    <option value="" disabled selected>Select a Listing Title
                                                    </option>
                                                    <?php foreach ($categories as $category): ?>
                                                        <option value="<?= $category['id'] ?>">
                                                            <?= $category['category_name'] ?>
                                                        </option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Model</label>
                                            <div class="group-select">
                                                <select name="sub-category" id="sub-category"
                                                        class="form-control nice-select" required>
                                                    <option value="" disabled selected>Select a Model</option>

                                                </select>
                                            </div>

                                        </div>

                                        <script>
                                            // Data from PHP (could also be done via an API endpoint)
                                            const categories = <?= json_encode($categories); ?>;

                                            document.getElementById('main-category').addEventListener('change', function() {
                                                const mainCategoryId = this.value;
                                                const subCategorySelect = document.getElementById('sub-category');

                                                // Clear existing options
                                                subCategorySelect.innerHTML = '<option value="" disabled selected>Select a Model</option>';

                                                // Find selected main category
                                                const selectedCategory = categories.find(category => category.id == mainCategoryId);

                                                // Populate subcategory dropdown
                                                if (selectedCategory && selectedCategory.sub_categories) {
                                                    selectedCategory.sub_categories.forEach(subCategory => {
                                                        const option = document.createElement('option');
                                                        option.value = subCategory.id;
                                                        option.textContent = subCategory.model_name;
                                                        subCategorySelect.appendChild(option);
                                                    });
                                                }
                                            });
                                        </script>


                                        <div class="form-group">
                                            <label>Years (*)</label>
                                            <div class="group-select">
                                                <input type="number" id="year" name="year" placeholder="Enter Year"
                                                       value="" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Condition</label>
                                            <div class="group-select">

                                                <select name="condition" id="condition"
                                                        class="form-control nice-select" required>
                                                    <option value="Used">Used</option>
                                                    <option value="New">New</option>
                                                </select>

                                            </div>
                                        </div>
                                        <!--<div class="form-group">
                                            <label>Stock Number</label>
                                            <div class="group-select">
                                                <input type="tel" id="stock_number" name="stock_number"
                                                    placeholder="Enter Number">
                                            </div>
                                        </div>-->
                                        <div class="form-group">
                                            <label>VIN Number</label>
                                            <div class="group-select">
                                                <input type="tel" id="vin_number" name="vin_number"
                                                       placeholder="Enter VIN">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Mileage</label>
                                            <div class="group-select">
                                                <input type="number" id="mileage" name="mileage"
                                                       placeholder="Enter Mileage">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Transmission</label>
                                            <div class="group-select">

                                                <select name="transmission" id="transmission"
                                                        class="form-control nice-select " required>
                                                    <option value="Manual">Manual</option>
                                                    <option value="Auto">Auto</option>
                                                    <option value="CVT">CVT</option>
                                                    <option value="DCT">DCT</option>

                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="driver_type">Driver Type</label>
                                            <div class="group-select">
                                                <select name="driver_type" id="driver_type"
                                                        class="form-control nice-select " required>
                                                    <option value="FWD">FWD</option>
                                                    <option value="2WD">2WD</option>
                                                    <option value="4WD">4WD</option>
                                                    <option value="AWD">AWD</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label>Engine Size</label>
                                            <div class="group-select">
                                                <input type="text" id="engine_size" name="engine_size"
                                                       placeholder="Enter Engine">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="cylinders">Cylinders</label>
                                            <div class="group-select">
                                                <!--<select name="cylinders" id="cylinders"
                                                    class="form-control nice-select" required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>-->
                                                <input type="number" id="cylinders" name="cylinders"
                                                       placeholder="Enter Cylinders Count">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="fuel_type">Fuel Type</label>
                                            <div class="group-select">
                                                <select name="fuel_type" id="fuel_type"
                                                        class="form-control nice-select" required>

                                                    <option value="Diesel">Diesel</option>
                                                    <option value="Electric">Electric</option>
                                                    <option value="Gasoline">Gasoline</option>
                                                    <option value="Hybrid">Hybrid</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group" id="doors-group">
                                            <label for="doors">Doors</label>
                                            <div class="group-select">
                                                <!-- <select name="doors" id="doors" class="form-control nice-select"
                                                        required>
                                                    <option value="6">6</option>
                                                    <option value="4">4</option>
                                                    <option value="2">2</option>
                                                </select> -->

                                                <input type="number" id="doors" name="doors"
                                                placeholder="Enter Doors">

                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="color">Color</label>
                                            <div class="group-select">
                                                <!--<select name="color" id="color" class="form-control nice-select"
                                                    required>
                                                    <option value="Black">Black</option>
                                                    <option value="Red">Red</option>
                                                    <option value="White">White</option>
                                                    <option value="Green">Green</option>
                                                    <option value="Yellow">Yellow</option>
                                                </select>-->
                                                <input type="text" id="color" name="color"
                                                       placeholder="Enter Vehicle Color" required>
                                            </div>
                                        </div>
                                        <div class="form-group" id="seats-group">
                                            <label for="seats">Seats</label>
                                            <div class="group-select">
                                                <!--<select name="seats" id="seats" class="form-control nice-select"
                                                    required>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>-->
                                                <input type="number" id="seats" name="seats"
                                                       placeholder="Enter Seats Count">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>City MPG</label>
                                            <div class="group-select">
                                                <input type="number" id="city_mpg" name="city_mpg"
                                                       placeholder="City MPG">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Highway MPG</label>
                                            <div class="group-select">
                                                <input type="number" id="highway_mpg" name="highway_mpg"
                                                       placeholder="Highway MPG">
                                            </div>
                                        </div>
                                    </div>

                                  

                                    <div class="description-fields mb-30">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <div class="group-select">
                                                    <textarea id="description" name="description" class="form-control"
                                                              placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="listing-fields-grid mb-30">
                                        <div class="form-group">
                                            <label>Request Price Label</label>
                                            <div class="group-select">

                                                <select name="price_type" id="price_type"
                                                        class="form-control nice-select" required>
                                                    <option value="Negotiable">Negotiable</option>
                                                    <option value="fixed">Fixed</option>
                                                    <option value="Contact for price">Contact for Price</option>
                                                </select>

                                            </div>
                                        </div>
                                        <div class="form-group" id="regular-price-group">
                                            <label> Regular Price *</label>
                                            <div class="group-select">
                                                <input type="number" id="regular_price" name="regular_price"
                                                       placeholder="Enter Sale Price" value="0">
                                            </div>
                                        </div>
                                        <div class="form-group" id="sale-price-group">
                                            <label>Sale Price</label>
                                            <div class="group-select">
                                                <input type="number" id="sale_price" name="sale_price"
                                                       placeholder="Enter Sale Price" value="0">
                                            </div>
                                        </div>

                                    </div>

                                    <script>
                                        document.getElementById('price_type').addEventListener('change', function() {
                                            const priceType = this.value;
                                            const regularPriceGroup = document.getElementById('regular-price-group');
                                            const salePriceGroup = document.getElementById('sale-price-group');

                                            if (priceType === 'Contact for price') {
                                                regularPriceGroup.style.display = 'none';
                                                salePriceGroup.style.display = 'none';
                                            } else {
                                                regularPriceGroup.style.display = 'block';
                                                salePriceGroup.style.display = 'block';
                                            }
                                        });
                                    </script>

                                </fieldset>
                                <fieldset id="features" class="mb-60">
                                    <div class="inner-title mb-30">
                                        <h3 class="title">Select Listing Features</h3>
                                    </div>
                                    <div class="tfad-listing-feature">
                                        <div class="listing-feature-item">
                                            <div class="form-group">
                                                <label>Main</label>
                                                <div class="group-select">
                                                    <div class="radio">
                                                        <input id="front" type="checkbox"
                                                               name="features[A/C: Front]" value="true">
                                                        <label for="front">A/C: Front</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="rear" type="checkbox" name="features[A/C: Rear]"
                                                               value="true">
                                                        <label for="rear">A/C: Rear</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="camera" type="checkbox"
                                                               name="features[Backup Camera]" value="true">
                                                        <label for="camera">Reverse Camera</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="control" type="checkbox"
                                                               name="features[Cruise Control]" value="true">
                                                        <label for="control">Cruise Control</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="navigation" type="checkbox"
                                                               name="features[Navigation]" value="true">
                                                        <label for="navigation">Navigation</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="locks" type="checkbox"
                                                               name="features[Power Locks]" value="true">
                                                        <label for="locks">Power Locks</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-feature-item">
                                            <div class="form-group">
                                                <label>Entertainment</label>
                                                <div class="group-select">
                                                    <div class="radio">
                                                        <input id="stereo" type="checkbox"
                                                               name="features[AM/FM Stereo]" value="true">
                                                        <label for="stereo">AM/FM Stereo</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="cd" type="checkbox" name="features[CD Player]"
                                                               value="true">
                                                        <label for="cd">CD Player</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="dvd" type="checkbox" name="features[DVD System]"
                                                               value="true">
                                                        <label for="dvd">DVD System</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="mp3" type="checkbox" name="features[MP3 Player]"
                                                               value="true">
                                                        <label for="mp3">MP3 Player</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="portable" type="checkbox"
                                                               name="features[Portable Audio]" value="true">
                                                        <label for="portable">Portable Audio</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="premium" type="checkbox"
                                                               name="features[Premium Audio]" value="true">
                                                        <label for="premium">Premium Audio</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-feature-item">
                                            <div class="form-group">
                                                <label>Safety</label>
                                                <div class="group-select">
                                                    <div class="radio">
                                                        <input id="driver" type="checkbox"
                                                               name="features[Airbag: Driver]" value="true">
                                                        <label for="driver">Airbag: Driver</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="passenger" type="checkbox"
                                                               name="features[Airbag: Passenger]" value="true">
                                                        <label for="passenger">Airbag: Passenger</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="brakes" type="checkbox"
                                                               name="features[Antilock Brakes]" value="true">
                                                        <label for="brakes">Antilock Brakes</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="bluetooth" type="checkbox"
                                                               name="features[Bluetooth]" value="true">
                                                        <label for="bluetooth">Bluetooth</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="hands-free" type="checkbox"
                                                               name="features[Hands-Free]" value="true">
                                                        <label for="hands-free">Hands-Free</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="fog-lights" type="checkbox"
                                                               name="features[Fog Lights]" value="true">
                                                        <label for="fog-lights">Fog Lights</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-feature-item">
                                            <div class="form-group">
                                                <label>Windows</label>
                                                <div class="group-select">
                                                    <div class="radio">
                                                        <input id="power" type="checkbox"
                                                               name="features[Power Windows]" value="true">
                                                        <label for="power">Power Windows</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="defroster" type="checkbox"
                                                               name="features[Windows Defroster]" value="true">
                                                        <label for="defroster">Windows Defroster</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="rear-window" type="checkbox"
                                                               name="features[Rear Window]" value="true">
                                                        <label for="rear-window">Rear Window</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="wiper-tinted-glass" type="checkbox"
                                                               name="features[Wiper Tinted Glass]" value="true">
                                                        <label for="wiper-tinted-glass">Wiper Tinted Glass</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="sunroof" type="checkbox" name="features[Sunroof]"
                                                               value="true">
                                                        <label for="sunroof">Sunroof</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="tow-package" type="checkbox"
                                                               name="features[Tow Package]" value="true">
                                                        <label for="tow-package">Tow Package</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="listing-feature-item">
                                            <div class="form-group">
                                                <label>Seats</label>
                                                <div class="group-select">
                                                    <div class="radio">
                                                        <input id="bucket-seats" type="checkbox"
                                                               name="features[Bucket Seats]" value="true">
                                                        <label for="bucket-seats">Bucket Seats</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="heated-seats" type="checkbox"
                                                               name="features[Heated Seats]" value="true">
                                                        <label for="heated-seats">Heated Seats</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="leather-interior" type="checkbox"
                                                               name="features[Leather Interior]" value="true">
                                                        <label for="leather-interior">Leather Interior</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="memory-seats" type="checkbox"
                                                               name="features[Memory Seats]" value="true">
                                                        <label for="memory-seats">Memory Seats</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="power-seats" type="checkbox"
                                                               name="features[Power Seats]" value="true">
                                                        <label for="power-seats">Power Seats</label>
                                                    </div>
                                                    <div class="radio">
                                                        <input id="third-row-seats" type="checkbox"
                                                               name="features[Third Row Seats]" value="true">
                                                        <label for="third-row-seats">Third Row Seats</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>





                                <fieldset id="upload-media" class="pd-bg">
                                    <div class="inner-title mb-30">
                                        <span class="sub-title">Media</span>
                                        <h3 class="title">Upload Car Images</h3>
                                    </div>
                                    <p class="one-photo text-red">*Main image display as the thumbnail of the Car</p>
                                    <div class="upload-image-add-car">
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad1" class="uploadLabel" style="background-color: #ffcccc;">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage1" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add Main Image</span>-->
<!--                                                <input type="file" id="photoLoad1" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage1')" required>-->
<!--                                                <input type="hidden" name="type1" id="type1" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad2" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage2" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad2" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage2')" required>-->
<!--                                                <input type="hidden" name="type2" id="type2" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad3" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage3" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad3" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage3')">-->
<!--                                                <input type="hidden" name="type3" id="type3" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad4" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage4" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad4" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage4')">-->
<!--                                                <input type="hidden" name="type4" id="type4" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad5" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage5" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad5" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage5')">-->
<!--                                                <input type="hidden" name="type5" id="type5" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad6" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage6" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad6" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage6')">-->
<!--                                                <input type="hidden" name="type6" id="type6" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad7" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage7" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad7" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage7')">-->
<!--                                                <input type="hidden" name="type7" id="type7" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad8" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage8" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad8" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage8')">-->
<!--                                                <input type="hidden" name="type8" id="type8" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad9" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage9" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad9" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage9')">-->
<!--                                                <input type="hidden" name="type9" id="type9" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad10" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage10" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad10" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage10')">-->
<!--                                                <input type="hidden" name="type10" id="type10" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad11" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage11" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad11" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage11')">-->
<!--                                                <input type="hidden" name="type11" id="type11" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad12" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage12" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad12" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage12')">-->
<!--                                                <input type="hidden" name="type12" id="type12" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad13" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage13" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad13" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage13')">-->
<!--                                                <input type="hidden" name="type13" id="type13" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad14" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage14" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad14" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage14')">-->
<!--                                                <input type="hidden" name="type14" id="type14" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="photoLoad15" class="uploadLabel">-->
<!--                                                <i class="icon-Group4"></i>-->
<!--                                                <img id="uploadedImage15" src="" alt="Uploaded Image"-->
<!--                                                     style="display:none;">-->
<!--                                                <span>Add a Photo</span>-->
<!--                                                <input type="file" id="photoLoad15" name="images[]" class="photoLoad"-->
<!--                                                       accept="image/*"-->
<!--                                                       onchange="checkImageSize(this, 'uploadedImage15')">-->
<!--                                                <input type="hidden" name="type15" id="type15" value="image">-->
<!--                                            </label>-->
<!--                                        </div>-->
<!---->
<!--                                        <script>-->
<!--                                            function checkImageSize(input, imgId) {-->
<!--                                                const maxSize = 5 * 1024 * 1024; // 5MB in bytes-->
<!--                                                const files = input.files;-->
<!---->
<!--                                                for (let i = 0; i < files.length; i++) {-->
<!--                                                    if (files[i].size > maxSize) {-->
<!--                                                        alert("File size exceeds 5MB. Please upload a smaller image.");-->
<!--                                                        input.value = ''; // Clear the input if the file is too large-->
<!--                                                        return; // Stop the function-->
<!--                                                    } else {-->
<!--                                                        // You can display the image if it passes the size check-->
<!--                                                        const reader = new FileReader();-->
<!--                                                        reader.onload = function(e) {-->
<!--                                                            const img = document.getElementById(imgId);-->
<!--                                                            img.src = e.target.result;-->
<!--                                                            img.style.display = 'block'; // Show the uploaded image-->
<!--                                                        }-->
<!--                                                        reader.readAsDataURL(files[i]); // Read the image file-->
<!--                                                    }-->
<!--                                                }-->
<!--                                            }-->
<!--                                        </script>-->

                                        <div class="container">
                                                <div class="add-car-img-file-upload-container">
                                                    <div class="add-car-img-file-upload">
                                                        <input type="file" name="images[]" id="images" class="add-car-img-file-input" multiple accept="image/*" onchange="previewImages()" required>
                                                        <label for="images" class="add-car-img-file-label">
                                                            <i class="add-car-img-upload-icon">📁</i>
                                                            <br />
                                                            <p>Drag &amp; Drop your files here or click to upload</p></label><br>
                                                    </div>
                                                </div>
                                                <div class="add-car-img-preview" id="preview"></div>
                                                <br>


                                        </div>


                                        <script>

                                            let filesArray = [];

                                            // Hide preloaders after the page is loaded
                                            window.onload = function() {
                                                document.querySelector('.preload').style.display = 'none';
                                                document.querySelector('.preload-new').style.display = 'none';
                                            };

                                            // Function to preview and enable swapping images
                                            function previewImages() {
                                                let preview = document.getElementById('preview');
                                                preview.innerHTML = '';  // Clear previous preview content
                                                let files = document.getElementById('images').files;

                                                filesArray = Array.from(files);  // Convert FileList to array for easier manipulation

                                                // Create preview for each file
                                                filesArray.forEach((file, i) => createImagePreview(file, i));
                                            }

                                            function createImagePreview(file, index) {
                                                let img = document.createElement('img');  // Create an img element
                                                img.src = URL.createObjectURL(file);  // Set object URL
                                                img.classList.add('add-car-img-preview-image');  // Add a class for styling
                                                img.draggable = true;  // Make the img draggable
                                                img.dataset.index = index;  // Store index to track its position

                                                // Drag and drop event listeners
                                                img.addEventListener('dragstart', handleDragStart);
                                                img.addEventListener('dragover', handleDragOver);
                                                img.addEventListener('drop', handleDrop);

                                                document.getElementById('preview').appendChild(img);  // Append the image to the preview section
                                            }

                                            // Drag event handlers
                                            function handleDragStart(e) {
                                                e.dataTransfer.setData('index', e.target.dataset.index);  // Store the dragged image's index
                                            }

                                            function handleDragOver(e) {
                                                e.preventDefault();  // Allow drop by preventing default behavior
                                            }

                                            function handleDrop(e) {
                                                e.preventDefault();

                                                let draggedIndex = e.dataTransfer.getData('index'); // Get dragged image index
                                                let targetIndex = e.target.dataset.index; // Get the drop target index

                                                // Swap the files in filesArray
                                                [filesArray[draggedIndex], filesArray[targetIndex]] = [filesArray[targetIndex], filesArray[draggedIndex]];

                                                // Revoke the old object URLs to avoid memory leaks
                                                let previewImages = document.getElementsByClassName('preview-image');
                                                Array.from(previewImages).forEach(img => {
                                                    URL.revokeObjectURL(img.src);  // Revoke the old object URL
                                                });

                                                // Re-render the previews in the new order
                                                document.getElementById('preview').innerHTML = '';  // Clear preview container
                                                filesArray.forEach((file, i) => createImagePreview(file, i));  // Re-create image previews
                                            }

                                            // Update swapped images on form submit
                                            document.getElementById('imageUploadForm').addEventListener('submit', function(e) {
                                                e.preventDefault(); // Prevent the default form submission

                                                // Prepare the FormData object
                                                const formData = new FormData();

                                                // Add the swapped images to the FormData
                                                filesArray.forEach(file => formData.append('images[]', file)); // Append each image to the FormData

                                                // Send the form data via AJAX
                                                fetch('/add_car_3', {
                                                    method: 'POST',
                                                    body: formData
                                                })
                                                    .then(response => response.json())
                                                    .then(data => {
                                                        console.log(data); // Handle the response from the server
                                                        // You can redirect or display a message based on the response
                                                    })
                                                    .catch(error => {
                                                        console.error('Error:', error);
                                                    });
                                            });
                                        </script>


                                    </div>
                                    <p class="one-photo text-red">*You must upload at least Two photo</p>
                                </fieldset>


                                

                                <fieldset id="video" class="pd-bg">
                                    <div class="inner-title mb-30">
                                        <h3 class="title">Add Video</h3>
                                    </div>
                                    <div class="form-group">
                                        <div class="group-video">
                                            <input type="text" id="img_url" name="img_url"
                                                   placeholder="Enter YouTube URL"
                                            <!-- pattern="[Hh][Tt][Tt][Pp][Ss]?:\/\/(?:(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)(?:\.(?:[a-zA-Z\u00a1-\uffff0-9]+-?)*[a-zA-Z\u00a1-\uffff0-9]+)*(?:\.(?:[a-zA-Z\u00a1-\uffff]{2,}))(?::\d{2,5})?(?:\/[^\s]*)?" -->

                                            <input type="hidden" name="type17" id="type17" value="YouTube_URL">
                                        </div>
                                    </div>
                                </fieldset>



                                <div class="description-fields mb-30">
                                        <div class="form-group">
                                            <label>Meta Key Words</label>
                                            <div class="group-select">
                                                    <textarea id="metakeywords" name="metakeywords" class="form-control"
                                                              placeholder="MetaKeyWords" required></textarea>
                                            </div>
                                        </div>
                                    </div>           

                                <!-- <fieldset id="file-attachment" class="pd-bg">
                                    <div class="inner-title mb-30">
                                        <h3 class="title">Attachment / VIN Report</h3>
                                    </div>
                                    <div class="upload-image">
                                        <label for="photoLoad17" class="uploadLabel">
                                            <i class="icon-Group4"> </i>
                                            <img id="uploadedImage17" src="" alt="Uploaded Image"
                                                style="display:none;">

                                            <span>Add a Photo</span>
                                            <input type="file" id="photoLoad5" name="images[]" class="photoLoad"
                                                accept="image/*" required>
                                            <input type="hidden" name="type16" id="type16" value="Document">
                                        </label>
                                    </div>
                                </fieldset> -->
                                <fieldset>
                                    <button type="submit" class="button-save-listing">Add Car</button>
                                </fieldset>
                            </form>

                            <div id="divLoader"
                                 style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); z-index: -999; opacity: 0; transition: opacity 0.5s;">
                                <!-- Loader content can be added here -->
                            </div>

                            <script>
                                document.getElementById("submit-add-form").onsubmit = function() {
                                    const loaderDiv = document.getElementById("divLoader");
                                    loaderDiv.style.zIndex = "999";
                                    loaderDiv.style.opacity = "1";
                                };
                                document.addEventListener('DOMContentLoaded', function() {
                                    // Initially hide the loader
                                    const loaderDiv = document.getElementById("divLoader");
                                    loaderDiv.style.zIndex = "-999";
                                    loaderDiv.style.opacity = "0";

                                    // Initialize image preview functionality for file inputs
                                    const fileInputs = document.querySelectorAll('.photoLoad');

                                    fileInputs.forEach(input => {
                                        input.addEventListener('change', function(event) {
                                            const file = this.files[0];
                                            const reader = new FileReader();
                                            const imgElement = this.parentNode.querySelector('img');
                                            const labelElement = this.parentNode;

                                            reader.onload = function(e) {
                                                imgElement.src = e.target.result;
                                                imgElement.style.display = 'block'; // show image
                                                labelElement.querySelector('.icon-Group4').style.display = 'none'; // hide icon
                                                labelElement.querySelector('span').style.display = 'none'; // hide text
                                            }

                                            reader.readAsDataURL(file);
                                        });
                                    });
                                });

                                function validateImageUpload() {
                                    const fileInputs = document.querySelectorAll('.photoLoad');
                                    let imageCount = 0;

                                    fileInputs.forEach(input => {
                                        if (input.files.length > 0) {
                                            imageCount += input.files.length;
                                        }
                                    });

                                    // If less than 2 images are uploaded, alert the user
                                    if (imageCount < 2) {
                                        alert("You must upload at least two images.");
                                        return false; // Validation fails
                                    }

                                    return true; // Validation passes
                                }

                                function startLoading() {
                                    const loaderDiv = document.getElementById("divLoader");
                                    loaderDiv.style.zIndex = "999";
                                    loaderDiv.style.opacity = "1";
                                }

                                function submitForms() {
                                    let form1 = document.getElementById('form1');
                                    let isValid = true;

                                    // Check if all required fields in form1 are filled
                                    form1.querySelectorAll('input, select, textarea').forEach(function(field) {
                                        if (field.id !== 'img_url' && !field.checkValidity()) {
                                            isValid = false;
                                            // Highlight the field with an error (optional)
                                            field.classList.add('error');
                                        } else {
                                            // Remove the error class if the field is valid
                                            field.classList.remove('error');
                                        }
                                    });

                                    // Custom validation logic for title length
                                    let title = document.getElementById('title').value;
                                    if (title.length > 100) {
                                        isValid = false;
                                    }

                                    // If form validation fails, show error message and stop submission
                                    if (!isValid) {
                                        alert("Please fill all fields."); // General error message for input fields
                                        document.querySelector('.button-save-listing').disabled = false; // Re-enable button if validation fails
                                        return;
                                    }

                                    // Check image upload validation after form validation
                                    if (!validateImageUpload()) {
                                        return; // Stop the submission if image validation fails
                                    }

                                    // Disable button and start loading animation before submission
                                    document.querySelector('.button-save-listing').disabled = true;
                                    startLoading(); // Call the startLoading function

                                    // Submit the form
                                    form1.submit();
                                }
                            </script>

                        </div>
                    </div>
                </div>
            </div>





            <!-- Footer -->

            <!-- /#footer -->

        </div>

    </div>
    <!-- /#page -->

    <!-- Button Top -->
    <a id="scroll-top" class="button-go"></a>
    <!-- Button Top -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="content-re-lo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title">Register</div>
                    <div class="register-form">
                        <div class="respond-register-form">
                            <form method="post" class="comment-form form-submit" action="/" accept-charset="utf-8"
                                  novalidate="novalidate">
                                <fieldset>
                                    <label>User name</label>
                                    <input type="text" class="tb-my-input" name="text" placeholder="User name">
                                </fieldset>
                                <fieldset>
                                    <label>Email</label>
                                    <input type="email" class="tb-my-input" name="email" placeholder="Email">
                                </fieldset>
                                <fieldset>
                                    <label>Password</label>
                                    <input type="password" class="input-form password-input"
                                           placeholder="Your password">
                                </fieldset>
                                <fieldset>
                                    <label>Confirm password</label>
                                    <input type="password" class="input-form password-input"
                                           placeholder="Confirm password">
                                </fieldset>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Sign Up</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30">Allready have an account? <a class="color-popup "
                                                                                         data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                                                                         data-bs-dismiss="modal">Login</a></div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="content-re-lo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title">Login</div>
                    <div class="register-form">
                        <div class="respond-register-form">
                            <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">
                                <fieldset>
                                    <label>Account</label>
                                    <input type="email" id="email" class="tb-my-input" name="email"
                                           placeholder="Email or user name">
                                </fieldset>
                                <fieldset>
                                    <label>Password</label>
                                    <input type="password" class="input-form password-input"
                                           placeholder="Your password">
                                </fieldset>
                                <div class="title-forgot t-al-right mb-20"><a class="t-al-right"
                                                                              data-bs-target="#exampleModalToggle3" data-bs-toggle="modal"
                                                                              data-bs-dismiss="modal">Forgot password</a>
                                </div>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Login</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30">Don’t you have an account? <a class="color-popup"
                                                                                          data-bs-target="#exampleModalToggle" data-bs-toggle="modal"
                                                                                          data-bs-dismiss="modal">Register</a></div>
                </div>

            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="content-re-lo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title">Forgot your password?</div>
                    <div class="register-form">
                        <div class="respond-register-form">
                            <form method="post" class="comment-form form-submit" action="#" accept-charset="utf-8">

                                <fieldset>
                                    <label>Password</label>
                                    <input type="password" class="input-form password-input"
                                           placeholder="Your password">
                                </fieldset>
                                <button class="sc-button" name="submit" type="submit">
                                    <span>Get new password</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="text-box text-center mt-30"><a class="color-popup"
                                                               data-bs-target="#exampleModalToggle2" data-bs-toggle="modal"
                                                               data-bs-dismiss="modal">Back to Login</a></div>
                </div>

            </div>
        </div>
    </div><!-- Modal -->


    <!-- Javascript -->
    <script src="<?= base_url('assets/js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery.nice-select.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/swiper-bundle.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/swiper.js') ?>"></script>
    <script src="<?= base_url('assets/js/jquery-countTo.js') ?>"></script>
    <script src="<?= base_url('assets/js/nouislider.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/price-ranger.js') ?>"></script>
    <script src="<?= base_url('assets/js/magnific-popup.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>