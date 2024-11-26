<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title>RNR Auto World | Administration</title>

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
    <!-- /preload -->

    <!-- /#page -->
    <div id="wrapper">
        <div id="page" class="clearfix">
            <?php include 'components/dashboard-sidebar.php' ?>
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
                                                          <rect id="Rectangle_171" data-name="Rectangle 171" width="742.172" height="248.684" fill="none"/>
                                                        </clipPath>
                                                      </defs>
                                                      <g id="Group_132" data-name="Group 132" clip-path="url(#clip-path)">
                                                        <path id="Path_430" data-name="Path 430" d="M248.684,124.342A124.342,124.342,0,1,1,124.342,0,124.342,124.342,0,0,1,248.684,124.342" fill="#54080b"/>
                                                        <path id="Path_431" data-name="Path 431" d="M85.859,66.105c4.62-5.953,10.033-11.173,17.347-13.482a70.772,70.772,0,0,1,14.9-2.79,151.532,151.532,0,0,1,34.061,1.037c11.955,1.63,23.211,5.672,34.235,10.352,14.841,6.3,17.133,25.47,4.324,35.23a61.485,61.485,0,0,1-17.606,8.989c-6.314,2.166-12.627,4.338-18.895,6.633-1.985.728-2.082,1.565-.694,3.127q6.675,7.512,13.389,14.987c10.968,12.2,22.15,24.222,32.867,36.642,10.285,11.918,15.96,25.757,16.449,41.271A124.3,124.3,0,1,0,7.559,167.133q39.129-50.53,78.3-101.028" fill="#d7001c"/>
                                                        <path id="Path_432" data-name="Path 432" d="M193.906,215.356c1.058-14.56-4.147-26.705-13.741-37.288q-19.368-21.363-38.709-42.749a104.735,104.735,0,0,1-8.1-9.71c-8.054-11.466-5.524-23.5,6.292-31.04,6.053-3.861,12.857-5.869,19.583-8.1,3.864-1.279,7.7-2.661,11.5-4.11a1.7,1.7,0,0,0,.162-.089c1.585-1.859-1.057-3.567-1.057-3.567l0,0a98.752,98.752,0,0,0-34.206-6.88c-.435-.01-.87-.035-1.3-.058v0l-7.94.146c-3.47.162-6.943.3-10.41.493a13.575,13.575,0,0,0-10.306,5.067Q97,88.291,88.5,99.242q-31.6,40.71-63.145,81.464-3.439,4.442-6.871,8.889a124.367,124.367,0,0,0,174.578,38.379q.393-6.311.841-12.618" fill="#d7001c"/>
                                                        <path id="Path_433" data-name="Path 433" d="M167.06,115.46q-6.717-7.473-13.389-14.986c-1.388-1.563-1.291-2.4.694-3.127,6.268-2.3,12.581-4.468,18.895-6.634a61.484,61.484,0,0,0,17.606-8.989c12.809-9.76,10.517-28.93-4.324-35.23-11.024-4.68-22.28-8.722-34.235-10.351A151.532,151.532,0,0,0,118.246,35.1a70.772,70.772,0,0,0-14.9,2.79C96.028,40.205,90.615,45.424,86,51.377Q45.109,104.064,4.289,156.8a123.571,123.571,0,0,0,9.443,24.391q5.883-7.606,11.761-15.217,31.542-40.755,63.145-81.463,8.5-10.95,17.171-21.767a13.581,13.581,0,0,1,10.306-5.067c3.467-.195,6.94-.33,10.41-.493l7.94-.145v0c.435.023.87.048,1.305.058a98.761,98.761,0,0,1,34.207,6.879l0,0s2.642,1.707,1.057,3.566a1.514,1.514,0,0,1-.162.09c-3.8,1.448-7.636,2.83-11.5,4.109-6.726,2.227-13.53,4.235-19.583,8.1-11.816,7.536-14.346,19.574-6.292,31.04a104.59,104.59,0,0,0,8.1,9.709Q160.9,142.009,180.3,163.34c9.6,10.583,14.8,22.728,13.741,37.288-.674,9.277-1.216,18.564-1.745,27.852a124.95,124.95,0,0,0,23.643-20.057c.189-3.593.35-7.186.455-10.781.505-17.257-5.247-32.538-16.467-45.54-10.717-12.419-21.9-24.438-32.867-36.642" fill="#fff"/>
                                                        <path id="Path_434" data-name="Path 434" d="M351.26,47.808q28.5,0,40.47,7.028t11.968,25.5a25.024,25.024,0,0,1-6.929,17.683q-7.716,8.208-21.731,9.63,13.542,0,20.157,5.512t6.613,15.589v23.621H368.9V132.055q0-6.768-5.669-9.369t-16.849-2.6H305.437v32.281H273.628V47.808Zm-4.881,49.761q13.541,0,18.66-2.613t5.118-10.693q0-7.444-2.992-9.822-4.41-3.485-18.9-3.484H305.437V97.569Z" fill="#fff"/>
                                                        <path id="Path_435" data-name="Path 435" d="M555.182,126.544l23.149,13.07-16.377,13.07-18.74-10.393q-6.93,6.613-20.628,9.133-9.607,1.731-25.668,1.732H479.282q-23.148,0-35.116-5.2Q425.9,139.929,425.9,118.67q0-11.965,5.354-17.794,6.141-6.613,21.889-8.661a41.187,41.187,0,0,1-7.244-7.4,19.12,19.12,0,0,1-3.149-10.866q0-15.43,14.172-21.1Q467.628,48.6,493.139,48.6q27.241,0,37.636,4.409,13.7,5.827,13.7,22.991v6.771H515.5q0-11.179-2.678-13.543-3.467-3.147-18.581-3.149-11.183,0-14.33.787-6.459,1.577-6.456,7.244,0,5.042,2.2,7.559,1.731,1.889,8.818,5.826l45.509,25.353a16.058,16.058,0,0,0,1.26-6.3,13.632,13.632,0,0,0-1.26-6.142h27.4q.787,4.412,1.024,7.244t.236,4.567a28.72,28.72,0,0,1-1.417,9.133q-.473,1.417-2.048,5.2m-58.578,8.5a101.838,101.838,0,0,0,14.645-.787,24.388,24.388,0,0,0,9.92-4.094L472.2,103.4q-10.08,1.575-12.834,4.172t-2.756,9.685q0,11.811,7.716,15.589,4.566,2.208,17.165,2.205Z" fill="#fff"/>
                                                        <path id="Path_436" data-name="Path 436" d="M671.867,47.808q28.5,0,40.47,7.028t11.967,25.5a25.023,25.023,0,0,1-6.928,17.683q-7.717,8.208-21.731,9.63,13.542,0,20.156,5.512t6.614,15.589v23.621H689.5V132.055q0-6.768-5.669-9.369t-16.85-2.6H626.043v32.281H594.234V47.808Zm-4.882,49.761q13.541,0,18.66-2.613t5.118-10.693q0-7.444-2.992-9.822-4.41-3.485-18.9-3.484H626.043V97.569Z" fill="#fff"/>
                                                        <path id="Path_437" data-name="Path 437" d="M303.64,168.488l16.654,32.145H310.079l-3.1-5.954H286.745l-2.953,5.954H273.286l16.363-32.145Zm-13.8,19.268h14.088l-7.117-13.41Z" fill="#d7001b"/>
                                                        <path id="Path_438" data-name="Path 438" d="M365.364,168.585v21.2a8.891,8.891,0,0,1-4.962,8.448q-4.964,2.64-15.08,2.639-10.893,0-15.347-2.131-5.471-2.614-5.47-9.73v-20.43h10.021v20.43q0,3.05,2.082,4.018,1.742.823,6.68.823h3.2a28.6,28.6,0,0,0,6.584-.436q2.274-.726,2.275-3.631v-21.2Z" fill="#d7001b"/>
                                                        <path id="Path_439" data-name="Path 439" d="M407.868,168.488v7.165H393.684v24.98H383.565v-24.98H369.623v-7.165Z" fill="#d7001b"/>
                                                        <path id="Path_440" data-name="Path 440" d="M453.036,178.185V190.6q0,4.945-4.938,7.757a19.872,19.872,0,0,1-9.924,2.376H434.2q-5.375,0-7.044-.016t-2.929-.081a16.073,16.073,0,0,1-9.295-2.614,8.6,8.6,0,0,1-4.163-7.455V178.17q0-4.21,4.357-7.116a15.19,15.19,0,0,1,8.569-2.566h14.91a18.971,18.971,0,0,1,9.876,2.424q4.55,2.717,4.551,7.273m-10.167,9.394v-5.844a6.977,6.977,0,0,0-1.694-5.07q-1.889-1.98-5.954-1.98h-8.037a6.087,6.087,0,0,0-4.817,1.787,7.349,7.349,0,0,0-1.573,5.022v6.085a7.076,7.076,0,0,0,1.549,4.877,6.166,6.166,0,0,0,4.841,1.739h8.037q4.114,0,5.881-1.642a6.472,6.472,0,0,0,1.767-4.974" fill="#d7001b"/>
                                                        <path id="Path_441" data-name="Path 441" d="M532.091,168.488H542.4l-13.362,32.145h-11.86L507.5,177.978l-7.5,22.656H488.327l-12.973-32.145h10.214l8.617,23.431,7.939-23.431H513.4l9.828,23.431Z" fill="#d7001b"/>
                                                        <path id="Path_442" data-name="Path 442" d="M586.7,178.185V190.6q0,4.945-4.938,7.757a19.872,19.872,0,0,1-9.924,2.376h-3.97q-5.375,0-7.044-.016t-2.929-.081a16.073,16.073,0,0,1-9.295-2.614,8.6,8.6,0,0,1-4.163-7.455V178.17q0-4.21,4.357-7.116a15.19,15.19,0,0,1,8.569-2.566h14.91a18.971,18.971,0,0,1,9.876,2.424q4.55,2.717,4.551,7.273m-10.167,9.394v-5.844a6.977,6.977,0,0,0-1.694-5.07q-1.889-1.98-5.954-1.98h-8.037a6.087,6.087,0,0,0-4.817,1.787,7.349,7.349,0,0,0-1.573,5.022v6.085a7.076,7.076,0,0,0,1.549,4.877,6.166,6.166,0,0,0,4.841,1.739h8.037q4.115,0,5.881-1.642a6.472,6.472,0,0,0,1.767-4.974" fill="#d7001b"/>
                                                        <path id="Path_443" data-name="Path 443" d="M616.907,168.488q8.762,0,12.441,2.16t3.68,7.839a7.7,7.7,0,0,1-2.13,5.437,10.222,10.222,0,0,1-6.681,2.961q4.163,0,6.2,1.694a5.893,5.893,0,0,1,2.033,4.792v7.262H622.329v-6.245a2.9,2.9,0,0,0-1.743-2.88,12.949,12.949,0,0,0-5.18-.8H602.819v9.924H593.04V168.488Zm-1.5,15.3q4.163,0,5.737-.8t1.574-3.288q0-2.288-.92-3.019-1.357-1.071-5.81-1.071H602.819v8.181Z" fill="#d7001b"/>
                                                        <path id="Path_444" data-name="Path 444" d="M672.772,193.469v7.165H640.385V168.489H650.5v24.98Z" fill="#d7001b"/>
                                                        <path id="Path_445" data-name="Path 445" d="M720.313,180.415l.1,5.382q0,7.128-2.9,10.424-3.873,4.412-14.232,4.412H677.566V168.488h24.108q9.681,0,14.16,2.813t4.479,9.114m-20.091,13.828q6.293,0,8.375-2.33,1.5-1.7,1.5-6.164v-4.8a4.452,4.452,0,0,0-1.743-3.932q-2.131-1.5-7.552-1.5H687.538v18.735Z" fill="#d7001b"/>
                                                        <path id="Path_446" data-name="Path 446" d="M730.878,38.486v1.021h-2.62V48.1H727V39.507h-2.634V38.486Z" fill="#fff"/>
                                                        <path id="Path_447" data-name="Path 447" d="M742.172,38.555V48.1h-1.255V40.982L737.745,48.1h-.883l-3.185-7.129V48.1h-1.255V38.555h1.352l3.53,7.888,3.53-7.888Z" fill="#fff"/>
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
                <!-- End Main Header -->

                <main id="main-content" class="site-main-dashboard">
                    <div class="page-dashboard-wrap">
                        <div class="dashboard">
                            <div class="row">
                                <div class="col-md-6">
                                    <h4 class="title-dashboard">Category Management</h4>
                                </div>
                                <div class="col-md-6 sellec-list-db">
                                    <div class="group-select">
                                        <button class="btn btn-primary" onclick="handleButtonClick()">
                                            Add Category
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal HTML -->
                            <div id="addCategoryModal" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeModal()">&times;</span>
                                    <h4>Add Category</h4>
                                    <form action="<?= base_url('category/create') ?>" method="post"
                                        enctype="multipart/form-data">
                                        <label for="categoryName">Category Name:</label>
                                        <input type="text" id="categoryName" name="categoryName" required>
                                        <div class="upload-image">
                                            <label for="categoryImage" class="uploadLabel">
                                            <i class="categoryImage"></i> <!-- Icon placeholder -->
                                            <img id="imagePreview" src="" alt="Image Preview"
                                                 style="display:none; width: 100%; height: 100px; object-fit: cover;">
                                            <span>Add a Photo</span>
                                            <input type="file" id="categoryImage" name="categoryImage" class="photoLoad" accept="image/* "
                                                   required>
                                            <input type="hidden" name="type8" id="type8" value="Document">
                                            </label>
                                        </div>

                                        <div class="col-md-6 sellec-list-db text-right mt-4">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </div>

                                    </form>
                                </div>
                            </div>

                            <script>
                                document.getElementById('categoryImage').addEventListener('change', function(event) {
                                    const imagePreview = document.getElementById('imagePreview');
                                    const file = event.target.files[0];

                                    if (file) {
                                        const reader = new FileReader();

                                        reader.onload = function(e) {
                                            imagePreview.src = e.target.result;
                                            imagePreview.style.display = 'block';
                                        };

                                        reader.readAsDataURL(file);
                                    } else {
                                        imagePreview.style.display = 'none';
                                    }
                                });

                            </script>
                            <div id="subCategoryModalfill" class="modal">
                                <div class="modal-content">
                                    <span class="close" onclick="closeSubCategoryModalfill()">&times;</span>
                                    <h4>Add Subcategories</h4>
                                    <form action="<?= base_url('subcategory') ?>" method="post"
                                        enctype="multipart/form-data">

                                        <label for="subcategoryName"> Sub Category Name:</label>
                                        <input type="text" id="model_name" name="model_name" required>

                                        <input type="hidden" id="main_category_id" name="main_category_id">

                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>
                            <!-- Edit Modal -->
                            <div id="editModal" class="modal" style="display: none;">
                                <div class="modal-content">
                                    <span class="close" onclick="closeEditModal()">&times;</span>
                                    <h4>Edit Category</h4>
                                    <form action="<?= base_url('category/updateName') ?>" method="POST" enctype="multipart/form-data">
                                        <!-- Hidden input to store category ID -->
                                        <input type="hidden" id="catg_id" name="catg_id" />

                                        <!-- Category Name Input -->
                                        <label for="category_name">Category Name:</label>
                                        <input type="text" id="category_name" name="category_name" required />

                                        <div class="upload-image">
                                            <label for="categoryImageEdit" class="uploadLabel h-50">
                                                <?php
                                                // Initialize variables to hold the document URL and ID
                                                $categoryImageUrl = '';
                                                ?>
                                                <span>Click to change the image</span>
                                                <img id="existingImagePreview" src="" alt="Current Image" style="object-fit: cover;"/>
                                                <input type="file" id="categoryImageEdit" name="categoryImage" accept="image/*" style="display: none;">
                                            </label>
                                        </div>

                                        <!-- Existing Image Preview -->
