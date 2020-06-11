<template>
    <div class="leftbar">
        <!-- Start Sidebar -->
        <div class="sidebar">
            <!-- Start Logobar -->
            <div class="logobar">
                <b-link href="/front/" class="logo logo-large"><img src="/theme/images/logo.svg" class="img-fluid" alt="logo"></b-link>
                <b-link href="/front/" class="logo logo-small"><img src="/theme/images/small_logo.svg" class="img-fluid" alt="logo"></b-link>
            </div>
            <!-- End Logobar -->
            <!-- Start Navigationbar -->
            <div class="navigationbar">
                <ul class="vertical-menu">
                    <li>
                        <b-link href="javaScript:void(0);" @click="slide">
                            <img src="/theme/images/svg-icon/basic.svg" class="img-fluid" alt="basic"><span>Components</span><i class="feather icon-chevron-right pull-right"></i>
                        </b-link>
                        <ul class="vertical-submenu">
                            <li><b-link href="/front/components/alert">Alert</b-link></li>
                            <li><b-link href="/front/components/aspect">Aspect</b-link></li>
                            <li><b-link href="/front/components/badge">Badge</b-link></li>
                            <li><b-link href="/front/components/breadcrumb">Breadcrumb</b-link></li>
                            <li><b-link href="/front/components/button">Button</b-link></li>
                            <li><b-link href="/front/components/buttonGroup">Button Group</b-link></li>
                            <li><b-link href="/front/components/buttonToolbar">Button Toolbar</b-link></li>
                            <li><b-link href="/front/components/calendar">Calendar</b-link></li>
                            <li><b-link href="/front/components/card">Card</b-link></li>
                            <li><b-link href="/front/components/carousel">Carousel</b-link></li>
                            <li><b-link href="/front/components/collapse">Collapse</b-link></li>
                            <li><b-link href="/front/components/dropdown">Dropdown</b-link></li>
                            <li><b-link href="/front/components/embed">Embed</b-link></li>
                            <li><b-link href="/front/components/form">Form</b-link></li>
                            <li><b-link href="/front/components/formCheckbox">Form Checkbox</b-link></li>
                            <li><b-link href="/front/components/formDatepicker">Form Datepicker</b-link></li>
                            <li><b-link href="/front/components/formFile">Form File</b-link></li>
                            <li><b-link href="/front/components/formGroup">Form Group</b-link></li>
                            <li><b-link href="/front/components/formInput">Form Input</b-link></li>
                            <li><b-link href="/front/components/formRadio">Form Radio</b-link></li>
                            <li><b-link href="/front/components/formRating">Form Rating</b-link></li>
                            <li><b-link href="/front/components/formSelect">Form Select</b-link></li>
                            <li><b-link href="/front/components/formSpinbutton">Form Spinbutton</b-link></li>
                            <li><b-link href="/front/components/formTags">Form Tags</b-link></li>
                            <li><b-link href="/front/components/formTextarea">Form Textarea</b-link></li>
                            <li><b-link href="/front/components/formTimepicker">Form Timepicker</b-link></li>
                            <li><b-link href="/front/components/image">Image</b-link></li>
                            <li><b-link href="/front/components/inputButton">Input Button</b-link></li>
                            <li><b-link href="/front/components/jumbotron">Jumbotron</b-link></li>
                            <li><b-link href="/front/components/link">Link</b-link></li>
                            <li><b-link href="/front/components/listGroup">List Group</b-link></li>
                            <li><b-link href="/front/components/media">Media</b-link></li>
                            <li><b-link href="/front/components/modal">Modal</b-link></li>
                            <li><b-link href="/front/components/nav">Nav</b-link></li>
                            <li><b-link href="/front/components/navBar">NavBar</b-link></li>
                            <li><b-link href="/front/components/overlay">Overlay</b-link></li>
                            <li><b-link href="/front/components/pagination">Pagination</b-link></li>
                            <li><b-link href="/front/components/paginationNav">Pagination Nav</b-link></li>
                            <li><b-link href="/front/components/popover">Popover</b-link></li>
                            <li><b-link href="/front/components/progress">Progress</b-link></li>
                            <li><b-link href="/front/components/sidebar">Sidebar</b-link></li>
                            <li><b-link href="/front/components/spinner">Spinner</b-link></li>
                            <li><b-link href="/front/components/table">Table</b-link></li>
                            <li><b-link href="/front/components/tabs">Tabs</b-link></li>
                            <li><b-link href="/front/components/time">Time</b-link></li>
                            <li><b-link href="/front/components/toasts">Toasts</b-link></li>
                            <li><b-link href="/front/components/tooltip">Tooltip</b-link></li>
                        </ul>
                    </li>
                    <li>
                        <a href="javaScript:void(0);" @click="slide">
                            <img src="/theme/images/svg-icon/pages.svg" class="img-fluid" alt="basic"><span>Directives</span><i class="feather icon-chevron-right pull-right"></i>
                        </a>
                        <ul class="vertical-submenu">
                            <li><b-link href="/front/directives/hover">Hover</b-link></li>
                            <li><b-link href="/front/directives/popover">Popover</b-link></li>
                            <li><b-link href="/front/directives/scrollspy">Scrollspy</b-link></li>
                            <li><b-link href="/front/directives/toggle">Toggle</b-link></li>
                            <li><b-link href="/front/directives/tooltip">Tooltip</b-link></li>
                            <li><b-link href="/front/directives/visible">Visible</b-link></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- End Navigationbar -->
        </div>
        <!-- End Sidebar -->
    </div>
</template>


<script>

  export default {
    name: 'Leftbar',
    methods: {
      slide: function (event) {
        event.currentTarget.nextElementSibling.style.display = (event.currentTarget.nextElementSibling.style.display == 'block') ? 'none' : 'block';
      }
    },
    mounted() {
      $('.vertical-submenu a').click(function(){
        window.localStorage.setItem('active', $(this).attr('href'));
      });

      var active = window.localStorage.getItem('active');

      if(active) {
        $("a[href='" + active + "']").addClass('active');
        $("a[href='" + active + "']").parents('.vertical-submenu').css('display', 'block');
      }
    }
  }
</script>