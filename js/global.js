$(document).ready(function()
	{		
		// Slide ministry index - up or down
		$('#ministry_tab').toggle(function()
			{
				$('#ministry_index:hidden').slideDown();
				$('#ministry_tab')[0].blur();
				$(this).addClass('on');
				return false;
			},
			function()
			{
				$('#ministry_index:visible').slideUp();
				$('#ministry_tab')[0].blur();
				$(this).removeClass('on');
				return false;
			}
		);
		
		// Define global variable NATHANSMITHsearchText for portability
		// Used name in all-caps as pseudo-namespace to avoid collision
		window.NATHANSMITHsearchText = 'Enter keyword or search term.';
		
		// Add instructional text to the search field
		$('#search_field')[0].value = NATHANSMITHsearchText;
		
		// Clear search field when focused
		$('#search_field').focus(function()
			{
				if ($('#search_field')[0].value === NATHANSMITHsearchText)
				{
					$('#search_field')[0].value = '';
				}
			}
		);
		
		// Replace phrase if search unused
		$('#search_field').blur(function()
			{
				if ($('#search_field')[0].value === '')
				{
					$('#search_field')[0].value = NATHANSMITHsearchText;
				}
			}
		);
		
		// Add stripes to <table class="data">
		$('table.data tr:odd').addClass('alt');
		
		// Make sure that <li class="open"> are expanded by default when page loads
		$('#menu li.open').children('a.arrow.off').removeClass('off').addClass('on');
		$('#menu li.open').children('ul').show();
		
		// Open + close collapsible menu lists
		$('#menu a.arrow.off').toggle(function()
			{
				$(this).removeClass('off').addClass('on');
				$(this).parent('li').children('ul').show();
				$(this)[0].blur();
				return false;
			},
			function()
			{
				$(this).removeClass('on').addClass('off');
				$(this).parent('li').children('ul').hide();
				$(this)[0].blur();
				return false;
			}
		);
		
		// Open + close collapsible menu lists
		$('#menu a.arrow.on').toggle(function()
			{
				$(this).removeClass('on').addClass('off');
				$(this).parent('li').children('ul').hide();
				$(this)[0].blur();
				return false;
			},
			function()
			{
				$(this).removeClass('off').addClass('on');
				$(this).parent('li').children('ul').show();
				$(this)[0].blur();
				return false;
			}
		);
	}
);