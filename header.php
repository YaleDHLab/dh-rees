<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<!-- Scripts to minify -->
<script src="https://code.jquery.com/jquery-2.2.4.js"   integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="   crossorigin="anonymous"></script>

<!-- Fonts -->
<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', '_s' ); ?></a>

  <!-- Modal to allow users to join the mailing list -->
  <div class="mailing-list-modal-container hidden">
    <div class="mailing-list-modal">
      <?php echo do_shortcode('[contact-form-7 id="136" title="Join the mailing list"]'); ?>
    </div>
  </div>

  <!-- Header content -->
  <div class="header-blue"></div>
  <div class="header-salmon">
    <div class="header-salmon-image"></div>
  </div>

  <div class="header-site-title">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="234.59 29.388 397.179 115.112">
      <defs>
       <clipPath id="clip-path">
          <path id="path" class="cls-1" d="M746.122,253.822H463.8L578.656,138.71H860.979Z" transform="translate(-502.08 -139.07)"></path>
        </clipPath>
      </defs>
      <g id="group-11" class="cls-2" transform="translate(272.87 29.748)">
        <path id="path-2" data-name="path" class="cls-3" d="M580.778,153.731,579.09,148.2h-.933v5.527H574.78V139.3h4.987c2.6,0,4.476,1.178,4.476,4.388a4.074,4.074,0,0,1-1.895,3.789l2.1,6.244Zm-1.257-11.682h-1.364v3.524h1.3c.982,0,1.364-.579,1.364-1.777s-.344-1.757-1.3-1.757Z" transform="translate(-504.113 -139.081)"></path>
        <path id="path-3" data-name="path" class="cls-3" d="M592.159,153.956c-2.945,0-4.909-1.649-4.909-5.193V139.3h3.485v9.522c0,1.384.451,2.1,1.482,2.1s1.423-.717,1.423-2.1V139.3h3.485v9.375C597.126,152.327,595.231,153.956,592.159,153.956Z" transform="translate(-504.341 -139.081)"></path>
        <path id="path-4" data-name="path" class="cls-3" d="M604.741,153.952A5.418,5.418,0,0,1,600,151.439l2.346-2.12c.982,1.158,1.757,1.747,2.454,1.747a1.1,1.1,0,0,0,1.237-1.158c0-.8-.226-1.3-1.855-2.022-2.866-1.257-3.926-2.346-3.926-4.614a4.152,4.152,0,0,1,4.476-4.2,5.134,5.134,0,0,1,4.536,2.287l-2.4,2.14c-.982-1.178-1.335-1.541-2.248-1.541a.982.982,0,0,0-.982.982c0,.766.373,1.2,1.836,1.836,2.945,1.276,3.976,2.474,3.976,4.908C609.424,152.4,607.421,153.952,604.741,153.952Z" transform="translate(-504.575 -139.076)"></path>
        <path id="path-5" data-name="path" class="cls-3" d="M616.441,153.952a5.419,5.419,0,0,1-4.741-2.513l2.346-2.12c.982,1.158,1.747,1.747,2.454,1.747a1.1,1.1,0,0,0,1.237-1.158c0-.8-.226-1.3-1.855-2.022-2.867-1.257-3.927-2.346-3.927-4.614a4.153,4.153,0,0,1,4.476-4.2,5.134,5.134,0,0,1,4.535,2.287l-2.4,2.14c-.982-1.178-1.345-1.541-2.248-1.541a.982.982,0,0,0-.982.982c0,.766.373,1.2,1.836,1.836,2.945,1.276,3.976,2.474,3.976,4.908C621.114,152.4,619.121,153.952,616.441,153.952Z" transform="translate(-504.789 -139.076)"></path>
        <path id="path-6" data-name="path" class="cls-3" d="M624.15,153.731V139.3h3.485v14.431Z" transform="translate(-505.017 -139.081)"></path>
        <path id="path-7" data-name="path" class="cls-3" d="M637.722,153.731l-.54-2.68h-2.847l-.5,2.68H630.29l3.731-14.431h3.544l3.711,14.431Zm-1.2-5.959c-.334-1.895-.638-3.465-.785-4.781-.128,1.315-.412,2.886-.766,4.8l-.079.452H636.6Z" transform="translate(-505.13 -139.081)"></path>
        <path id="path-8" data-name="path" class="cls-3" d="M651.089,153.731l-2.12-4.143a41.155,41.155,0,0,1-1.856-3.927c.079.825.108,2.66.108,4.015v4.054H644V139.3h2.945l1.836,3.3a32.189,32.189,0,0,1,1.963,4.045c-.079-.785-.128-2.778-.128-4.1V139.3h3.2v14.431Z" transform="translate(-505.382 -139.081)"></path>
        <path id="path-9" data-name="path" class="cls-3" d="M670.551,153.726l-.658-1.05a3.868,3.868,0,0,1-3.112,1.276c-2.454,0-3.691-1.364-3.691-3.809a6.214,6.214,0,0,1,2.4-4.477l-.373-.579a4.673,4.673,0,0,1-.982-2.6c0-2.228,1.649-3.426,3.927-3.426a4.83,4.83,0,0,1,3.927,1.708l-1.895,2.346c-1.2-1.129-1.521-1.237-2.1-1.237a.648.648,0,0,0-.677.638,2.444,2.444,0,0,0,.432,1.315l2.14,3.377c.245-.579.491-1.237.785-1.963l2.6.982c-.6,1.482-1.139,2.7-1.649,3.691l2.4,3.75Zm-3.622-5.674a2.366,2.366,0,0,0-.766,1.747c0,.884.285,1.423.982,1.423.412,0,.766-.206,1.2-.844Z" transform="translate(-505.73 -139.076)"></path>
        <path id="path-10" data-name="path" class="cls-3" d="M550.7,177.731V163.3h8.452v2.945h-5.026v2.474H557.4v2.945h-3.279v3.122H559.3v2.945Z" transform="translate(-503.671 -139.52)"></path>
        <path id="path-11" data-name="path" class="cls-3" d="M569.061,177.731l-.54-2.68h-2.847l-.511,2.68H561.62l3.731-14.431h3.514l3.711,14.431Zm-1.178-5.959c-.334-1.895-.638-3.465-.785-4.781-.128,1.315-.412,2.886-.766,4.8l-.078.452h1.708Z" transform="translate(-503.871 -139.52)"></path>
        <path id="path-12" data-name="path" class="cls-3" d="M579.362,177.952a5.419,5.419,0,0,1-4.742-2.513l2.346-2.12c.982,1.158,1.748,1.747,2.454,1.747a1.1,1.1,0,0,0,1.237-1.158c0-.8-.226-1.3-1.856-2.022-2.867-1.257-3.927-2.346-3.927-4.614a4.153,4.153,0,0,1,4.477-4.2,5.134,5.134,0,0,1,4.535,2.287l-2.4,2.14c-.982-1.178-1.345-1.541-2.248-1.541a.982.982,0,0,0-.982.982c0,.766.373,1.2,1.836,1.836,2.945,1.276,3.976,2.474,3.976,4.908C584.035,176.4,582.042,177.952,579.362,177.952Z" transform="translate(-504.11 -139.516)"></path>
        <path id="path-13" data-name="path" class="cls-3" d="M592.541,166.314v11.417H589.1V166.314H586.15V163.3h9.3v3.014Z" transform="translate(-504.321 -139.52)"></path>
        <path id="path-14" data-name="path" class="cls-3" d="M598.311,177.731V163.3h8.452v2.945h-5.026v2.474h3.279v2.945h-3.279v3.122h5.173v2.945Z" transform="translate(-504.544 -139.52)"></path>
        <path id="path-15" data-name="path" class="cls-3" d="M615.888,177.731,614.2,172.2h-.933v5.527H609.89V163.3h5.016c2.6,0,4.477,1.178,4.477,4.388a4.074,4.074,0,0,1-1.895,3.789l2.1,6.244Zm-1.257-11.682h-1.365v3.524h1.3c.982,0,1.365-.579,1.365-1.777s-.314-1.757-1.266-1.757Z" transform="translate(-504.756 -139.52)"></path>
        <path id="path-16" data-name="path" class="cls-3" d="M629.658,177.731l-2.12-4.143a40.963,40.963,0,0,1-1.855-3.927c.079.825.1,2.66.1,4.015v4.054h-3.24V163.3h3.014l1.836,3.3a32.421,32.421,0,0,1,1.963,4.045c-.078-.785-.128-2.778-.128-4.1V163.3h3.239v14.431Z" transform="translate(-504.988 -139.52)"></path>
        <path id="path-17" data-name="path" class="cls-3" d="M526.62,201.731V187.3h8.452v2.945h-5.036v2.474h3.279v2.945h-3.279v3.122h5.174v2.945Z" transform="translate(-503.231 -139.96)"></path>
        <path id="path-18" data-name="path" class="cls-3" d="M543.079,201.956c-2.945,0-4.909-1.649-4.909-5.193V187.3h3.485v9.522c0,1.384.452,2.1,1.482,2.1s1.423-.717,1.423-2.1V187.3h3.485v9.375C548.046,200.327,546.141,201.956,543.079,201.956Z" transform="translate(-503.442 -139.96)"></path>
        <path id="path-19" data-name="path" class="cls-3" d="M557.378,201.731,555.69,196.2h-.933v5.527H551.38V187.3h4.987c2.6,0,4.477,1.178,4.477,4.388a4.074,4.074,0,0,1-1.895,3.789l2.1,6.244Zm-1.256-11.682h-1.365v3.524h1.3c.982,0,1.365-.579,1.365-1.777s-.353-1.757-1.3-1.757Z" transform="translate(-503.684 -139.96)"></path>
        <path id="path-20" data-name="path" class="cls-3" d="M568.484,201.952c-3.239,0-5.134-2.326-5.134-7.421s1.963-7.461,5.173-7.461,5.154,2.346,5.154,7.422S571.733,201.952,568.484,201.952Zm0-11.918c-1.09,0-1.61.982-1.61,4.457s.56,4.5,1.63,4.5,1.61-.982,1.61-4.457-.54-4.5-1.61-4.5Z" transform="translate(-503.904 -139.956)"></path>
        <path id="path-21" data-name="path" class="cls-3" d="M581.274,196.5h-1.237v5.232H576.66V187.3h4.908c2.582,0,4.476,1.158,4.476,4.5S584.043,196.5,581.274,196.5Zm-.059-6.391h-1.178v3.583h1.109c.982,0,1.423-.51,1.423-1.816S582.187,190.108,581.216,190.108Z" transform="translate(-504.148 -139.96)"></path>
        <path id="path-22" data-name="path" class="cls-3" d="M588.761,201.731V187.3h8.452v2.945h-5.026v2.474h3.279v2.945h-3.279v3.122h5.174v2.945Z" transform="translate(-504.37 -139.96)"></path>
        <path id="path-23" data-name="path" class="cls-3" d="M607.121,201.731l-.54-2.68h-2.847l-.51,2.68H599.68l3.73-14.431h3.544l3.711,14.431Zm-1.237-5.959c-.334-1.895-.638-3.465-.785-4.781-.128,1.316-.412,2.886-.766,4.8l-.079.452h1.708Z" transform="translate(-504.569 -139.96)"></path>
        <path id="path-24" data-name="path" class="cls-3" d="M620.477,201.731l-2.121-4.143a40.823,40.823,0,0,1-1.855-3.927c.078.825.1,2.66.1,4.015v4.054h-3.24V187.3h3.014l1.835,3.3a32.414,32.414,0,0,1,1.964,4.045c-.079-.785-.128-2.778-.128-4.1V187.3h3.24v14.431Z" transform="translate(-504.819 -139.96)"></path>
        <path id="path-25" data-name="path" class="cls-3" d="M506.822,225.952a5.419,5.419,0,0,1-4.741-2.513l2.346-2.12c.982,1.158,1.757,1.747,2.454,1.747a1.1,1.1,0,0,0,1.237-1.158c0-.8-.226-1.3-1.855-2.022-2.867-1.257-3.927-2.346-3.927-4.614a4.152,4.152,0,0,1,4.477-4.2,5.134,5.134,0,0,1,4.535,2.287l-2.4,2.14c-.982-1.178-1.335-1.541-2.248-1.541a.982.982,0,0,0-.982.982c0,.766.373,1.2,1.836,1.836,2.945,1.276,3.976,2.474,3.976,4.908C511.494,224.4,509.492,225.952,506.822,225.952Z" transform="translate(-502.781 -140.395)"></path>
        <path id="path-26" data-name="path" class="cls-3" d="M520,214.314v11.417h-3.446V214.314H513.61V211.3h9.3v3.014Z" transform="translate(-502.992 -140.4)"></path>
        <path id="path-27" data-name="path" class="cls-3" d="M530.609,225.957c-2.945,0-4.909-1.649-4.909-5.193V211.3h3.485v9.522c0,1.384.452,2.1,1.482,2.1s1.424-.717,1.424-2.1V211.3h3.485v9.375C535.576,224.327,533.681,225.957,530.609,225.957Z" transform="translate(-503.214 -140.4)"></path>
        <path id="path-28" data-name="path" class="cls-3" d="M542.788,225.731h-3.878V211.3h4.182c3.73,0,5.566,2.189,5.566,7.107C548.659,223.61,546.705,225.731,542.788,225.731Zm.186-11.564h-.618v8.717h.569c1.61,0,2.248-.766,2.248-4.408s-.589-4.31-2.248-4.31Z" transform="translate(-503.456 -140.4)"></path>
        <path id="path-29" data-name="path" class="cls-3" d="M551.74,225.731V211.3h3.485v14.431Z" transform="translate(-503.691 -140.4)"></path>
        <path id="path-30" data-name="path" class="cls-3" d="M558.57,225.731V211.3h8.452v2.945H562v2.474h3.279v2.945H562v3.122h5.173v2.945Z" transform="translate(-503.816 -140.4)"></path>
        <path id="path-31" data-name="path" class="cls-3" d="M574.331,225.952a5.419,5.419,0,0,1-4.742-2.513l2.346-2.12c.982,1.158,1.747,1.747,2.454,1.747a1.1,1.1,0,0,0,1.237-1.158c0-.805-.226-1.3-1.855-2.022-2.866-1.257-3.927-2.346-3.927-4.614a4.153,4.153,0,0,1,4.476-4.2,5.135,5.135,0,0,1,4.506,2.287l-2.4,2.14c-.982-1.178-1.345-1.541-2.248-1.541a.982.982,0,0,0-.982.982c0,.766.373,1.2,1.836,1.836,2.945,1.276,3.976,2.474,3.976,4.908C579.014,224.4,577.011,225.952,574.331,225.952Z" transform="translate(-504.017 -140.395)"></path>
      </g>
    </svg>
  </div>

  <div class="navigation-trapezoid navigation-brand">
    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="179 43 74.27 59">
      <defs>
        <filter id="path" x="189.659" y="60.6" width="63.611" height="41.4" filterUnits="userSpaceOnUse">
          <feOffset dy="2" input="SourceAlpha"></feOffset>
          <feGaussianBlur stdDeviation="2" result="blur"></feGaussianBlur>
          <feFlood flood-opacity="0.161"></feFlood>
          <feComposite operator="in" in2="blur"></feComposite>
          <feComposite in="SourceGraphic"></feComposite>
        </filter>
        <filter id="path-2" x="179" y="43" width="54.488" height="41.35" filterUnits="userSpaceOnUse">
          <feOffset dy="2" input="SourceAlpha"></feOffset>
          <feGaussianBlur stdDeviation="2" result="blur-2"></feGaussianBlur>
          <feFlood flood-opacity="0.161"></feFlood>
          <feComposite operator="in" in2="blur-2"></feComposite>
          <feComposite in="SourceGraphic"></feComposite>
        </filter>
      </defs>
      <g id="group-40" transform="translate(185 47)">
        <g class="cls-3" transform="matrix(1, 0, 0, 1, -185, -47)">
          <path id="path-3" data-name="path" class="cls-1" d="M26.408,60.537V42.491L21.5,35.5V64.7H33.944l2.975-4.214H26.408Zm27.268-.3a2.158,2.158,0,0,1-.992-1.785V50.572a5.876,5.876,0,0,0-1.834-4.412,6.062,6.062,0,0,0-4.462-1.834,5.593,5.593,0,0,0-1.487.2l-2.975,4.165h1.537c2.033,0,3.371.644,4.016,1.983l-5.652,3.917h5.949V59.05a5.528,5.528,0,0,0,1.537,3.818,5.773,5.773,0,0,0,3.619,1.983l2.826-3.966a3.981,3.981,0,0,1-2.082-.645Zm-7.933.2a3.628,3.628,0,0,1-2.677-1.091,3.459,3.459,0,0,1-1.14-2.578V54.538l-1.537,1.041a4.913,4.913,0,0,0-2.429,4.214,4.5,4.5,0,0,0,1.934,3.917A7.022,7.022,0,0,0,44.058,64.8a2.9,2.9,0,0,0,.992-.2l2.975-4.214H45.744ZM71.128,46.258a6.436,6.436,0,0,0-4.71-1.934,4.224,4.224,0,0,0-1.14.149L62.3,48.688h2.082A3.9,3.9,0,0,1,68.2,52.505v8.131l4.908-6.991V50.968a6.218,6.218,0,0,0-1.983-4.71ZM66.17,60.537a3.628,3.628,0,0,1-2.677-1.091,3.675,3.675,0,0,1-1.14-2.677V42.491L57.444,35.5V58.306a6.405,6.405,0,0,0,1.934,4.66A6.3,6.3,0,0,0,63.988,64.9a7.369,7.369,0,0,0,1.239-.149l2.925-4.214Z" transform="translate(174.16 29.1)"></path>
        </g>
        <g class="cls-2" transform="matrix(1, 0, 0, 1, -185, -47)">
          <path id="path-4" data-name="path" class="cls-1" d="M17.749,4.165A10.449,10.449,0,0,0,10.808.595L7.883,4.759h1.19a6.436,6.436,0,0,1,4.71,1.934,6.436,6.436,0,0,1,1.934,4.71V21.17A3.475,3.475,0,0,1,14.477,23.8a4.2,4.2,0,0,1-2.975,1.19H7.585L10.511,29.1a9.39,9.39,0,0,0,2.281.248,7.488,7.488,0,0,0,5.5-2.281,7.264,7.264,0,0,0,2.33-5.3V11.6a10.842,10.842,0,0,0-2.876-7.437ZM2.975,11.7V22.955a2.024,2.024,0,0,1-.942,1.735A3.358,3.358,0,0,1,0,25.384L2.727,29.35A5.832,5.832,0,0,0,6.4,27.318,6.179,6.179,0,0,0,7.883,23.2V4.66L2.975,11.7Zm39.514-4.71L37.58,0V29.2h4.908V6.991ZM29.747,13.931V6.941L24.839,0V29.2h4.908V18.245h4.908l2.925-4.264H29.747Z" transform="translate(185 47)"></path>
        </g>
      </g>
    </svg>

  </div>
  <div class="navigation-trapezoid navigation-blue">
    <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
  </div>
  <div class="navigation-trapezoid navigation-gray"></div>

  <div class="blue-triangle-svg-container">
    <svg class="blue-triangle-svg"></svg>
  </div>

  <div class="baby-blue-stripe"></div>
  <div class="cream-stripe"></div>

  <div class="page-content site-content" id="content">

