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
                                <div class="col-md-3">
                                    <h4 class="title-dashboard" id="inventory-title">My Inventory</h4>
                                </div>

                                <script>
                                    function getMainVehicleType() {
                                        const urlParams = new URLSearchParams(window.location.search);
                                        return urlParams.get('main_vehicle_type');
                                    }

                                    document.addEventListener("DOMContentLoaded", function () {
                                        const mainVehicleType = getMainVehicleType();

                                        // change the title
                                        const titleElement = document.getElementById("inventory-title");
                                        if (titleElement && mainVehicleType) {
                                            titleElement.textContent = `Inventory - ${mainVehicleType}`
                                        }

                                    });
                                </script>

                                <div class="col-md-4">
                                    <form id="filter-list-car-side-bar" method="get"
                                        action="<?= site_url('admin/car_listing') ?>">
                                        <div class="input-group">
                                            <input type="text" name="title" class="form-control" placeholder="Search Title" value="<?= esc($request['title'] ?? '') ?>">
                                            <button type="submit" class="btn-search" aria-label="Search">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                                                    version="1.1" id="Capa_1" viewBox="0 0 488.4 488.4"
                                                    xml:space="preserve">
                                                    <g>
                                                        <g>
                                                            <path
                                                                d="M0,203.25c0,112.1,91.2,203.2,203.2,203.2c51.6,0,98.8-19.4,134.7-51.2l129.5,129.5c2.4,2.4,5.5,3.6,8.7,3.6 s6.3-1.2,8.7-3.6c4.8-4.8,4.8-12.5,0-17.3l-129.6-129.5c31.8-35.9,51.2-83,51.2-134.7c0-112.1-91.2-203.2-203.2-203.2 S0,91.15,0,203.25z M381.9,203.25c0,98.5-80.2,178.7-178.7,178.7s-178.7-80.2-178.7-178.7s80.2-178.7,178.7-178.7 S381.9,104.65,381.9,203.25z" />
                                                        </g>
                                                    </g>
                                                </svg>
                                            </button>
                                        </div>


                                    </form>

                                    <div class="total-info">

                                        <!-- <p>Total Pages: <?= $totalPages ?></p>
                                        <p>current Pages: <?= $currentPage ?></p> -->

                                    </div>

                                </div>

                                <div class="col-md-3 sellec-list-db">
<!--                                    <div class="group-select">-->
<!--                                        <div class="nice-select" tabindex="0">-->
<!--                                            <span class="current">All</span>-->
<!--                                            <ul class="list">-->
<!--                                                <li class="option" onclick="filterByVehicleType('All')">All</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Car')">Cars</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Truck')">Trucks</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Van')">Vans</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Bus')">Buses</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Bike')">Bikes</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Machinery')">Machinery</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Farming Product')">Farming Products</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Camping Van')">Camping Vans</li>-->
<!--                                                <li class="option" onclick="filterByVehicleType('Handy Cap Vehicle')">Handy Cap Vehicles</li>-->
<!--                                            </ul>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>

                                <div class="col-md-2 sellec-list-db">
                                    <div class="group-select">
                                        <div class="nice-select" tabindex="0">
                                            <span class="current">sorts</span>
                                            <ul class="list">
                                                <li data-value="recently-added" class="option">Recently Added</li>
                                                <li data-value="early-added" class="option">Early Added</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>


                            </div>

                            <script>
                                document.addEventListener('DOMContentLoaded', function () {
                                    const selectElement = document.querySelector('.nice-select');
                                    const currentText = selectElement.querySelector('.current');

                                    // Listen for clicks on the dropdown options
                                    selectElement.addEventListener('click', function (event) {
                                        const clickedElement = event.target.closest('.option');

                                        if (clickedElement) {
                                            const sortOrder = clickedElement.getAttribute('data-value');
                                            const sortText = clickedElement.textContent;

                                            // Update the current sort text
                                            currentText.textContent = sortText;

                                            // Redirect to the same page with the sort_order parameter
                                            if (sortOrder) {
                                                window.location.href = `?sort_order=${sortOrder}`;
                                            }
                                        }
                                    });

                                    // Set the initial sort text based on the URL parameter
                                    const urlParams = new URLSearchParams(window.location.search);
                                    const sortOrder = urlParams.get('sort_order') || 'recently-added';
                                    const initialOption = selectElement.querySelector(`.option[data-value="${sortOrder}"]`);

                                    if (initialOption) {
                                        currentText.textContent = initialOption.textContent;
                                    }
                                });


                                //function filterByVehicleType(type) {
                                //    const baseURL = '<?php //= base_url('admin/car_listing'); ?>//';  // Base URL for the car listing page
                                //    const url = new URL(window.location.href);
                                //
                                //    // If 'All' is selected, remove the vehicle_type param, otherwise set it
                                //    if (type === 'All') {
                                //        url.searchParams.delete('vehicle_type');
                                //    } else {
                                //        url.searchParams.set('vehicle_type', type);
                                //    }
                                //
                                //    // Update the URL without reloading the page using history.pushState
                                //    window.history.pushState({}, '', url.href);
                                //
                                //    // Call the filter logic immediately to apply the filter after URL update
                                //    applyVehicleTypeFilter();
                                //}

                                // // Function to apply the filtering logic
                                // function applyVehicleTypeFilter() {
                                //     const params = new URLSearchParams(window.location.search);
                                //     const vehicleType = params.get('vehicle_type')?.trim().toLowerCase();
                                //
                                //     // Get all the rows in the vehicle list
                                //     const rows = document.querySelectorAll('#vehicle-list tr');
                                //
                                //     if (vehicleType) {
                                //         // Loop through each row and check the data-type attribute
                                //         rows.forEach(row => {
                                //             const rowVehicleType = row.getAttribute('data-type')?.trim().toLowerCase();
                                //
                                //             // If the vehicle type matches, show the row; otherwise, hide it
                                //             if (rowVehicleType === vehicleType) {
                                //                 row.style.display = '';
                                //             } else {
                                //                 row.style.display = 'none';
                                //             }
                                //         });
                                //     } else {
                                //         // If no vehicle type is specified, show all rows
                                //         rows.forEach(row => {
                                //             row.style.display = '';
                                //         });
                                //     }
                                // }

                                // Call the filter logic on page load to handle the initial filtering
                                // window.onload = applyVehicleTypeFilter;

                            </script>
                            <!-- <div class="show-dashboard">
                                <span class="btn-show-dashboard">
                                    <i class="icon-th-list"></i>
                                    Show Dashboard
                                </span>
                            </div> -->