<!--                                        <div class="upload-image">-->
<!--                                            <label for="categoryImage" class="uploadLabel">-->
<!--                                                <span>Click to change the image</span>-->
<!--                                                <img id="existingImagePreview" src="" alt="Current Image" style="object-fit: cover;" />-->
<!--                                                <input type="file" id="categoryImage" name="categoryImage" accept="image/*">-->
<!--                                            </label>-->
<!--                                        </div>-->
                                        <!--New IMG-->
                                        <!--<div class="upload-image">
                                            <label for="categoryImage" class="uploadLabel">
                                                <i class="categoryImage"></i>
                                                <img id="imagePreview" src="" alt="Image Preview"
                                                     style="display:none; width: 100%; height: 100px; object-fit: cover;">
                                                <span>Add a Photo</span>
                                                <input type="file" id="categoryImage" name="categoryImage" class="photoLoad" accept="image/* "
                                                       required>
                                                <input type="hidden" name="type8" id="type8" value="Document">
                                            </label>
                                        </div>-->

                                        <!-- Hidden input to store the existing image path -->
                                        <input type="hidden" id="existingImagePath" name="existingImagePath">

                                        <button type="submit" class="btn btn-primary mt-10">Save</button>
                                        <script>
                                            document.getElementById('categoryImageEdit').addEventListener('change', function(event) {
                                                const imagePreview = document.getElementById('existingImagePreview');
                                                const file = event.target.files[0];

                                                if (file) {
                                                    const reader = new FileReader();

                                                    reader.onload = function(e) {
                                                        imagePreview.src = e.target.result;
                                                        imagePreview.style.display = 'block';
                                                    };

                                                    reader.readAsDataURL(file);
                                                } else {
                                                    imagePreview.style.display = 'none';
                                                }
                                            });

                                        </script>
                                    </form>
                                </div>
                            </div>




                            <!-- sub Cateory Edit Modal -->
                            <div id="editModal1" class="modal" style="display: none;">
                                <div class="modal-content">
                                    <span class="close" onclick="closeEditModalsub()">&times;</span>
                                    <h4>Edit Sub-Category</h4>
                                    <form action="<?= base_url('category/updateNamesub') ?>" method="POST">
                                        <input type="hidden" id="subcatg_id" name="subcatg_id" />
                                        <label for="subcategory_name">Sub-Category Name:</label>
                                        <input type="text" id="subcategory_name" name="model_name" required />
                                        <button type="submit" class="btn btn-primary">Save</button>
                                    </form>
                                </div>
                            </div>

                            <script>
                                function handleButtonClick() {
                                    document.getElementById('addCategoryModal').style.display = 'block';
                                }
                                function closeModal() {
                                    document.getElementById('addCategoryModal').style.display = 'none';
                                }
                                function handleButtonClickSub(id) {
                                    var modalName = 'subCategoryModal' + id;
                                    console.log(modalName, 'modalName');
                                    var modalId = document.getElementById(modalName);
                                    console.log(modalId, 'modalId');
                                    // Open the modal
                                    modalId.style.display = 'block';

                                }
                                function closeSubCategoryModal(id) {
                                    var modalName = 'subCategoryModal' + id;
                                    var modal = document.getElementById(modalName);

                                    if (modal) {
                                        modal.style.display = 'none';
                                    } else {
                                        console.error('Modal with ID ' + modalName + ' not found.');
                                    }
                                }
                                function handleButtonClickSubfill(id) {
                                    var modal = document.getElementById('subCategoryModalfill');

                                    if (modal) {
                                        document.getElementById('main_category_id').value = id;
                                        modal.style.display = 'block';
                                    } else {
                                        console.error('Modal with ID subCategoryModalfill not found.');
                                    }
                                }
                                function closeSubCategoryModalfill() {
                                    document.getElementById('subCategoryModalfill').style.display = 'none';
                                }

                                window.onclick = function (event) {
                                    if (event.target == document.getElementById('subCategoryModal')) {
                                        closeSubCategoryModal();
                                    }
                                }
                                function confirmDelete(event, id) {
                                    event.preventDefault();

                                    const url = `/category/delete/${id}`;

                                    if (confirm('Are you sure you want to delete this category and all its subcategories?')) {
                                        fetch(url, {
                                            method: 'DELETE', // HTTP method for deletion
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-Requested-With': 'XMLHttpRequest'
                                            }
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.message === 'Category and its subcategories deleted') {
                                                    alert('Deleted successfully.');
                                                    location.reload(); // Reload the page to reflect changes
                                                } else {
                                                    alert('Failed to delete category.');
                                                }
                                            })
                                            .catch(error => {
                                                alert('An error occurred.');
                                                console.error('Error:', error);
                                            });
                                    }
                                }
                                // function openEditModal(id, category_name, ) {
                                //
                                //     console.log(category_name, 'element');
                                //
                                //     $('#catg_id').val(id);
                                //     $('#category_name').val(category_name);
                                //     $('#editModal').show();
                                // }
                                // function editCategoryForm() {
                                //     const id = document.getElementById('edit_catg_id').value;
                                //     const category_name = document.getElementById('edit_catg_name').value;
                                //
                                //     $('#editCategoryForm').on('submit', function (event) {
                                //         event.preventDefault();
                                //
                                //         const data = {
                                //             category_name: category_name
                                //         };
                                //
                                //         fetch(`/category/updateName/${id}`, {
                                //             method: 'POST',
                                //             headers: {
                                //                 'Content-Type': 'application/json',
                                //             },
                                //             body: JSON.stringify(data),
                                //         })
                                //             .then(response => response.json())
                                //             .then(data => {
                                //                 if (data.message) {
                                //                     alert(data.message);
                                //                     closeEditModal();
                                //                 } else if (data.errors) {
                                //
                                //                     alert(JSON.stringify(data.errors));
                                //                 }
                                //             })
                                //             .catch((error) => {
                                //                 console.error('Error:', error);
                                //             });
                                //     });
                                // }
                                // function closeEditModal() {
                                //     document.getElementById('editModal').style.display = 'none';
                                // }
                                // Open the edit modal and populate fields with category data, including the image
                                function openEditModal(id, category_name, image_url) {
                                    console.log(category_name, 'element');
                                    console.log(image_url, 'image_url');

                                    // Set values in the modal
                                    $('#catg_id').val(id);
                                    $('#category_name').val(category_name);

                                    // Update the image preview
                                    if (image_url) {
                                        $('#existingImagePreview').attr('src', image_url);
                                    }

                                    // Show the modal
                                    $('#editModal').show();
                                }

                                // Handle the edit category form submission with image upload
                                function editCategoryForm() {
                                    // Submit form via AJAX using FormData
                                    $('#editCategoryForm').on('submit', function (event) {
                                        event.preventDefault();

                                        // Use the ID and name entered in the modal
                                        const id = document.getElementById('catg_id').value;
                                        const category_name = document.getElementById('category_name').value;
                                        const image = document.getElementById('categoryImage').files[0]; // Get the uploaded image file

                                        // Create FormData object to send the form data, including the file
                                        const formData = new FormData();
                                        formData.append('category_name', category_name);
                                        formData.append('categoryImage', image); // Add the image file to the FormData
                                        formData.append('id', id);

                                        // Send the request
                                        fetch(`/category/updateName/${id}`, {
                                            method: 'POST',
                                            body: formData, // Use FormData for sending files
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.message) {
                                                    alert(data.message);
                                                    closeEditModal(); // Close the modal on success
                                                } else if (data.errors) {
                                                    alert(JSON.stringify(data.errors)); // Handle validation errors
                                                }
                                            })
                                            .catch((error) => {
                                                console.error('Error:', error);
                                            });
                                    });
                                }
                                // Preview the new image when selected
                                document.getElementById('categoryImage').addEventListener('change', function(event) {
                                    const file = event.target.files[0]; // Get the selected file
                                    if (file) {
                                        const reader = new FileReader(); // Create a FileReader to read the file
                                        reader.onload = function(e) {
                                            $('#existingImagePreview').attr('src', e.target.result); // Update the image preview with the new file
                                        };
                                        reader.readAsDataURL(file); // Read the file as a data URL
                                    }
                                });

                                function closeEditModal() {
                                    document.getElementById('editModal').style.display = 'none';
                                }
                                function openEditModalsub(element) {
                                    const id = $(element).data('id');
                                    const model_name = $(element).data('name');

                                    $('.modal').each(function () {
                                        if ($(this).is(':visible')) {
                                            $(this).hide(); // or use .fadeOut(), etc.
                                        }
                                    });

                                    closeSubCategoryModal(id);

                                    console.log('ID:', id);
                                    console.log('Model Name:', model_name);

                                    $('#subcatg_id').val(id);
                                    $('#subcategory_name').val(model_name);
                                    $('#editModal1').show();
                                }
                                function closeEditModalsub() {
                                    $('#editModal1').hide(); // Make sure this matches the modal ID in HTML
                                }

                                $(document).ready(function () {
                                    $('#editCategoryFormsub').on('submit', function (event) {
                                        event.preventDefault();

                                        const id = $('#subcatg_id').val();
                                        const model_name = $('#subcategory_name').val();

                                        const data = {
                                            model_name: model_name
                                        };

                                        fetch(`/category/updateNamesub/${id}`, {
                                            method: 'POST',
                                            headers: {
                                                'Content-Type': 'application/json',
                                            },
                                            body: JSON.stringify(data),
                                        })
                                            .then(response => response.json())
                                            .then(data => {
                                                if (data.message) {
                                                    alert(data.message);
                                                    closeEditModalsub();
                                                } else if (data.errors) {
                                                    alert(JSON.stringify(data.errors));
                                                }
                                            })
                                            .catch(error => console.error('Error:', error));
                                    });
                                });
                            </script>
                            <style>
                                .btn {
                                    background-color: #2e445c;
                                    border: none;
                                    color: white;
                                    padding: 15px 32px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    border-radius: 12px;
                                    width: 180px;

                                }

                                .btn-primary:hover {
                                    background-color: #062240;
                                }

                                /* The Modal (background) */
                                .modal {
                                    display: none;
                                    position: fixed;
                                    z-index: 100;
                                    left: 0;
                                    top: 0;
                                    width: 100%;
                                    height: 100%;
                                    overflow: auto;
                                    background-color: rgba(0, 0, 0, 0.4);
                                }

                                /* Modal Content/Box */
                                .modal-content {
                                    background-color: #fff;
                                    margin: 15% auto;
                                    padding: 20px;
                                    border: 1px solid #888;
                                    width: 80%;
                                    max-width: 400px;
                                    border-radius: 10px;
                                    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
                                    animation: fadeIn 0.5s;
                                }

                                /* Close Button */
                                .close {
                                    color: #aaa;
                                    float: right;
                                    /* Align to the right */
                                    font-size: 28px;
                                    font-weight: bold;
                                    position: absolute;
                                    /* Position it absolutely within modal-content */
                                    top: 10px;
                                    /* Distance from the top */
                                    right: 15px;
                                    /* Distance from the right */
                                }

                                /* Fade-in animation */
                                @keyframes fadeIn {
                                    from {
                                        opacity: 0;
                                    }

                                    to {
                                        opacity: 1;
                                    }
                                }

                                /* The Close Button */
                                .close {
                                    color: #aaa;
                                    float: right;
                                    font-size: 28px;
                                    font-weight: bold;
                                }

                                .close:hover,
                                .close:focus {
                                    color: black;
                                    text-decoration: none;
                                    cursor: pointer;
                                }

                                .modal form {
                                    display: flex;
                                    flex-direction: column;
                                }

                                .modal form label {
                                    margin-bottom: 8px;
                                    font-size: 14px;
                                    color: #333;
                                }

                                .modal form input {
                                    margin-bottom: 15px;
                                    padding: 8px;
                                    font-size: 14px;
                                    border: 1px solid #ccc;
                                    border-radius: 4px;
                                    box-sizing: border-box;
                                }

                                .modal form .btn-primary {
                                    font-size: 14px;
                                    padding: 10px 20px;
                                    border: none;
                                    border-radius: 4px;
                                    background-color: #007bff;
                                    color: white;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease;
                                }

                                .modal form .btn-primary:hover {
                                    background-color: #0056b3;
                                }

                                /*dot*/
                                ul.features-images {
                                    list-style-type: none;
                                    padding-left: 0;
                                    margin: 0;
                                }

                                /* subbutton */
                                .action-button {
                                    background-color: #4db5c9;
                                    border: none;
                                    color: white;
                                    padding: 10px 20px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin: 4px 2px;
                                    cursor: pointer;
                                    border-radius: 4px;
                                }

                                .action-button:hover {
                                    background-color: #0d4f5c;
                                }

                                .action-button1 {
                                    background-color: #8080FF;
                                    border: none;
                                    color: white;
                                    padding: 10px 20px;
                                    text-align: center;
                                    text-decoration: none;
                                    display: inline-block;
                                    font-size: 16px;
                                    margin: 4px 2px;
                                    cursor: pointer;
                                    border-radius: 4px;
                                }

                                .action-button1:hover {
                                    background-color: #333380;
                                }

                                .btn-dlt {
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    padding: 16px 16px;
                                    background-color: #2d2e45;
                                    color: white;
                                    border: none;
                                    border-radius: 8px;
                                    text-align: center;
                                    text-decoration: none;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease;
                                    min-width: 10px;
                                    min-height: 10px;

                                }

                                .btn-dlt svg {
                                    vertical-align: middle;
                                    width: 15px;
                                    /* Adjust size of SVG icon */
                                    height: 15px;
                                    /* Adjust size of SVG icon */
                                }

                                .btn-dlt:hover {
                                    background-color: #c82333;
                                }

                                .btn-edit {
                                    display: inline-flex;
                                    align-items: center;
                                    justify-content: center;
                                    padding: 16px 16px;
                                    background-color: #2d2e45;
                                    color: white;
                                    border: none;
                                    border-radius: 8px;
                                    text-align: center;
                                    text-decoration: none;
                                    cursor: pointer;
                                    transition: background-color 0.3s ease;
                                    min-width: 10px;
                                    min-height: 10px;

                                }

                                .btn-edit svg {
                                    vertical-align: middle;
                                    width: 15px;
                                    /* Adjust size of SVG icon */
                                    height: 15px;
                                    /* Adjust size of SVG icon */
                                }

                                .btn-edit:hover {
                                    background-color: #fAD02C;
                                }

                                .unique-table {
                                    width: 100%;
                                    border-collapse: collapse;
                                }

                                .unique-table th,
                                .unique-table td {
                                    padding: 8px 16px;
                                    text-align: left;
                                }

                                .unique-table th,
                                .unique-table td {
                                    padding-right: 20px;
                                }

                                .unique-table th:last-child,
                                .unique-table td:last-child {
                                    padding-right: 0;
                                }

                                .image-styles {
                                    height: 111px;
                                    text-align: center;
                                    display: flex;
                                    justify-content: center;
                                    align-items: center;
                                    width: 100%;
                                    object-fit: cover;

                                }

                                .images {
                                    justify-content: center;
                                    align-items: center;
                                    text-align: center;
                                    height: 111px;
                                }

                                .images img {
                                    height: auto;
                                    width: auto;
                                }
                            </style>
                            <!-- <div class="show-dashboard">
                                <span class="btn-show-dashboard">
                                    <i class="icon-th-list"></i>
                                    Show Dashboard
                                </span>
                            </div> -->
                            <?php foreach ($categories as $category): ?>
                                <div id="subCategoryModal<?php echo $category['id']; ?>" class="modal"
                                    style="display:none;">
                                    <div class="modal-content">
                                        <span class="close"
                                            onclick="closeSubCategoryModal('<?php echo $category['id']; ?>')">&times;</span>
                                        <h4><?php echo $category['category_name']; ?> - Subcategories</h4>
                                        <div id="subCategoryContent<?php echo $category['id']; ?>">
                                            <?php if (empty($category['sub_categories'])): ?>
                                                <p>No subcategories</p>
                                            <?php else: ?>
                                                <table class="unique-table">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $rowNumber = 1;
                                                        foreach ($category['sub_categories'] as $sub_category):
                                                            ?>
                                                            <tr>
                                                                <td>
                                                                    <?= $rowNumber++; ?>
                                                                </td>

                                                                <td>
                                                                    <?= htmlspecialchars($sub_category['model_name']) ?>
                                                                </td>
                                                                <td>
                                                                    <a class="btn-edit" title="Edit"
                                                                        data-id="<?= htmlspecialchars($sub_category['id'], ENT_QUOTES, 'UTF-8'); ?>"
                                                                        data-name="<?= htmlspecialchars($sub_category['model_name'], ENT_QUOTES, 'UTF-8'); ?>"
                                                                        onclick="openEditModalsub(this)">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </td>
                                                            </tr>

                                                        <?php endforeach; ?>
                                                    </tbody>

                                                </table>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>


                            <div class="table-listing-inventory">
                                <table class="listing-inventory">
                                    <tbody>
                                        <?php foreach ($categories as $category): ?>
                                            <tr>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <ul class="features-images">
                                                            <li>
                                                                <h5><?= htmlspecialchars($category['category_name']) ?>
                                                                </h5>
                                                                <?php if (isset($category['image_url'])): ?>
                                                                    <div class="listing-item active"
                                                                        title="<?= htmlspecialchars($category['category_name']) ?>">
                                                                        <div class="images">
                                                                            <img src="<?= $category['image_url']; ?>"
                                                                                class="swiper-image tfcl-light-gallery"
                                                                                alt="Category Image">
                                                                        </div>
                                                                    </div>
                                                                <?php else: ?>
                                                                    No images available.
                                                                <?php endif; ?>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <!-- Button element -->
                                                        <button id="actionButton" class="action-button"
                                                            onclick="handleButtonClickSub(<?= $category['id']; ?>)">Sub
                                                            Category</button>
                                                    </div>
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <!-- Button element -->
                                                        <button id="actionButton1" class="action-button1"
                                                            onclick="handleButtonClickSubfill(<?= $category['id']; ?>)">Add
                                                            Sub
                                                            Category</button>
                                                    </div>
                                                </td>
                                                <td>

                                                </td>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <a class="btn-edit" title="Edit" data-id="CATEGORY_ID"
                                                            data-name="CATEGORY_NAME"
                                                            onclick="openEditModal(<?= $category['id']; ?>, '<?= $category['category_name']; ?>','<?= $category['image_url']; ?>')">
                                                            <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z"
                                                                    fill="white" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>

                                                <td>


                                                </td>
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <a href="#" class="btn-dlt" data-bs-toggle="tooltip"
                                                            data-bs-placement="top" title="Delete"
                                                            data-id="<?= $category['id'] ?>"
                                                            onclick="confirmDelete(event, <?= $category['id'] ?>)">
                                                            <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z"
                                                                    fill="white" />
                                                            </svg>
                                                        </a>
                                                    </div>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
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
                    <div class="text-box text-center mt-30"><a class="color-popup" data-bs-target="#exampleModalToggle2"
                            data-bs-toggle="modal" data-bs-dismiss="modal">Back to Login</a></div>
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
    <script src="<?= base_url('assets/js/apexcharts.js') ?>"></script>
    <script src="<?= base_url('assets/js/line-chart.js') ?>"></script>
    <script src="<?= base_url('assets/js/wow.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.min.js') ?>"></script>
    <script src="<?= base_url('assets/js/map.js') ?>"></script>
    <script src="<?= base_url('assets/js/main.js') ?>"></script>

</body>

</html>