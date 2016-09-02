{{-- Core --}}
{!!Html::script('template/vendor/jquery/jquery.js')!!}
{!!Html::script('template/vendor/bootstrap/bootstrap.js')!!}
{!!Html::script('template/vendor/animsition/jquery.animsition.js')!!}
{!!Html::script('template/vendor/asscroll/jquery-asScroll.js')!!}
{!!Html::script('template/vendor/mousewheel/jquery.mousewheel.js')!!}
{!! Html::script('template/vendor/asscrollable/jquery.asScrollable.all.js') !!}
{!! Html::script('template/vendor/ashoverscroll/jquery-asHoverScroll.js') !!}

{{-- Plugins --}}
{!! Html::script('template/vendor/switchery/switchery.min.js') !!}
{!! Html::script('template/vendor/intro-js/intro.js') !!}
{!! Html::script('template/vendor/screenfull/screenfull.js') !!}
{!! Html::script('template/vendor/slidepanel/jquery-slidePanel.js') !!}
{!! Html::script('template/vendor/jquery-placeholder/jquery.placeholder.js') !!}

{{-- scripts --}}
{!! Html::script('template/js/core.js') !!}
{!! Html::script('template/js/site.js') !!}
{!! Html::script('template/js/sections/menu.js') !!}
{!! Html::script('template/js/sections/menubar.js') !!}
{!! Html::script('template/js/sections/sidebar.js') !!}

{!! Html::script('template/js/configs/config-colors.js') !!}
{!! Html::script('template/js/configs/config-tour.js') !!}
{!! Html::script('template/js/components/asscrollable.js') !!}
{!! Html::script('template/js/components/animsition.js') !!}
{!! Html::script('template/js/components/slidepanel.js') !!}
{!! Html::script('template/js/components/switchery.js') !!}
{!! Html::script('template/js/components/jquery-placeholder.js') !!}
{!! Html::script('general/js/jquery.introLoader.pack.min.js') !!}

{!! Html::script('general/js/jquery.validate.js') !!}
{!! Html::script('login/js/login.classes.js') !!}
{!! Html::script('login/js/login.js') !!}
{!! Html::script('general/js/wow.min.js') !!}
	
	<script>
		new WOW().init();	
	</script>
  <script>
    (function(document, window, $) {
      'use strict';

      var Site = window.Site;
      $(document).ready(function() {
        Site.run();
      });
    })(document, window, jQuery);
  </script>