<!--                            <script>-->
<!--                                document.addEventListener('DOMContentLoaded', function () {-->
<!--                                    const urlParams = new URLSearchParams(window.location.search);-->
<!--                                    const mainVehicleType = urlParams.get('main_vehicle_type');-->
<!---->
<!--                                    console.log("Main Vehicle Type from URL:", mainVehicleType);-->
<!---->
<!--                                    if (mainVehicleType) {-->
<!--                                        filterVehicles(mainVehicleType);-->
<!--                                    }-->
<!---->
<!--                                    function filterVehicles(mainVehicleType) {-->
<!--                                        // get all table rows-->
<!--                                        const rows = document.querySelectorAll('#vehicle-list tr');-->
<!---->
<!--                                        rows.forEach(function (row) {-->
<!--                                            const rowType = row.getAttribute('data-type');-->
<!--                                            console.log("Row Type:", rowType, "Main Vehicle Type:", mainVehicleType);  // Debugging log-->
<!---->
<!--                                            if (rowType === mainVehicleType) {-->
<!--                                                row.style.display = 'table-row';-->
<!--                                            } else {-->
<!--                                                row.style.display = 'none';-->
<!--                                            }-->
<!--                                        });-->
<!---->
<!--                                        const visibleRows = Array.from(rows).filter(row => row.style.display !== 'none');-->
<!--                                        if (visibleRows.length === 0) {-->
<!--                                            document.getElementById('vehicle-list').innerHTML = `<tr><td>No vehicles found for ${mainVehicleType}.</td></tr>`;-->
<!--                                        }-->
<!--                                    }-->
<!---->
<!--                                })-->
<!--                            </script>-->

                            <div class="table-listing-inventory">
                                <table class="listing-inventory">
                                    <tbody id="vehicle-list">
                                        <?php foreach ($cars  as $car):
                                            // Determine if the car is published
                                            $isPublished = htmlspecialchars($car['ad_status']) == 'published';
                                            ?>
                                            <tr data-type="<?= htmlspecialchars($car['main_vehicle_type']) ?>">
                                                <td>
                                                    <div class="tfcl-listing-listing">
                                                        <div class="features-images">
                                                            <?php
                                                            // Check if images are available
                                                            if (isset($car['images'])) {
                                                                // Decode the JSON images into an associative array
                                                                $images = json_decode($car['images'], true);

                                                                // Check if there are any images
                                                                if (!empty($images)) {
                                                                    // Access the first image in the array
                                                                    $firstImage = $images[0];

                                                                    // Check if the first image is of type 'image'
                                                                    if ($firstImage['image_type'] == 'image') {
                                                                        echo '<div class="listing-item active" title="' . $car['title'] . '">';
                                                                        echo '<div class="images">';
                                                                        echo '<img src="' . base_url('/' . $firstImage['img_url']) . '" class="swiper-image tfcl-light-gallery" alt="images" />';
                                                                        echo '</div></div>';
                                                                    }
                                                                } else {
                                                                    echo 'No images available.';
                                                                }
                                                            } else {
                                                                echo 'No images available.';
                                                            }
                                                            ?>

                                                            <!-- <ul class="actions-list">

                                                                <li>
                                                                    <a class="btn-action" title="Update Status"
                                                                        onclick="openPopupNew(<?= $car['id'] ?>, '<?= $car['ad_status'] ?>');">
                                                                        <svg width="12" height="12" viewBox="0 0 12 12"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>


                                                                <li>
                                                                    <a href="<?= base_url('cars/' . $car['id']); ?>"
                                                                        target="_blank" class="btn-action"
                                                                        data-bs-toggle="tooltip" data-bs-placement="top"
                                                                        title="View">
                                                                        <svg width="20" height="14" viewBox="0 0 20 14"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M9.9987 0.75C5.83203 0.75 2.2737 3.34167 0.832031 7C2.2737 10.6583 5.83203 13.25 9.9987 13.25C14.1654 13.25 17.7237 10.6583 19.1654 7C17.7237 3.34167 14.1654 0.75 9.9987 0.75ZM9.9987 11.1667C7.6987 11.1667 5.83203 9.3 5.83203 7C5.83203 4.7 7.6987 2.83333 9.9987 2.83333C12.2987 2.83333 14.1654 4.7 14.1654 7C14.1654 9.3 12.2987 11.1667 9.9987 11.1667ZM9.9987 4.5C8.61537 4.5 7.4987 5.61667 7.4987 7C7.4987 8.38333 8.61537 9.5 9.9987 9.5C11.382 9.5 12.4987 8.38333 12.4987 7C12.4987 5.61667 11.382 4.5 9.9987 4.5Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" class="btn-action" data-bs-toggle="tooltip"
                                                                        data-bs-placement="top" title="Tooltip on top">
                                                                        <svg width="18" height="14" viewBox="0 0 18 14"
                                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z"
                                                                                fill="white" />
                                                                        </svg>
                                                                    </a>
                                                                </li>
                                                            </ul> -->
                                                        </div>



                                                        <style>
                                                            .actions-list {
                                                                display: flex;
                                                                list-style-type: none;
                                                                padding: 0;
                                                                margin: 0;
                                                            }

                                                            .actions-list li {
                                                                margin-right: 20px;
                                                                /* Space between buttons */
                                                            }

                                                            .btn-action {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                padding: 12px 16px;
                                                                /* Adjust padding for larger buttons */
                                                                background-color: #2d2e45;
                                                                color: white;
                                                                border: none;
                                                                border-radius: 8px;
                                                                /* Larger border-radius for a rounded look */
                                                                text-align: center;
                                                                text-decoration: none;
                                                                cursor: pointer;
                                                                transition: background-color 0.3s ease;
                                                                min-width: 10px;
                                                                /* Minimum width for the button */
                                                                min-height: 10px;
                                                                /* Minimum height for the button */
                                                            }

                                                            .btn-action svg {
                                                                vertical-align: middle;
                                                                width: 15px;
                                                                /* Increase size of SVG icon */
                                                                height: 15px;
                                                                /* Increase size of SVG icon */
                                                            }

                                                            .btn-action:hover {
                                                                background-color: #0056b3;
                                                                /* Darker shade on hover */
                                                            }

                                                            .btn-edit {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                padding: 12px 16px;
                                                                /* Adjust padding for larger buttons */
                                                                background-color: #2d2e45;
                                                                color: white;
                                                                border: none;
                                                                border-radius: 8px;
                                                                /* Larger border-radius for a rounded look */
                                                                text-align: center;
                                                                text-decoration: none;
                                                                cursor: pointer;
                                                                transition: background-color 0.3s ease;
                                                                min-width: 10px;
                                                                /* Minimum width for the button */
                                                                min-height: 10px;
                                                                /* Minimum height for the button */
                                                            }

                                                            .btn-edit svg {
                                                                vertical-align: middle;
                                                                width: 15px;
                                                                /* Increase size of SVG icon */
                                                                height: 15px;
                                                                /* Increase size of SVG icon */
                                                            }

                                                            .btn-edit {
                                                                background-color: #2d2e45;
                                                                /* Yellow background for edit button */
                                                                color: black;
                                                                /* Change text color for contrast */
                                                            }

                                                            .btn-edit:hover {
                                                                background-color: #d4c011;
                                                                /* Darker yellow for hover effect */
                                                            }

                                                            .btn-dlt {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                padding: 12px 16px;
                                                                /* Adjust padding for larger buttons */
                                                                background-color: #2d2e45;
                                                                /* Red color for delete button */
                                                                color: white;
                                                                border: none;
                                                                border-radius: 8px;
                                                                /* Larger border-radius for a rounded look */
                                                                text-align: center;
                                                                text-decoration: none;
                                                                cursor: pointer;
                                                                transition: background-color 0.3s ease;
                                                                min-width: 10px;
                                                                /* Minimum width for the button */
                                                                min-height: 10px;
                                                                /* Minimum height for the button */
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
                                                                /* Darker red for hover effect */
                                                            }





                                                            .btn-inq {
                                                                display: inline-flex;
                                                                align-items: center;
                                                                justify-content: center;
                                                                padding: 12px 16px;
                                                                /* Adjust padding for larger buttons */
                                                                background-color: #2d2e45;
                                                                /* Red color for delete button */
                                                                color: white;
                                                                border: none;
                                                                border-radius: 8px;
                                                                /* Larger border-radius for a rounded look */
                                                                text-align: center;
                                                                text-decoration: none;
                                                                cursor: pointer;
                                                                transition: background-color 0.3s ease;
                                                                min-width: 10px;
                                                                /* Minimum width for the button */
                                                                min-height: 10px;
                                                                /* Minimum height for the button */
                                                            }

                                                            .btn-inq svg {
                                                                vertical-align: middle;
                                                                width: 15px;
                                                                /* Adjust size of SVG icon */
                                                                height: 15px;
                                                                /* Adjust size of SVG icon */
                                                            }

                                                            .btn-inq:hover {
                                                                background-color: #ff5a10;
                                                                /* Darker red for hover effect */
                                                            }

                                                            .btn-inq.disabled {
                                                                pointer-events: none;
                                                                opacity: 0.5;
                                                            }


                                                            /* .popup-modal {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    display: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    position: fixed;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    z-index: 1000;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    left: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    top: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    height: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    overflow: auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: rgba(0, 0, 0, 0.5);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                .popup-content {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    margin: 15% auto;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    padding: 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    border: 1px solid #888;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    width: 300px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    text-align: center;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                .close-btn1 {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    color: #76b5c5;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    float: right;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    font-size: 28px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    font-weight: bold;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                .close-btn1:hover,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                .close-btn1:focus {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    color: black;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    text-decoration: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                .popup-option {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    margin: 10px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    padding: 10px 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    border: 1px solid #ccc;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: #fff;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    /* White background for options */
                                                            /* color: #333;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    /* Dark text color */
                                                            /* border-radius: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                .popup-option:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: #f0f0f0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    /* Slightly lighter gray on hover */
                                                            /* } */

                                                            /* .popup-option.selected {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: #007bff;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    /* Blue background for selected option */
                                                            /* color: white; */
                                                            /* White text for selected option */
                                                            /* }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                #save-btn {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: #007bff;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    /* Blue color for save button */
                                                            /* color: white;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    border: none;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    padding: 10px 20px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    cursor: pointer;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    border-radius: 5px;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                } */
                                                            /* 
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                #save-btn:hover {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    background-color: #0056b3;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                    /* Darker blue on hover */
                                                            /* }  */
                                                            .switch {
                                                                position: relative;
                                                                display: inline-block;
                                                                width: 60px;
                                                                height: 34px;
                                                            }

                                                            .switch input {
                                                                opacity: 0;
                                                                width: 0;
                                                                height: 0;
                                                            }

                                                            .slider {
                                                                position: absolute;
                                                                cursor: pointer;
                                                                top: 0;
                                                                left: 0;
                                                                right: 0;
                                                                bottom: 0;
                                                                background-color: #ccc;
                                                                transition: .4s;
                                                                border-radius: 34px;
                                                            }

                                                            .slider:before {
                                                                position: absolute;
                                                                content: "";
                                                                height: 26px;
                                                                width: 26px;
                                                                left: 4px;
                                                                bottom: 4px;
                                                                background-color: white;
                                                                transition: .4s;
                                                                border-radius: 50%;
                                                            }

                                                            input:checked+.slider {
                                                                background-color: #007bff;
                                                            }

                                                            input:checked+.slider:before {
                                                                transform: translateX(26px);
                                                            }
                                                        </style>


                                                        <div class="listing-summary">
                                                            <!-- <h6 class="title">
                                                                <a href="#">
                                                                    <?= htmlspecialchars($car['id']) ?: 'No ID' ?>
                                                                </a>
                                                            </h6> -->
                                                            <h6 class="listing-title">
                                                                <p><?= htmlspecialchars($car['title']) ?></p>
                                                            </h6>
                                                            <div class="price">
                                                                <p><?= htmlspecialchars($car['price_type']) ?></p>
                                                            </div>
                                                            <div>
                                                                <p><?= htmlspecialchars($car['type']) ?></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>

                                                    <!-- Display the current status with color based on the initial state -->
                                                    <span id="status-text-<?= $car['id'] ?>"
                                                        style="<?= $isPublished ? '' : 'color: red !important;' ?>">
                                                        <?= $isPublished ? 'Published' : 'Unpublished' ?>
                                                    </span>

                                                    <label class="switch">
                                                        <input type="checkbox" data-id="<?= $car['id'] ?>"
                                                            id="status-toggle-<?= $car['id'] ?>" <?= $isPublished ? 'checked' : '' ?> onclick="toggleStatus(this)">
                                                        <span class="slider round"></span>
                                                    </label>

                                                </td>


                                                <!-- <td>
                                                        <div class="list-bottom-price-wrap">
                                                            <p><?= htmlspecialchars($car['regular_price']) ?>
                                                            </p>
                                                            <b>Regular Price</b>
                                                        </div>
                                                    </td> -->

                                                <!--<td>
                                                    <div class="list-price-wrap">
                                                        <p>£<?= htmlspecialchars($car['sale_price']) ?></p>
                                                        <b>Sale Price</b>
                                                    </div>
                                                </td>-->

                                                <td>
                                                    <div class="list-wrapper">
                                                        <p><?= htmlspecialchars($car['fuel_type']) ?></p>
                                                        <b>Fuel Type</b>
                                                    </div>
                                                </td>

                                                <!-- <td>
                                                    <div class="list-wrapper">
                                                        <p><?= htmlspecialchars($car['mileage']) ?: 'N/A' ?></p>
                                                        <b>Mileage</b>
                                                    </div>
                                                </td> -->

                                                <td>
                                                    <div class="list-wrapper" style="margin-right: 10px;">
                                                        <p><?= htmlspecialchars($car['transmission']) ?></p>
                                                        <b>Transmission</b>
                                                    </div>
                                                </td>

                                                <td>
                                                    <div>
                                                        <span id="sale-status-text-<?= $car['id'] ?>"
                                                              style="<?= htmlspecialchars($car['sale_status']) ? '' : 'color: red !important;' ?>">
                                                            <?= htmlspecialchars($car['sale_status']) ? 'AVAILABLE' : 'SOLD' ?>
                                                        </span>
                                                    </div>

                                                    <label class="switch">
                                                        <input type="checkbox" data-id="<?= $car['id'] ?>"
                                                               id="sale-status-toggle-<?= $car['id'] ?>" <?= htmlspecialchars($car['sale_status']) ? 'checked' : '' ?> onclick="toggleSaleStatus(this)">
                                                        <span class="slider round"></span>
                                                    </label>

                                                </td>


                                                <td>
                                                    <ul class="actions-list">

                                                        <li>
                                                            <a href="<?= base_url('admin/edit-cars/' . $car['id']); ?>"
                                                                class="btn-edit" title="Update Status">
                                                                <?php $isPublished = htmlspecialchars($car['ad_status']) == 'published'; ?>


                                                                <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M0 9.49971V11.9997H2.5L9.87333 4.62638L7.37333 2.12638L0 9.49971ZM11.8067 2.69305C12.0667 2.43305 12.0667 2.01305 11.8067 1.75305L10.2467 0.193047C9.98667 -0.0669531 9.56667 -0.0669531 9.30667 0.193047L8.08667 1.41305L10.5867 3.91305L11.8067 2.69305Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </a>
                                                        </li>


                                                        <li>
                                                            <a href="<?= base_url('cars/' . $car['id']); ?>" target="_blank"
                                                                class="btn-action" data-bs-toggle="tooltip"
                                                                data-bs-placement="top" title="View">
                                                                <svg width="20" height="14" viewBox="0 0 20 14" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M9.9987 0.75C5.83203 0.75 2.2737 3.34167 0.832031 7C2.2737 10.6583 5.83203 13.25 9.9987 13.25C14.1654 13.25 17.7237 10.6583 19.1654 7C17.7237 3.34167 14.1654 0.75 9.9987 0.75ZM9.9987 11.1667C7.6987 11.1667 5.83203 9.3 5.83203 7C5.83203 4.7 7.6987 2.83333 9.9987 2.83333C12.2987 2.83333 14.1654 4.7 14.1654 7C14.1654 9.3 12.2987 11.1667 9.9987 11.1667ZM9.9987 4.5C8.61537 4.5 7.4987 5.61667 7.4987 7C7.4987 8.38333 8.61537 9.5 9.9987 9.5C11.382 9.5 12.4987 8.38333 12.4987 7C12.4987 5.61667 11.382 4.5 9.9987 4.5Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </a>
                                                        </li>
                                                        <!-- <li>
                                                                                                                                                                                                            <a href="#" class="btn-dlt" data-bs-toggle="tooltip"
                                                                                                                                                                                                                data-bs-placement="top" title="Delete">
                                                                                                                                                                                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                                                                                                                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                                                                                                                                                                    <path
                                                                                                                                                                                                                        d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z"
                                                                                                                                                                                                                        fill="white" />
                                                                                                                                                                                                                </svg>
                                                                                                                                                                                                            </a>
                                                                                                                                                                                                        </li> -->
                                                        <li>
                                                            <a href="#" class="btn-dlt" data-id="<?php echo $car['id']; ?>"
                                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                                title="Delete"
                                                                onclick="deleteCar(<?php echo $car['id']; ?>); return false;">
                                                                <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M11.5013 10.334H14.8346V12.0007H11.5013V10.334ZM11.5013 3.66732H17.3346V5.33398H11.5013V3.66732ZM11.5013 7.00065H16.5013V8.66732H11.5013V7.00065ZM1.5013 12.0007C1.5013 12.9173 2.2513 13.6673 3.16797 13.6673H8.16797C9.08463 13.6673 9.83463 12.9173 9.83463 12.0007V3.66732H1.5013V12.0007ZM10.668 1.16732H8.16797L7.33464 0.333984H4.0013L3.16797 1.16732H0.667969V2.83398H10.668V1.16732Z"
                                                                        fill="white" />
                                                                </svg>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a onclick="fetchInquiries(<?php echo $car['id']; ?>, '<?php echo addslashes($car['title']); ?>')"
                                                                href="#"
                                                                class="btn-inq position-relative <?php echo ($car['inquiry_count'] == 0) ? 'disabled' : ''; ?>"
                                                                data-bs-toggle="modal" data-bs-target="#exampleModalToggle"
                                                                title="Inquiries">

                                                                <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1"
                                                                    data-name="Layer 1" viewBox="0 0 24 24" width="300"
                                                                    height="300" version="1.1"
                                                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                    xmlns:svgjs="http://svgjs.dev/svgjs">
                                                                    <g transform="matrix(1,0,0,1,0,0)">
                                                                        <path
                                                                            d="m18,11.996v-7C18,2.239,15.757-.004,13-.004H5C2.243-.004,0,2.239,0,4.996v12.854c0,.793.435,1.519,1.134,1.894.318.171.667.255,1.015.255.416,0,.831-.121,1.191-.36l3.963-2.643h5.697c2.757,0,5-2.243,5-5Zm-9,2.004c-.552,0-1-.448-1-1s.448-1,1-1,1,.448,1,1-.448,1-1,1Zm1.447-4.371c-.447.246-.447.318-.447.371,0,.553-.448,1-1,1s-1-.447-1-1c0-1.308,1.038-1.879,1.481-2.123.29-.159.595-.535.502-1.066-.069-.392-.402-.725-.793-.793-.306-.056-.602.022-.832.216-.228.19-.358.47-.358.767,0,.553-.448,1-1,1s-1-.447-1-1c0-.889.391-1.727,1.072-2.299.681-.572,1.577-.814,2.463-.653,1.209.211,2.204,1.205,2.417,2.417.223,1.272-.382,2.543-1.506,3.164Zm13.553-.633v12.854c0,.793-.435,1.519-1.134,1.894-.318.171-.667.255-1.015.256-.416,0-.831-.121-1.19-.36l-3.964-2.644h-5.697c-1.45,0-2.747-.631-3.661-1.62l.569-.38h5.092c3.859,0,7-3.141,7-7v-7c0-.308-.027-.608-.065-.906,2.311.44,4.065,2.469,4.065,4.906Z"
                                                                            fill="#ffffffff" data-original-color="#000000ff"
                                                                            stroke="none" />
                                                                    </g>
                                                                </svg>
                                                                <span
                                                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                                                    <?= htmlspecialchars($car['inquiry_count']) ?>
                                                                    <span class="visually-hidden">unread messages</span>
                                                                </span>

                                                            </a>
                                                        </li>


                                                        <!--                                                        <p>--><?php //= htmlspecialchars($car['inquiry_count']) 
                                                            ?><!--</p>-->


                                                    </ul>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>

                                        <!-- <div id="popup-modal" class="popup-modal">
                                                                                                                                        <div class="popup-content">
                                                                                                                                            <form action="<?= site_url('admin/update_status') ?>" method="post">
                                                                                                                                                <span class="close-btn1" onclick="closePopup();">&times;</span>
                                                                                                                                                <h3 id="modal-title">choose Status</h3> -->

                                        <!-- <button id="public-btn" class="selectedValue"
                                                                                                                                                                    data-value="public">Published</button>
                                                                                                                                                                <button id="private-btn" class="selectedValue"
                                                                                                                                                                    data-value="private">UnPublished</button> -->
                                        <!-- <select id="modalAdStatus" name="modalAdStatus">
                                                                                                                                                    <option value="published">Published</option>
                                                                                                                                                    <option value="unpublished">Unpublished</option>
                                                                                                                                                </select>
                                                                                                                                                <input type="hidden" id="modalCarId" name="modalCarId">
                                                                                                                                                <button id="save-btn" class="selectedValue" type="submit"
                                                                                                                                                    style="background-color: #007bff; color: white;">Save</button>
                                                                                                                                            </form>
                                                                                                                                        </div>
                                                                                                                                    </div> -->


                                        <script type="text/javascript">
                                            function openPopupNew(id, ad_status) {
                                                const popupModal = document.getElementById('popup-modal');
                                                const modalTitle = document.getElementById('modal-title');
                                                const modalCarID = document.getElementById('modalCarId');
                                                const modalAdStatus = document.getElementById('modalAdStatus');
                                                // modalTitle.textContent = ad_status;
                                                modalCarID.value = id;
                                                modalAdStatus.value = ad_status;
                                                console.log(id, 'id');
                                                console.log(ad_status, 'currentStatus');
                                                popupModal.style.display = 'block';
                                            }

                                            function closePopup() {
                                                const popupModal = document.getElementById('popup-modal');
                                                popupModal.style.display = 'none';
                                            }




                                            function toggleStatus(id) {
                                                console.log(id, 'id');
                                                const carId = id.dataset.id;
                                                const statusText = document.getElementById('status-text-' + carId);
                                                const isChecked = id.checked;
                                                const newStatus = isChecked ? 'published' : 'unpublished';

                                                if (id.checked) {
                                                    statusText.textContent = 'Published';
                                                    statusText.style.color = ''; // Reset color

                                                } else {
                                                    statusText.textContent = 'Unpublished';
                                                    statusText.style.color = 'red';


                                                }
                                                $.ajax({
                                                    type: "POST",
                                                    url: '<?php echo base_url("admin/update_status") ?>',
                                                    data: {
                                                        id: carId,
                                                        ad_status: newStatus
                                                    },
                                                    success: function (data) {
                                                        console.log('Status update successful:', data);
                                                        alert("Changed the Status Successfully!");
                                                    },
                                                    error: function (xhr, status, error) {
                                                        console.error('Status update failed:', {
                                                            status: status,
                                                            error: error,
                                                            xhr: xhr

                                                        });

                                                        alert('Error: ' + error + '\nStatus: ' + status + '\nResponse: ' + xhr.responseText);

                                                    }
                                                });
                                            }

                                            function toggleSaleStatus(id) {
                                                console.log(id, 'sale_id');
                                                const carId = id.dataset.id;
                                                const saleStatusText = document.getElementById('sale-status-text-' + carId);
                                                const isChecked = id.checked;
                                                const newStatus = isChecked ? 'AVAILABLE' : 'SOLD';

                                                if (id.checked) {
                                                    saleStatusText.textContent = 'AVAILABLE';
                                                    saleStatusText.style.color = ''; // Reset color

                                                } else {
                                                    saleStatusText.textContent = 'SOLD';
                                                    saleStatusText.style.color = 'red';


                                                }
                                                $.ajax({
                                                    type: "POST",
                                                    url: '<?php echo base_url("admin/update_sale_status") ?>',
                                                    data: {
                                                        id: carId,
                                                        sale_status: newStatus
                                                    },
                                                    success: function (data) {
                                                        console.log('Sale Status Update Successful:', data);
                                                        alert("Changed Sale Status Successfully!");
                                                    },
                                                    error: function (xhr, status, error) {
                                                        console.error('Sale status update failed:', {
                                                            status: status,
                                                            error: error,
                                                            xhr: xhr

                                                        });

                                                        alert('Error: ' + error + '\nStatus: ' + status + '\nResponse: ' + xhr.responseText);

                                                    }
                                                });
                                            }


                                            function deleteCar(carId) {
                                                if (confirm('Are you sure you want to delete this car?')) {
                                                    // Create a form element
                                                    var form = document.createElement('form');
                                                    form.method = 'POST';
                                                    form.action = '<?php echo base_url('admin/delete_'); ?>'; // Ensure the URL is correct

                                                    // Create a hidden input element for the car ID
                                                    var input = document.createElement('input');
                                                    input.type = 'hidden';
                                                    input.name = 'id'; // This should match the name in your controller
                                                    input.value = carId;

                                                    // Append the hidden input to the form
                                                    form.appendChild(input);

                                                    // Append the form to the body (required for submission)
                                                    document.body.appendChild(form);

                                                    // Submit the form
                                                    form.submit();
                                                }
                                            }


                                            //                                         function toggleStatus(id, isChecked) {
                                            // console.log(id, 'id');

                                            // // Determine the new status based on the checkbox state
                                            // let newStatus = isChecked ? 'published' : 'unpublished';

                                            // $.ajax({
                                            //     type: "POST",
                                            //     url: '<?php echo base_url("controller/method") ?>', // Update with your actual controller and method
                                            //     data: { id: id, status: newStatus },
                                            //     success: function(response) {
                                            //         // Assuming the backend returns the updated status or a success message
                                            //         $('#status-display-' + id).text(newStatus); // Update the status display in the UI

                                            //         // Display an alert based on the new status
                                            //         if (newStatus === 'published') {
                                            //             alert('The item has been published.');
                                            //         } else {
                                            //             alert('The item has been unpublished.');
                                            //         }
                                            //     },
                                            //     error: function(xhr, status, error) {
                                            //         console.error('Status update failed:', error);
                                            //         // Display the actual error message
                                            //         alert('Error: ' + error + '\nStatus: ' + status + '\nResponse: ' + xhr.responseText);
                                            //     }
                                            // });


                                            //                                         }



                                            // $(document).ready(function () {
                                            //     $(.toggleStatus).change(function(){
                                            //         const carId = $(this).data('id');
                                            //         const statusText = document.getElementById('status-text-' + carId);

                                            //         if($(this).is(':checked')){
                                            //             statusText.textContent = 'Published';
                                            //             statusText.style.color = ''; // Reset color
                                            //             // Optionally, you can add an AJAX call here to update the status on the server
                                            //         }else {
                                            //         statusText.textContent = 'Unpublished';
                                            //         statusText.style.color = 'red';
                                            //         // Optionally, you can add an AJAX call here to update the status on the server
                                            //     }
                                            //     })
                                            // })

                                            // document.addEventListener('DOMContentLoaded', function () {
                                            //     const popupModal = document.getElementById('popup-modal');
                                            //     const closeBtn = document.querySelector('.close-btn');
                                            //     const publicBtn = document.getElementById('public-btn');
                                            //     const privateBtn = document.getElementById('private-btn');
                                            //     const saveBtn = document.getElementById('save-btn');
                                            //     const carIdInput = document.getElementById('carId');
                                            //     const currentStatusElement = document.getElementById('current-status');

                                            //     let selectedValue = null;
                                            //     let currentCarId = null;

                                            //     function openPopup(carId, currentStatus) {
                                            //         console.log(currentStatus, 'currentStatus');
                                            //         popupModal.style.display = 'block';
                                            //         carIdInput.value = carId;
                                            //         currentCarId = carId;

                                            //         // Reset button styles
                                            //         statusButtons.forEach(button => {
                                            //             button.classList.remove('selected');
                                            //             button.style.backgroundColor = ''; // Reset background color
                                            //         });

                                            //         // Set the initial selected value and button colors based on currentStatus
                                            //         if (currentStatus === 'public') {
                                            //             selectOption(publicBtn);

                                            //         } else if (currentStatus === 'privatrre') {
                                            //             selectOption(privateBtn);
                                            //         }
                                            //     }





                                            //     function selectOption(button) {
                                            //         // Remove selected class from all options
                                            //         [publicBtn, privateBtn].forEach(btn => btn.classList.remove('selected'));

                                            //         // Add selected class to the clicked button
                                            //         button.classList.add('selected');
                                            //         selectedValue = button.getAttribute('data-value');

                                            //         // Update button styles based on the selected status
                                            //         [publicBtn, privateBtn].forEach(btn => {
                                            //             btn.style.backgroundColor = btn.classList.contains('selected') ? '#007bff' : '#fff'; // Blue for selected, white for others
                                            //             btn.style.color = btn.classList.contains('selected') ? 'white' : '#333'; // White text for selected, dark text for others
                                            //         });

                                            //         // Update current status display
                                            //         currentStatusElement.textContent = button.textContent;
                                            //     }
                                            //     function closePopup() {
                                            //         popupModal.style.display = 'none';
                                            //     }

                                            //     publicBtn.addEventListener('click', function () {
                                            //         selectOption(this);
                                            //     });

                                            //     privateBtn.addEventListener('click', function () {
                                            //         selectOption(this);
                                            //     });

                                            //     saveBtn.addEventListener('click', function updateCarStatus() {
                                            //         if (selectedValue && currentCarId) {
                                            //             console.log('Saving Status:', selectedValue, 'for Car ID:', currentCarId);

                                            //             fetch('admin/car_listing', {
                                            //                 method: 'POST',
                                            //                 headers: {
                                            //                     'Content-Type': 'application/json',
                                            //                 },
                                            //                 body: JSON.stringify({ id: currentCarId, status: selectedValue }),
                                            //             })
                                            //                 .then(response => response.json())
                                            //                 .then($data => {
                                            //                     console.log('Response Data:', $data);

                                            //                     if ($data.success) {
                                            //                         document.getElementById('ad_status' + currentCarId).textContent = selectedValue.charAt(0).toUpperCase() + selectedValue.slice(1);
                                            //                         console.log('Status updated successfully');
                                            //                         closePopup();
                                            //                     } else {
                                            //                         console.log('Failed to update status:', $data.message);
                                            //                         alert('Failed to update status.');
                                            //                     }
                                            //                 })
                                            //                 .catch(error => {
                                            //                     console.error('Error:', error);
                                            //                     alert('An error occurred.');
                                            //                 });
                                            //         } else {
                                            //             console.log('No status selected or no car ID available');
                                            //         }
                                            //     });

                                            //     closeBtn.addEventListener('click', closePopup);

                                            //     window.addEventListener('click', function (event) {
                                            //         if (event.target === popupModal) {
                                            //             closePopup();
                                            //         }
                                            //     });

                                            //     // Example of how you might call openPopup (this should be replaced with your actual logic)
                                            //     document.querySelectorAll('.open-popup').forEach(btn => {
                                            //         btn.addEventListener('click', function () {
                                            //             const carId = this.getAttribute('data-id');
                                            //             const currentStatus = this.getAttribute('data-status'); // Ensure you pass the current status as a data attribute
                                            //             openPopup(carId, currentStatus);
                                            //         });
                                            //     });
                                            // });
                                        </script>
                                    </tbody>
                                </table>
                                <div class="tf-pagination mt-60">
                                    <a class="prev page-numbers"
                                        href="<?= $currentPage > 1 ? base_url("admin/car_listing/page/" . ($currentPage - 1) . '?' . http_build_query($request)) : '#' ?>">
                                        <i class="icon-3"></i>
                                    </a>

                                    <?php for ($i = 1; $i <= $totalPages; $i++): ?>
                                        <?php if ($i == $currentPage): ?>
                                            <a class="page-numbers active" href="#"><?= $i ?></a>
                                        <?php elseif ($i <= 3 || $i > $totalPages - 3 || ($i >= $currentPage - 1 && $i <= $currentPage + 1)): ?>
                                            <a class="page-numbers"
                                                href="<?= base_url("admin/car_listing/page/" . $i . '?' . http_build_query($request)) ?>"><?= $i ?></a>
                                        <?php elseif ($i == 4 && $currentPage > 5): ?>
                                            <span class="page-numbers">...</span>
                                        <?php elseif ($i == $totalPages - 3 && $currentPage < $totalPages - 4): ?>
                                            <span class="page-numbers">...</span>
                                        <?php endif; ?>
                                    <?php endfor; ?>

                                    <a class="next page-numbers"
                                        href="<?= $currentPage < $totalPages ? base_url("admin/car_listing/page/" . ($currentPage + 1) . '?' . http_build_query($request)) : '#' ?>">
                                        <i class="icon--1"></i>
                                    </a>
                                </div>


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

    <script>
        function fetchInquiries(carId, carName) {
            $.ajax({
                type: "GET",
                url: `<?php echo base_url("admin/inquiries/car/") ?>${carId}`,
                success: function (response) {
                    console.log('Inquiries fetched successfully', response);
                    const inquiries = response.inquiries;
                    if (Array.isArray(inquiries)) {
                        populateModal(inquiries, carName);
                        console.log('Modal populated:', inquiries);
                        // $('#exampleModalToggle').modal.('show');
                    } else {
                        console.log('Unexpected data format. Not an array:', data);
                    }
                },
                error: function (error) {
                    console.log(error);
                }
            })
        }

        function populateModal(inquiries, carName) {
            const modalContent = $('#exampleModalToggle .modal-content');
            const title = modalContent.find('.title span')
            const inquiriesContainer = $('#inquiriesContainer');

            // clear previous data
            inquiriesContainer.empty();

            // set title
            title.text(`${carName}`);

            // populate inquiries
            inquiries.forEach((inquiry, index) => {
                const inquiryHtml = `
                    <article class="entry format-standard">
                        <div class="main-post">
                            <p class="inquiry-txt"><span>${index + 1}.</span> ${inquiry.customer_message}</p>
                            <div class="entry-meta fs-6 fw-bold">
                                <span class="author line"><i class="icon-user"></i>${inquiry.customer_name} <span class="fw-light"> (${inquiry.customer_email})</span></span>
                            </div>
                            <div class="entry-meta fs-6 fst-italic fw-lighter">
                                <span class="time line"><i class="icon-uniE971"></i>${inquiry.created_date}</span>
                            </div>
                            <hr>
                        </div>
                    </article>

                `;
                inquiriesContainer.append(inquiryHtml);
            })
        }
    </script>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered inq-modal">
            <div class="modal-content inq-modal-content">
                <div class="content-re-lo">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="title fs-5 mb-0">Inquiries for <br><span class="title mt-0"></span></div>
                    <hr>

                    <!--Dynamic data-->
                    <div id="inquiriesContainer" class="scrollable-container"></div>

                </div>
            </div>
        </div>

        <!-- Modal -->


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